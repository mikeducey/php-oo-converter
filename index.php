<?php include("top.php"); ?>

<h2 class="title">Conversion Calculators<h2>
<div class="conversionBoxContainer">
<div class="converterBox">
<h1 class="headings">Distance Converter</h1>
	<form method="get" action="/distanceconvert.php" >
		<div><input type="text" name="distance" placeholder="Distance..."></div>

		<div>
		  <label>
		   <input type="radio" name="distanceUnit" value="miles">
		    Miles
		  </label>
		</div>

		<div>
		  <label>
		    <input type="radio" name="distanceUnit" value="kilometers">
		    Kilometers
		  </label>
		</div>

		<input type="submit">
	</form>
	</div>

	<div class="converterBox">
	<h1 class="headings">Temperature Converter</h1>
	<form method="get" action="/temperatureconvert.php" >
		<div><input type="text" name="temperature" placeholder="Temperature..."></div>

		<div>
		  <label>
		   <input type="radio" name="tempUnit" value="fahrenheit">
		    Fahrenheit
		  </label>
		</div>

		<div>
		  <label>
		    <input type="radio" name="tempUnit" value="celsius">
		    Celsius
		  </label>
		</div>

		<input type="submit">
	</form>
	</div>

	<div class="converterBox">
	<h1 class="headings">Mass/Weight Converter</h1>
	<form method="get" action="/massconvert.php" >
		<div><input type="text" name="mass" placeholder="Weight or Mass..."></div>

		<div>
		  <label>
		   <input type="radio" name="massUnit" value="pounds">
		    Pounds
		  </label>
		</div>

		<div>
		  <label>
		    <input type="radio" name="massUnit" value="kilograms">
		    Kilograms
		  </label>
		</div>

		<div>
		  <label>
		    <input type="radio" name="massUnit" value="stones">
		    Stones
		  </label>
		</div>

		<input type="submit">
	</form>
</div>
</div>

<?php include("bottom.php"); ?>