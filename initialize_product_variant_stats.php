<?php

/**
 * Initialize Product Variant Stats Script
 * 
 * This script initializes the denormalized fields (min_price, has_stock, etc.)
 * for all existing products in the database.
 * 
 * Run this after executing db_denormalization_products_variants_migration.sql
 * 
 * Usage: php initialize_product_variant_stats.php
 */

chdir(__DIR__);

require_once 'api/Turbo.php';

class InitializeStats extends Turbo
{
    public function run()
    {
        echo "Starting initialization of product variant stats...\n";
        
        // Get all products
        $this->db->query("SELECT id FROM __products ORDER BY id");
        $products = $this->db->results();
        
        $total = count($products);
        $processed = 0;
        $updated = 0;
        
        echo "Found {$total} products to process.\n\n";
        
        foreach ($products as $product) {
            $processed++;
            
            // Calculate variant stats for this product
            $query = $this->db->placehold(
                "SELECT 
                    MIN(v.price) as min_price,
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
                (int) $product->id,
                (int) $product->id
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
                    (int) $product->id
                );
                $this->db->query($updateQuery);
                $updated++;
                
                if ($processed % 100 == 0) {
                    echo "Processed {$processed}/{$total} products...\n";
                }
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
                    (int) $product->id
                );
                $this->db->query($updateQuery);
            }
        }
        
        echo "\n";
        echo "Initialization complete!\n";
        echo "Total products processed: {$processed}\n";
        echo "Products with variants: {$updated}\n";
        echo "Products without variants: " . ($processed - $updated) . "\n";
    }
}

$init = new InitializeStats();
$init->run();
