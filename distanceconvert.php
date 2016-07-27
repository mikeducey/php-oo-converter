<?php 	include("top.php"); 
		$this_page = "distanceConvert";
		include("functions.php");
		include("controller.php");
?>

<h2 class="title">Results</h2>
<div class="resultsbox">
<div class="resultsText resultsText__number"> <?php echo $distanceConversion->convertDistance(); ?> </div>
<div class="resultsText"> <?php echo $explanation; ?></div>
</div>

<?php include("bottom.php"); ?>