<?php 
  require 'essential.inc.php';
  
?>

<?php
  include 'eventFunctions.php';
  #include 'userFunctions.php';
  #$User = new UserClass();
  $Event = new EventClass();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.3.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/mbr-favicon.png" type="image/x-icon">
  <meta name="description" content="Web Site Creator Description">
  <title>Display Events</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&subset=latin">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
<section id="menu-10" data-rv-view="101">

    <nav class="navbar navbar-dropdown transparent navbar-fixed-top bg-color">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="https://mobirise.com" class="mbri-globe mbr-iconfont mbr-iconfont-menu navbar-logo"></a>
                        <a class="navbar-caption" href="DisplayEvents.php">Event Recommendation System</a>
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">
                    <li class="nav-item nav-btn"><a class="nav-link btn btn-white btn-white-outline" href="OrganiserEventList.php">Created Events</a></li>
                    <li class="nav-item nav-btn"><a class="nav-link btn btn-white btn-white-outline" href="RegisteredEvents.php">My Events</a></li>
                    <li class="nav-item dropdown"><a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" href="#" aria-expanded="false">Account</a><div class="dropdown-menu"><a class="dropdown-item" href="UserProfile.php">Profile</a><a class="dropdown-item" href="logout.php">logout</a></div></li></ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>

<section class="engine"><a href="https://mobirise.co/e">web builder software</a></section><section class="mbr-section article mbr-parallax-background mbr-after-navbar" id="msg-box8-11" data-rv-view="103" style="background-image: url(assets/images/desert.jpg); padding-top: 120px; padding-bottom: 120px;">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(34, 34, 34);">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <h3 class="mbr-section-title display-2">Events</h3>
                <div class="lead"><form method="post" action="DisplayEvents.php" style="margin: 50;">
  <input type="text" <?php if (isset($_POST['City'])) { echo 'value="'.$_POST['City'].'"'; } ?> placeholder="Enter City" name="City" >
  <input type="text" <?php if (isset($_POST['State'])) { echo 'value="'.$_POST['State'].'"'; } ?> placeholder="Enter State" name="State" >
  <input type="text" <?php if (isset($_POST['Country'])) { echo 'value="'.$_POST['Country'].'"'; } ?> placeholder="Enter Country" name="Country" >
      <input type="checkbox" name="Interest" <?php if (isset($_POST['Interest'])) { echo 'checked'; } ?>><font color="white">Interest</font>
  <input type="submit" value="Find"/>
</form>
</div>
                
            </div>
        </div>
    </div>

</section>
<?php
  $Event->getEvent();

?>
  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/viewport-checker/jquery.viewportchecker.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
  <input name="animation" type="hidden">
  </body>
</html>