<?php

class UserClass {

	function getUserEditProfile(){
	  
	  require 'connect.inc.php';
	      $result = mysqli_query($link,"SELECT * FROM `user` where `id`=".$_SESSION['id']."");
	      $row=mysqli_fetch_array($result);
	      
	      echo'<div class="form-group">
	        <label for="email">Email</label>
	        <input type="email" id="username"  name="EmailP"class="form-control" value="'.$row['email'].'">
	      </div>
	      <div class="form-group">
	        <label for="text">Password</label>
	        <input type="password" name="PasswordP"class="form-control" id="pwd" value="'.$row['password'].'">
	      </div>
	      <div class="form-group">
	        <label for="text">Name</label>
	        <input type="text" name="NameP"class="form-control" id="pwd" value="'.$row['name'].'">
	      </div>

	      <div class="form-group">
	        <label >Address</label>
	        <input type="text" name="AddressP"class="form-control" id="pwd" value="'.$row['address'].'">
	      </div>
	      <div class="form-group">
	        <label for="pwd">Country</label>
	        <input type="text" name="CountryP"class="form-control" id="pwd" value="'.$row['City'].'">
	      </div>
	      <div class="form-group">
	        <label for="pwd">State</label>
	        <input type="text" name="StateP"class="form-control" id="pwd" value="'.$row['State'].'">
	      </div>
	      <div class="form-group">
	        <label for="pwd">City</label>
	        <input type="text" name="CityP"class="form-control" id="pwd" value="'.$row['Country'].'">
	      </div><div class="form-group">
	        <label for="pwd">Pincode</label>
	        <input type="number" name="PincodeP"class="form-control" id="pwd" value="'.$row['postal_code'].'">
	      </div>
	      
	      
	      <!--<div class="form-group">
	        <label for="DOB">Date of Birth</label>
	        <input type="date" name="Password"class="form-control" id="pwd" >
	      </div>-->
	      <div class="form-group">
	        <label for="pwd">Contact No.</label>
	        <input type="number" name="ContactP"class="form-control" id="pwd" value="'.$row['contact'].'">
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
	      <br>
	      <br><button style="float:right;"type="submit" class="btn btn-info">Save</span></button>
	      </form></div>
	  </div>
	     
	    </div>
	    <div id="menu1" class="tab-pane fade">
	    <div class="panel panel-default">
	    <div class="panel-body">
	      <form role="form"action="editProfile.php" id="login" method="POST" >
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
	       
	    </div></div></div></div></div></div></div>
	</div>';
}


	function getadminHeader(){
	  
		require 'connect.inc.php';
		$result = mysqli_query($link,"SELECT * FROM `Event` where EventID=".$_REQUEST['id']."");
		$row = mysqli_fetch_array($result);
		echo '<h3 style="color:black;" class="mbr-section-title display-2">'.$row['Name'].'</h3>
		<div style="color:black;" class="mbr-section-text">
		<p>'.$row['Description'].'</p>
		                    </div>
		';
		$result = mysqli_query($link,"SELECT * FROM `register` where EventID='".$_REQUEST['id']."'");

		if(strcmp($row['EventVerified'],'0')==0){
		echo '<a href="verifyEvent.php?id='.$_REQUEST['id'].'" class="btn btn-primary">Verify</a>';
		}
		//if(strcmp($row['EventVerified'],'0')==0){
		echo '<a href="deleteadminEvent.php?id='.$_REQUEST['id'].'" class="btn btn-primary">Delete</a>';
		//}
		mysqli_close ($link);
	}



	function getHeader(){
	  
		require 'connect.inc.php';
		$result = mysqli_query($link,"SELECT * FROM `Event` where EventID=".$_REQUEST['id']."");
		$row = mysqli_fetch_array($result);
		echo '<h3 style="color:black;" class="mbr-section-title display-2">'.$row['Name'].'</h3>
		<div style="color:black;" class="mbr-section-text">
		<p>'.$row['Description'].'</p>
		                        </div>
		<a ';
		$result = mysqli_query($link,"SELECT * FROM `register` where EventID='".$_REQUEST['id']."' and userID='".$_SESSION['id']."'");

		if(mysqli_num_rows($result)==0){
		  echo 'href="registerEvent.php?id='.$_REQUEST['id'].'"  class="btn btn-primary">register</a>';
		}
		else echo 'href="unregister.php?id='.$_REQUEST['id'].'" class="btn btn-primary">unregister</a>';
		mysqli_close ($link);

	}


	function getUserInfo(){
	    
		require 'connect.inc.php';
		$result = mysqli_query($link,"SELECT * FROM `user` where id = ".$_SESSION['id']."");
		$row = mysqli_fetch_array($result);

		//$InterestTable = mysqli_query($link,"SELECT * FROM `Interests` where id=".$_REQUEST['id']."");
		//$Interest = mysqli_fetch_array($InterestTable);

		echo '<h3 style="color:black;" class="mbr-section-title display-2">'.$row['name'].'</h3>
		<div style="color:black;" class="mbr-section-text">
		<p> <b>Address:</b><br>
		'.$row['address'].'<br>
		'.$row['City'].'<br>
		'.$row['State'].'<br>
		'.$row['Country'].'<br>
		'.$row['postal_code'].'<br>
		<b>Contact:</b><br>
		'.$row['contact'].'<br>
		'.$row['email'].'</p>
		                        </div>';
		mysqli_close ($link);

	}

	function getUserInterests(){

		require 'connect.inc.php';
		$result = mysqli_query($link,"SELECT Interest FROM `Interests` where id = ".$_SESSION['id']."");
		//$row = mysqli_fetch_array($result);
		echo '  
		<!-- Begin Interests Section -->
		 
		<dl>
		<dt>Interests</dt>
		<dd>
		 
		<section id="skills">
		<ul class="list1">';
		while($row = mysqli_fetch_array($result)){
		echo '
		  <li>'.$row['Interest'].'</li>';
		}
		echo '
		</ul>
		</section>
		 
		</dd>
		</dl>
		<!-- End Interests Section -->';

	}

}
?>