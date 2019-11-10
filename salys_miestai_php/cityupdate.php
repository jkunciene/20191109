<?php
include ('db_functions.php');
updateCity($_GET['id'],$_GET['city'], $_GET['cityarea'], $_GET['citypopulation'],$_GET['citycode'], $_GET['IDcountry']);
?>

 <a  href="index.php" class="btn btn-outline-dark w-50 mb-5">Back to Home Page</a>
