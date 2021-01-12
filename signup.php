<!-- Michell Tan Shiqi 19030685 -->
<!DOCTYPE html>
<html lang="en">
    <
    <head>
        <title>Sign Up - Yishun Community Hospital</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/jquery.validate.js" type="text/javascript"></script>
        <script src="js/additional-methods.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <style type="text/css">
            form .error {
                color: #ff0000;
            }
            form, h2 {
                margin-left: 50px;
                margin-right: 50px;
                margin-bottom: 10px;
                margin-top: 10px;
            }
            date {
                margin-bottom: 10px;
            }
        </style>
        <script>
            $(document).ready(function () {
            $("form").validate({
            rules: {
            password: {
            required: true,
                    pattern: /([\w\d~!@#$%^&*`]+){8,}/g
            },
                    username: {
                    required: true,
                    },
                    height: {
                    required: true,
                            min: 0,
                            max: 3,
                            pattern: /^[\d.]$/
                    },
                    weight: {
                    required: true,
                            min: 1,
                            maxlength: 3,
                            pattern: /^[\d.]$/
                    },
                    dob: {
                    required: true,
                    }
            },
                    messages: {
                    username: {
                    required: "Please enter your username",
                    },
                            password: {
                            required: "Please enter a password",
                                    pattern: "Password must contain at least eight characters, one uppercase letter, one lowercase letter, one number and one special character."
                            },
                            height: {
                            required: "Please enter your height",
                                    min: "Please enter your height correctly.",
                                    max: "Please enter your height correctly.",
                                    pattern: "Please enter your height correctly."
                            },
                            weight: {
                            required: "Please enter your weight",
                                    min: "Please enter your weight correctly.",
                                    max: "Please enter your weight correctly.",
                                    pattern: "Please enter your weight correctly."
                            },
                            dob: {
                            required: "Enter your birthdate correctly."
                            }
                    },
                    submitHandler: function () {
                    return true;
                    }
            });
                    ($"form").submit(function(){});
        </script>
    </head>
    <body>
        <?php
        include("navbar.php");
        ?>
        <h2>Sign Up</h2>
        <form id="defaultForm" method="post" action="doSignup.php">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Usesrname" required="" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" required="" name="password">
            </div>
            <div class="form-group">
                <label for="weight">Weight (kg):</label>
                <input type="number" ng-model="weight"
                       id="weight" step=".01"
                       placeholder="Weight in kg" class="form-control" required="" name="weight">
            </div>

            <div class="form-group">
                <label for="height">Height (m):</label>
                <input type="number" ng-model="height"
                       id="height" step=".01"
                       placeholder="Height in m" class="form-control" required="" name="height">
            </div>
            <div class="form-group">
                <label>Date of Birth</label>
                <input type="date" name="dob" id="dob" class="form-control" name="dob" required="">
            </div>
            <div class="form-group">
                <label for="activeness">Active Level</label><br/>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="activeness" id="inlineRadio1" value="Sedentary">
                    <label class="form-check-label" for="inlineRadio1">Sedentary</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="activeness" id="inlineRadio2" value="Moderate">
                    <label class="form-check-label" for="inlineRadio2">Moderate</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="activeness" id="inlineRadio3" value="Active">
                    <label class="form-check-label" for="inlineRadio3">Active</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>

        </form>
</html>
<!-- Michell Tan Shiqi 19030685 -->
