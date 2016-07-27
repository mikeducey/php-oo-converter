<?php
	if($this_page == "distanceConvert") {
		$unit = $_GET["distanceUnit"];
		$distanceEntered = intval($_GET["distance"]);
		$distanceConversion = new Distance($distanceEntered, $unit);

		if($unit == "miles") {
			$explanation = "You have converted miles to kilometers";
		}
		else {
			$explanation = "You have converted kilometers to miles";
		}

	}

?>