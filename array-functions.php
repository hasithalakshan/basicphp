<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Array Functions</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
		$mynumbers=array(12,56,34,23,34,76,11,90,54,61);
	 ?>

	 Max Number : <?php echo max($mynumbers); ?><br>
	 Min Number : <?php echo min($mynumbers); ?><br>
	 Count Numbers : <?php echo count($mynumbers); ?><br>
	 Sort Accending Order : <pre><?php sort($mynumbers); print_r($mynumbers) ?></pre><br>
	 Sort Dcending Order : <pre><?php rsort($mynumbers); print_r($mynumbers) ?></pre><br>

	 Implode : 

	 <?php 
	 	$string=implode(" | ", $mynumbers); 
	 	echo $string;
 	 ?>
	<br>

 	 Explode : 

	 <pre><?php 
	 	$new_array=explode(" | ", $string); 
	 	print_r($new_array);
 	 ?></pre>
</body>
</html>	