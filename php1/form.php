<?php 
session_start();

if (isset($_POST['submit'])) { 
   
    if ((!isset($_POST['firstname'])) || (!isset($_POST['lastname'])) || 
        (!isset($_POST['address'])) || (!isset($_POST['emailaddress'])) || 
        (!isset($_POST['password'])) || (!isset($_POST['gender']))) { 
        $error = "*" . "Please fill all the required fields"; 
    } else { 
       
        $new_entry = [
            'firstname' => $_POST['firstname'],
            'lastname' => $_POST['lastname'],
            'address' => $_POST['address'],
            'emailaddress' => $_POST['emailaddress'],
            'password' => $_POST['password'],
            'gender' => $_POST['gender']
        ];

       
        if (!isset($_SESSION['entries'])) {
            $_SESSION['entries'] = [];
        }

       
        $_SESSION['entries'][] = $new_entry;
    } 
} 
?> 

<html> 
<head> 
    <title>Simple Form Processing</title> 
</head> 
<body> 
    <h1>Form Processing using PHP</h1> 
    <fieldset> 
        <form id="form1" method="post" action="form.php"> 
            <?php 
                if (isset($_POST['submit'])) { 
                    if (isset($error)) { 
                        echo "<p style='color:red;'>" . $error . "</p>"; 
                    } 
                } 
            ?> 

            FirstName: <input type="text" name="firstname"/> <span style="color:red;">*</span> <br><br> 
            Last Name: <input type="text" name="lastname"/> <span style="color:red;">*</span> <br><br> 
            Address: <input type="text" name="address"/> <span style="color:red;">*</span> <br><br> 
            Email: <input type="email" name="emailaddress"/> <span style="color:red;">*</span> <br><br> 
            Password: <input type="password" name="password"/> <span style="color:red;">*</span> <br><br> 
            Gender: <input type="radio" value="Male" name="gender"> Male 
                    <input type="radio" value="Female" name="gender"> Female <br><br> 
            <input type="submit" value="Submit" name="submit" /> 
        </form> 
    </fieldset> 

    <?php 
    if (isset($_SESSION['entries']) && count($_SESSION['entries']) > 0) { 
        echo "<h1>Input Received</h1><br>"; 
        echo "<table border='1' style='width:100%; text-align:center;'>"; 
        echo "<thead>"; 
        echo "<tr><th>First Name</th><th>Last Name</th><th>Address</th><th>Email</th><th>Password</th><th>Gender</th></tr>"; 
        echo "</thead>"; 
        echo "<tbody>"; 

        
        foreach ($_SESSION['entries'] as $entry) { 
            echo "<tr>";
            echo "<td>" . htmlspecialchars($entry['firstname']) . "</td>"; 
            echo "<td>" . htmlspecialchars($entry['lastname']) . "</td>"; 
            echo "<td>" . htmlspecialchars($entry['address']) . "</td>"; 
            echo "<td>" . htmlspecialchars($entry['emailaddress']) . "</td>"; 
            echo "<td>" . htmlspecialchars($entry['password']) . "</td>"; 
            echo "<td>" . htmlspecialchars($entry['gender']) . "</td>"; 
            echo "</tr>";
        } 
        echo "</tbody>";
        echo "</table>";
    } 
    ?> 
</body> 
</html>
