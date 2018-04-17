<?php
$mysql_host ='localhost';
$mysql_user ='root';
$mysql_pass='12345678';
$mysql_db='BuzzEvent';
$link = mysqli_connect($mysql_host,$mysql_user,$mysql_pass);

if (!$link) {
    die('Could not connect: ' . mysqli_error($link));
}

$db_selected = mysqli_select_db($link, $mysql_db);

if (!$db_selected) {
    die('Cannot access' . $mysql_db . ': ' . mysqli_error($link));
}

//@ob_start();
//session_start();
//if(!@mysqli_connect($mysql_host,$mysql_user,$mysql_pass)||!@mysql_select_db($mysql_db))
//die('Couldnt Connect');
?>
