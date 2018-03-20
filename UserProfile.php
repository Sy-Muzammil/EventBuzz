<!DOCTYPE html>

<?php
require 'essential.inc.php';
?>

<html>
<head>
<meta charset=UTF-8">
<meta charset="utf-8"> 
<title>User Profile</title>
 
<!-- Meta -->
<meta name="description" content="A few lines about yourself">
<meta name="keywords" content="web,developer,designer,resume" />
<meta name="author" content="Participant Name">
 
<!-- CSS Stylesheet -->
<link rel="stylesheet" type="text/css" href="UserProfileStyle.css" />
 
<!--[if lt IE 9]> 
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
 
</head>
<body>
 
<!-- Begin Wrapper -->
<div id="wrapper">
 
<!-- Begin Content Area -->
<div id="content">
 
<!-- Begin Header -->
<header>
 
<!-- Begin Contact Section -->
<section id="contact-details">
 
<!-- Begin Profile Image Section -->
<?php
require 'functions.php';
//echo "hello";
getUserInfo();
getUserInterests();
?>
<!-- Edit Button Start -->

<div class="clear">&nbsp;</div> 
<div class="clear">&nbsp;</div> 

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.button {
  float: right;
  border-radius: 4px;
  background-color: red;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 250px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
<body>
<a href="editProfile.php"><button class="button"><span>Edit Profile</span></button></a>
</body>

<div class="clear">&nbsp;</div>

<!-- Begin Footer -->
<footer id="footer">
<!-- Begin Footer Content -->
<div class="footer_content">
 
<!-- Begin Schema Person -->
 
<ul class="icons_1">
<li><a href="https://profiles.google.com/jwagner719" title="Google Profile"><img src="http://www.google.com/images/icons/ui/gprofile_button-32.png" width="32" height="32" alt="Google Profile"></a></li>
<li><a href="http://www.linkedin.com/" title="LinkedIn"><img src="images/linkedin.png" width="32" height="32" alt="LinkedIn" /></a></li>
<li><a href="http://www.facebook.com/" title="Facebook"><img src="images/facebook.png" width="32" height="32" alt="Facebook" /></a></li>
<li><a href="http://twitter.com/" title="Follow Me on Twitter!"><img src="images/twitter.png" width="32" height="32" alt="Follow Me on Twitter!" /></a></li>
</ul>
 
 
<!-- End Schema Person -->
 
</div>
<!-- End Footer Content -->
 
</footer>
<!-- End Footer -->
 
</div>
<!-- End Content -->
 
</div>
<!-- End Wrapper -->
 
</body>
</html>

