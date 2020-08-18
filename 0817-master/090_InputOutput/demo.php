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
<?php 
    $scoreList=array(100, 98, 54, 67, 45);
?>

    <ul>
        <?php foreach($scoreList as $score) { ?>
            <?php if ($score < 60) {?>
                <li class="fail"> <?= $score ?> </li>
            <?php } else { ?>
                <li> <?= $score ?> </li>
                <?php } ?>
            
        <?php } ?>
    </ul>

    <hr>

    <ul>
        <?php foreach($scoreList as $score) { ?>
                <li class= "<?= ($score < 60) ? "fail": "" ?>"> <?= $score ?> </li>
        <?php } ?>
    </ul>
    
</body>
</html>