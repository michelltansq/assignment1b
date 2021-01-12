<!-- Michell Tan Shiqi 19030685 -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home - Yishun Community Hospital</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <style type="text/css">
            .footer {
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                margin-bottom: 50px;
                text-align: center; }
            .fa {
                padding: 10px;
            }
            </style>
        </head>
        <body>
            <?php
            session_start();
            include("navbar.php");
            ?>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="image img-fluid" src="./css/img/banner1.jpg">
                    </div>
                    <div class="carousel-item">
                        <img class="image img-fluid" src="./css/img/banner2.png">
                    </div>
                </div>

                <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
            <div class="footer">
                <a class="navbar-brand" href="https://corp.nhg.com.sg/Pages/default.aspx"><img src="./css/img/footer-nhg.png" alt="logo" style="width:160px;"></a>
                <a class="navbar-brand" href="https://www.admiraltymedicalcentre.com.sg/"><img src="./css/img/footer-amc.png" alt="logo" style="width:160px;"></a>
                <a class="navbar-brand" href="https://www.ktph.com.sg/"><img src="./css/img/footer-ktph.png" alt="logo" style="width:160px;"></a>
                <a class="navbar-brand" href="home.php"><img src="./css/img/footer_ych.png" alt="logo" style="width:160px;"></a>
                <a href="https://www.facebook.com/YishunCommunityHospital/" target="_blank"><i class="fa fa-facebook fa-3x" aria-hidden="true"></i></a>
                <a href="https://twitter.com/ktph" target="_blank"><i class="fa fa-twitter fa-3x" aria-hidden="true"></i></a>
                <a href="https://www.youtube.com/user/KTPHTV" target="_blank"><i class="fa fa-youtube fa-3x" aria-hidden="true"></i></a>
            </div>
    </html>
    <!-- Michell Tan Shiqi 19030685 -->
