<!<!-- not entirely sure if this was how you wanted it but this is what I could get working -->
<!<!-- I cut out age in the process but was still able to get it functioning -->

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['user_data'] = [
        'first_name' => $_POST['first_name'],
        'family_name' => $_POST['family_name'],
    ];
    header("Location: multiple_02.php");
    exit();
}
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Form 1</title>
    </head>
    <body>
        <form method="post" action="">
            <p>
                <label for="first_name">First name:</label>
                <input type="text" name="first_name" id="first_name_id" required>
            </p>
            <p>
                <label for="family_name">Family name:</label>
                <input type="text" name="family_name" id="family_name_id">
            </p>
            <p>
                <input type="submit" name="next" value="Next &gt;">
            </p>
        </form>
    </body>
</html>
