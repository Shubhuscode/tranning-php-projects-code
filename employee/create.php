<?php
include 'includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $bs = $_POST['bs'];

    $sql = "INSERT INTO employees (name, age, bs) VALUES ('$name', $age, $bs)";
    if ($conn->query($sql) === TRUE) {
        header("Location: read.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Employee</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <header>
        Employee Management System
    </header>

    <nav>
        <a href="dashboard.php">Dashboard</a>
        <a href="read.php">View Employees</a>
    </nav>

    <div class="container">
        <h2>Create New Employee</h2>
        <form method="POST">
            <input type="text" name="name" placeholder="Employee Name" required>
            <input type="number" name="age" placeholder="Age" required>
            <input type="number" name="bs" placeholder="Basic Salary" step="0.01" required>
            <button type="submit">Add Employee</button>
        </form>
    </div>
</body>
</html>
