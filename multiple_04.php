<?php
session_start();

$userData = $_SESSION['user_data'];
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Results</title>
    </head>
    <body>
        <p>The details submitted were as follows:</p>
        <ul>
            <li>First Name: <?php echo $userData['first_name']; ?></li>
            <li>Family Name: <?php echo $userData['family_name']; ?></li>
            <li>Address: <?php echo $userData['address']; ?></li>
            <li>City: <?php echo $userData['city']; ?></li>
            <li>State: <?php echo $userData['state']; ?></li>
            <li>Country: <?php echo $userData['country']; ?></li>
        </ul>
    </body>
</html>
