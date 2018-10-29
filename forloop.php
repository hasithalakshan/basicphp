<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>For loop</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 

	 for ($i=1; $i<= 12; $i++) {
	 	echo "12 * {$i} = " . 12*$i . "<br>";
	 }

	 ?>

	 <?php 
	 
	 for ($i=1; $i<= 12; $i++) {
	 	echo "Number $i <br>";
	 	for ($j=1; $j < 12; $j++) { 
	 		echo "{$i} * {$j} = " . $i*$j . "<br>";
	 	}
	 	echo "<br>";
	 }

	 ?>
</body>
</html>