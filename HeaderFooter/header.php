<?php
    include '../Database/dbh.inc.php'
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>Simple website</title>
    <link rel="stylesheet" href="../main.css">
    <link rel="stylesheet" href="../mainfile.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  </head>

  <body id="bg">
<!-- Start Nav Bar --> 
<nav class="navbar" style="position: fixed; width: 100%;">
            <div class="navbar__container">
              <a href="../Home/index.php" id="navbar__logo">Resource Booking System</a>
              <div class="navbar__toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
              </div>

              <ul class="navbar__menu">

                <li class="navbar__item">
                  <input type="text" placeholder="Search.." id="searchTxt" style="width: 250px;">
                </li>

                <li class="navbar__item">
                  <a href="../Home/index.php" class="navbar__links" id="home-page">Home</a>
                </li>
                <li class="navbar__item">
                  <a href="../Available Resources.html/AvailableResources.php" class="navbar__links" id="AvailableResources-page">Available Resources</a>
                </li>
                <li class="navbar__item">
                  <a href="../Resources.html/Resources.php" class="navbar__links" id="Resources-page">Resources</a>
                </li>
                <li class="navbar__item">
                  <a href="../DailyShedule.html/DailyShedule.php" class="navbar__links" id="DailyShedule-page">Daily Shedule</a>
                </li>
                <li class="navbar__item">
                  <a href="../AboutUs.html/AboutUs.php" class="navbar__links" id="AboutUs-page">About Us</a>
                </li>
                <li class="navbar__item">
                  <a href="../Contact Us.html/ContactUs.php" class="navbar__links" id="ContactUs-page">Contact Us</a>
                </li>
                <li class="navbar__btn">
                  <a href="../Login.html/Login.php" class="button1" id="LogIn" style="width:10rem;">Log In</a>
                </li> 
              </ul>
            </div>
        </nav>
<!-- End Nav Bar -->