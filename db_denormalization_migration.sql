-- Migration: Add denormalized fields to t_products table
-- This migration adds avg_rating and total_comments columns to reduce N+1 queries

-- Add new columns to products table
ALTER TABLE t_products 
ADD COLUMN avg_rating FLOAT DEFAULT 0.0 NOT NULL,
ADD COLUMN total_comments INT DEFAULT 0 NOT NULL;

-- Initialize the denormalized fields with current data
UPDATE t_products p 
SET 
    avg_rating = COALESCE((
        SELECT AVG(rating) 
        FROM t_comments 
        WHERE type = 'product' 
        AND object_id = p.id 
        AND approved = 1 
        AND admin = 0 
        AND rating > 0
    ), 0.0),
    total_comments = (
        SELECT COUNT(*) 
        FROM t_comments 
        WHERE type = 'product' 
        AND object_id = p.id 
        AND approved = 1 
        AND admin = 0
        AND parent_id = 0
    );

-- Note: Database triggers are not used for this implementation
-- Instead, the application code maintains denormalized data through
-- the updateProductCommentStats() method in api/Comments.php
-- This approach is more reliable and portable across different MySQL configurations

-- Add indexes for better performance
CREATE INDEX idx_products_avg_rating ON t_products(avg_rating);
CREATE INDEX idx_products_total_comments ON t_products(total_comments);