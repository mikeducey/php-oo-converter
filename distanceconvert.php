<?php 	include("top.php"); 
		$this_page = "distanceConvert";
		include("functions.php");
		include("controller.php");
?>

<h2 class="title">Results:</h2>
<div class="resultsbox">
<div class="resultsText resultsText__number"> <?php echo $distanceConversion->convertDistance(); ?> </div>
<div class="resultsText"><p>You have converted <?php echo $distanceEntered ?> <?php echo $unit ?> to <?php echo $otherUnit ?>.</p></div>
</div>

<?php include("bottom.php"); ?>