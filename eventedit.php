<!DOCTYPE html>
<?php
require 'essential.inc.php';
?>
<?php
if(isset($_POST['Name'])&&!empty($_POST['Name'])){
		require 'connect.inc.php';
		$query="UPDATE `Event` SET `Name`='".$_POST['Name']."',`Address`='".$_POST['Address']."',`City`='".$_POST['City']."',`State`='".$_POST['State']."',`Country`='".$_POST['Country']."',`Presenter`='".$_POST['Presenter']."',`Ticket`='".$_POST['Ticket']."',`Description`='".$_POST['Description']."',`EventStart`='".$_POST['EventStart']."',`EventEnd`='".$_POST['EventEnd']."',`Pincode`='".$_POST['Pincode']."' WHERE EventID=1";
		if($run=mysqli_query($link,$query)){
			echo '<script>$(document).ready (function(){
                $("#success-profile").alert();
                $("#success-profile").fadeTo(1000, 500).slideUp(500, function(){
               $("#success-profile").hide();
                });   
		});</script>';
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
    <li><a data-toggle="tab" href="#menu1">Change Password</a></li>
    <li><a data-toggle="tab" href="#menu2">Orders</a></li>
  </ul>
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    
    <div class="panel panel-default">
    <div class="panel-body"><form role="form" action="eventedit.php" id="login" method="POST" >
			<?php
				require 'functions.php';
				geteventedit();
			?>
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
