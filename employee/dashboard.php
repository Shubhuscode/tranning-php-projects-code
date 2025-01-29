<?php
session_start();
include 'includes/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Dashboard</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <header>
        Employee Management System
    </header>

    <nav>
        <a href="create.php">Add Employee</a>
        <a href="read.php">View Employees</a>
        <a href="logout.php">Logout</a>
    </nav>

    <div class="container">
        <h2>Welcome to the Employee Dashboard</h2>
        <p>Use the menu above to manage employees.</p>
    </div>
</body>
</html>
