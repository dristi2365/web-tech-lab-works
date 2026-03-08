-- Create database
CREATE DATABASE mydb;

-- Use the database
USE mydb;

-- Create table
CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    age INT,
    phone VARCHAR(15),
    address VARCHAR(200)
);

-- Add one column to existing table
ALTER TABLE students ADD COLUMN email VARCHAR(100);