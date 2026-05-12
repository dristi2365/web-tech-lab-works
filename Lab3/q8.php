<?php
// Q8: Write SQL code to create database, table and add one column

error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = new mysqli("localhost", "root", "");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";

// Create database
if ($conn->query("CREATE DATABASE IF NOT EXISTS collegedb")) {
    echo "Database created successfully<br>";
} else {
    die("Error creating database: " . $conn->error);
}

$conn->select_db("collegedb");

// Create table
$sql = "CREATE TABLE IF NOT EXISTS teachers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    age INT,
    subject VARCHAR(100)
)";

if ($conn->query($sql)) {
    echo "Table created successfully<br>";
} else {
    die("Error creating table: " . $conn->error);
}

// Add new column
$check = $conn->query("SHOW COLUMNS FROM teachers LIKE 'phone'");
if ($check->num_rows == 0) {
    if ($conn->query("ALTER TABLE teachers ADD phone VARCHAR(15)")) {
        echo "Phone column added successfully<br>";
    } else {
        echo "Error adding column: " . $conn->error;
    }
} else {
    echo "Phone column already exists<br>";
}

echo "<br>DONE!";
$conn->close();
?>