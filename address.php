<?php
//This page displays A welcome message that uses the First Name from the previous page. when submit button is clicked it sends data from the address from
// this page to the shipping page
//and saves the data in a session.
if (!isset($_SESSION)) {
    session_start();
}
$firstname = $_SESSION['firstname'];

if (isset($_POST['submit'])) {

    if (($_POST['street'] != "") && ($_POST['city'] != "") && ($_POST['province'] != "") && ($_POST['postcode'] != "")) {

        $_SESSION['street'] = $_POST['street'];
        $_SESSION['city'] = $_POST['city'];
        $_SESSION['province'] = $_POST['province'];
        $_SESSION['postcode'] = $_POST['postcode'];
        header("location: shipping.php", true, 301);

        exit;
    } else {
        echo "<p> Please enter all the fields.</p>";
    }
}
$welcome = "Welcome $firstname";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Address Details</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body>

        <H2><?php
echo $welcome
?>
        </H2>

        <form action="address.php" method="POST">
            Street: <input type="text" name="street" value="" size="20" required maxlength="100" />
            <br><br>
            City: <input type="text" name="city" value="" size="20" required maxlength="20" />
            <br><br>
            Province: <select name="province"/> 
            <option value="BC">British Columbia</option>
            <option value="MB">Manitoba</option>
            <option value="NB">New Brunswick</option>
            <option value="NL">Newfoundland and Labrador</option>
            <option value="NS">Nova Scotia</option>
            <option value="ON">Ontario</option>
            <option value="PE">Prince Edward Island</option>
            <option value="QC">Quebec</option>
            <option value="SK">Saskatchewan</option>
            <option value="NT">Northwest Territories</option>
            <option value="NU">Nunavut</option>
            <option value="YT">Yukon</option>
        </select><br><br>

        Postal Code: <input type="text" name="postcode" value="" size="20" required maxlength="6" />
        <br><br>
        <input type="submit" value="SUBMIT" name="submit">
        <br><br>

    </form>
</body>
</html>




