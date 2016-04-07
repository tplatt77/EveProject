<?php
	if(isset($_POST['lat'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$lat = $_POST['lat'];
	echo($lat);
	$long = $_POST['long'];
	
	$link = mysqli_connect('localhost:8000', $username, $password, 'eve');
	mysqli_multi_query($link, 'SELECT * FROM points WHERE Latitude=' . $_POST['lat'].'AND Longitude ='. $_POST['long']);
    $result = mysqli_use_result($link);
    
	$row = mysqli_fetch_row($result);
	if(strpos($row[5], ".png") || strpos($row[5], ".mp4") || strpos($row[5], ".f4v")){
		unlink(substr($row[5], strrpos($row[5], "/") + 1));
	}
	
	mysqli_close($link);
	
	
	$link = mysqli_connect("localhost:8000", "level3user", "level3", "eve");
    mysqli_multi_query($link, 'DELETE FROM points WHERE  WHERE Latitude=' . $_POST['lat'].'AND Longitude ='. $_POST['long']);
	mysqli_close($link);
	
	header("LOCATION: readSQLTable.php");
	}
  
?>
