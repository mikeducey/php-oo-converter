<?php


class Distance {

	var $distance;
	var $distanceUnit;

	function __construct($distance, $distanceUnit) {
		$this->distance = $distance;		
		$this->unit = $distanceUnit;
	}

	function __convertDistance() {
		if($this->unit == "miles"){
			return (($this->distance) * .60934);
		}
		elseif($this->unit == "kilometers"){
			return (($this->distance) * 1.60934);
		}
	}

}

?>