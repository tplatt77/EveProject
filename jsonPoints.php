<?php
	$username = $_POST['username'];
	$password = $_POST['password'];
	$link = mysqli_connect('localhost:8000', $username, $password, 'eve');
	if($link == false){
		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error().",".$username.",".$password;
		}
	} else {
		$res = mysqli_multi_query($link, 'SELECT * FROM points');
		$result = mysqli_use_result($link);
		
		$headerArray = array();
		for($i = 0; $i < mysqli_num_fields($result); $i++){
		  array_push($headerArray, mysqli_fetch_fields($result)[$i]->name);
		}
		
		$dataArray = array();
		$currentRow = array();
		while($row = mysqli_fetch_row($result)){
			for($i = 0; $i < count($row); $i++){
				$currentRow[$headerArray[$i]] = $row[$i];
			}
			array_push($dataArray, $currentRow);
		}
		$jsonObject = json_encode($dataArray);
		echo $jsonObject;
	}
?>