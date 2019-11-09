<?php
include ('db_functions.php');
createAtsakymas($_GET['atsakymas'], $_GET['klausimoNumeris']);
   ?>
 <a  href="adminmeniu.php" class="btn btn-outline-dark w-50 mb-5">Back to admin panel</a>
