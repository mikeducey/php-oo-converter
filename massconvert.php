<?php 	include("top.php"); 
		$this_page = "massConvert";
		include("functions.php");
		include("controller.php");
?>

<h2 class="title">Results:</h2>

<div class="resultsbox">
	<div class="resultsText resultsText__number"> <?php echo $massConversion->convertMass(); ?> </div>
	<div class="resultsText"><p>You have converted <?php echo $massEntered ?> <?php echo $unit ?> to <?php echo $otherUnit ?>.</p></div>
</div>

<div class="resultsbox">
	<div class="resultsText resultsText__number"> <?php echo $massConversion->convertMassSecondConversion(); ?> </div>
	<div class="resultsText"><p>You have converted <?php echo $massEntered ?> <?php echo $unit ?> to <?php echo $otherUnit2 ?>.</p></div>
</div>

<?php include("bottom.php"); ?>