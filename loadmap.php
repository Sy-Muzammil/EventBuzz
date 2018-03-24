<?php
require 'connect.inc.php';
#echo 'hi';
$result = mysqli_query($link,"SELECT * FROM `user`");
#$row = mysqli_fetch_array( $result);
$s='{"type": "FeatureCollection","features": [';
$f=0;

while ($row = mysqli_fetch_array($result))
{
	if($f==0)$f=1;
	else $s=$s.',';
	if($row['category']=='Consumer'){
		$s=$s.'{"geometry": {"type": "Point","coordinates": ['.$row['longi'] .','. $row['lat'].']},"type": "Feature",';
		$s=$s.'"properties": {"category": "'.$row['category'].'","address": "'.$row['address'].'  '.$row['City'].'  '.$row['State'].'  '.$row['Country'].'",';
		
		//$s=$s.'"description": "'.$row['Description'].' ",';
		$s=$s.'"name": "'.$row['name'].'",';
		$s=$s.'"color":"yellow",';
		$s=$s.'"phone": "'.$row['contact'].' "}}';
	}
	else if($row['category']=='Farmer'){
		$s=$s.'{"geometry": {"type": "Point","coordinates": ['.$row['longi'] .','. $row['lat'].']},"type": "Feature",';
		$s=$s.'"properties": {"category": "'.$row['category'].'","address": "'.$row['address'].'  '.$row['City'].'  '.$row['State'].'  '.$row['Country'].'",';
		
		$s=$s.'"description": "'.$row['Description'].' ",';
		$s=$s.'"name": "'.$row['name'].'",';
		$s=$s.'"color":"green",';
		$s=$s.'"rating": "'.$row['Ratings'].'",';
		$s=$s.'"phone": "'.$row['contact'].' "}}';
	}
	else{
		$s=$s.'{"geometry": {"type": "Point","coordinates": ['.$row['longi'] .','. $row['lat'].']},"type": "Feature",';
		$s=$s.'"properties": {"category": "'.$row['category'].'","address": "'.$row['address'].'  '.$row['City'].'  '.$row['State'].'  '.$row['Country'].'",';
		$s=$s.'"description": "'.$row['Description'].' ",';
		$s=$s.'"name": "'.$row['name'].'",';
		$s=$s.'"color":"blue",';
		$s=$s.'"member": "'.$row['Members'].'",';
		$s=$s.'"rating": "'.$row['Ratings'].'",';
		$s=$s.'"phone": "'.$row['contact'].' "}}';
	}
	
}
$s=$s.']}';
echo $s;
#echo $row['ProductName'];
mysqli_close ($link);
?>
