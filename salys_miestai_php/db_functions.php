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
    function createCity($city, $cityarea, $citypopulation, $citycode, $idcountry){
    $city_apdorotas =  mysqli_real_escape_string (getPrisijungimas(), $city );
    $cityarea_apdorotas =  mysqli_real_escape_string (getPrisijungimas(), $cityarea );
    $citypopulation_apdorotas =  mysqli_real_escape_string (getPrisijungimas(), $citypopulation );
    $citycode_apdorotas =  mysqli_real_escape_string (getPrisijungimas(), $citycode );
    $idcountry_apdorotas =  mysqli_real_escape_string (getPrisijungimas(), $idcountry );
    $mano_sql_tekstas = "INSERT INTO citytable
                                VALUES(NULL, '$country_apdorotas', '$cityarea_apdorotas', '$citypopulation_apdorotas', '$citycode_apdorotas', ' $idcountry_apdorotas', NOW());
                        ";
    $arPavyko = mysqli_query(   getPrisijungimas() , $mano_sql_tekstas);
    if ( !$arPavyko ) {
         echo "EROROR: nepavyko pateikti klausimo." . mysqli_error( getPrisijungimas() );
    } else {
    }
}

// IDEA: ši funkcija skirta miestu išvedimui pagal sali,kurioje jie yra
    function getCity_pgl_countryID($nr) {
      $id_apdorotas =  mysqli_real_escape_string (getPrisijungimas(), $nr );
        $mano_sql_tekstas = "SELECT * FROM citytable
                            WHERE idcountry = '$id_apdorotas'
                            ";
        $rezultatai = mysqli_query( getPrisijungimas() , $mano_sql_tekstas);
             return $rezultatai;
        }


// IDEA: funkcija grąžina miestus pagal ID
    function getCityID($j) {
            $manoSQL = "SELECT * FROM citytable WHERE id='$j' ";
                                $atsOBJ = mysqli_query(getPrisijungimas(),  $manoSQL);
                                $atsArray = mysqli_fetch_assoc($atsOBJ);
                                return $atsArray;
            }

// IDEA: funkcija miestu info atnaujinimui --- baigiau  ties cia, parsinesti ID
function updateCity($city, $cityarea, $citypopulation, $citycode, $idcountry){
$city_apdorotas =  mysqli_real_escape_string (getPrisijungimas(), $city );
$cityarea_apdorotas =  mysqli_real_escape_string (getPrisijungimas(), $cityarea );
$citypopulation_apdorotas =  mysqli_real_escape_string (getPrisijungimas(), $citypopulation );
$citycode_apdorotas =  mysqli_real_escape_string (getPrisijungimas(), $citycode );
$idcountry_apdorotas =  mysqli_real_escape_string (getPrisijungimas(), $idcountry );
    $manoSQL = "UPDATE citytable SET
                                    city = '$city_apdorotas',
                                    cityarea = '$cityarea_apdorotas',
                                    citypopulation = '$citypopulation_apdorotas',
                                    citycode = '$citycode_apdorotas',
                                    idcountry = '$idcountry_apdorotas'
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
// IDEA: funkcija miesto ištrynimui
    function deleteCity($kuris) {
        $mano_sql_tekstas = "DELETE FROM city WHERE id = $kuris  LIMIT 1";

        $rezult = mysqli_query(getPrisijungimas(),  $mano_sql_tekstas );
    }

// IDEA: paieska
    function getPaieskosRezultata(){
        $query = $_GET['query'];
        print_r("<h4>Jūsų ieškoma frazė:   ".$query."</h4>");
        $mano_sql_tekstas = "SELECT * FROM countrytable
                                WHERE (`coutry` LIKE '%$query%') ";
        $rezultataiOBJ = mysqli_query(getPrisijungimas(),  $mano_sql_tekstas);
        return $rezultataiOBJ;
      }

      function getCityList(){
              $num = $_GET['num'];
              print_r("<h4>Jūsų ieškoma frazė:   ".$num."</h4>");

      $mano_sql_tekstas = "SELECT * FROM citytable
                                      WHERE ('city' LIKE '%$num%') ";
      $citysOBJ = mysqli_query(getPrisijungimas(),  $mano_sql_tekstas);
      return $citysOBJ;

    }
