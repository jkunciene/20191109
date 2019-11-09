<?php
include('header.php');
require_once('db_functions.php');
?>
<div class="container">
    <div class="row">
        <div class="col">
        <?php
         //iki čia jį atsineša, kaip dabar įdėti į manosql tekstą
        function getPaieskosRezultata(){
            $query = $_GET['query'];
            print_r("<h4>Jūsų ieškoma frazė:   ".$query."</h4>");
            $mano_sql_tekstas = "SELECT * FROM atsakymai
                                    WHERE (`atsakymas` LIKE '%$query%') ";

            $rezultataiOBJ = mysqli_query(getPrisijungimas(),  $mano_sql_tekstas);

            return $rezultataiOBJ;

        }

        $rezultataiOBJ = getPaieskosRezultata();
        $test = mysqli_fetch_assoc($rezultataiOBJ);
        //print_r($test);
        while (  $test == true ) {
                echo "<p><h3>".$test['id']."</h3>".$test['atsakymas']."</p>";
                echo "<hr/>";
                $test = mysqli_fetch_assoc($rezultataiOBJ);
                            }
?>

        </div>
    </div>
</div>
<?php
include("footer.php");
 ?>
