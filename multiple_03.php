<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['user_data']['address'] = $_POST['address'];
    $_SESSION['user_data']['city'] = $_POST['city'];
    $_SESSION['user_data']['state'] = $_POST['state'];
    $_SESSION['user_data']['country'] = $_POST['country'];
    header("Location: multiple_04.php");
    exit();
}
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Form 3</title>
    </head>
    <body>
        <form method="POST" action="">
            <p>
                <label for="address">Address:</label>
                <input type="text" name="address" id="address_id">
            </p>
            <p>
                <label for="city">City:</label>
                <input type="text" name="city" id="city_id" required>
            </p>
            <p>
                <label for="state">State:</label>
                <input type="text" name="state" id="state_id" required>
            </p>
            <p>
                <label for="country">Country:</label>
                <select name="country" id="country_id" required>
                    <option value="" selected>Please Select</option>
                    <option value="Canada">Canada</option>
                    <option value="France">France</option>
                    <option value="Germany">Germany</option>
                    <option value="Japan">Japan</option>
                    <option value="UK">United Kingdom</option>
                    <option value="USA">United States</option>
                    <option value="other">Other</option>
                </select>
            </p>
            <p>
                <input type="submit" name="next" value="Send details">
            </p>
        </form>
    </body>
</html>
