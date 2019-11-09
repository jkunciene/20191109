<?php
include ('db_functions.php');
updateAtsakymas($_GET['id'],$_GET['atsakymas'], $_GET['klausimoNumeris']);
   ?>

 <a  href="adminmeniu.php" class="btn btn-outline-dark w-50 mb-5">Grįžti į valdymo panelę</a>
