<?php
include ('db_functions.php');
createCountry($_GET['country'], $_GET['area'], $_GET['population'], $_GET['code']);
?>
<a  href="index.php" class="btn btn-outline-dark w-50 mb-5">Back to Home Page</a>
