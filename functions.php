<?php

function geteventedit(){
    require 'connect.inc.php';
  $result = mysqli_query($link,"SELECT * FROM `Event` where `EventID`=1");
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
      </div>';
}


function getUserEditProfile(){
  require 'connect.inc.php';
      $result = mysqli_query($link,"SELECT * FROM `user` where `id`=".$_SESSION['id']."");
      $row=mysqli_fetch_array($result);
      echo'<div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="username"  name="EmailP"class="form-control" value="'.$row['email'].'">
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
       
    </div>
   
  </div>
</div>
</div>
  </div>

  </div>
  </div>

</div>';


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
      echo 'href="registerEvent.php?id='.$_REQUEST['id'].'">register</a>';
  }
  else echo 'href="unregister.php?id='.$_REQUEST['id'].'">unregister</a>';
  mysqli_close ($link);

}




function getEvent() {
  require 'connect.inc.php';
  $result = mysqli_query($link,"SELECT * FROM `Event`");
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
                        <div class="card-btn"><a href="16_consumer_CSAProfile.php?id='.$row['EventID'].'" class="btn btn-primary">MORE</a></div>
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




function getUserInfo(){
    
    require 'connect.inc.php';
    $result = mysqli_query($link,"SELECT * FROM `user` where id = ".$_SESSION['id']."");
    $row = mysqli_fetch_array($result);
    echo '
    <div class="header_1">
    <img src="farm.jpg" width="250" height="250"  />
    </div>
    <!-- End Profile Image Section -->
     
    <!-- Begin Profile Information Section -->
    <div class="header_2">
     
    <h1><span>'.$row['name'].'</span></h1>
    <h3>Profession</h3>
     
    <ul class="info_1">
    <li class="address">'.$row['address'].'</li>
    </ul> 
    <ul class="info_2">
    <li class="phone">'.$row['contact'].'</li>
    <li class="email"><a href="mailto:your-email@gmail.com">'.$row['email'].'</a></li>
    <li class="site_url"><a href="http://www.webcodepro.net/about.php" title="www.your-website.com">www.your-website.com</a></li>
    <li class="twitter"><a href="http://twitter.com/twitter-screen-name" title="Follow Me on Twitter">@twitter-screen-name</a></li>
    </ul>
     
    </div>
    ';
}

function getUserInterests(){

  require 'connect.inc.php';
  $result = mysqli_query($link,"SELECT Interest FROM `Interests` where id = 5");
   $row = mysqli_fetch_array($result);
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

function getEventDetails(){
  //echo '<script>alert("hello")</script>';
  require 'connect.inc.php';
  $result = mysqli_query($link,"SELECT * FROM `Event` where EventID = 1");
  $row = mysqli_fetch_array($result);
  
  $Org = mysqli_query($link,"SELECT * FROM `user` where id = ".$row['OrganiserID']."");
  $res = mysqli_fetch_array($Org);
  
  echo '  
    <div class="header_1">
    <img src="profile.jpg" width="250" height="250" alt="Your Name" />
    </div>
    <!-- End Profile Image Section -->
     
    <!-- Begin Profile Information Section -->
    <div class="header_2">
     
    <h1><span>'.$row['Name'].'</span></h1>
    <h3>Profession</h3>
     
    <ul class="info_1">
    <li class="address">'.$row['Address'].' ,'.$row['City'].' ,'.$row['State'].' ,'.$row['Country'].' </li>
    </ul> 
    <ul class="info_2">
    <li class="Event">'.$res['name'].'</li>
    <li class="Event">'.$row['EventStart'].'</li>
    <li class="Event">'.$row['EventEnd'].'</li>
    <li class="Event">'.$row['Ticket'].'</li>
    <li class="site_url"><a href="http://www.webcodepro.net/about.php" title="www.your-website.com">'.$res[email].'</a></li>
    <li class="site_url"><a href="http://www.webcodepro.net/about.php" title="www.your-website.com">www.your-website.com</a></li>
    <li class="twitter"><a href="http://twitter.com/twitter-screen-name" title="Follow Me on Twitter">@twitter-screen-name</a></li>
    </ul>
     
    </div>
    ';
 
}  

function getEventDescription(){

  require 'connect.inc.php';
  $result = mysqli_query($link,"SELECT * FROM `Event` where EventID = ".$_SESSION[id]."");
  $row = mysqli_fetch_array($result);
  /*echo '<script>alert("helkklo")</script>';*/
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






?>