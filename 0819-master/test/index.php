<?php
require_once("command.php");

$mysqlStatements= <<< multi
select employeeId, firstName, lastName, e.cityId, cityName
    from city c join employee e on e.cityId = c.cityId;
multi;

$result = mysqli_query($link, $mysqlStatements);
// var_dump($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head> 

<body>
<div class="container">
  <h2>Employee List <a href="page2.php" class="btn-outline-success btn float-right">New</a> </h2>
  
  <table class="table table-dark table-striped">

    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>City</th>
      </tr>
    </thead>

    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tbody>
        <tr>
            <td><?= $row["firstName"] ?></td>
            <td><?= $row["lastName"] ?></td>
            <td><?= $row["cityName"] ?></td>
            <td>
                <span>
                    <a href="Edit.php?id=<?= $row["employeeId"] ?>" class="btn-outline-success btn-sm">Edit</a>
                    <a href="Delete.php?id=<?= $row["employeeId"] ?>" class="btn-outline-danger btn-sm">Delete</a>
                </span>
            </td>
        </tr>
        </tbody>
    <?php } ?>

  </table>
</div>

</body>
</html>