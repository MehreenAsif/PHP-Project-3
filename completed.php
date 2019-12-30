<?php
//message stating that the order has been placed is displayed at this pageand the destroy  session happens on this page and provide a link back to the first page of the
//application.
error_reporting(0);
if (!isset($_SESSION)) {
    session_start();
}
$_SESSION = array();
session_destroy();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Confirmation Details</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <H2>Your order has been placed!</H2>
        Your order has been successfully processed!<br><br>
        Thanks for shopping with us.<br><br>
        <a href="index.php"> Go to main page </a>
    </body>
</html>


