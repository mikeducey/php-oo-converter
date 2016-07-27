<?php
	if($this_page == "distanceConvert") {
		$unit = $_GET["distanceUnit"];
		$distanceEntered = (int)$_GET["distance"];
		$distanceConversion = new Distance($distanceEntered, $unit);

		if($unit == "miles") {
			$explanation = "You have converted miles to kilometers";
		}
		else {
			$explanation = "You have converted kilometers to miles";
		}
		$try = "Try this";
		$try2 = "maybe here?":
	}

?>