<!DOCTYPE html>
<?php
require 'essential.inc.php';
?>
<?php
  #include 'eventFunctions.php';
  include 'userFunctions.php';
  $User = new UserClass();
  #$Event = new EventClass();
?>



<?php
require 'connect.inc.php';
mysqli_query($link,"Delete from `Interests` where `id`='".$_SESSION['id']."'");
mysqli_close ($link);
if(isset($_POST['Broadway'])){
	require 'connect.inc.php';
	$f=0;
	mysqli_query($link,"INSERT INTO `Interests`(`id`, `Interest`) VALUES ('".$_SESSION['id']."','Broadway')");
	mysqli_close ($link);
}
if(isset($_POST['Dance'])){
	require 'connect.inc.php';
	$f=0;
	mysqli_query($link,"INSERT INTO `Interests`(`id`, `Interest`) VALUES ('".$_SESSION['id']."','Dance')");
	mysqli_close ($link);
}
if(isset($_POST['Family'])){
	require 'connect.inc.php';
	$f=0;
	mysqli_query($link,"INSERT INTO `Interests`(`id`, `Interest`) VALUES ('".$_SESSION['id']."','Family')");
	mysqli_close ($link);
}
if(isset($_POST['Opera'])){
	require 'connect.inc.php';
	$f=0;
	mysqli_query($link,"INSERT INTO `Interests`(`id`, `Interest`) VALUES ('".$_SESSION['id']."','Opera')");
	mysqli_close ($link);
}
 if(isset($_POST['Music'])){
	require 'connect.inc.php';
	$f=0;
	mysqli_query($link,"INSERT INTO `Interests`(`id`, `Interest`) VALUES ('".$_SESSION['id']."','Music')");
	mysqli_close ($link);
}
 if(isset($_POST['Theatre'])){
	require 'connect.inc.php';
	$f=0;
	mysqli_query($link,"INSERT INTO `Interests`(`id`, `Interest`) VALUES ('".$_SESSION['id']."','Theatre')");
	mysqli_close ($link);
}

if(isset($_POST['NameP'])&&!empty($_POST['NameP'])){
		require 'connect.inc.php';
		$query="UPDATE `user` SET `name`='".$_POST['NameP']."',`contact`='".$_POST['ContactP']."',`password`='".$_POST['Password']."',`Country`='".$_POST['CountryP']."',`State`='".$_POST['StateP']."',`City`='".$_POST['CityP']."',`email`='".$_POST['EmailP']."',`postal_code`='".$_POST['PincodeP']."',`address`='".$_POST['AddressP']."' WHERE id=".$_SESSION['id']."";
		if($run=mysqli_query($link,$query)){
			header('Location: UserProfile.php');
		}
		else{
			echo '<script>alert("Please Fill all details");</script>';
		}
}
?>
<html lang="en">
<head>
  <title>Edit User Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="main_body" >
<div class="container">
  <h2>Edit User Profile</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Profile</a></li>
  </ul>
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">  
    <div class="panel panel-default">
    <div class="panel-body"><form role="form" action="editProfile.php" id="login" method="POST" >
<?php
	
	$User->getUserEditProfile();
?>
<a href="DisplayEvents.php"><button style="float:right;"type="submit" class="btn btn-info">Home</span></button></a>
</body>
</html>
