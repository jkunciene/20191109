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
//sugalvoti, kad imtu pagal pasirinkta klausima ir uzpildytu laukus
// $questions = getQuestions();
// $question = mysqli_fetch_assoc($questions);

?>
<div class="container">
    <h3>Koreguoti klausimą</h3>
<form action="questupdate.php" method="get">
    <div class="row">
    <div class="col-25">
    <label for="id">Klausimo ID</label>
    </div>
    <div class="col-75">
    <input type="text" id="fname" value="<?php $klaus = getKlausima($_GET['nr']); echo $klaus['id']; ?>" name="id" >
    </div>
    </div>
<div class="row">
<div class="col-25">
<label for="fname">Name</label>
</div>
<div class="col-75">
<input type="text" id="fname" value="<?php $klaus = getKlausima($_GET['nr']); echo $klaus['name']; ?>" name="name" >
</div>
</div>
<div class="row">
<div class="col-25">
<label for="lname">Email</label>
</div>
<div class="col-75">
<input type="text" id="lname" value="<?php $klaus = getKlausima($_GET['nr']); echo $klaus['email']; ?>" name="email" >
</div>
</div>
<div class="row">
<div class="col-25">
<label for="subject">Question</label>
</div>
<div class="col-75">
<input type="text"  id="subject" value= "<?php $klaus = getKlausima($_GET['nr']); echo $klaus['question']; ?>" name="subject"  style="height:200px">
</div>
</div>
<div class="row">
<input type="submit" value="Submit">
</div>
</form>
</div>
</section>
