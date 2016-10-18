<!DOCTYPE html>
<html>
<head>
	<title>Currency Converter</title>
</head>

<body>
<fieldset>
<legend>CURRENCY CONVERTER</legend>
<form method="GET" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'>
	<select name="cur1">
		<option selected disabled>Currency 1</option>
		<option value="INR">INR</option>
		<option value="USD">USD</option>
		<option value="GBP">GBP</option>
		<option value="EUR">EUR</option>
		<option value="AUD">AUD</option>
		<option value="CAD">CAD</option>
		<option value="SGD">SGD</option>
	</select>

	<p>Enter Amount:</p>
	<input type="number" name="val">
	<p>
	<select name="cur2">
		<option selected disabled>Currency 2</option>
		<option value="INR">INR</option>
		<option value="USD">USD</option>
		<option value="GBP">GBP</option>
		<option value="EUR">EUR</option>
		<option value="AUD">AUD</option>
		<option value="CAD">CAD</option>
		<option value="SGD">SGD</option>
	</select>
	<p>
	<input type="submit" value="CONVERT" name="convert">
		
</form>

<?php

error_reporting(0);
if(isset($_GET['convert']))
{
	$cur1 = $_GET['cur1'];
	$cur2 = $_GET['cur2'];
	$amt = $_GET['val'];
 	if($cur1!="" && $cur2!="")
	{
		$HTMLLink = "http://www.xe.com/currencyconverter/convert/?Amount=".$amt."&From=".$cur1."&To=".$cur2;
		$source = file_get_contents($HTMLLink);
		$xmlDoc = new DOMDocument();
		@$xmlDoc->loadHTML($source);
		// echo $source;
		$elements = $xmlDoc->documentElement;
		/*if (!is_null($elements)) {
			$nodes = $elements->childNodes;
		    foreach ($nodes AS $node) {
		    	echo $node->nodeValue;
			}
		}*/
		$classname = "uccResultAmount";
		$xpath = new DOMXPath($xmlDoc);
		$results = $xpath->query("//*[@class='" . $classname . "']");	
		if ($results->length > 0) 
		{
	    	echo $review = $results->item(0)->nodeValue;
		}
	}
}

?>

</body>
</html>