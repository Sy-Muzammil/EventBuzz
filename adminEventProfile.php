<!DOCTYPE html>
<html>
<head>
<?php 
  require 'essential.inc.php';
  
?>
<?php
  include 'eventFunctions.php';
  include 'userFunctions.php';
  $User = new UserClass();
  $Event = new EventClass();
?>

  <!-- Site made with Mobirise Website Builder v4.3.0, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.3.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/mbr-favicon.png" type="image/x-icon">
  <meta name="description" content="Site Maker Description">
  <title>Admin Event Page</title>
  <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="assets/et-line-font-plugin/style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&subset=latin">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/soundcloud-plugin/style.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
<section id="menu-h" data-rv-view="120">

    <nav class="navbar navbar-dropdown transparent navbar-fixed-top bg-color">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="14_consumerBuy.php" class="mbri-globe mbr-iconfont mbr-iconfont-menu navbar-logo"></a>
                        <a class="navbar-caption" href="adminDisplayEvent.php">Event Recommendation system</a>
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">
                    
                    <li class="nav-item dropdown"><a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" href="#" aria-expanded="false">Account</a><div class="dropdown-menu"><a class="dropdown-item" href="UserProfile.php">Profile</a><a class="dropdown-item" href="logout.php">logout</a></div></li></ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>

<section class="engine"><a href="https://mobirise.co/o">bootstrap button</a></section><section class="mbr-section mbr-section-hero mbr-section-full header2 mbr-parallax-background mbr-after-navbar" id="header6-25" data-rv-view="7" style="background-image: url(assets/images/room-laptop.jpg);">

    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(204, 204, 204);">
    </div>

    <div class="mbr-table mbr-table-full">
        <div class="mbr-table-cell">

            <div class="container">
                <div class="mbr-section row">
                    <div class="mbr-table-md-up">
                        
                        <div class="mbr-table-cell mbr-right-padding-md-up mbr-valign-top col-md-7 image-size" style="width: 50%;">
                            <div class="mbr-figure"><img  src="farm.jpg" width="200" height="400" ></div>
                        </div>
                        <div class="mbr-table-cell col-md-5 text-xs-center text-md-left content-size">
                        <?php
                           $User->getadminHeader();
                        ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="mbr-arrow mbr-arrow-floating hidden-sm-down" aria-hidden="true"><a href="#features7-24"><i class="mbr-arrow-icon"></i></a></div>

</section>


<section class="mbr-section article mbr-section__container" id="content2-2e" data-rv-view="198" style="background-color: rgb(255, 255, 255); padding-top: 20px; padding-bottom: 20px;">

    <?php
    $Event->getEventDetails();

    ?>

</section>


<section class="mbr-section mbr-parallax-background" id="testimonials4-1i" data-rv-view="17" style="background-image: url(assets/images/sky.jpg); padding-top: 120px; padding-bottom: 120px;">

    <div class="mbr-overlay" style="opacity: 0.2; background-color: rgb(34, 34, 34);">
    </div>

        <div class="mbr-section mbr-section__container mbr-section__container--middle">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-xs-center">
                        <h3 class="mbr-section-title display-2">Organiser Details</h3>
                        
                    </div>
                </div>
            </div>
        </div>


    <div class="mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">

                <div class="col-xs-12">
                <?php
                    //getReviews();
                ?>
                </div>

            </div>

        </div>
    </div>
</section>

<section class="mbr-section mbr-section-md-padding mbr-footer footer2" id="contacts2-1j" data-rv-view="27" style="background-color: rgb(46, 46, 46); padding-top: 90px; padding-bottom: 90px;">
    
    <?php
   $Event->AdminEventProfileOrganiserfooter();
    ?>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/viewport-checker/jquery.viewportchecker.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
  <input name="animation" type="hidden">
  </body>
</html>