<?php 

	function display_greeting(){

		$hour=date('h');
// echo "$hour";
		if ($hour>=0 && $hour<12) {
			echo "<b> Good morning! </b>";
		}else if($hour>=12 && $hour<17){
			echo "Good Afternoon";
		}else{
			echo "Good Ninght";
		}
	}


 ?>