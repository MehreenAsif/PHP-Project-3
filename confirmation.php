<?php
//A summary of all information entered by the user from all forms in the application.
//  submit button sends the user to the completed page.

error_reporting(0);
if (!isset($_SESSION)) {
    session_start();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Confirmation Details</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <H2 align="center"> Order Confirmation </H2>    

        <?php
        echo "<p><strong>Firstname: </strong> ", $_SESSION['firstname'], "</p>";
        echo "<p><strong>Lastname: </strong> ", $_SESSION['lastname'], "</p>";
        echo "<p><strong>Email: </strong> ", $_SESSION['email'], "</p>";
        echo "<p><strong>Date of birth: </strong> ", $_SESSION['dob'], "</p>";
        echo "<p><strong>Runner: </strong> ", $_SESSION['runner'], "</p>";
        if ($runner == 'Yes') {
            echo "<p><strong>Terrains:  </strong> ", $_SESSION['terrains'], "</p>";
        }
        echo "<p><strong>Rating: </strong> ", $_SESSION['scalerating'], "</p>";

        echo "<p><strong>Street: </strong> ", $_SESSION['street'], "</p>";
        echo "<p><strong>City: </strong> ", $_SESSION['city'], "</p>";
        echo "<p><strong>Province: </strong> ", $_SESSION['province'], "</p>";
        echo "<p><strong>Postal Code: </strong> ", $_SESSION['postalcode'], "</p>";
        echo "<p><strong>Shipping: </strong> ", $_SESSION['shipping'], "</p>";
        ?>
        <form action="completed.php" method="POST"> 
            <br><input type="submit" value="SUBMIT" name="submit">
            <br>
        </form>   

    </body>
</html>

