<?php
$sData = "908872526535442041985072568716";
$result = "01234567890";
$iLen = strlen($sData);

echo "$iLen <br>";

for ($iPos = 0; $iPos < $iLen; $iPos++)
{
	$ch = substr($sData, $iPos, 1);
	echo "$ch-";
	$result = $ch . str_replace($ch, "", $result);
	echo "$result <br>";

}
echo "<br>$result <br>";

echo substr($result, 0, 5) . "-" . substr($result, 5, 5);
?>