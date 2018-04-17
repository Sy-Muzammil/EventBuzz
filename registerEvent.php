<?php
require 'essential.inc.php';
require 'connect.inc.php';
//require 'connect.inc.php';
$result = mysqli_query($link,"Insert INTO `register` values('".$_SESSION['id']."','".$_REQUEST['id']."')");
header('Location: EventProfile.php?id='.$_REQUEST['id'].'');

?>