<?php
include 'includes/db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM employees WHERE id = $id";
    $result = $conn->query($sql);
    $employee = $result->fetch_assoc();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $bs = $_POST['bs'];

        $sql = "UPDATE employees SET name='$name', age=$age, bs=$bs WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            header("Location: read.php");
            exit();
        } else {
            echo "Error: " . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
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
        <h2>Edit Employee</h2>
        <form method="POST">
            <input type="text" name="name" value="<?= $employee['name'] ?>" required>
            <input type="number" name="age" value="<?= $employee['age'] ?>" required>
            <input type="number" name="bs" value="<?= $employee['bs'] ?>" step="0.01" required>
            <button type="submit">Update Employee</button>
        </form>
    </div>
</body>
</html>
