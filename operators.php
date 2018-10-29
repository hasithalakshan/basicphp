<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Operators</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 

		$subj1=34;
		$subj2=67;

		echo "Subject1 :  . {$subj1} <br>";
		echo "Subject2 :  . {$subj2} <br><br>";

		if (($subj1>=50) || ($subj2>=50)) {
			echo "You are qualified";
		}else {
			echo "Please try again";
		}

	 ?>
	 <br>
	 <h2>not opearator(!)</h2>

	 <?php 

	 	// $user_name="Hasitha";

	 	if (!isset($user_name)) {
	 		echo "Plese enter a username";
	 	}

	  ?>
</body>
</html>