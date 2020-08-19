<?php

if (isset($_POST["submit"])) {
    $firstName = $_POST["text"];
    $lastName = $_POST["text2"];
    $cityId = $_POST["select"];

    $sql = <<< multi
    insert into employee (firstName, lastName, cityId)
    values ('$firstName', '$lastName', $cityId)
    multi;

    require_once("command.php");
    mysqli_query($link, $sql);
    header("location: index.php");
}


?>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container">
<form method="POST">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">First Name</label> 
    <div class="col-8">
      <input id="text" name="text" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Last Name</label> 
    <div class="col-8">
      <input id="text2" name="text2" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">City</label> 
    <div class="col-8">
      <select id="select" name="select" class="custom-select">
        <option value="2">Taipei</option>
        <option value="4">Taichung</option>
        <option value="6">Tainan</option>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary" value="1">Submit</button>
    </div>
  </div>
</form>
</div>