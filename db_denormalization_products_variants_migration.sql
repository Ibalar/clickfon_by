-- Migration: Add denormalized fields to __products table for variants optimization
-- This migration eliminates expensive nested SELECTs in ORDER BY clauses
-- by maintaining pre-calculated min_price and stock availability at product level

-- Add new columns to products table for denormalized variant data
ALTER TABLE __products 
ADD COLUMN min_price DECIMAL(15,2) DEFAULT 0.00 NOT NULL COMMENT 'Minimum price from all variants (in base currency)',
ADD COLUMN min_price_currency_id INT DEFAULT NULL COMMENT 'Currency ID of the minimum price variant',
ADD COLUMN has_stock TINYINT DEFAULT 0 NOT NULL COMMENT '1 if any variant is in stock, 0 otherwise',
ADD COLUMN has_variants TINYINT DEFAULT 0 NOT NULL COMMENT '1 if product has any variants, 0 otherwise';

-- Initialize the denormalized fields with current data from variants
UPDATE __products p 
SET 
    -- Calculate minimum price from variants
    min_price = COALESCE((
        SELECT MIN(v.price)
        FROM __variants v
        WHERE v.product_id = p.id
        AND (v.stock IS NULL OR v.stock > 0)
    ), 0.00),
    
    -- Get currency_id of the variant with minimum price
    min_price_currency_id = (
        SELECT v.currency_id
        FROM __variants v
        WHERE v.product_id = p.id
        AND (v.stock IS NULL OR v.stock > 0)
        ORDER BY v.price ASC
        LIMIT 1
    ),
    
    -- Check if any variant has stock
    has_stock = CASE 
        WHEN EXISTS (
            SELECT 1 
            FROM __variants v 
            WHERE v.product_id = p.id 
            AND (v.stock IS NULL OR v.stock > 0)
        ) THEN 1 
        ELSE 0 
    END,
    
    -- Check if product has any variants
    has_variants = CASE 
        WHEN EXISTS (
            SELECT 1 
            FROM __variants v 
            WHERE v.product_id = p.id
        ) THEN 1 
        ELSE 0 
    END;

-- Add indexes for optimized sorting
-- These indexes match common sorting patterns in getProducts()
CREATE INDEX idx_products_has_stock_position ON __products(has_stock DESC, position DESC);
CREATE INDEX idx_products_has_stock_min_price ON __products(has_stock DESC, min_price ASC);
CREATE INDEX idx_products_has_stock_name ON __products(has_stock DESC, name ASC);
CREATE INDEX idx_products_has_stock_rating ON __products(has_stock DESC, rating DESC, position DESC);
CREATE INDEX idx_products_has_stock_avg_rating ON __products(has_stock DESC, avg_rating DESC, position DESC);
CREATE INDEX idx_products_min_price ON __products(min_price);

-- Add indexes on variants table for better JOIN performance
CREATE INDEX idx_variants_product_stock_position ON __variants(product_id, stock, position);
CREATE INDEX idx_variants_product_price ON __variants(product_id, price);

-- Note: Database triggers are not used for this implementation
-- Instead, the application code maintains denormalized data through
-- the updateProductVariantStats() method in api/Variants.php
-- This approach is:
-- 1. More reliable and portable across different MySQL configurations
-- 2. Easier to debug and maintain
-- 3. Consistent with existing denormalization pattern (avg_rating, total_comments)
