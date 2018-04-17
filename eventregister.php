<!DOCTYPE html>
<?php
require 'essential.inc.php';
?>
<?php
if(isset($_POST['Name'])&&!empty($_POST['Name'])){

		$str = "";
		$flag = 0;
		if(isset($_POST['Broadway'])){
			if($flag == 0){
				$str = "Broadway"; 
				$flag = 1;
			}
			else
				$str = "Broadway" . ", " . $str;
		}

		if(isset($_POST['Dance'])){
			if($flag == 0){
				$str = "Dance"; 
				$flag = 1;
			}
			else
				$str = "Dance" . ", " . $str;
		}

		if(isset($_POST['Family'])){
			if($flag == 0){
				$str = "Family"; 
				$flag = 1;
			}
			else
				$str = "Family" . ", " . $str;
		}

		if(isset($_POST['Opera'])){
			if($flag == 0){
				$str = "Opera"; 
				$flag = 1;
			}
			else
				$str = "Opera" . ", " . $str;
			
		}
		 if(isset($_POST['Music'])){
		 	if($flag == 0){
				$str = "Music"; 
				$flag = 1;
			}
			else
				$str = "Music" . ", " . $str;
			
		}
		 if(isset($_POST['Theatre'])){
		 	if($flag == 0){
				$str = "Theatre"; 
				$flag = 1;
			}
			else
				$str = "Theatre" . ", " . $str;
			
		}

		require 'connect.inc.php';


	
    
         
    $Event = mysqli_query($link,"SELECT * FROM `Event` ");
    $Dupflag = 0;
    while($row = mysqli_fetch_array($Event)){
        if(strcmp($row['Address'],$_POST['Address'])==0 and strcmp($row['Presenter'],$_POST['Presenter']==0) and strcmp($row['City'],$_POST['City'])==0){
            $Dupflag = 1;
            break;
        }
    }
    if($Dupflag == 0){

		$query="INSERT INTO `Event`(`OrganiserID`,`Name`, `Address`, `City`, `State`, `Country`, `Presenter`, `Ticket`, `Description`, `EventStart`, `EventEnd`,`Pincode`,`Genre`,`EventVerified`,userID) VALUES ('".$_SESSION['id']."','".$_POST['Name']."','".$_POST['Address']."','".$_POST['City']."','".$_POST['State']."','".$_POST['Country']."','".$_POST['Presenter']."','".$_POST['Ticket']."','".$_POST['Description']."','".$_POST['EventStart']."','".$_POST['EventEnd']."','".$_POST['Pincode']."','".$str."','0','".$_SESSION['id']."')";

			$run=mysqli_query($link,$query);
			

		if($run){
			header('Location: DisplayEvents.php');

		}
		else{
			echo '<script>alert("Please Fill all details'.$run.'");</script>';
		}
	}
	else
		echo '<script>alert("Event with these details already exists'.$run.'");</script>';
		
}
?>
<html lang="en">
<head>
  <title>Add Event</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="main_body" >
<div class="container">
  <h2>Event</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Profile</a></li>
   
  </ul>
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    
    <div class="panel panel-default">
    <div class="panel-body"><form role="form" action="eventregister.php" id="login" method="POST" >
			<div class="form-group">
				<label for="Name">Event Name</label>
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

			<br><label for="pwd">Event Genre</label>
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
  		</div></div></div></div></div></div></div>
	</div>

</body>
</html>
