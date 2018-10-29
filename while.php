<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>While loop</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 

		$i=1;
		while ( $i<= 12) {
			echo $i . "<br>";
			$i++;
		}

		echo "I is now : $i <br><br>";

	 ?>


	 <?php 

	 $i=1;
	 while ( $i<= 12) {
	 	$value=12*$i;
	 	echo "12 * {$i} = " . $value . "<br>";
	 	$i++;
	 }

	  ?>
</body>
</html>