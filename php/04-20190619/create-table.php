<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ap_18_4";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE users (
id INT AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(50),
email VARCHAR(100),
password VARCHAR(50),
UNIQUE(email)
)";

if (mysqli_query($conn, $sql)) {
  echo "Table users created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);