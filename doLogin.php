<!-- Michell Tan Shiqi 19030685 -->
<?php
include("dbFunctions.php");

if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM patient WHERE username = '$username' AND password = SHA1('$password')";

    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        session_start();
        $_SESSION['username'] = $username;
        $message = "Success!<br>";
        $message .= "<a href='exerciseEntry.php'>Make an exercise entry</a>";
    } else {
        $message = "Wrong Credential!<br>";
        $message .= "<a href='login.php'>Try login again</a>";
    }

//    if (session_status() == PHP_SESSION_NONE){
//        echo 'no session!';
//    }
}
mysqli_close($link);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Login - Yishun Community Hospital</title>
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
