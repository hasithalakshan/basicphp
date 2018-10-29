<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Switch Statement</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 

		$user_code='a';

		switch ($user_code) {
			case 'A':
			case 'a':
			case 'P': 
			case 'p': 
				echo "Your are an administrator <br>";
				break;
			case 'C':
				echo "Your are an user <br>";
				break;
			
			default:
				echo "You can not log <br>";
				break;
		}

	 ?>
</body>
</html>