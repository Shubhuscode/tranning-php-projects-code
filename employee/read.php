<?php
include 'includes/db.php';

$sql = "SELECT * FROM employees";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Employees</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <header>
        Employee Management System
    </header>

    <nav>
        <a href="dashboard.php">Dashboard</a>
        <a href="create.php">Add Employee</a>
    </nav>

    <div class="container">
        <h2>Employee List</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Basic Salary</th>
                <th>Actions</th>
            </tr>

            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['age']}</td>
                            <td>{$row['bs']}</td>
                            <td>
                                <a href='update.php?id={$row['id']}'>Edit</a> |
                                <a href='delete.php?id={$row['id']}'>Delete</a>
                            </td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No employees found</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
