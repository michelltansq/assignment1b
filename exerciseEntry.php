<!-- Michell Tan Shiqi 19030685 -->
<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    include("dbFunctions.php");
    ?>
    <head>
        <title>Exercise Entry - Yishun Community Hospital</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <style type="text/css">
            form, h2 {
                margin-left: 50px;
                margin-right: 50px;
                margin-bottom: 10px;
                margin-top: 10px;
            }
        </style>
    </head>
    <body>
        <?php
        include("navbar.php");
        ?>
        <h2>Exercise Entry</h2>
        <form id="defaultForm" method="post" action="doExerciseEntry.php">
            <div class="dropdown show">
                <label for="type">Type</label>
                <select class="form-control" id="type" name="type">
                    <option class="dropdown-item" id="Walk" name="type" value="Walk">Walk</option>
                    <option class="dropdown-item" id="Run" name="type" value="Run">Run</option>
                    <option class="dropdown-item" id="Cycle" name="type" value="Cycle">Cycle</option>
                </select>
            </div><br/>
            <div class="form-group">
                <label for="formControlRange"><h4>Duration</h4></label>
                <input type="range" class="form-control-range" id="duration" name="duration" oninput="this.nextElementSibling.value = this.value" min="5" max="120" value="60" id="formControlRange">
                <output>60</output> Minutes
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
</html>
<!-- Michell Tan Shiqi 19030685 -->
