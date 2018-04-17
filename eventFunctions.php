<?php


class EventClass{

	function getEventHeader(){
	    require 'connect.inc.php';
	  	$result = mysqli_query($link,"SELECT * FROM `Event` where EventID=".$_REQUEST['id']."");
	  	$row = mysqli_fetch_array($result);
	  	echo '<h3 style="color:black;" class="mbr-section-title display-2">'.$row['Name'].'</h3>
			<div style="color:black;" class="mbr-section-text">
	  		<p>'.$row['Description'].'</p>
	        </div>
	  		';
	 	$result = mysqli_query($link,"SELECT * FROM `register` where EventID='".$_REQUEST['id']."' and userID='".$_SESSION['id']."'");
		echo '<a href="EventDelete.php?id='.$_REQUEST['id'].'" class="btn btn-primary">Delete</a>';
		echo '<a href="eventedit.php?id='.$_REQUEST['id'].'" class="btn btn-primary">Edit Event</a>';
		mysqli_close ($link);
	}



	function getUserEvent(){
		  require 'connect.inc.php';
		  $result = mysqli_query($link,"SELECT * FROM `Event` where `userID`='".$_SESSION['id']."'");
		  //$row=mysqli_fetch_array($result);
		  $i=4;
		  $s='<section class="mbr-cards mbr-section mbr-section-nopadding" id="features7-20" data-rv-view="211" style="background-color: rgb(239, 239, 239);">';
		  $s=$s.'<div class="mbr-cards-row row">';
		  
		while($row = mysqli_fetch_array($result)){
		  
			if($i==0){
		    	
		    	$s=$s.'</div>';
		    	$i=4;
		    	$s=$s.'<div class="mbr-cards-row row">';
		    }
		    $s=$s.'<div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 80px; padding-bottom: 80px;">
		            <div class="container">
		                <div class="card cart-block">
		                    <div class="card-img"><img src="farm.jpg" height="200" width="200" class="card-img-top"></div>
		                    <div class="card-block">
		                        <h4 class="card-title"><font size="5">'.$row['Name'].'</font></h4>
		                        <p class="card-text" ><font size="3">Start Date : '.$row['EventStart'].' <br>EventEnd : '.$row['EventEnd'].'
		                        </p>
		                        <div class="card-btn"><a href="EventOwnerProfile.php?id='.$row['EventID'].'" class="btn btn-primary">MORE</a></div>
		                    </div>
		                </div>
		            </div>
		        </div>';
		    $i=$i-1;
		}

		while($i!=0){
		    
		    $s=$s.'<div class="mbr-cards-col col-xs-12 col-lg-3"  padding-bottom: 80px;">
		            <div class="container">
		                <div class="card cart-block">
		                    <div class="card-img"></div>
		                    <div class="card-block">
		                        <h4 class="card-title"></h4>
		                        <h5 class="card-subtitle"><h5>
		                        <div class="card-btn"></div>
		                    </div>
		                </div>
		            </div>
		        </div>';
		    $i=$i-1;
		}
	  	$s=$s.'</div></section>';
	  	echo $s;
	  	mysqli_close ($link);  
	}





	function geteventedit(){

		require 'connect.inc.php';
		$result = mysqli_query($link,"SELECT * FROM `Event` where `EventID`='".$_REQUEST['id']."'");
		$row=mysqli_fetch_array($result);
		  echo '<div class="form-group">
		        <label for="Name">Name</label>
		        <input type="text" id="username"  name="Name"class="form-control" " value="'.$row['Name'].'">
		      </div>
		      <div class="form-group">
		        <label for="password">Address</label>
		        <input type="text" id="username"  name="Address" value="'.$row['Address'].'" class="form-control" ">
		      </div>
		      <div class="form-group">
		        <label for="pwd">Country</label>
		        <input type="text" value="'.$row['Country'].'" name="Country"class="form-control" id="pwd">
		      </div>
		      <div class="form-group">
		        <label for="pwd">State</label>
		        <input type="text" value="'.$row['State'].'"  name="State"class="form-control" id="pwd" >
		      </div>
		      <div class="form-group">
		        <label for="pwd">City</label>
		        <input type="text" value="'.$row['City'].'" name="City"class="form-control" id="pwd" >
		      </div>
		      <div class="form-group">
		        <label for="pwd">Pincode</label>
		        <input type="number" value="'.$row['Pincode'].'"  name="Pincode"class="form-control" id="pwd" >
		      </div>
		      <div class="form-group">
		        <label for="pwd">Presenter</label>
		        <input type="text" value="'.$row['Presenter'].'"   name="Presenter"class="form-control" id="pwd" >
		      </div>
		      <div class="form-group">
		        <label for="pwd">Ticket</label>
		        <input type="text"   value="'.$row['Ticket'].'" name="Ticket"class="form-control" id="pwd" >
		      </div>
		      <div class="form-group">
		        <label for="pwd">Description</label>
		        <input type="text" value="'.$row['Description'].'"  name="Description"class="form-control" id="pwd" >
		      </div>
		      <div class="form-group">
		        <label for="DOB">Event Start Date</label>
		        <input type="date" value="'.$row['EventStart'].'" name="EventStart"class="form-control" id="pwd" >
		      </div>
		      <div class="form-group">
		        <label for="DOB">Event End Date</label>
		        <input type="date" value="'.$row['EventEnd'].'" name="EventEnd"class="form-control" id="pwd" >
		      </div><br><label for="pwd">Event Genre</label>
		        <div class="checkbox">
		        <label><input type="checkbox" value="" name="Broadway">Broadway</label></div>
		      <div class="checkbox"><label><input type="checkbox" name="Dance">Dance</label></div>
		      <div class="checkbox">
		      <label><input type="checkbox" name="Family">Family</label></div>
		      <div class="checkbox"><label><input type="checkbox" name="Music">Music</label></div>
		      <div class="checkbox"><label><input type="checkbox" name="Opera">Opera</label></div>
		      <div class="checkbox"><label><input type="checkbox" name="Theatre">Theatre</label></div>';
	}


	function getadminEvent() {
	  
		  require 'connect.inc.php';
		  $result = mysqli_query($link,"SELECT * FROM `Event`");
		  $i=4;
		  $s='<section class="mbr-cards mbr-section mbr-section-nopadding" id="features7-20" data-rv-view="211" style="background-color: rgb(239, 239, 239);">';
		  $s=$s.'<div class="mbr-cards-row row">';
		while($row = mysqli_fetch_array($result)){
		    
		    if($i==0){
		      	$s=$s.'</div>';
		      	$i=4;
		      	$s=$s.'<div class="mbr-cards-row row">';
		    }

		    $varificate="";
		    if(strcmp($row['EventVerified'],'1')==0)
		      $varificate="Verified";
		    else
		      $varificate="Not Verified";
		      $s=$s.'<div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 80px; padding-bottom: 80px;">
		            <div class="container">
		                <div class="card cart-block">
		                    <div class="card-img"><img src="farm.jpg" height="200" width="200" class="card-img-top"></div>
		                    <div class="card-block">
		                        <h4 class="card-title"><font size="5">'.$row['Name'].'</font></h4>
		                        <p class="card-text" ><font size="2">'.$varificate.'</font><br><font size="3">Start Date : '.$row['EventStart'].' <br>EventEnd : '.$row['EventEnd'].'
		                        </p>
		                        <div class="card-btn"><a href="adminEventProfile.php?id='.$row['EventID'].'" class="btn btn-primary">MORE</a></div>
		                    </div>
		                </div>
		            </div>
		        </div>';
		    $i=$i-1;

		}

		while($i!=0){

		    $s=$s.'<div class="mbr-cards-col col-xs-12 col-lg-3"  padding-bottom: 80px;">
		            <div class="container">
		                <div class="card cart-block">
		                    <div class="card-img"></div>
		                    <div class="card-block">
		                        <h4 class="card-title"></h4>
		                        <h5 class="card-subtitle"><h5>
		                        <div class="card-btn"></div>
		                    </div>
		                </div>
		            </div>
		        </div>';
		        $i=$i-1;
		}
		$s=$s.'</div></section>';
		echo $s;
		mysqli_close ($link);

	}


	function getEvent() {
	 
	  require 'connect.inc.php';
	  $Interests = mysqli_query($link,"SELECT Interest FROM `Interests` where id = '".$_SESSION['id']."'");
	  $interest = array();
	  
	  while($row = mysqli_fetch_array($Interests)){
	    $interest[] = $row['Interest'];
	  }

	  $result = mysqli_query($link,"SELECT * FROM `Event` where EventVerified = '1' ");
	  $i=4;
	  $s='<section class="mbr-cards mbr-section mbr-section-nopadding" id="features7-20" data-rv-view="211" style="background-color: rgb(239, 239, 239);">';
	  $s=$s.'<div class="mbr-cards-row row">';
	  
	  while($row = mysqli_fetch_array($result)){
	    
	    $eventTags=explode(",",$row['Genre']);
	    
	    if(isset($_POST['Interest']) and count(array_intersect($interest,$eventTags))==0){
	      continue;
	    }
	    
	    if(isset($_POST['City']) and !empty($_POST['City']) and strcmp($_POST['City'],$row['City'])!=0){
	        continue;
	    }
	    
	    if(isset($_POST['State']) and !empty($_POST['State']) and strcmp($_POST['State'],$row['State'])!=0){
	        continue;
	    }
	    
	    if(isset($_POST['Country']) and !empty($_POST['Country']) and strcmp($_POST['Country'],$row['Country'])!=0){
	        continue;
	    }
	    
	    if($i==0){
	      $s=$s.'</div>';
	      $i=4;
	      $s=$s.'<div class="mbr-cards-row row">';
	    }
	      $s=$s.'<div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 80px; padding-bottom: 80px;">
	            <div class="container">
	                <div class="card cart-block">
	                    <div class="card-img"><img src="farm.jpg" height="200" width="200" class="card-img-top"></div>
	                    <div class="card-block">
	                        <h4 class="card-title"><font size="5">'.$row['Name'].'</font></h4>
	                        <p class="card-text" ><font size="3">Start Date : '.$row['EventStart'].' <br>EventEnd : '.$row['EventEnd'].'
	                        </p>
	                        <div class="card-btn"><a href="EventProfile.php?id='.$row['EventID'].'" class="btn btn-primary">MORE</a></div>
	                    </div>
	                </div>
	            </div>
	        </div>';
	    $i=$i-1;
	}
	  
	while($i!=0){
	    $s=$s.'<div class="mbr-cards-col col-xs-12 col-lg-3"  padding-bottom: 80px;">
	            <div class="container">
	                <div class="card cart-block">
	                    <div class="card-img"></div>
	                    <div class="card-block">
	                        <h4 class="card-title"></h4>
	                        <h5 class="card-subtitle"><h5>
	                        <div class="card-btn"></div>
	                    </div>
	                </div>
	            </div>
	        </div>';
	    $i=$i-1;
	}
	  $s=$s.'</div></section>';
	  echo $s;
	  mysqli_close ($link);

	}
	
	function getEventDetails(){
	
	  $result = mysqli_query($link,"SELECT * FROM `Event` where EventID = ".$_REQUEST['id']."");
	  $row = mysqli_fetch_array($result);
	  
	  $Org = mysqli_query($link,"SELECT * FROM `user` where id = ".$row['OrganiserID']."");
	  $res = mysqli_fetch_array($Org);  
	  
	  echo '  
	    <div class="container">
	        <div class="row">
	            <div class="col-xs-12 lead"><blockquote>

	              <p>
	                <center><b>Event Adderess</b></center><br>
	                <ul>
	                  <li>
	                    <b>'.$row['Name'].'</b>
	            &nbsp;('.$row['EventStart'].' to '.$row['EventEnd'].')<br>
	            <b>Genre:</b> '.$row['Genre'].'<br>
	            <b>Presenter:</b> '.$row['Presenter'].'<br>
	            <b>Ticket:</b> '.$row['Ticket'].'<br>
	            
	        </p>

	        <p>
	            
	            <b>Contact:</b> '.$res['contact'].'<br>
	            
	            <b>Address:</b><br>
	            '.$row['Address'].'<br>
	            '.$row['City'].', '.$row['State'].', '.$row['Country'].' , '.$row['Pincode'].'

	            

	        </p></li><br></ul>
	        </p></blockquote>
	        </div>
	      </div>
	    </div>
	    ';
	 
	}  


	function getEventDescription(){

	  require 'connect.inc.php';
	  $result = mysqli_query($link,"SELECT * FROM `Event` where EventID = ".$_SESSION['id']."");
	  $row = mysqli_fetch_array($result);

	  echo '
	    <dl>
	    <dt>Description:</dt>
	    <dd>
	 
	    <section class="Description">
	    '.$row['Description'].'
	    </section>
	 
	    </dd>
	    </dl>';
	}



	function EventProfileOrganiserfooter(){
	  require 'connect.inc.php';
	    $result = mysqli_query($link,"SELECT * FROM `user` where id = ".$_SESSION['id']."");
	    $row = mysqli_fetch_array($result);

	    echo '
	    <div class="container">
	        <div class="row">
	            <div class="mbr-footer-content col-xs-12 col-md-3">
	                <p><strong>'.$row['name'].'</strong><br>
	                '.$row['address'].'<br>
	                '.$row['City'].'<br>
	                '.$row['State'].'<br>
	                '.$row['Country'].'<br>
	                '.$row['postal_code'].'<br><br>
	<strong>Contacts</strong><br>
	Phone: '.$row['contact'].'<br><br>
	</p>
	            </div>
	              <div class="mbr-footer-content col-xs-12 col-md-3"><p class="mbr-contacts__text"><strong>Links</strong></p><ul><li><a class="text-white" href=href='.$row['email'].'>Organiser Email</a></li></ul></div>
	            
	            </div>
	        </div>
	    </div>';
	}

	function getRegisteredEvent(){
	  require 'connect.inc.php';
	  $result = mysqli_query($link,"SELECT EventID FROM `register` WHERE UserID = ".$_SESSION['id']."");
	  $i=4;
	  $s='<section class="mbr-cards mbr-section mbr-section-nopadding" id="features7-20" data-rv-view="211" style="background-color: rgb(239, 239, 239);">';
	  $s=$s.'<div class="mbr-cards-row row">';
	  while($row = mysqli_fetch_array($result)){
	      $result1 = mysqli_query($link,"SELECT * FROM `Event` where Eventid = '".$row['EventID']."'");
	      $row1 = mysqli_fetch_array($result1);
	 
	      if($i==0){
	        $s=$s.'</div>';
	        $i=4;
	        $s=$s.'<div class="mbr-cards-row row">';
	      }
	        $s=$s.'<div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 80px; padding-bottom: 80px;">
	              <div class="container">
	                  <div class="card cart-block">
	                      <div class="card-img"><img src="farm.jpg" height="200" width="200" class="card-img-top"></div>
	                      <div class="card-block">
	                          <h4 class="card-title"><font size="5">'.$row1['Name'].'</font></h4>
	                          <p class="card-text" ><font size="3">Start Date : '.$row1['EventStart'].' <br>EventEnd : '.$row1['EventEnd'].'
	                          </p>
	                          <div class="card-btn"><a href="EventProfile.php?id='.$row1['EventID'].'" class="btn btn-primary">MORE</a></div>
	                      </div>
	                  </div>
	              </div>
	          </div>';
	      $i=$i-1;
	    }
	    while($i!=0){
	      $s=$s.'<div class="mbr-cards-col col-xs-12 col-lg-3"  padding-bottom: 80px;">
	              <div class="container">
	                  <div class="card cart-block">
	                      <div class="card-img"></div>
	                      <div class="card-block">
	                          <h4 class="card-title"></h4>
	                          <h5 class="card-subtitle"><h5>
	                          <div class="card-btn"></div>
	                      </div>
	                  </div>
	              </div>
	          </div>';
	          $i=$i-1;
	    }
	    $s=$s.'</div></section>';
	    echo $s;
	  
	  mysqli_close ($link);

	}

	function getOrganiserEvent() {
	  require 'connect.inc.php';
	  $result = mysqli_query($link,"SELECT * FROM `Event` where OrganiserID = ".$_SESSION['id']."");
	  $i=4;
	  $s='<section class="mbr-cards mbr-section mbr-section-nopadding" id="features7-20" data-rv-view="211" style="background-color: rgb(239, 239, 239);">';
	  $s=$s.'<div class="mbr-cards-row row">';
	  while($row = mysqli_fetch_array($result)){
	    //$result1 = mysqli_query($link,"SELECT * FROM `csa` where CSA_ID='".$row['CSAID']."'");
	    //$row1 = mysqli_fetch_array($result1);
	    if($i==0){
	      $s=$s.'</div>';
	      $i=4;
	      $s=$s.'<div class="mbr-cards-row row">';
	    }
	      $s=$s.'<div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 80px; padding-bottom: 80px;">
	            <div class="container">
	                <div class="card cart-block">
	                    <div class="card-img"><img src="farm.jpg" height="200" width="200" class="card-img-top"></div>
	                    <div class="card-block">
	                        <h4 class="card-title"><font size="5">'.$row['Name'].'</font></h4>
	                        <p class="card-text" ><font size="3">Start Date : '.$row['EventStart'].' <br>EventEnd : '.$row['EventEnd'].'
	                        </p>
	                        <div class="card-btn"><a href="EventProfile.php?id='.$row['EventID'].'" class="btn btn-primary">MORE</a></div>
	                    </div>
	                </div>
	            </div>
	        </div>';
	    $i=$i-1;
	  }
	  while($i!=0){
	    $s=$s.'<div class="mbr-cards-col col-xs-12 col-lg-3"  padding-bottom: 80px;">
	            <div class="container">
	                <div class="card cart-block">
	                    <div class="card-img"></div>
	                    <div class="card-block">
	                        <h4 class="card-title"></h4>
	                        <h5 class="card-subtitle"><h5>
	                        <div class="card-btn"></div>
	                    </div>
	                </div>
	            </div>
	        </div>';
	        $i=$i-1;
	  }
	  $s=$s.'</div></section>';
	  echo $s;
	  mysqli_close ($link);
	  
	  }


	function AdminEventProfileOrganiserfooter(){
	  require 'connect.inc.php';
	    $result = mysqli_query($link,"SELECT * FROM `Event` where EventID = ".$_REQUEST['id']."");
	    $row = mysqli_fetch_array($result);
	    

	    $Org = mysqli_query($link,"SELECT * FROM `user` where id = ".$row['OrganiserID']."");
	    $res = mysqli_fetch_array($Org);

	    echo '
	    <div class="container">
	        <div class="row">
	            <div class="mbr-footer-content col-xs-12 col-md-3">
	                <p><strong>'.$res['name'].'</strong><br>
	                '.$res['address'].'<br>
	                '.$res['City'].'<br>
	                '.$res['State'].'<br>
	                '.$res['Country'].'<br>
	                '.$res['postal_code'].'<br><br>
		<strong>Contacts</strong><br>
		Phone: '.$res['contact'].'<br><br>
		</p>
        </div>
          	<div class="mbr-footer-content col-xs-12 col-md-3"><p class="mbr-contacts__text"><strong>Links</strong></p><ul><li><a class="text-white" href=href='.$res['email'].'>Organiser Email</a></li></ul></div>
        
       		</div>
	  		</div>
	   	</div>';
	}
}

?>