<!-- Michell Tan Shiqi 19030685 -->
<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    include("dbFunctions.php");
    ?>
    <head>
        <title>Login - Yishun Community Hospital</title>
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
        <script>
            $(document).ready(function () {
            $("#form").validate({
            rules: {
            password: {
            required: true,
            },
                    username: {
                    required: true,
                    },
            },
                    messages: {
                    password:{
                    required: "Please enter your password"
                    },
                            username:{
                            requried: "Please enter your email address"
                            },
                    },
                    submitHandler: function () {
                    return true;
                    }
            });
        </script>
    </head>
    <body>
        <?php
        include("navbar.php");
        ?>
        <h2>Login</h2>
        <form id="defaultForm" method="post" action="doLogin.php">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Usesrname" required="" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" required="" name="password">
            </div>
            <button type="submit" name="login" class="btn btn-primary">Login</button>

        </form>
</html>
<!-- Michell Tan Shiqi 19030685 -->