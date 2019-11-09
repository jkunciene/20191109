<?php require_once('db_functions.php');?>
<div class="container">
    <div class="row">
        <div class="col">
        <?php
        function getPaieskosRezultata(){
            $query = $_GET['query'];
            print_r("<h4>Jūsų ieškoma frazė:   ".$query."</h4>");
            $mano_sql_tekstas = "SELECT * FROM citytable
                                    WHERE (`city` LIKE '%$query%') ";
            $rezultataiOBJ = mysqli_query(getPrisijungimas(),  $mano_sql_tekstas);
            return $rezultataiOBJ; }
            $rezultataiOBJ = getPaieskosRezultata();
            $test = mysqli_fetch_assoc($rezultataiOBJ);
            while (  $test == true ) {
                    echo "<h3>".$test['id']."  ".$test['city']."</h3>";
                    echo "<hr/>";
                    $test = mysqli_fetch_assoc($rezultataiOBJ);
                                }
?>
        </div>
    </div>
</div>
<a  href="index.php" class="btn btn-outline-dark w-50 mb-5">Back to Home Page</a>
<?php include("footer.php"); ?>
