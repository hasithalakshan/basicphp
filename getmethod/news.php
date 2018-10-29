<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>News Page</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>News Page</h1>

		<?php 

		

			$category=$_GET['$category'];
			$news_item=$_GET['$news_item'];
		 ?>

		 <h2>Category : <?php echo $category; ?></h2>
		 <h2>news Item : <?php echo $news_item; ?></h2>

</body>
</html>