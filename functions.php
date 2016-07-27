<?php


class Distance {

	var $distance;
	var $distanceUnit;

	function __construct($distance, $distanceUnit) {
		$this->distance_param = $distance;		
		$this->unit_param = $distanceUnit;
	}

	function __convertDistance() {
		if($this->unit_param == "miles"){
			return ($this->distance_param) * .60934;
		}
		elseif($this->unit_param == "kilometers"){
			return ($this->distance_param) * 1.60934;
		}
	}

}

?>