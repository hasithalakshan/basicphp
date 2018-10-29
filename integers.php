<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Integers</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
		$var1=30;
		$var2=40;
	 ?>

	 basic Calculation : (((20 + 50 + $var1))/20 - 50) = <?php echo (((20 + 50 + $var1))/20 - 50); ?>

	 <h2>Some useful integer functions</h2>

	 Squre root : <?php echo sqrt(100); ?><br>
	 Exponential : <?php echo pow(10, 6); ?><br>
	 Absolute value : <?php echo abs(19-30); ?><br>
	 Modilar : <?php echo fmod(10, 3); ?><br>
	 random : <?php echo rand(); ?><br>
	 random : <?php echo rand(10,15); ?><br>

	 <h2>Increment / Decrement</h2>

	 Addtion : <?php $var1+=20; echo $var1 ?><br>
	 Subtraction : <?php $var1-=20; echo $var1 ?><br>
	 Multiplication : <?php $var1*=20; echo $var1 ?><br>
	 Divition : <?php $var1/=20; echo $var1 ?><br>
</body>
</html>