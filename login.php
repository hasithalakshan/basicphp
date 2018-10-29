<?php 

	if(isset($_POST['submit'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
	 
		if ($username=="hasitha" && $password=="password") {
			echo "Login Success!";
		}else{
			echo "Invalid username or password";
		}
	}
	
 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login Page With Post Request</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="login.php" method="post">
		Username : <input type="text" name="username" id="username"><br>
		Password : <input type="text" name="password" id="password"><br>
					<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>