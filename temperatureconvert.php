<?php 	include("top.php"); 
		$this_page = "temperatureConvert";
		include("functions.php");
		include("controller.php");
?>

<h2 class="title">Results:</h2>

<div class="resultsbox">
	<div class="resultsText resultsText__number"> <?php echo $temperatureConversion->convertTemperature(); ?> </div>
	<div class="resultsText"><p>You have converted <?php echo $temperatureEntered ?> degrees <?php echo ucfirst($unit) ?> to <?php echo ucfirst($otherUnit) ?>.</p></div>
</div>

<?php include("bottom.php"); ?>