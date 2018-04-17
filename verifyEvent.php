<?php
require 'essential.inc.php';

//getEventNotification("mohammeddewaswala@gmail.com","hello\ world","3");	
//require 'connect.inc.php';
?>

<?php

function verification(){
require 'connect.inc.php';
	
  	$Eresult = mysqli_query($link,"SELECT * FROM `Event` where EventID=".$_REQUEST['id']."");
  	$Erow = mysqli_fetch_array($Eresult);
  	$Uresult = mysqli_query($link,"SELECT * FROM `user`");
    
  	$eventTags=explode(",",$Erow['Genre']);
	  
	  $EventID = $Erow['EventID'];
	  #$EventAddr = $Erow['address'];
	  $EventCity = $Erow['City'];
	  $EventState = $Erow['State'];
	  $EventCountry = $Erow['Country'];
	  $EventOrganiserID = $Erow['OrganiserID'];
	  $UserEmails = array();
	  $i = 0;
	  $event="New Event in Your Vicinity of Your Interest. Event Name : ".$Erow['Name']."  Link : http://localhost/EventBuzz/EventProfile.php?id=".$_REQUEST['id']."";
	 	while($Urow=mysqli_fetch_array($Uresult)){
	 		$Interests = mysqli_query($link,"SELECT Interest FROM `Interests` where id = '".$Urow['id']."'");
  			$interest = array();
  			//echo "hi";

  			while($row = mysqli_fetch_array($Interests)){
    			$interest[] = $row['Interest'];
  			}
  			//$interest = array();
	 		if(($Urow['City'] == $EventCity and $Urow['State'] == $EventState) and $Urow['id'] != $EventOrganiserID and count(array_intersect($interest,$eventTags))>0){
	 			$Interests = mysqli_query($link,"INSERT INTO `Notification`(`userID`, `Event`) VALUES ('".$Urow['id']."','".$event."')");
	 			//$UserEmails[] = $Urow['email'];
	 			//echo "1hi";
	 			$i+=1;
	 		}
	  	}
	  	for($j = 0; $j < $i; $j++){
	  		//echo "hi";

	  		//getEventNotification($UserEmails[$j],$Erow['Name'],$_REQUEST['id']);	
	  	}
}
function updation(){
	//require 'functions.php';
	require 'connect.inc.php';
  	$result = mysqli_query($link,"select Name from Event where EventID=".$_REQUEST['id']."");
	$row=mysqli_fetch_array($result);
	$name=$row['Name'];
	//$result = mysqli_query($link,"Delete from Event where EventID=".$_REQUEST['id']."");
	$result = mysqli_query($link,"Select * from register where EventID='".$_REQUEST['id']."'");
	while($row=mysqli_fetch_array($result)){
		$result1 = mysqli_query($link,"Select email from user where id=".$row['userID']."");
		$row1=mysqli_fetch_array($result1);
		echo shell_exec('sh /var/www/html/EventBuzz/update.sh '.$row1['email'].' '.$name.'');
	}
}
require 'connect.inc.php';
$result = mysqli_query($link,"select EventVerified from Event where EventID=".$_REQUEST['id']."");
$row=mysqli_fetch_array($result);	
if(strcmp($row['EventVerified'],'0')==0){
	verification();
}
else{
	updation();
}

mysqli_query($link,"UPDATE `Event` SET `EventVerified` = '1' WHERE `Event`.`EventID` = ".$_REQUEST['id']."");
	  mysqli_close ($link);

//header('Location: adminDisplayEvent.php');
?>