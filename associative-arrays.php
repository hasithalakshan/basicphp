<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Associative arrys</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
		$associative = array("first_name"=>"Hasitha","last_name"=>"Lakshan","age"=>26);
	 ?>

	<pre><?php echo print_r($associative); ?></pre>

	 <?php echo $associative["first_name"]; ?><br>

	 <?php echo $associative["first_name"] . " " . $associative["last_name"]; ?><br>

	 <?php $associative["age"]=27 ?>
	 <?php echo $associative["age"]; ?>
</body>
</html>
