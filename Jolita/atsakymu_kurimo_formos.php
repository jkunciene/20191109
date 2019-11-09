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
            <h2>Atsakymų valdymo panelė</h2>
        </div>
    </div>
    </div>
</header>
<?php
include ('db_functions.php');

?>
<div class="container">
    <h3>Koreguoti atsakymą</h3>
<form action="atsakymo_kurimas.php" method="get">
    
    <div class="row">
    <div class="col-25">
    <label for="subject">Atsakymas</label>
    </div>
    <div class="col-75">
    <input type="text"  id="subject" value= "" name="atsakymas" placeholder="jūsų rašomas tekstas" style="height:200px">
    </div>
    </div>

<div class="row">
<div class="col-25">
<label for="lname">Klausimo į kurį atsakoma numeris</label>
</div>
<div class="col-75">
<input type="text" id="lname" value="" name="klausimoNumeris" placeholder="Klausimo į kurį rašysite atsakymą numeris">
</div>
</div>

<div class="row">
<input type="submit" value="Submit">
</div>
</form>
</div>
</section>
