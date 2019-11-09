<?php require_once('db_functions.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>teltonika</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
<div class="container">
<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <form action="search.php"    method="GET"   class="form-inline my-2 my-lg-0" >
                    <input type="text" class="form-control mr-sm-2" name="num" aria-label="Search" placeholder="yuo can search country...">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Search">Search</button>
                </form>
        </nav>
</header>
<div class="row text-center">
  <div class="col">
    <?php echo "<a type='button' class='btn btn-warning' href= 'city_create_forma.php?nr=$i'>".Yuo_can_create_new_City ."</a>";?>
  </div>
</div>
        <div class="card" style="width: 18rem;">
          <div class="card-body  text-center">
            <?php
            $ats = getCountry_ID($_GET['nr']);
            //print($ats['id']);
            $miestai = getCity_pgl_countryID($ats['id']);
            $miestas = mysqli_fetch_assoc($miestai);
            while (  $miestas == true ) {
                        echo "<h3 class='card-title'>"."City  ". $miestas['city']."</h3>";
                        echo "<h6 class='card-subtitle mb-2 text-muted'>"."Area  ".$miestas['cityarea']."</h6>";
                        echo "<p class='card-text'>"."Population  ".$miestas['citypopulation']."</p>";
                        echo "<p class='card-text'>"."Code  ".$miestas['citycode'] ."</p>";
                        echo "<a class='card-link' href= 'city_update_forma.php?nr=$i'>".Update."</a>";
                        echo "<a class='card-link' href= 'citydelete.php?nr=$i'>".Delete."</a>";
                        echo "<hr />";
                      $miestas = mysqli_fetch_assoc($miestai);}
             ?>
        </div>
      </div>
</div>
<?php include("footer.php");?>
