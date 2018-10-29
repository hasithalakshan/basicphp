<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Booleans</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
		$var1=true;
		$var2=false;
		$var3="book";
	 ?>

	 Variable 1: <?php echo $var1 ?><br>
	 Variable 2: <?php echo $var2 ?><br>

	 <?php echo "Is Variable 1 Boolean : ". is_bool($var1); ?><br>
	 <?php echo "Is Variable 2 Boolean : ". is_bool($var2); ?><br>
	 <?php echo "Is Variable 3 Boolean : ". is_bool($var3); ?><br>

	 <?php 
	 	if ($var2==false) {
	 		echo "Variable 2 is = false";
	 	}
	  ?>
</body>
</html>