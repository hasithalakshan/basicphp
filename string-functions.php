<?php 

	$first= "the first wizard ";
	$second="jumped quickly";

	$sentences = $first;
	$sentences .= $second;

	echo $sentences;

 ?>
 <br>

 All simple : <?php echo strtolower($sentences); ?><br>
 All capital : <?php echo strtoupper($sentences); ?><br>
 First Letter Capitel : <?php echo ucfirst($sentences); ?><br>
 All First letters of words are capitel : <?php echo ucwords($sentences); ?><br>
 Search words : <?php echo strstr($sentences, "first"); ?><br>
 Length of the sentences : <?php echo strlen($sentences); ?><br>
 Replace words : <?php echo str_replace("first", "seven", $sentences) ?><br>