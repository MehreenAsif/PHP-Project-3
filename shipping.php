<?php
// when submit button is clicked it sends data from the shipping page to the confirmation page
//and saves the data in a session.
error_reporting(0);

if (!isset($_SESSION)) {

    session_start();
}

if (isset($_POST['submit'])) {

    if ($_POST['shipping'] != "") {

        $_SESSION['shipping'] = $_POST['shipping'];

        header("location: confirmation.php", true, 301);
        exit;
    } else {
        echo "<p> Please enter all the fields.</p>";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Shipping Details</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="shipping.php" method="POST"> 


            <H2>Shipping Options: </H2><br>
            <input type="radio" name="shipping" id="r1" value="Canada Post" required/> Canada Post
            <br><br>
            <input type="radio" name="shipping" id="r2" value="FedEx" required /> FedEx
            <br><br>
            <input type="radio" name="shipping" id="r3" value="UPS" required /> UPS
            <br><br><br>
            <input type="submit" value="SUBMIT" name="submit">
            <br><br>
        </form>
    </body>
</html>


