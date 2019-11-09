<?php
include ('db_functions.php');
createQuestion($_GET['name'], $_GET['email'], $_GET['subject']);
   ?>
  
 <a  href="adminmeniu.php" class="btn btn-outline-dark w-50 mb-5">Back to admin panel</a>
