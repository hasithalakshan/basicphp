<?php 

	// print_r($_POST)
	$username=$_POST['username'];
	$password=$_POST['password'];
 
	if ($username=="hasitha" && $password=="password") {
		echo "Login Success!";
	}else{
		echo "Invalid username or password";
	}

 ?>
