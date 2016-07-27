<?php


class Distance {

	var $distance;
	var $distanceUnit;

	function __construct($distance, $distanceUnit) {
		$this->distance = $distance;		
		$this->unit = $distanceUnit;
	}

	function convertDistance() {
		if($this->unit == "miles"){
			return (($this->distance) * .60934);
		}
		elseif($this->unit == "kilometers"){
			return (($this->distance) * 1.60934);
		}
	}

}

class Temperature {

	var $temperature;
	var $temperatureUnit;

	function __construct($temperature, $temperatureUnit) {
		$this->temperature = $temperature;		
		$this->unit = $temperatureUnit;
	}

	function convertTemperature() {
		if($this->unit == "fahrenheit"){
			return ((($this->temperature) - 32) * 5/9);
		}
		elseif($this->unit == "celsius"){
			return ((($this->temperature) + 32) * 9/5);
		}
	}

}

class Mass {

	var $mass;
	var $massUnit;

	function __construct($mass, $massUnit) {
		$this->mass = $mass;		
		$this->unit = $massUnit;
	}

	function convertMass() {
		if($this->unit == "pounds"){
			return (($this->mass) * 0.0714286); #pounds to stones
		}
		elseif($this->unit == "kilograms"){
			return (($this->mass) * 0.157473); #kilograms to stones
		}
		elseif($this->unit == "stones"){
			return (($this->mass) * 6.35029); #stones to kilograms
		}
	}

	function convertMassSecondConversion() {
		if($this->unit == "pounds"){
			return (($this->mass) * 0.45359237); #pounds to kilograms
		}
		elseif($this->unit == "kilograms"){
			return (($this->mass) * 2.20462); #kilograms to pounds
		}
		elseif($this->unit == "stones"){
			return (($this->mass) * 14); #stones to pounds
		}
	}

}

?>