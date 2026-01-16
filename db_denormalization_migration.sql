-- Migration: Add denormalized fields to __products table
-- This migration adds avg_rating and total_comments columns to reduce N+1 queries

-- Add new columns to products table
ALTER TABLE __products 
ADD COLUMN avg_rating FLOAT DEFAULT 0.0 NOT NULL,
ADD COLUMN total_comments INT DEFAULT 0 NOT NULL;

-- Initialize the denormalized fields with current data
UPDATE __products p 
SET 
    avg_rating = COALESCE((
        SELECT AVG(rating) 
        FROM __comments 
        WHERE type = 'product' 
        AND object_id = p.id 
        AND approved = 1 
        AND admin = 0 
        AND rating > 0
    ), 0.0),
    total_comments = (
        SELECT COUNT(*) 
        FROM __comments 
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
CREATE INDEX idx_products_avg_rating ON __products(avg_rating);
CREATE INDEX idx_products_total_comments ON __products(total_comments);