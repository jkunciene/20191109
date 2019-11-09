<?php require_once('db_functions.php') ?>
<div class="container">
<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <form action="search.php"    method="GET"   class="form-inline my-2 my-lg-0" >
                    <input type="text" class="form-control mr-sm-2" name="query" aria-label="Search" placeholder="yuo can search city...">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Search">Search</button>
                </form>
        </nav>
</header>
     <div class="row  justify-content-center mb-4 ">
         <div class="col-12">
             <h2 class="mt-1" >Miestai</h2>
         </div>
     </div>
    <div class="row">
      <div class="col-12">
        <table>
           <?php $questions = getQuestions();
           $question = mysqli_fetch_assoc($questions);
           while (  $question == true ) {
               echo " <tr><th>". $question['id'] . $question['question'] . "</th></tr>";
               $atsakymai = getAtsakymaipglQuestion($question['id']);
               $atsakymas = mysqli_fetch_assoc($atsakymai);
               while (  $atsakymas == true ) {
               echo "<tr><td>".  $atsakymas['atsakymas'] ."</td></tr>";
               $atsakymas = mysqli_fetch_assoc($atsakymai); }
               $question = mysqli_fetch_assoc($questions);  }
                   ?>
            </tale>
          </div>
        </div>
</div>
<?php include("footer.php");?>
