<?php include ('header.php') ?>
<?php include ('db_functions.php'); ?>

<div class="container">


<div class="row">
    <div class="col">
        <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
      <div class="carousel-item active">
        <img class='img-fluid' src="img/knyga.jpg" alt="estetika"  width="600" >
      </div>

        <?php
            $visosFoto = getFotkes(10);
            $fotoname = mysqli_fetch_assoc($visosFoto);
            while (  $fotoname == true ) {
              echo "<div class='carousel-item'> <img class='img-fluid' src='img/". $fotoname['name']."'  width='600' > </div>";
              $fotoname = mysqli_fetch_assoc($visosFoto);
            }
           ?>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

    </div>
</div>
</div>


<?php
include("footer.php");
 ?>
