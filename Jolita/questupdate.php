<?php
include ('db_functions.php');
updateQuestion($_GET['id'],$_GET['name'], $_GET['email'], $_GET['subject']);
   ?>

 <a  href="adminmeniu.php" class="btn btn-outline-dark w-50 mb-5">Grįžti į valdymo panelę</a>
