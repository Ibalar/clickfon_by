<?php

require_once 'Turbo.php';

class Variants extends Turbo
{
    /**
     * Get Variants
     */
    public function getVariants($filter = [])
    {
        $productIdFilter = '';
        $variantIdFilter = '';
        $instockFilter = '';

        $currencies = $this->money->getCurrencies();

        if (!empty($filter['product_id'])) {
            $productIdFilter = $this->db->placehold('AND v.product_id IN(?@)', (array) $filter['product_id']);
        }

        if (!empty($filter['id'])) {
            $variantIdFilter = $this->db->placehold('AND v.id IN(?@)', (array) $filter['id']);
        }

        if (!empty($filter['in_stock']) && $filter['in_stock']) {
            $instockFilter = $this->db->placehold('AND (v.stock > 0 OR v.stock IS NULL)');
        }

        if (!$productIdFilter && !$variantIdFilter) {
            return [];
        }

        $langSql = $this->languages->getQuery(['object' => 'variant']);

        $query = $this->db->placehold(
            "SELECT
                v.id,
                v.product_id,
                v.price,
                NULLIF(v.compare_price, 0) AS compare_price,
                v.currency_id,
                v.sku,
                IFNULL(v.stock, ?) AS stock,
                (v.stock IS NULL) AS infinity,
                v.name,
                v.color,
                v.color_code,
                v.weight,
                v.position,
                v.attachment,
                v.attachment_url,
                $langSql->fields
            FROM __variants AS v
                $langSql->join
            WHERE 1
                $productIdFilter          
                $variantIdFilter
                $instockFilter
            ORDER BY 
                v.position",
            $this->settings->max_order_amount
        );

        $this->db->query($query);

        $variants = $this->db->results();

        foreach ($variants as &$v) {
            $v->oprice = $v->price;
            $v->compare_oprice = $v->compare_price;

            if ($v->currency_id > 0) {
                $v->price = $v->price * $currencies[$v->currency_id]->rate_to / $currencies[$v->currency_id]->rate_from;
                $v->compare_price = $v->compare_price * $currencies[$v->currency_id]->rate_to / $currencies[$v->currency_id]->rate_from;
            }
        }

        return $variants;
    }

    /**
     * Get Variant
     */
    public function getVariant($id)
    {
        if (empty($id)) {
            return false;
        }

        $langSql = $this->languages->getQuery(['object' => 'variant']);
        $currencies = $this->money->getCurrencies();

        $query = $this->db->placehold(
            "SELECT 
                v.id,
                v.product_id,
                v.price,
                NULLIF(v.compare_price, 0) AS compare_price,
                v.currency_id,
                v.sku,
                IFNULL(v.stock, ?) AS stock,
                (v.stock IS NULL) AS infinity,
                v.name,
                v.color,
                v.color_code,
                v.weight,
                v.attachment,
                v.attachment_url,
                $langSql->fields
            FROM __variants v 
                $langSql->join 
            WHERE id=? 
            LIMIT 1",
            $this->settings->max_order_amount,
            $id
        );

        $this->db->query($query);

        $variant = $this->db->result();

        $variant->oprice = $variant->price;
        $variant->compare_oprice = $variant->compare_price;

        if ($variant->currency_id > 0) {
            $variant->price = $variant->price * $currencies[$variant->currency_id]->rate_to / $currencies[$variant->currency_id]->rate_from;
            $variant->compare_price = $variant->compare_price * $currencies[$variant->currency_id]->rate_to / $currencies[$variant->currency_id]->rate_from;
        }

        return $variant;
    }

    /**
     * Update Variant
     */
    public function updateVariant($id, $variant)
    {
        $variant = (object) $variant;

        $result = $this->languages->getDescription($variant, 'variant');

        if (!empty($result->data)) {
            $variant = $result->data;
        }

        $updatedVariant = (array) $variant;

        if (!empty($updatedVariant)) {
            // Get product_id before update for denormalization
            $this->db->query("SELECT product_id FROM __variants WHERE id=?", (int) $id);
            $productId = $this->db->result('product_id');

            $query = $this->db->placehold("UPDATE __variants SET ?% WHERE id=? LIMIT 1", $variant, (int) $id);
            $this->db->query($query);

            // Update denormalized product fields after variant update
            if ($productId) {
                $this->updateProductVariantStats($productId);
            }
        }

        if (!empty($result->description)) {
            $this->languages->actionDescription($id, $result->description, 'variant', $this->languages->langId());
        }

        return $id;
    }

    /**
     * Add Variant
     */
    public function addVariant($variant)
    {
        $variant = (object) $variant;

        $result = $this->languages->getDescription($variant, 'variant');

        if (!empty($result->data)) {
            $variant = $result->data;
        }

        $query = $this->db->placehold("INSERT INTO __variants SET ?%", $variant);
        $this->db->query($query);

        $variantId = $this->db->insertId();

        if (!empty($result->description)) {
            $this->languages->actionDescription($variantId, $result->description, 'variant');
        }

        // Update denormalized product fields after adding variant
        if (!empty($variant->product_id)) {
            $this->updateProductVariantStats($variant->product_id);
        }

        return $variantId;
    }

    /**
     * Delete Variant
     */
    public function deleteVariant($id)
    {
        if (!empty($id)) {
            // Get product_id before deletion for denormalization
            $this->db->query("SELECT product_id FROM __variants WHERE id=?", (int) $id);
            $productId = $this->db->result('product_id');

            $this->deleteAttachment($id);

            $query = $this->db->placehold("DELETE FROM __variants WHERE id=? LIMIT 1", (int) $id);
            $this->db->query($query);

            $this->db->query("UPDATE __purchases SET variant_id=NULL WHERE variant_id=?", (int) $id);

            $this->db->query("DELETE FROM __lang_variants WHERE variant_id=?", (int) $id);

            // Update denormalized product fields after variant deletion
            if ($productId) {
                $this->updateProductVariantStats($productId);
            }
        }
    }

    /**
     * Delete Attachment
     */
    public function deleteAttachment($id)
    {
        $query = $this->db->placehold("SELECT attachment FROM __variants WHERE id=?", $id);
        $this->db->query($query);

        $filename = $this->db->result('attachment');

        $query = $this->db->placehold("SELECT 1 FROM __variants WHERE attachment=? AND id!=?", $filename, $id);
        $this->db->query($query);

        $exists = $this->db->numRows();

        if (!empty($filename) && $exists == 0) {
            @unlink($this->config->root_dir . '/' . $this->config->downloads_dir . $filename);
            // Direct update to avoid triggering updateProductVariantStats
            $this->db->query("UPDATE __variants SET attachment = NULL WHERE id = ?", (int) $id);
        }
    }

    /**
     * Update Product Variant Stats
     * Updates denormalized fields in __products table based on variants data
     * This eliminates expensive nested SELECTs in ORDER BY clauses
     * 
     * @param int $productId
     */
    public function updateProductVariantStats($productId)
    {
        if (empty($productId)) {
            return false;
        }

        // Calculate all variant-related stats in a single query
        // Note: min_price is calculated from in-stock variants only
        $query = $this->db->placehold(
            "SELECT 
                (SELECT MIN(v2.price) FROM __variants v2 
                 WHERE v2.product_id = ? 
                 AND (v2.stock IS NULL OR v2.stock > 0)) as min_price,
                (SELECT v2.currency_id FROM __variants v2 
                 WHERE v2.product_id = ? 
                 AND (v2.stock IS NULL OR v2.stock > 0)
                 ORDER BY v2.price ASC 
                 LIMIT 1) as min_price_currency_id,
                MAX(CASE WHEN (v.stock IS NULL OR v.stock > 0) THEN 1 ELSE 0 END) as has_stock,
                COUNT(*) as variant_count
            FROM __variants v
            WHERE v.product_id = ?
            GROUP BY v.product_id",
            (int) $productId,
            (int) $productId,
            (int) $productId
        );

        $this->db->query($query);
        $stats = $this->db->result();

        if ($stats) {
            // Update product with calculated stats
            $updateQuery = $this->db->placehold(
                "UPDATE __products 
                SET 
                    min_price = ?,
                    min_price_currency_id = ?,
                    has_stock = ?,
                    has_variants = 1
                WHERE id = ?",
                $stats->min_price ?: 0.00,
                $stats->min_price_currency_id,
                $stats->has_stock ?: 0,
                (int) $productId
            );
            $this->db->query($updateQuery);
        } else {
            // No variants found, reset stats
            $updateQuery = $this->db->placehold(
                "UPDATE __products 
                SET 
                    min_price = 0.00,
                    min_price_currency_id = NULL,
                    has_stock = 0,
                    has_variants = 0
                WHERE id = ?",
                (int) $productId
            );
            $this->db->query($updateQuery);
        }

        return true;
    }
}
