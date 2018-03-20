<!DOCTYPE html>
<?php
require 'essential.inc.php';
?>
<?php
if(isset($_POST['NameP'])&&!empty($_POST['NameP'])){
		require 'connect.inc.php';
		//$hash = md5( rand(0,1000) );
        $password = md5(rand(0,1000));
                
		$query="INSERT INTO `user`(`name`,`password`, `contact`, `email`, `address`, `City`, `State`, `Country`, `postal_code`,`Gender`,`Profession`) VALUES ('".$_POST['NameP']."','".$password."','".$_POST['ContactP']."','".$_POST['EmailP']."','".$_POST['AddressP']."','".$_POST['CityP']."','".$_POST['StateP']."','".$_POST['CountryP']."','".$_POST['PincodeP']."','".$_POST['Gender']."','".$_POST['Profession']."')";
		if($run=mysqli_query($link,$query)){
			$query="SELECT * FROM `user` where `email`='".$_POST['EmailP']."' AND `password`='".$_POST['Password']."'";
			$run=mysqli_query($link,$query);
			$row_login=mysqli_fetch_assoc($run);
			$_SESSION['id']=$row_login['id'];
			if(isset($_POST['Broadway'])){
				require 'connect.inc.php';
				mysqli_query($link,"INSERT INTO `Interests`(`id`, `Interest`) VALUES (".$_SESSION['id'].",'Broadway')");
				mysqli_close ($link);
			}
			if(isset($_POST['Dance'])){
				require 'connect.inc.php';
				mysqli_query($link,"INSERT INTO `Interests`(`id`, `Interest`) VALUES (".$_SESSION['id'].",'Dance')");
				mysqli_close ($link);
			}
			if(isset($_POST['Family'])){
				require 'connect.inc.php';
				mysqli_query($link,"INSERT INTO `Interests`(`id`, `Interest`) VALUES (".$_SESSION['id'].",'Family')");
				mysqli_close ($link);
			}
			if(isset($_POST['Opera'])){
				require 'connect.inc.php';
				mysqli_query($link,"INSERT INTO `Interests`(`id`, `Interest`) VALUES (".$_SESSION['id'].",'Opera')");
				mysqli_close ($link);
			}
			 if(isset($_POST['Music'])){
				require 'connect.inc.php';
				mysqli_query($link,"INSERT INTO `Interests`(`id`, `Interest`) VALUES (".$_SESSION['id'].",'Music')");
				mysqli_close ($link);
			}
			 if(isset($_POST['Theatre'])){
				require 'connect.inc.php';
				mysqli_query($link,"INSERT INTO `Interests`(`id`, `Interest`) VALUES (".$_SESSION['id'].",'Theatre')");
				mysqli_close ($link);
			}
			//require 'connect.inc.php';
            
			echo '<script>$(document).ready (function(){
                $("#success-profile").alert();
                $("#success-profile").fadeTo(1000, 500).slideUp(500, function(){
               $("#success-profile").hide();
                });   
		});</script>';
			header('Location:DisplayEvents.php');
			}
		else{
			echo '<script>alert("Please Fill all details");</script>';
		}
}
?>
<html lang="en">
<head>
  <title>Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="main_body" >
<div class="container">
  <h2>Dynamic Tabs</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Profile</a></li>
  </ul>
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">  
    <div class="panel panel-default">
    <div class="panel-body"><form role="form" action="profile.php" id="login" method="POST" >


			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" id="username"  name="EmailP"class="form-control" ">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" id="username"  name="Password"class="form-control" ">
			</div>
			<div class="form-group">
				<label for="text">Name</label>
				<input type="text" name="NameP"class="form-control" id="pwd" >
			</div>

			<div class="form-group">
				<label >Address</label>
				<input type="text" name="AddressP"class="form-control" id="pwd" >
			</div>
			<div class="form-group">
				<label for="pwd">Country</label>
				<input type="text" name="CountryP"class="form-control" id="pwd">
			</div>
			<div class="form-group">
				<label for="pwd">State</label>
				<input type="text" name="StateP"class="form-control" id="pwd" >
			</div>
			<div class="form-group">
				<label for="pwd">City</label>
				<input type="text" name="CityP"class="form-control" id="pwd" >
			</div><div class="form-group">
				<label for="pwd">Pincode</label>
				<input type="number" name="PincodeP"class="form-control" id="pwd" >
			</div>
			
			<div class="form-group">
			<label for="sel1">Gender </label>
			<select class="form-control" name="Gender" id="sel1">
			<option>Male</option>
			<option>Female</option>
			</select>
			</div>
			
			<!--<div class="form-group">
				<label for="DOB">Date of Birth</label>
				<input type="date" name="Password"class="form-control" id="pwd" >
			</div>-->
			<div class="form-group">
				<label for="pwd">Contact No.</label>
				<input type="number" name="ContactP"class="form-control" id="pwd" >
			</div>
			<div class="form-group">
				<label for="pwd">Profession</label>
				<input type="text" name="Profession"class="form-control" id="pwd" >
			</div>
			<label for="pwd">Interest</label>
				<div class="checkbox">
  			<label><input type="checkbox" value="" name="Broadway">Broadway</label></div>
			<div class="checkbox"><label><input type="checkbox" name="Dance">Dance</label></div>
			<div class="checkbox">
<label><input type="checkbox" name="Family">Family</label></div>
			<div class="checkbox"><label><input type="checkbox" name="Music">Music</label></div>
			<div class="checkbox"><label><input type="checkbox" name="Opera">Opera</label></div>
			<div class="checkbox"><label><input type="checkbox" name="Theatre">Theatre</label></div>
			<br><button style="float:right;"type="submit" class="btn btn-info">Save</span></button>
		  </form></div>
  </div>
     
    </div>
    <div id="menu1" class="tab-pane fade">
    <div class="panel panel-default">
    <div class="panel-body">
      <form role="form" action="profile.php" id="login" method="POST" >
			<div class="form-group">
				<div class="checkbox">
  			<label><input type="checkbox" value="" name="Broadway">Broadway</label></div>
			<div class="checkbox"><label><input type="checkbox" name="Dance">Dance</label></div>
			<div class="checkbox">
<label><input type="checkbox" name="Family">Family</label></div>
			<div class="checkbox"><label><input type="checkbox" name="Music">Music</label></div>
			<div class="checkbox"><label><input type="checkbox" name="Opera">Opera</label></div>
			<div class="checkbox"><label><input type="checkbox" name="Theatre">Theatre</label></div>
			<br><button style="float:right;"type="submit" class="btn btn-info">Save</span></button>
		  </form>
    </div></div>
       
    </div>
   
  </div>
</div>
</div>
  </div>

  </div>


  </div>
  








</div>

</body>
</html>
