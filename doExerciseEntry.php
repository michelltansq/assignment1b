<!-- Michell Tan Shiqi 19030685 -->
<?php
session_start();
include "dbFunctions.php";
$type = $_POST['type'];
$duration = $_POST['duration'];

$message = "";
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $query = "INSERT INTO exercise (username, type, duration) VALUES ('$username','$type' ,$duration)";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    if ($result) {
      $message = "Success!<br>";
      $message .= "Check your <a href='exerciseHistory.php'>exercise histroy</a>";
    } else {
      $message = "Failure!<br>";
      $message .= "Entry <a href='exerciseEntry.php'>again</a>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Exercise Entry - Yishun Community Hospital</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
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
