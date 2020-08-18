<?php
$bloodType[] = 'A';
$bloodType[] = 'B';
$bloodType[] = 'AB';
$bloodType[] = 'O';
// var_dump($bloodType);
print_r($bloodType);

for ($i = 0; $i <= 3; $i++) {
	echo $bloodType[$i] . "<br />";
}
?>