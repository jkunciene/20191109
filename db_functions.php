<?php
    require_once('nustatymai.php');

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

// IDEA: gauna konkrecia sali  pagal ID
        function getCountry_ID( $aa ) {
            $manoSQL = "SELECT * FROM countrytable  WHERE id='$aa'   ";
            $rezultataiOBJ = mysqli_query(getPrisijungimas(),  $manoSQL);
            $rezultataiArray = mysqli_fetch_assoc($rezultataiOBJ);
            return $rezultataiArray;
        }


// IDEA: gauna pilną atsakymų sąrašą
        function getCountry($kiek = 100) {
            $mano_sql_tekstas = "SELECT * FROM countrytable
                                          LIMIT $kiek
                                ";
            $adminAtsakymai = mysqli_query( getPrisijungimas() , $mano_sql_tekstas);

                    if ( $adminAtsakymai ) {
                 return $adminAtsakymai;
            } else {
                return NULL; //
            }
        }

// IDEA: sukuriu, irašau Šalį į DB
        function createCountry($country, $area, $population, $code){
        $country_apdorotas =  mysqli_real_escape_string (getPrisijungimas(), $country );
        $area_apdorotas =  mysqli_real_escape_string (getPrisijungimas(), $area );
        $population_apdorotas =  mysqli_real_escape_string (getPrisijungimas(), $population );
        $code_apdorotas =  mysqli_real_escape_string (getPrisijungimas(), $code );
        $mano_sql_tekstas = "INSERT INTO countrytable
                                    VALUES(NULL, '$country_apdorotas', '$area_apdorotas', '$population_apdorotas', '$code_apdorotas', NOW());
                            ";
        $arPavyko = mysqli_query(   getPrisijungimas() , $mano_sql_tekstas);
        if ( !$arPavyko ) {
             echo "EROROR: nepavyko pateikti klausimo." . mysqli_error( getPrisijungimas() );
        } else {
        }
    }

    // IDEA: atnaujinti Salis

                function updateCountry($id, $country, $area, $population, $code) {
                  $nr_apdorotas = mysqli_real_escape_string (getPrisijungimas(), $id );
                  $country_apdorotas =  mysqli_real_escape_string (getPrisijungimas(), $country );
                  $area_apdorotas =  mysqli_real_escape_string (getPrisijungimas(), $area );
                  $population_apdorotas =  mysqli_real_escape_string (getPrisijungimas(), $population );
                  $code_apdorotas =  mysqli_real_escape_string (getPrisijungimas(), $code );
                    $manoSQL = "UPDATE countrytable SET

                                                    coutry = '$country_apdorotas',
                                                    area = '$area_apdorotas',
                                                    population = '$population_apdorotas',
                                                    code = '$code_apdorotas',
                                                    data = NOW()

                                                WHERE id = '$nr_apdorotas'
                                                LIMIT 1";
                    $rezultatai = mysqli_query(getPrisijungimas(),  $manoSQL); // print_r(    $rezultataiOBJ );  // test
                    if ( !$rezultatai) {
                        echo "ERROR: nepavyko redaguoti. SQL klaida:" . mysqli_error(getPrisijungimas());
                    } else {

                    }
                }
  // IDEA: funkcija salies ištrynimui pagal ID
                    function deleteCuntry($kelintas) {
                        $manoSQL = "DELETE FROM countrytable
                                    WHERE id=$kelintas
                                    LIMIT 1";
                        $rezult = mysqli_query(getPrisijungimas(),  $manoSQL);

                    }

    // IDEA: kuriu Miesta
    function createCity($city, $area, $population, $code, $idcountry){
    $country_apdorotas =  mysqli_real_escape_string (getPrisijungimas(), $country );
    $area_apdorotas =  mysqli_real_escape_string (getPrisijungimas(), $area );
    $population_apdorotas =  mysqli_real_escape_string (getPrisijungimas(), $population );
    $code_apdorotas =  mysqli_real_escape_string (getPrisijungimas(), $code );
    $idcountry_apdorotas =  mysqli_real_escape_string (getPrisijungimas(), $idcountry );
    $mano_sql_tekstas = "INSERT INTO citytable
                                VALUES(NULL, '$country_apdorotas', '$area_apdorotas', '$population_apdorotas', '$code_apdorotas', ' $idcountry_apdorotas', NOW());
                        ";
    $arPavyko = mysqli_query(   getPrisijungimas() , $mano_sql_tekstas);
    if ( !$arPavyko ) {
         echo "EROROR: nepavyko pateikti klausimo." . mysqli_error( getPrisijungimas() );
    } else {
    }
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




// IDEA: funkcija atsakymo ištrynimui
    function deleteAtsakyma($kuris) {
        $mano_sql_tekstas = "DELETE FROM atsakymai WHERE id = $kuris  LIMIT 1";

        $rezult = mysqli_query(getPrisijungimas(),  $mano_sql_tekstas );
    }
