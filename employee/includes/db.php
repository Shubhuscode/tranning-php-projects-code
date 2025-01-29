<?php
$host = 'localhost';
$username = 'root'; // Your MySQL username
$password = 'saicompusys';     // Your MySQL
$database = 'employee_db'; // Database name

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
