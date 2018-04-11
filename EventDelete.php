<?php
require 'essential.inc.php';
require 'connect.inc.php';
//require 'connect.inc.php';
$result = mysqli_query($link,"select Name from Event where EventID=".$_REQUEST['id']."");
$row=mysqli_fetch_array($result);
$name=$row['Name'];
$result = mysqli_query($link,"Delete from Event where EventID=".$_REQUEST['id']."");
$result = mysqli_query($link,"Select * from register where EventID='".$_REQUEST['id']."'");
mysqli_query($link,"Delete from register where EventID='".$_REQUEST['id']."'");
while($row=mysqli_fetch_array($result)){
	$result1 = mysqli_query($link,"Select email from user where id=".$row['userID']."");
	$row1=mysqli_fetch_array($result1);
	echo shell_exec('sh /var/www/html/EventBuzz/UserDelete.sh '.$row1['email'].' '.$name.'');
}
header('Location: OrganiserEventList.php');
?>