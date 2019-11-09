<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- !!! mano CSS failas vissada zemiau, nie kiti css failai -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">

        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
<header>
    <div class="container">


    <div class="row bg-foto">
        <div class="column ">
            <h2>Klausimų valdymo panelė</h2>
        </div>
    </div>
    </div>
</header>
<?php
include ('db_functions.php');
?>
<div class="container">
    <?php // IDEA: VORSICHT naujo klausimo kūrimas ?>
    <h3>Sukurti naują klausimą</h3>
<form action="questcreate.php" method="get">
<div class="row">
<div class="col-25">
<label for="fname">Name</label>
</div>
<div class="col-75">
<input type="text" id="fname" value="" name="name" >
</div>
</div>
<div class="row">
<div class="col-25">
<label for="lname">Email</label>
</div>
<div class="col-75">
<input type="text" id="lname" value="" name="email" >
</div>
</div>
<div class="row">
<div class="col-25">
<label for="subject">Question</label>
</div>
<div class="col-75">
<input type="text"  id="subject" value= "" name="subject"  style="height:200px">
</div>
</div>
<div class="row">
    <button class="btn btn-secondary" type="submit" value="Submit" onclick="myFunction()">Išsaugoti</button>
<script>
function myFunction() {
  var txt;
  if (confirm("Naujo klausimo kūrimas!")) {
    txt = "Tu sukūrei naują klausimą!";
  } else {
    txt = "You pressed Cancel!";
  }

}
</script>

</div>
</form>
</div>
</section>
