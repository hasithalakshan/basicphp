<?php 
	session_start();

	$_SESSION['username'] = "hasitha";
	$_SESSION['password'] = "asd123";

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sessions</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
		 echo "username :" . $_SESSION['username'];echo "<br>";
		 echo "password :" . $_SESSION['password'];echo "<br>";
	 ?>
</body>
</html>