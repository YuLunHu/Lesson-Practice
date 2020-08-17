<?php

function test($i) {
	return $i + 1;
}

function test100($i) {
	return $i + 100;
}

// $x = 1;
// echo test($x);

$x = 2;
$p = "test";
echo $p($x);

?>