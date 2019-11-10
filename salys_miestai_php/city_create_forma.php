<?php require_once('db_functions.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>teltonika</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
<body>
<div class="container">
  <header>
          <h2 class="bg-light p-3 text-center">Create City</h2>
  </header>
<form action="citycreate.php" method="get">
    <div class="form-group">
      <label for="country">City</label>
      <input type="text" id="city" name="city" class="form-control" placeholder="City">
    </div>
    <div class="form-group">
      <label for="area">City Area</label>
      <input type="text" id="area" name="area" class="form-control" placeholder="City Area">
    </div>
    <div class="form-group">
      <label for="population">City Population</label>
      <input type="text" id="population" name="population" class="form-control" placeholder="City Population">
    </div>
    <div class="form-group">
      <label for="code">City Code</label>
      <input type="text" id="code" name="code" class="form-control" placeholder="City Code">
    </div>
    <div class="form-group">
      <label for="code">Country ID</label>
      <input type="text" id="IDcountry" name="IDcountry" class="form-control" placeholder="Country ID">
    </div>
    <button type="submit" value="Submit" class="btn btn-primary" onclick="myFunction()">Create</button>
</form>
</div>
</body>
<script>
function myFunction() {
  var txt;
  if (confirm("yuo will create City!")) {
    txt = "Tu sukursi naują miesta!";
  } else {
    txt = "You pressed Cancel!";
  }

}
</script>
