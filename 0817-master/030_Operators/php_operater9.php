<?php

$x = 100;
$y = &$x;

$y = 200;

// $x = 40;
echo "x = $x </br>";

unset($x);
// echo "x = $x </br>";
$y = 300;
echo "y = $y </br>";

?>