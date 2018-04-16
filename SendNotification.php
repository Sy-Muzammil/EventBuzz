<?php
require 'connect.inc.php';
require 'essential.inc.php';
?>
<?php
  include 'eventFunctions.php';
  #include 'userFunctions.php';
  #$User = new UserClass();
  $Event = new EventClass();
?>
<?php  
//require 'functions.php';
$result = mysqli_query($link," SELECT DISTINCT userID FROM `Notification`");

while($row=mysqli_fetch_array($result)){
	$result2 = mysqli_query($link," SELECT email FROM `user` where `id`=".$row['userID']."");
	$row2=mysqli_fetch_array($result2);
	$email=$row2['email'];
	$result1 = mysqli_query($link,"SELECT Event FROM `Notification` where userID='".$row['userID']."'");
	$eventNot="";
	while($row1=mysqli_fetch_array($result1)){
		$eventNot=$eventNot."".$row1['Event'].""."\n";
		//echo 'hi';
	}
	//echo $eventNot;

	$eventNot=str_replace(" ","\ ",$eventNot);
	//echo $eventNot;
	$Event->getEventNotification($email,$eventNot);
}
?>