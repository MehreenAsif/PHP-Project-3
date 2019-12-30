<?php
// Start new session if it's not yet done. Once the submit button sends data from the personal details form to the
//address form it saves the data in a session
error_reporting(0);

if (!isset($_SESSION)) {

    session_start();
}

if (isset($_POST['submit'])) {

    if (($_POST['firstname'] != "") && ($_POST['lastname'] != "") && ($_POST['email'] != "")) {

        $_SESSION['firstname'] = $_POST['firstname'];
        $_SESSION['lastname'] = $_POST['lastname'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['dateofbirth'] = $_POST['dateofbirth'];

        $runner = (string) $_POST['runner'];

        if ($runner == 'on') {
            $_SESSION['runner'] = "Yes";
            $_SESSION['terrains'] = $_POST['terrains'];
        } else {
            $_SESSION['runner'] = "No";
        }
        $_SESSION['scalerating'] = $_POST['rating'];

        header("location: address.php", true, 301);
        exit;
    } else {

        echo "<p> Please enter all the fields.</p>";
    }
}
?>


<html>
    <head>
        <title>Personal Page</title>
    </head>
    <body>
        <h2 align="center"> Personal Details </h2>
        <form name="personal" action="index.php" method="POST">

            First Name: <input type="text" name="firstname" value="" size="20" required maxlength="50"/>
            <br><br>

            Last Name: <input type="text" name="lastname" value="" size="20" required maxlength="50"  />

            <br><br>

            Email: <input type="text" name="email" value="" size="25" required maxlength="50" />
            <br><br>
            Date of birth: <input type="date" name="dateofbirth" required >
            <br><br>
            Are you a runner? <input type="checkbox" name="runner"  id="Runner" onclick="checkradiobutton();" />
            <br><br>

            What is your favourite terrain?

            <br><br>
            <input type="radio" name="terrains" id="run1" value="Road" disabled required  /> Road
            <br>
            <input type="radio" name="terrains" id="run2" value="Track" disabled required /> Track
            <br>
            <input type="radio" name="terrains" id="run3" value="Trail" disabled required/> Trail
            <br><br>
            On a scale of 1-10, how would you rate your current shoes?
            <br><br>

            <input type="range" name="rating" id="rating" value="1" min="1" max="10" oninput="displayrating.value = rating.value">

            <input type="text" name="displayrating" value="1" id="displayrating" disabled="Yes" size="1"></input>

            <br><br>
            <input type="submit" value="SUBMIT" name="submit">
            <br><br>

        </form>

        <script src="javascript.js"></script>

    </body>
</html>