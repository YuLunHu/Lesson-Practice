<?php

if (!isset($_GET["id"])) {
    die("id not found.");
}

$id = $_GET["id"];

if (! is_numeric($id)) {
    die ("id not a number");
}

// echo $id;

$sql = <<< multi
delete from employee WHERE employeeId = $id
multi;

// echo $sql;
require_once("command.php");
mysqli_query($link, $sql);
header("location: index.php");
?>