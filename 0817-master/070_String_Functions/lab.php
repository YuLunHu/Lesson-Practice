<?php 

$x = "0123456789";
$pos = strpos($x, "23");

if ($pos !== false) {
    echo "Found at index $pos";
}
else {
    echo "Not found";
}

?>