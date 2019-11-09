<?php

    require_once('nustatymai.php');
    // include_once('nustatymai.php');
    // include('nustatymai.php');

    $prisijungimas = mysqli_connect(DB_HOST,  MYSQL_USER, MYSQL_PASSWORD, DB_NAME   );

    mysqli_set_charset($prisijungimas, 'utf8mb4');

    if( !$prisijungimas )   {
        echo "ERROR:  prisijungti prie DB nepavyko  !!!" . mysqli_connect_error();
    }
    function getPrisijungimas() {
        global $prisijungimas;
        return $prisijungimas;
    }
    getPrisijungimas();

// IDEA: sukuriu, irašau klausimą į DB
        function createQuestion($vardas, $email, $question){
        $vardas_apdorotas =  mysqli_real_escape_string (getPrisijungimas(), $vardas );
        $email_apdorotas =  mysqli_real_escape_string (getPrisijungimas(), $email );
        $question_apdorotas =  mysqli_real_escape_string (getPrisijungimas(), $question );
        $mano_sql_tekstas = "INSERT INTO questions
                                    VALUES('', '$vardas_apdorotas', '$email_apdorotas', '$question_apdorotas', NOW());
                            ";
        $arPavyko = mysqli_query(   getPrisijungimas() , $mano_sql_tekstas);
        if ( !$arPavyko ) {
             echo "EROROR: nepavyko pateikti klausimo." . mysqli_error( getPrisijungimas() );
        } else {
        }
    }
    // IDEA: kuriu ATSAKYMĄ

    function createAtsakymas($atsakymas, $klausimoNumeris) {

        $atsUzkoduotas = mysqli_real_escape_string (getPrisijungimas(), $atsakymas );
        $klausimoNrUzkoduotas = mysqli_real_escape_string (getPrisijungimas(), $klausimoNumeris );
         $mano_sql_tekstas = "INSERT INTO atsakymai
                                    VALUES('', '$atsakymas', '$klausimoNumeris', NOW());
                  ";
        $arPavyko = mysqli_query(   getPrisijungimas() , $mano_sql_tekstas);
    if ( !$arPavyko ) {
         echo "EROROR: nepavyko pateikti klausimo." . mysqli_error( getPrisijungimas() );
    } else {
    }
}
    // IDEA: gauna konkretų klausimą pagal ID
        function getKlausima( $aa ) {
            $manoSQL = "SELECT * FROM questions  WHERE id='$aa'   ";
            $rezultataiOBJ = mysqli_query(getPrisijungimas(),  $manoSQL);
            $rezultataiArray = mysqli_fetch_assoc($rezultataiOBJ);
            return $rezultataiArray;
        }

// IDEA: ši funkcija skirta atsakymų išvedimui pagal klausimo į kurį ji atsako numerį
    function getAtsakymaipglQuestion($nr) {
        $mano_sql_tekstas = "SELECT * FROM atsakymai
                            WHERE klausimoNumeris='$nr'
                            ";
        $rezultatai = mysqli_query( getPrisijungimas() , $mano_sql_tekstas);
             return $rezultatai;
        }
        // IDEA: funkcija grąžina atsakymus pagal ID
    function getAtsakymaipglID($j) {
            $manoSQL = "SELECT * FROM atsakymai WHERE id='$j' ";
                                $atsOBJ = mysqli_query(getPrisijungimas(),  $manoSQL);
                                $atsArray = mysqli_fetch_assoc($atsOBJ);
                                return $atsArray;
            }

// IDEA: funkcija išveda klausimų pilną sąrašą
    function getQuestions($kiekis = 99999) {
        $mano_sql_tekstas = "SELECT * FROM questions

                                      LIMIT $kiekis
                            ";
        $rezult = mysqli_query( getPrisijungimas() , $mano_sql_tekstas);

                if ( $rezult ) {
             return $rezult;
        } else {
            return NULL; //
        }
    }

    // IDEA: gauna pilną atsakymų sąrašą
        function getAdminAtsakymus($kiek = 99999) {
            $mano_sql_tekstas = "SELECT * FROM atsakymai
                                          LIMIT $kiek
                                ";
            $adminAtsakymai = mysqli_query( getPrisijungimas() , $mano_sql_tekstas);

                    if ( $adminAtsakymai ) {
                 return $adminAtsakymai;
            } else {
                return NULL; //
            }
        }
// IDEA: atnaujinti klausimus

            function updateQuestion($id, $name, $email, $question) {
                $nrUzkoduotas = mysqli_real_escape_string (getPrisijungimas(), $id );
                $vardasUzkoduotas = mysqli_real_escape_string (getPrisijungimas(), $name );
                $emailUzkoduotas = mysqli_real_escape_string (getPrisijungimas(), $email );
                $klausimasUzkoduotas = mysqli_real_escape_string (getPrisijungimas(), $question );
                $manoSQL = "UPDATE questions SET

                                                name = '$vardasUzkoduotas',
                                                email = '$emailUzkoduotas',
                                                question = '$klausimasUzkoduotas',
                                                data = NOW()

                                            WHERE id = '$nrUzkoduotas'
                                            LIMIT 1
                          ";
                $rezultatai = mysqli_query(getPrisijungimas(),  $manoSQL); // print_r(    $rezultataiOBJ );  // test
                if ( !$rezultatai) {
                    echo "ERROR: nepavyko redaguoti. SQL klaida:" . mysqli_error(getPrisijungimas());
                } else {

                }
            }

// IDEA: funkcija atsakymų atnaujinimui
function updateAtsakymas($id, $atsakymas, $klausimoNumeris) {
    $nrUzkoduotas = mysqli_real_escape_string (getPrisijungimas(), $id );
    $atsUzkoduotas = mysqli_real_escape_string (getPrisijungimas(), $atsakymas );
    $klausimoNrUzkoduotas = mysqli_real_escape_string (getPrisijungimas(), $klausimoNumeris );
    $manoSQL = "UPDATE atsakymai SET
                                    atsakymas = '$atsUzkoduotas',
                                    klausimoNumeris = '$klausimoNrUzkoduotas',
                                    data = NOW()
                                WHERE id = '$nrUzkoduotas'
                                LIMIT 1
              ";
    $rezultatai = mysqli_query(getPrisijungimas(),  $manoSQL); // print_r(    $rezultataiOBJ );  // test
    if ( !$rezultatai) {
        echo "ERROR: nepavyko redaguoti. SQL klaida:" . mysqli_error(getPrisijungimas());
    } else {

    }
}


// IDEA: funkcija klausimo ištrynimui pagal ID
    function deleteQuestions($kelintas) {

        $manoSQL = "DELETE FROM questions
                    WHERE id=$kelintas
                    LIMIT 1
                                        ";
        $rezult = mysqli_query(getPrisijungimas(),  $manoSQL);

    }

// IDEA: funkcija atsakymo ištrynimui
    function deleteAtsakyma($kuris) {
        $mano_sql_tekstas = "DELETE FROM atsakymai WHERE id = $kuris  LIMIT 1";

        $rezult = mysqli_query(getPrisijungimas(),  $mano_sql_tekstas );
    }
    // IDEA: funkcija darbui su foto


// IDEA: funkcija naudoju caruselėje
      function getFotkes($itemLimit = 10) {
          $mano_sql_tekstas = "SELECT * FROM foto WHERE id > 1 LIMIT $itemLimit ";
          $result = mysqli_query(getPrisijungimas(),  $mano_sql_tekstas);
          return $result;
      }
// IDEA: funkcija reikalinga paieskai DB atsakymuose
