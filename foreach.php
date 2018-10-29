<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Foreach loop</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 

		$job_categories=array("Marketing","It","Finance","Engineering","HRM");

		foreach ($job_categories as $job_category) {
			echo "$job_category" . "<br>";
		}

	 ?>

	 <br>

	 <?php 

	 	$student=array("first_name"=>"Hasitha","last_name"=>"lakshan","age"=>26,"place"=>"Kosgama");


		foreach ($student as $label => $my_student) {
			echo "$label : $my_student <br>";
		}

	  ?>
</body>
</html>