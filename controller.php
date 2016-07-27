<?php
	if($this_page == "distanceConvert") {
		$unit = $_GET["distanceUnit"];
		$distanceEntered = intval($_GET["distance"]);
		$distanceConversion = new Distance($distanceEntered, $unit);

		if($unit == "miles") {
			$otherUnit = "kilometers";
		}
		else {
			$otherUnit = "miles";
		}

	}

	if($this_page == "temperatureConvert") {
		$unit = $_GET["tempUnit"];
		$temperatureEntered = intval($_GET["temperature"]);
		$temperatureConversion = new Temperature($temperatureEntered, $unit);

		if($unit == "fahrenheit") {
			$otherUnit = "celsius";
		}
		else {
			$otherUnit = "fahrenheit";
		}

	}


	if($this_page == "massConvert") {
		$unit = $_GET["massUnit"];
		$massEntered = intval($_GET["mass"]);
		$massConversion = new Mass($massEntered, $unit);
		$massConversionSecondConversion = new Mass($massEntered, $unit);

		if($unit == "pounds") {
			$otherUnit = "stones";
			$otherUnit2 = "kilograms";
		}
		elseif($unit == "kilograms") {
			$otherUnit = "stones";
			$otherUnit2 = "pounds";
		}
		else {
			$otherUnit = "kilograms";
			$otherUnit2 = "pounds";
		}

	}



?>