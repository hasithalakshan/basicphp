<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Arrays</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
		$array=array("Toyota","Nisan","Honda","Mazda","BMW");
	 ?>

	 <?php echo $array[0]; ?>
		
	 <h2>Before</h2>
	 <br>
	 <pre>
	 	<?php echo print_r($array); ?>
	 </pre>
	

	 <h2>After</h2>
	 <?php 
	 	$array[5]="Susuki";
	 	$array[]="Mitsubushi";
	 	$array[3]="Kia";
	  ?>
	 <br>
	 <pre>
	 	<?php echo print_r($array); ?>
	 </pre>


	 <?php 
		$array=array(12,34,28,"Toyota","Nisan",array("Black","Red","Blue") ,"Honda","Mazda","BMW");
	 ?>
		
	 <h2>Before</h2>
	 <br>
	 <pre>
	 	<?php echo print_r($array); ?>
	 </pre>

	 <h2>After</h2>
	 <?php 
	 	$array[5][1]="Green";
	  ?>
	 <br>
	 <pre>
	 	<?php echo print_r($array); ?>
	 </pre>

	 ?>

</body>
</html>