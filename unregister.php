

<?php
require 'essential.inc.php';
require 'connect.inc.php';
//require 'connect.inc.php';
$result = mysqli_query($link,"Delete from `register` where userID='".$_SESSION['id']."' and EventID='".$_REQUEST['id']."'");
header('Location: EventProfile.php?id='.$_REQUEST['id'].'');
?>