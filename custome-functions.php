<!DOCTYPE html>
<html>
<head>
	<title>Custome Functions</title>
</head>
<body>
	<?php
		function get_month_name($monthVal=0,$yearVal=2018){
			switch ($monthVal){
				case '1': $monthName="Duruthu"; break;
				case '2': $monthName="Nawam"; break;
				case '3': $monthName="Madin"; break;
				case '4': $monthName="Bak"; break;
				case '5': $monthName="Wesak"; break;
				case '6': $monthName="Poson"; break;
				case '7': $monthName="Asala"; break;
				case '8': $monthName="Nikini"; break;
				case '9': $monthName="Binara"; break;
				case '10': $monthName="Wap"; break;
				case '11': $monthName="Il"; break;
				case '12': $monthName="Uduwap"; break;
				default: $monthName="Does not have a month"; break;
			}

			return  $monthName . " " . $yearVal;
		}

		echo " : ". get_month_name();

		echo "<br>";

		echo " : ". get_month_name(6,2034);
		echo "<br><br>";

		$domainName="basicknowledgr.lk";
		echo "<b>$domainName</b> <br>";
		myFunction();

		echo "$domainName";
		
		function myFunction(){
			global $domainName;
			echo "My domain is : {$domainName} <br>";

			$domainName="hasithauom.com";
		}
	?>
</body>
</html>