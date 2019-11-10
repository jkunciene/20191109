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
<div class="row mb-3 mt-3">
  <div class="col">
    <?php echo "<a type='button' class='btn btn-warning' href= 'country_create_forma.php?nr=$i'>".Yuo_can_create_new_Country ."</a>";?>
  </div>
</div>
<div class="row m-1">
  <div class="col-4">
    <a  class = "btn btn-info" href="rikiuotas.php">A - Z</a>
  </div>
  <div class="col-4">
    <a  class = "btn btn-info" href="naujausi.php">Naujausi</a>
  </div>
</div>
<div class="row">
  <div class="col-12">
    <table border="1" cellpadding="4">
    <tr>
        <td bgcolor="#CCCCCC"><strong>Country</strong></td>
        <td bgcolor="#CCCCCC"><strong>Area</strong></td><td bgcolor="#CCCCCC"><strong>Population</strong></td><td bgcolor="#CCCCCC"><strong>Code</strong></td><td bgcolor="#CCCCCC"><strong>Update</strong></td><td bgcolor="#CCCCCC"><strong>Delete</strong></td></tr>
    <?php
    $salys = getCountryZA();
    $salis = mysqli_fetch_assoc($salys);
      for($i=1; $i < HOME_NUMBER_OF_ARTICLES; $i++){
      while($salis == true){
        $trans = $salis[id];
    ?>
                <tr>
                <td><? echo "<a  class='card-title h6' href= 'city.php?nr=$trans'>".$salis['coutry']."</a>"; ?></td>
                <td><? echo $salis['area']; ?></td>
                <td><? echo $salis['population']; ?></td>
                <td><? echo $salis['code']; ?></td>
                <td><? echo "<a class='card-link' href= 'country_update_forma.php?nr=$trans'>".Update."</a>"; ?></td>
                <td><? echo "<a class='card-link' href= 'countrydelete.php?nr=$trans'>".Delete."</a>"; ?></td>
                </tr>
                <?php $salis = mysqli_fetch_assoc($salys); ?>
    <?php
    }
    };
    ?>
    </table>
</div>
</div>
<a  href="index.php" class="btn btn-outline-dark w-50 mt-3">Back to Home Page</a>
</div>
