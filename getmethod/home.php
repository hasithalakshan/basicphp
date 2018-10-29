<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hoem Page</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Home Page</h1>

	<?php 
		$news_item=32;
		$category=urlencode("sports & hobbies");
		$url="news.php?news_item=$news_item)&category=$category";
	 ?>

	<a href="<?php echo($url) ?>">Read News Item 1</a>
</body>
</html>