<?php
if(isset($_POST['email'])&&!empty($_POST['email'])){
	require 'connect.inc.php';
	//				header('Location: index.php');

	$query="INSERT INTO `user` ( `name`,`password`, `category`,`contact`,`email`, `lat`, `longi`, `address`, `City`, `State`, `Country`, `postal_code`, `Certification`, `Description`,`Members`) VALUES ('".$_POST['name']."','".$_POST['password']."','".$_POST['category']."','".$_POST['contact']."','".$_POST['email']."','".$_POST['lat']."', '".$_POST['longi']."','".$_POST['address']."','".$_POST['city']."','".$_POST['state']."','".$_POST['country']."','".$_POST['postal_code']."','".$_POST['Certification']."','".$_POST['Member']."','".$_POST['Description']."')";
	//$query="SELECT * FROM `facebook`";
		if(mysqli_query($link,$query)){

				//$runreg=mysql_query("SELECT * FROM `user` where `Mobile`='".$_POST['Mobile']."'");
				//$row_reg=mysql_fetch_assoc($runreg);
				//$_SESSION['user_id']=$row_reg['user_id'];
				//$_SESSION['Email']=$row_reg['Email'];
				header('Location: index.php');
		}
		else
			echo "wrong";
}
?>

<script>
var map,marker=null;
        function initialize() {
            var myLatlng = new google.maps.LatLng(24.18061975930,79.36565089010);
            var myOptions = {
                zoom:7,
                center: myLatlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            map = new google.maps.Map(document.getElementById("googleMap"), myOptions);
            var geocoder = new google.maps.Geocoder();

        document.getElementById('submi').addEventListener('click', function() {
          geocodeAddress(geocoder, map);
        });
            // marker refers to a global variable
            marker = new google.maps.Marker({
                position: myLatlng,
                map: map
            });

            google.maps.event.addListener(map, "click", function(event) {
                // get lat/lon of click
                var clickLat = event.latLng.lat();
                var clickLon = event.latLng.lng();
				//setMapOnAll(null);
                // show in input box
                document.getElementById("lonig").value = clickLon;
				document.getElementById("lati").value = clickLat;
                //document.getElementById("lonig").value = clickLon;
				//alert(""+clickLon)
                marker.setMap(null);
                marker = new google.maps.Marker({
                        position: new google.maps.LatLng(clickLat,clickLon),
                        map: map
                     });
            });
    }
    function geocodeAddress(geocoder, resultsMap) {
        var address = document.getElementById('address').value;
        geocoder.geocode({'address': address}, function(results, status) {
          if (status === 'OK') {
	    if (marker!=null)marker.setMap(null);	
            resultsMap.setCenter(results[0].geometry.location);
             marker = new google.maps.Marker({
              map: resultsMap,
              position: results[0].geometry.location
            });
	    //marker.setMap(null);

	    document.getElementById('lati').value =results[0].geometry.location.lat();
	    document.getElementById('lonig').value =results[0].geometry.location.lng();		
          } else {
            alert('Geocode was not successful for the following reason: ' + status);
          }
        });
      }
</script>
    
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->
 <form action="register.php"  method="post" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label ><b>name</b></label>
    <input type="text" placeholder="Enter name" name="name" >
    <br>
    <label ><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" >
    <br>
    <label ><b>Category</b></label>
    <input type="text" placeholder="Enter category" name="category" >
    <br>
    <label for="contact"><b>Contact</b></label>
    <input type="text" placeholder="Enter contact" name="contact" >
    <br>
    <label for="password"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" >
    <br>
    <label ><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="address" >
    <br>
    <label ><b>City</b></label>
    <input type="text" placeholder="City" name="city" >
    <br>
    <label ><b>State</b></label>
    <input type="text" placeholder="State" name="state" >
    <br>
    <label ><b>Country</b></label>
    <input type="text" placeholder="Country" name="country" >
    <br>
    <label ><b>Postal Code</b></label>
    <input type="text" placeholder="Enter Postal Code" name="postal_code" >
    <br>
    <label ><b>Certification</b></label>
    <input type="text" placeholder="Enter Certification" name="Certification" ><br>
    <label ><b>Member</b></label>
    <input type="text" placeholder="No of Members" name="Member" ><br>
    <label ><b>Describe yourself/FPO</b></label>
    <input type="text" name="About" ><br>
      <input id="address" type="textbox" value="Sydney, NSW">
      <input id="submi" type="button" value="locate">
    <div id="googleMap" style="width:50%;height:200px;"></div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0Dx_boXQiwvdz8sJHoYeZNVTdoWONYkU&callback=initialize"></script>
    <br><label ><b>Latitude</b></label>
    <input type="text" id="lati" name="lat" >
	<br><label ><b>Longitude</b></label>
    <input type="text" id="lonig" name="longi" >





    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>

<!--<form action ="register.php" method ="POST">
username<input type="text" name="username">
password<input type="text" name="password">
<input type='submit'>
</form>

-->
