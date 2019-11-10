<?php
include ('db_functions.php');
createCity($_GET['city'], $_GET['area'], $_GET['population'], $_GET['code'], $_GET['IDcountry']);
?>
<a  href="index.php" class="btn btn-outline-dark w-50 mb-5">Back to Home Page</a>
