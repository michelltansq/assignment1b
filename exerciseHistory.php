<!-- Michell Tan Shiqi 19030685 -->
<?php
session_start();
include './dbFunctions.php';

$username = $_SESSION['username'];
$query = "SELECT * FROM exercise WHERE username='$username'";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Exercise History - Yishun Community Hospital</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <style type="text/css">
            h2 {
                margin-left: 50px;
                margin-right: 50px;
                margin-bottom: 10px;
                margin-top: 10px;
            }
            .green {
              background-color: #2a9d8f;
            }
            .red {
              background-color: #e76f51;
            }
        </style>
        <script>
        </script>
    </head>
    <body>
        <?php
        include("navbar.php");
        ?>
        <h2>Exercise History</h2>
        <div class="container">
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Exercise Type</th>
                <th scope="col">Duration (mins)</th>
              </tr>
            </thead>
            <tbody>
              <?php $count = 1;
              $red =  "<tr class='red'>";
              $green =  "<tr class='green'>";
              while ($row = mysqli_fetch_assoc($result)) {
                $type = $row['type'];
                $duration =$row['duration'];
                switch($type) {
                  case 'Walk':
                    if ($duration > 30) {
                      echo $red;
                    } else {
                      echo $green;
                    }
                  break;
                  case 'Run':
                    if ($duration > 10) {
                      echo $red;
                    } else {
                      echo $green;
                    }
                  break;
                  case 'Cycle' :
                    if ($duration > 20) {
                      echo $red;
                    } else {
                      echo $green;
                    }
                  break;
                }?>
                  <th scope="row"><?php echo $count; ?></th>
                  <td><?php echo $type; ?></td>
                  <td><?php echo $duration; ?></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
</html>
<!-- Michell Tan Shiqi 19030685 -->
