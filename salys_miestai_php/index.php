<?php require_once('db_functions.php') ?>
<!DOCTYPE html>
<html>
    <head>
      <title>teltonika</title>
      <meta charset="utf-8">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container">
<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <form action="search_country.php"    method="GET"   class="form-inline my-2 my-lg-0" >
                    <input type="text" class="form-control mr-sm-2" name="query" aria-label="Search" placeholder="yuo can search country...">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Search">Search</button>
                </form>
        </nav>
</header>
<div class="row text-center">
  <div class="col">
    <?php echo "<a type='button' class='btn btn-warning' href= 'country_create_forma.php?nr=$i'>".Yuo_can_create_new_Country ."</a>";?>
  </div>
</div>
        <div class="card" style="width: 18rem;">
          <div class="card-body  text-center">
            <?php
                for ($i=1; $i < HOME_NUMBER_OF_ARTICLES; $i++) {
                $laikinas = getCountry_ID( $i );
                  if($laikinas == true){
                        echo "<a  class='card-title h6' href= 'city.php?nr=$i'>"."Country  ". $laikinas['coutry']."</a>";
                        echo "<h6 class='card-subtitle mb-2 text-muted'>"."Area  ".$laikinas['area']."</h6>";
                        echo "<p class='card-text'>"."Population  ".$laikinas['population']."</p>";
                        echo "<p class='card-text'>"."Code  ".$laikinas['code']."</p>";
                        echo "<a class='card-link' href= 'country_update_forma.php?nr=$i'>".Update."</a>";
                        echo "<a class='card-link' href= 'countrydelete.php?nr=$i'>".Delete."</a>";
                        echo "<hr />";}
                        }
             ?>
      </div>
    </div>
</div>
