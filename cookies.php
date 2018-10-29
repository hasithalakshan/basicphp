
<?php 
	// setcookie(name , value , expiration);
	

	// print_r($_COOKIE); 
	// if (isset($_COOKIE['language'])) {
	// 	$language=$_COOKIE['language'];
	// 	echo "Selected Language is : {$language}";
	// }else{
	// 	setcookie('language' , 'sinhala' , time()+60*60*24*7);
	// }


	// remove a Cookies
	
	setcookie('language' , NULL , -time()+60*60*24*7);
	
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cookies</title>
	<link rel="stylesheet" href="">
</head>
<body>
	
</body>
</html>