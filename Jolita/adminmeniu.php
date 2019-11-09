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
    <div class="row bg-foto">
        <div class="column ">
            <h2>Admino valdymo panelė</h2>
        </div>
    </div>
</header>
<?php
include ('db_functions.php');
?>
<?php // IDEA: prasideda klausimų skiltis ?>

<div class="row">
  <div class="column" style="background-color:#aaa;">
      <?php // IDEA: SUKURTI NAUJĄ KLAUSIMĄ ?>
      <h2 class="text-warning">Sukurti naują klausimą</h2>
      <p>Norint sukurti naują klausimą spauskite mygtuką ir būsite nukreipti į įvedimo formą</p>
      <form class="" action="question_create_forma.php" method="get">
      <button type="submit" name="button">Sukurti naują klausimą</button>
      </form>
  </div>
  <div class="column" style="background-color:#bbb;">
      <?php // IDEA: KLAUSIMŲ KOREGAVIMAS ?>
      <h2>Klausimų redagavimas</h2>
      <p>Norint koreguoti, pasirinkti norimą klausimą ir spausti  ant jo. Būsite nukreipti į klausimo redagavimo formą</p>
      <?php // IDEA: spausdinu visa sarasa klausimu, ant kuriu paspaudus nukelia i pildymo forma ?>
      <?php // IDEA: amžiais nepamiršk, Jolita po href ?nr= išsineši reikalingus duomeis ?>
      <?php

          for ($i=1; $i < 30; $i++) {

          $laikinas = getKlausima( $i );
                  echo "<li> <a href= 'klausimu_formos.php?nr=$i'>". $laikinas['id']."    ".$laikinas['name']."    ".$laikinas['question']."</a></li>";

      }
       ?>
  </div>
    <div class="column" style="background-color:#ccc;">
        <?php // IDEA: KLAUSIMŲ TRYNIMAS ?>
        <h2 class="text-danger">Klausimų ištrynimas</h2>
        <p>Norint ištrinti, pasirinkti norimą klausimą ir spausti  ant jo</p>
        <?php

            for ($i=1; $i < 30; $i++) {

            $laikinas = getKlausima( $i );
                    echo "<li> <a href= 'questdelete.php?nr=$i'>". $laikinas['id']."    ".$laikinas['name']."    ".$laikinas['question']."</a></li>";

        }
         ?>
    </div>
</div>
<div class="row">
  <?php // IDEA: prasideda atsakymu skiltis ?>
  <?php // IDEA: SUKURTI NAUJĄ ATSAKYMĄ ?>
   <div class="column" style="background-color:#aaa;">
       <h3 class="text-warning">Atsakymo sukūrimas</h3>
       <p>Norėdami sukurti naują atsakymą, spauskite ant mygtuko ir būsite nukreipti į pildymo formą</p>
       <form class="" action="atsakymu_kurimo_formos.php" method="get">
       <button type="submit" name="button">Sukurti naują atsakymą</button>
       </form>

   </div>
  <div class="column" style="background-color:#bbb;">
      <?php // IDEA: ATSAKYMO KOREGAVIMAS ?>
    <h2>Atsakymų koregavimas</h2>
    <p>Norėdami koreguoti atsakymą,pasirinkite norimą  ir spauskite ant jo, būsite nukreipti į redagavimo formą</p>
    <?php // IDEA: spausdinu visa atsakymu sarasa su nuorodom, ant kuriu paspausdus atsidaro pirldymo forma ?>

    <?php
        for ($i=1; $i < 21; $i++) {
        $laikinas = getAtsakymaipglID( $i );
                echo "<li> <a href= 'atsakymu_koregavimo_formos.php?nr=$i'>". $laikinas['id']."   ".$laikinas['atsakymas']."     ".$laikinas['klausimoNumeris']."</a></li>";
    }
     ?>



  </div>
  <div class="column" style="background-color:#ccc;">
      <h2 class="text-danger">Atsakymų ištrynimas</h2>
      <p>Norint ištrinti, pasirinkti norimą atsakymą ir spausti  ant jo</p>
      <?php

          for ($i=1; $i < 21; $i++) {

          $laikinas = getAtsakymaipglID( $i );
                  echo "<li> <a href= 'atsakymo_trynimas.php?nr=$i'>". $laikinas['id']."    ".$laikinas['atsakymas']."    ".$laikinas['klausimoNumeris']."</a></li>";

      }
       ?>
</div>
</div>

<?php // IDEA: galerija nepradėta, po search ir email siuntimo jei spėsiu imsiuosi?>
<div class="row">
     <div class="column" style="background-color:#aaa;">
         <h2>Įkelti naują foto</h2>
         <p>Norint įkelti naują foto spauskite mygtuką ir būsite nukreipti į įvedimo formą</p>
     </div>
    <div class="column" style="background-color:#bbb;">
        <h2>Koreguoti foto</h2>
        <p>Norint koreguoti foto spauskite mygtuką ir būsite nukreipti į įvedimo formą</p>
    </div>
    <div class="column" style="background-color:#ccc;">
        <h2>Trinti foto</h2>
        <p>Trinti foto spauskite mygtuką</p>
    </div>
</div>
