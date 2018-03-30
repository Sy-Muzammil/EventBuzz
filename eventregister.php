<!DOCTYPE html>
<?php
require 'essential.inc.php';
?>
<?php
if(isset($_POST['Name'])&&!empty($_POST['Name'])){
		require 'connect.inc.php';

		$query="INSERT INTO `Event`(`OrganiserID`,`Name`, `Address`, `City`, `State`, `Country`, `Presenter`, `Ticket`, `Description`, `EventStart`, `EventEnd`,`Pincode`) VALUES ('5','".$_POST['Name']."','".$_POST['Address']."','".$_POST['City']."','".$_POST['State']."','".$_POST['Country']."','".$_POST['Presenter']."','".$_POST['Ticket']."','".$_POST['Description']."','".$_POST['EventStart']."','".$_POST['EventEnd']."','".$_POST['Pincode']."')";
		$run=mysqli_query($link,$query);
		if($run){
			echo '<script>$(document).ready (function(){
                $("#success-profile").alert();
                $("#success-profile").fadeTo(1000, 500).slideUp(500, function(){
               $("#success-profile").hide();
                });   
		});</script>';
			}
		else{
			echo '<script>alert("Please Fill all details'.$run.'");</script>';
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
    <li><a data-toggle="tab" href="#menu1">Change Password</a></li>
    <li><a data-toggle="tab" href="#menu2">Orders</a></li>
  </ul>
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    
    <div class="panel panel-default">
    <div class="panel-body"><form role="form"action="eventregister.php" id="login" method="POST" >
			<div class="form-group">
				<label for="Name">Name</label>
				<input type="text" id="username"  name="Name"class="form-control" ">
			</div>
			<div class="form-group">
				<label for="password">Address</label>
				<input type="text" id="username"  name="Address"class="form-control" ">
			</div>
			<div class="form-group">
				<label for="pwd">Country</label>
				<input type="text" name="Country"class="form-control" id="pwd">
			</div>
			<div class="form-group">
				<label for="pwd">State</label>
				<input type="text" name="State"class="form-control" id="pwd" >
			</div>
			<div class="form-group">
				<label for="pwd">City</label>
				<input type="text" name="City"class="form-control" id="pwd" >
			</div>
			<div class="form-group">
				<label for="pwd">Pincode</label>
				<input type="number" name="Pincode"class="form-control" id="pwd" >
			</div>
			<div class="form-group">
				<label for="pwd">Presenter</label>
				<input type="text" name="Presenter"class="form-control" id="pwd" >
			</div>
			<div class="form-group">
				<label for="pwd">Ticket</label>
				<input type="text" name="Ticket"class="form-control" id="pwd" >
			</div>
			<div class="form-group">
				<label for="pwd">Description</label>
				<input type="text" name="Description"class="form-control" id="pwd" >
			</div>
			<div class="form-group">
				<label for="DOB">Event Start Date</label>
				<input type="date" name="EventStart"class="form-control" id="pwd" >
			</div>
			<div class="form-group">
				<label for="DOB">Event End Date</label>
				<input type="date" name="EventEnd"class="form-control" id="pwd" >
			</div>
			<br><button style="float:right;"type="submit" class="btn btn-info">Save</span></button>
		  </form></div>
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
