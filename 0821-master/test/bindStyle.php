<?php
$scoreList = Array(15, 100, 59, 70, 65, 46);

$viewModel = [];
foreach ($scoreList as $score) {
    $student = (object) ["score" => $score, "style" => "pass"];
    if ($score < 60) {
        $student -> style= "fail";
    }
    $viewModel[] = $student;
}
var_dump($viewModel);

// $Name = (object) ["firstName" => "Barry"];
// echo $Name -> firstName;
// exit();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    .fail {
        color: red;
    }
    </style>
</head>
<body>
    <ul>
    <?php foreach($viewModel as $student) { ?>
        <li class = "<?= $student->style ?>"><?= $student->score ?></li>
    <?php } ?>
    </ul>
</body>
</html>