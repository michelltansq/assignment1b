<!-- Michell Tan Shiqi 19030685 -->
<?php
include "dbFunctions.php";
$username = $_POST['username'];
$password = $_POST['password'];
$weight = $_POST['weight'];
$height = $_POST['height'];
$dob = $_POST['dob'];
$activeness = $_POST['activeness'];

$queryUsername = "SELECT * FROM patient WHERE username = '$username'";

$result = mysqli_query($link, $queryUsername) or die(mysqli_error($link));

if (mysqli_num_rows($result) == 1) {
    $message = "Username not available!<br/>";
    $message .= "<a href='signup.php'>Go Back</a>";
} else {
    $roundedHeight = $height * 100;
    $query = "INSERT INTO patient (username, password, height, weight,birthdate,activeness)
            VALUES ($username',SHA1('$password'),'$roundedHeight','$weight','$dob','$activeness')";
    
    $result = mysqli_query($link, $query) or die;
    
    $message = "Success!<br/>";
    $message .= "Go to <a href='login.php'>login.</a>";
}

mysqli_close($link);
?>

<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Sign Up - Yishun Community Hospital</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
    </head>
    <body>
        <?php
        include("navbar.php");
        ?>
        <?php
        echo "<h2 style='margin-left: 50px; margin-top: 10px'>" . $message . "</h2>";
        ?>
    </body>
</html>
<!-- Michell Tan Shiqi 19030685 -->