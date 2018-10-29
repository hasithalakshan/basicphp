<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>If Else Statements</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
		$score=50;
		echo "Score = ". $score;
	 ?>
<br>
	 <?php 
	 	if ($score>=70) {
	 		echo "Your Grade is A";
	 	}else if ($score>=40) {
	 		echo "Your grade is B";
	 	}else{
	 		echo "Please try again";
	 	}
	 	
	  ?>
</body>
</html>