<html>
<body>
<?php

$cur1=$_POST["currency1"];
$cur2=$_POST["currency2"];
$valu=$_POST["math1"];
$orig=$valu;

if(100+$cur1==$cur2)
{
	echo $valu;
}

else

{

switch($cur1)
{
	case 1:
	$valu=$valu * 0.015;
	//echo "in usd is ".$valu;
	break;

	case 2:
	$valu=$valu * 1;
	//echo "in usd is ".$valu;
	break;

	case 3:
	$valu=$valu * 0.0084;
	//echo "in usd is ".$valu;
	break;

	case 4:
	$valu=$valu * 1.08;
	//echo "in usd is ".$valu;
	break;


	case 5:
	$valu=$valu * 1.43;
	//echo "in usd is ".$valu;
	break;
}


switch($cur2)
{
	case 101:
	$valu=$valu * 67.58;
	echo $orig." in INR is ".$valu;
	break;

	case 102:
	$valu=$valu * 1;
	echo $orig." in USD is ".$valu;
	break;

	case 103:
	$valu=$valu * 118.78;
	echo $orig." in YEN is ".$valu;
	break;

	case 104:
	$valu=$valu * 0.93;
	echo $orig." in EUR is ".$valu;
	break;


	case 105:
	$valu=$valu * 0.70;
	echo $orig." in GBP is ".$valu;
	break;
}}

?>

</body>
</html>
