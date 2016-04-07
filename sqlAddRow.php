<?PHP  
  if(isset($_POST['lat'])){
	  $username = $_POST['username'];
	  $password = $_POST['password'];
	  $link = mysqli_connect('localhost:8000', $username, $password, 'eve');
	  $stmt = mysqli_stmt_init($link);
	  
	  mysqli_multi_query($link, 'SELECT NOW()');
	  $result = mysqli_use_result($link);
	  $date = mysqli_fetch_row($result)[0];
	  mysqli_stmt_close($stmt);
	  mysqli_close($link);
	  $link = mysqli_connect('localhost:8000', $username, $password, 'eve');
	  $stmt = mysqli_stmt_init($link);
	  if(!mysqli_stmt_prepare($stmt, 'INSERT INTO Points (`Latitude`, `Longitude`, `IconType`, `ExtraInfo`, `OverlayNumber`) VALUES (?, ?, ?, ?, ?)')){
		print("IT MESSED UP");
		print(mysqli_stmt_error($stmt));
	  }
	  $lat = $_POST['lat'];
	  echo($lat);
	  $long = $_POST['long'];
	  $icontype = $_POST['type'];
	  $extrainfo = $_POST['info'];
	  $overlaynumber = $_POST['overlayNumber'];
	  mysqli_stmt_bind_param($stmt, "ddssi", $lat, $long, $icontype, $extrainfo, $overlaynumber);
	  
	  if(mysqli_stmt_execute($stmt)){
		print("A row was added to the table!");
	  } else {
		print("IT FAILED!");
	  }
	  mysqli_stmt_close($stmt);
  }
  
?>