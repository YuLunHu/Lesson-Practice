<?php
if (isset($_POST["cancelButton"])) {
    header("location: index.php");
    exit();
  }
  if (!isset($_GET["id"])) {
      die("id not found.");
  }
  $id = $_GET["id"];
  if (! is_numeric ( $id ))
      die ( "id not a number." );

require("command.php");

if (isset($_POST["submit"])) {
    $firstName = $_POST["text"];
    $lastName = $_POST["text2"];
    $cityId = $_POST["select"];

    $sql = <<<multi
    update employee set 
       firstName = '$firstName', 
       lastName='$lastName', cityId = $cityId
    where employeeId = $id
    multi;

    // echo $sql;

    mysqli_query($link, $sql);
    header("location: index.php");
    exit();
}
else {
    $sql = <<< multi
    select * from employee where employeeId = $id
    multi;

    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
}


?>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container">
<form method="POST">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">First Name</label> 
    <div class="col-8">
      <input id="text" name="text" type="text" value="<?= $row["firstName"] ?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Last Name</label> 
    <div class="col-8">
      <input id="text2" name="text2" type="text" value="<?= $row["lastName"] ?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">City</label> 
    <div class="col-8">
      <select id="select" name="select" class="custom-select">
        <option value="2" <?=  ($row["cityId"] == 2) ? "selected" :  "" ?>>Taipei</option>
        <option value="4" <?=  ($row["cityId"] == 4) ? "selected" :  "" ?>>Taichung</option>
        <option value="6" <?=  ($row["cityId"] == 6) ? "selected" :  "" ?>>Tainan</option>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary" value="OK">Submit</button>
      <button name="cancelButton" value="Cancel" type="submit" class="btn btn-primary">Cancel</button>
    </div>
  </div>
</form>
</div>