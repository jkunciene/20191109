<?php require_once('db_functions.php'); ?>
<!DOCTYPE html>
<html>
    <head>
      <title>teltonika</title>
      <meta charset="utf-8">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container">
<?php
            $rezOBJ = getPaieskosRezultata();
            $test = mysqli_fetch_assoc($rezOBJ);
            while (  $test == true ) {
              echo "<div class='alert alert-warning' role='alert'>".$test['id']." Country -  ".$test['coutry']."</div>";
              $test = mysqli_fetch_assoc($rezOBJ); }
?>
<a  href="index.php" class="btn btn-outline-dark w-50 mb-5">Back to Home Page</a>
</div>
