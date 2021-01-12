<!-- Michell Tan Shiqi 19030685 -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="home.php"><img src="./css/img/ych.png" alt="logo" style="width:180px;"></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" data-toggle="dropdown"><b>
                        ABOUT YCH
                    </b></a>
                <div class="dropdown-menu navbar-light bg-light">
                    <a class="dropdown-item" href="https://www.yishuncommunityhospital.com.sg/about-ych/senior-management-team"><b>SENIOR MANAGEMENT TEAM</b></a>
                    <a class="dropdown-item" href="https://www.yishuncommunityhospital.com.sg/about-ych/our-vision-and-mission"><b>OUR VISION AND MISSION</b></a>
                    <a class="dropdown-item" href="https://www.yishuncommunityhospital.com.sg/about-ych/awards-recognition"><b>AWARDS AND RECOGNITION</b></a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" data-toggle="dropdown"><b>
                        PATIENTS AND VISITORS
                    </b></a>
                <div class="dropdown-menu navbar-light bg-light">
                    <a class="dropdown-item" href="https://www.yishuncommunityhospital.com.sg/patients-and-visitors/inpatient-stay"><b>INPATIENT STAY</b></a>
                    <a class="dropdown-item" href="https://www.yishuncommunityhospital.com.sg/patients-and-visitors/hospital-charges-schemes-subsidies"><b>HOSPITAL CHARGES / SCHEMES & SUBSIDIES</b></a>
                    <a class="dropdown-item" href="https://www.yishuncommunityhospital.com.sg/patients-and-visitors/how-to-pay-your-bills"><b>HOW TO PAY YOUR BILLS</b></a>
                    <a class="dropdown-item" href="https://www.yishuncommunityhospital.com.sg/patients-and-visitors/our-doctors"><b>OUR DOCTORS</b></a>
                    <a class="dropdown-item" href="https://www.yishuncommunityhospital.com.sg/patients-and-visitors/visitor-registration"><b>VISITOR REGISTRATION</b></a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" data-toggle="dropdown"><b>
                        SERVICES AND FACILITIES
                    </b></a>
                <div class="dropdown-menu navbar-light bg-light">
                    <a class="dropdown-item" href="https://www.yishuncommunityhospital.com.sg/services-and-facilities/inpatient-services"><b>INPATIENT SERVICES</b></a>
                    <a class="dropdown-item" href="https://www.yishuncommunityhospital.com.sg/services-and-facilities/outpatient-services"><b>OUTPATIENT SERVICES</b></a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" data-toggle="dropdown"><b>
                        JOIN US
                    </b></a>
                <div class="dropdown-menu navbar-light bg-light">
                    <a class="dropdown-item" href="https://www.yishuncommunityhospital.com.sg/join-us/careers"><b>CAREERS</b></a>
                    <a class="dropdown-item" href="https://www.yishuncommunityhospital.com.sg/join-us/scholarships-sponsorship"><b>SCHOLARSHIPS & SPONSORSHIP</b></a>
                    <a class="dropdown-item" href="https://www.yishuncommunityhospital.com.sg/join-us/volunteers"><b>VOLUNTEERS</b></a>
                </div>
        </ul>
        <ul class="navbar-nav ml-auto">
            <?php if (!isset($_SESSION['username'])) { ?>
                <li class="nav-item active">
                    <a class="nav-link" href="signup.php" ><b>SIGN UP</b></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="login.php"><b>LOGIN</b></a>
                </li>
            <?php } else { ?>
                <li class="nav-item active"><a class="nav-link" href="exerciseHistory.php"><b>EXERCISE HISTORY</b></a></li>
                <li class="nav-item active"><a class="nav-link" href="exerciseEntry.php"><b>EXERCISE ENTRY</b></a></li>
                <li class="nav-item active"><a class="nav-link" href="logout.php"><b>LOGOUT</b></a></li>
                <?php } ?>
        </ul>
    </div>
</nav>
<!-- Michell Tan Shiqi 19030685 -->
