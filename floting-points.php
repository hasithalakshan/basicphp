<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Floting Points</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
		$flote=9.32;
	 ?>
	 <?php echo $flote; ?><br>
	 <?php echo $flote+=10; ?><br>
	 <?php echo 10/3; ?><br>
	 <!-- <?php echo 10/0; ?><br> -->

	 <h1>Functions</h1>

	 Rounds : <?php echo round($flote,1); ?><br>
	 Rounds up : <?php echo ceil($flote); ?><br>
	 Rounds down: <?php echo floor($flote); ?><br>

	 <h2>How to check numbers are inegers of not?</h2>

	 <?php 
	 	$integer=20;
	 	$flote=3.45;
	  ?>
	  <?php echo "Is {$integer} is Integer?". is_int($integer) ?><br>
	  <?php echo "Is {$flote} is Integer?". is_int($flote) ?><br>
	  <br>

	  <?php echo "Is {$integer} is flote?". is_float($integer) ?><br>
	  <?php echo "Is {$flote} is flote?". is_float($flote) ?><br>

	  <br>

	  <?php echo "Is {$integer} is number?". is_numeric($integer) ?><br>
	  <?php echo "Is {$flote} is number?". is_numeric($flote) ?><br>

</body>
</html>