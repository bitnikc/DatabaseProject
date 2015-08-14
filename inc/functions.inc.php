<?php




//////////////////////////////
//Send to DB functions: DONE//
//////////////////////////////

function __save_person_to_db($p_fornavn, $p_etternavn, $p_tlfnummer, $p_epost, $p_adresse, $p_postnr){
  global $mysql;

  $stmt = $mysql->prepare("INSERT INTO person (p_fornavn, p_etternavn, p_tlfnummer, p_epost, p_adresse, p_postnr) VALUES (?, ?, ?, ?, ?, ?)");
  $stmt->bind_param('ssissi', $p_fornavn, $p_etternavn, $p_tlfnummer, $p_epost, $p_adresse, $p_postnr);
  $stmt->execute();
  $inserted = $stmt->affected_rows;

  $stmt->close();

  return $inserted == 1;
}

function __save_gruppe_to_db($g_gruppenavn){
  global $mysql;

  $stmt = $mysql->prepare("INSERT INTO gruppe (g_gruppenavn) VALUES (?)");
  $stmt->bind_param('s', $g_gruppenavn);
  $stmt->execute();
  $inserted = $stmt->affected_rows;

  $stmt->close();

  return $inserted == 1;
}

function __save_avtale_to_db($a_tidspunkt, $a_avtaleType, $a_kommentar, $a_stedID){
  global $mysql;

  $stmt = $mysql->prepare("INSERT INTO avtale (a_tidspunkt, a_avtaleType, a_kommentar, a_stedID) VALUES (?, ?, ?, ?)");
  $stmt->bind_param('sssi', $a_tidspunkt, $a_avtaleType, $a_kommentar, $a_stedID);
  $stmt->execute();
  $inserted = $stmt->affected_rows;

  $stmt->close();

  return $inserted == 1;
}

function __save_avtale_person_to_db($aa_avtaleID, $aa_personID){
  global $mysql;

  $stmt = $mysql->prepare("INSERT INTO avtaler (aa_avtaleID, aa_personID) VALUES (?, ?)");
  $stmt->bind_param('ii', $aa_avtaleID, $aa_personID);
  $stmt->execute();
  $inserted = $stmt->affected_rows;

  $stmt->close();

  return $inserted == 1;
}

function __save_avtale_gruppe_to_db($aa_avtaleID, $aa_gruppeID){
  global $mysql;

  $stmt = $mysql->prepare("INSERT INTO avtaler (aa_avtaleID, aa_gruppeID) VALUES (?, ?)");
  $stmt->bind_param('ii', $aa_avtaleID, $aa_gruppeID);
  $stmt->execute();
  $inserted = $stmt->affected_rows;

  $stmt->close();


  return $inserted == 1;
}

function __save_gruppe_person_to_db($gp_gruppeID, $gp_personID){
  global $mysql;

  $stmt = $mysql->prepare("INSERT INTO gruppe_person (gp_gruppeID, gp_personID) VALUES (?, ?)");
  $stmt->bind_param('ii', $gp_gruppeID, $gp_personID);
  $stmt->execute();
  $inserted = $stmt->affected_rows;

  $stmt->close();

  return $inserted == 1;
}



////////////////////////
//List functions: DONE//
////////////////////////

function list_person(){
  global $smarty, $page, $page_title, $mysql;

  $query = "SELECT * FROM person";
  $result = mysqli_query($mysql, $query);

  while($line = mysqli_fetch_assoc($result))
  {
    $value[] = $line;
  }
  $smarty->assign('person', $value);
  $page = "list_person";
  $page_title = "Person Liste";
}

function list_avtale(){
  global $smarty, $page, $page_title, $page_info, $mysql;

  $query = "SELECT * FROM avtale";
  $result = mysqli_query($mysql, $query);

  while($line = mysqli_fetch_assoc($result))
  {
    $value[] = $line;
  }
  $smarty->assign('avtale', $value);
  $page = "list_avtale";
  $page_title = "Avtale Liste";


$step = isset($_POST['step']) ? $_POST['step'] : 0;
   $a_tidspunkt = "";

if ($step == 1) {
  unset($value);
$search_query = (isset($_POST['a_tidspunkt']) ? $_POST['a_tidspunkt'] : '');
$query  = "SELECT * FROM avtale WHERE a_tidspunkt LIKE '".$search_query."%'";
$result = mysqli_query($mysql, $query);

 while($line = mysqli_fetch_assoc($result))
  {
    $value[] = $line;
  }
  $smarty->assign('avtale', $value);
  $page = "list_avtale";
  $page_title = "Avtale Liste";
}
if($step == 2){
  unset($value);
$query  = "SELECT avtale.a_avtaleID, avtale.a_tidspunkt, avtale.a_avtaleType, avtale.a_kommentar, avtale.a_stedID
           FROM avtale
           INNER JOIN (
              SELECT a_tidspunkt
              FROM avtale
              GROUP BY a_tidspunkt
              HAVING count(a_tidspunkt) > 1
           ) dupes ON avtale.a_tidspunkt = dupes.a_tidspunkt
           ORDER BY avtale.a_tidspunkt;";
$result = mysqli_query($mysql, $query);

 while($line = mysqli_fetch_assoc($result))
  {
    $value[] = $line;
  }
  if(isset($value[1])){
  $smarty->assign('avtale', $value);
  $page = "list_avtale";
  $page_title = "Avtale Liste";
}
else{
  $page = "list_avtale";
  $page_info = "Ingen kollisjoner";
}
}
if ($step == 0) {
  $smarty->assign(array(
    "a_tidspunkt" => $a_tidspunkt
    ));
  $page = "list_avtale";
  $page_title = "";
}
}


function list_avtaler(){
  global $smarty, $page, $page_title, $page_info, $mysql;


  $query = "SELECT  avtale.a_tidspunkt, avtale.a_avtaleType, avtale.a_kommentar, avtale.a_stedID, gruppe.g_gruppenavn
           FROM avtaler
           INNER JOIN avtale   ON avtale.a_avtaleID = avtaler.aa_avtaleID
           INNER JOIN gruppe ON gruppe.g_gruppeID = avtaler.aa_gruppeID";
  $result = mysqli_query($mysql, $query);

  while($line = mysqli_fetch_assoc($result))
  {
    $value[] = $line;
  }
  if(isset($value[1])){
    ini_set("display_errors", 0);
  $smarty->assign('avtaler', $value);
  $page = "list_avtaler";
  $page_title = "Avtale Liste";}
  else{
    ini_set("display_errors", 0);
    $page = "list_avtaler";
    $page_info = "Ingen grupper er knyttet til noen avtaler.";
  }


$step = isset($_POST['step']) ? $_POST['step'] : 0;
   $aa_gruppeID = "";

if ($step == 1) {
  unset($value);
$search_query = (isset($_POST['aa_gruppeID']) ? $_POST['aa_gruppeID'] : '');
$query  = "SELECT  avtale.a_tidspunkt, avtale.a_avtaleType, avtale.a_kommentar, avtale.a_stedID, gruppe.g_gruppenavn
           FROM avtaler
           INNER JOIN avtale   ON avtale.a_avtaleID = avtaler.aa_avtaleID
           INNER JOIN gruppe ON gruppe.g_gruppeID = avtaler.aa_gruppeID
           WHERE aa_gruppeID=".$search_query."";
$result = mysqli_query($mysql, $query);

 while($line = mysqli_fetch_assoc($result))
  {
    $value[] = $line;
  }
  $smarty->assign('avtaler', $value);
  $page = "list_avtaler";
  $page_title = "Avtale Liste";
}

if ($step == 0) {
  $smarty->assign(array(
    "aa_gruppeID" => $aa_gruppeID
    ));
  $page = "list_avtaler";
  $page_title = "";
}
}

function list_gruppe(){
  global $smarty, $page, $page_title, $mysql;

  $query = "SELECT * FROM gruppe";
  $result = mysqli_query($mysql, $query);

  while($line = mysqli_fetch_assoc($result))
  {
    $value[] = $line;
  }
  $smarty->assign('gruppe', $value);
  $page = "list_gruppe";
  $page_title = "Gruppe Liste";
}


/////////////////////////
//Oppgave QUERIES////////
/////////////////////////



/////////////////////////
//Check functions      //
/////////////////////////


function __check_person($p_fornavn, $p_etternavn, $p_tlfnummer) {
  $errors = array();
  if (strlen($p_fornavn) == 0) {
    $errors[] = "Fornavn er tomt!";
  }
  if (strlen($p_etternavn) == 0) {
    $errors[] = "Etternavn er tomt!";
  }
  return $errors;
}

function __check_avtale($a_avtaleType, $a_tidspunkt, $a_stedID) {
  $errors = array();
  if (strlen($a_avtaleType) == 0) {
    $errors[] = "Avtale Type er tomt!";
  }
  if (strlen($a_tidspunkt) == 0) {
    $errors[] = "Tidspunkt er tomt!";
  }else if (strlen($a_tidspunkt) != 19){
    $errors[] = "Skriv tidspunkt i formattet:'2015-08-01 14:00:00'";
  }
  if (strlen($a_stedID) == 0) {
    $errors[] = "Sted ID er tomt!";
  }
  return $errors;
}
function __check_avtale_person($aa_avtaleID, $aa_personID) {
  $errors = array();
  if (strlen($aa_avtaleID) == 0) {
    $errors[] = "Avtale ID er tomt!";
  }
  if (strlen($aa_personID) == 0) {
    $errors[] = "Person ID er tomt!";
  }
  return $errors;
}
function __check_avtale_gruppe($aa_avtaleID, $aa_gruppeID) {
  $errors = array();
  if (strlen($aa_avtaleID) == 0) {
    $errors[] = "Avtale ID er tomt!";
  }
  if (strlen($aa_gruppeID) ==0) {
    $errors[] = "Gruppe ID er tomt!";
  }
  return $errors;
}
function __check_gruppe_person($gp_gruppeID, $gp_personID) {
  $errors = array();
  if (strlen($gp_gruppeID) == 0) {
    $errors[] = "Gruppe ID er tom!";
  } else if (strlen($gp_gruppeID) >= 25) {
   $errors[] = "Ugyldig Gruppe ID!";
 }

 if (strlen($gp_personID) == 0) {
  $errors[] = "Person ID er tom!";
} else if (strlen($gp_personID) >= 25) {
  $errors[] = "Ugyldig Person ID!";
}
return $errors;
}

function __check_gruppe($g_gruppenavn) {
  $errors = array();
  if (strlen($g_gruppenavn) == 0) {
    $errors[] = "Gruppenavn er tomt!";
  }
  return $errors;
}


/////////////////////////////////////////////
//Sjekker om duplicates er registrert: DONE//
/////////////////////////////////////////////



function __is_gruppe($g_gruppenavn){
  global $mysql;

  $stmt = $mysql->prepare("SELECT g_gruppenavn FROM gruppe WHERE g_gruppenavn=?");
  $stmt->bind_param('s', $g_gruppenavn);
  $stmt->execute();
  $stmt->bind_result($g_gruppenavn);
  $is_result = $stmt->fetch();
  $stmt->close();

  return $is_result;
}

function __is_person($p_fornavn, $p_etternavn){
  global $mysql;

  $stmt = $mysql->prepare("SELECT p_fornavn, p_etternavn FROM person WHERE p_fornavn=? AND p_etternavn=?");
  $stmt->bind_param('ss', $p_fornavn, $p_etternavn);
  $stmt->execute();
  $stmt->bind_result($p_fornavn, $p_etternavn);
  $is_result = $stmt->fetch();
  $stmt->close();

  return $is_result;
}
function __is_avtale($a_avtaleType, $a_tidspunkt, $a_kommentar, $a_stedID){
  global $mysql;

  $stmt = $mysql->prepare("SELECT a_avtaleType, a_tidspunkt, a_kommentar, a_stedID FROM avtale WHERE a_avtaleType=? AND a_tidspunkt=? AND a_kommentar=? AND a_stedID=?");
  $stmt->bind_param('sssi', $a_avtaleType, $a_tidspunkt, $a_kommentar, $a_stedID);
  $stmt->execute();
  $stmt->bind_result($a_avtaleType, $a_tidspunkt, $a_kommentar, $a_stedID);
  $is_result = $stmt->fetch();
  $stmt->close();

  return $is_result;
}

function __is_avtale_person($aa_avtaleID, $aa_personID){
  global $mysql;
       $stmt = $mysql->prepare("SELECT aa_avtaleID, aa_personID FROM avtaler WHERE aa_avtaleID=? AND aa_personID=?");
      $stmt->bind_param('ii', $aa_avtaleID, $aa_personID);
      $stmt->execute();
      $stmt->bind_result($aa_avtaleID, $aa_personID);


    $is_result = $stmt->fetch();
    $stmt->close();

    return $is_result;
  }

  function __is_avtale_gruppe($aa_avtaleID, $aa_gruppeID){
  global $mysql;
       $stmt = $mysql->prepare("SELECT aa_avtaleID, aa_gruppeID FROM avtaler WHERE aa_avtaleID=? AND aa_gruppeID=?");
      $stmt->bind_param('ii', $aa_avtaleID, $aa_gruppeID);
      $stmt->execute();
      $stmt->bind_result($aa_avtaleID, $aa_gruppeID);


    $is_result = $stmt->fetch();
    $stmt->close();

    return $is_result;
  }


  function __is_gruppe_person($gp_gruppeID, $gp_personID){
    global $mysql;

    $stmt = $mysql->prepare("SELECT gp_gruppeID, gp_personID FROM gruppe_person WHERE gp_gruppeID=? AND gp_personID=?");
    $stmt->bind_param('ii', $gp_gruppeID, $gp_personID);
    $stmt->execute();
    $stmt->bind_result($gp_gruppeID, $gp_personID);
    $is_result = $stmt->fetch();
    $stmt->close();

    return $is_result;
  }

/////////////////
//Add functions//
/////////////////

  function add_person(){

   global $smarty, $page, $page_errors, $page_info, $page_title;

   $step = isset($_POST['step']) ? $_POST['step'] : 0;
   $p_fornavn = "";
   $p_etternavn = "";
   $p_tlfnummer = "";
   $p_epost = "";
   $p_adresse = "";
   $p_postnr = "";

    // form is submitted
   if ($step == 1) {
    $p_fornavn = $_POST['p_fornavn'];
    $p_etternavn = $_POST['p_etternavn'];
    $p_tlfnummer = $_POST['p_tlfnummer'];
    $p_epost = $_POST['p_epost'];
    $p_adresse = $_POST['p_adresse'];
    $p_postnr = $_POST['p_postnr'];

        // input check
    $page_errors = __check_person($p_fornavn, $p_etternavn, $p_tlfnummer);
        // no input error
    if (count($page_errors) == 0) {
            // check if the user exists
      if (__is_person($p_fornavn, $p_etternavn)) {
        $page_errors[] = "Denne personen er allerede registrert!";
      } else {
        $saved = __save_person_to_db($p_fornavn, $p_etternavn, $p_tlfnummer, $p_epost, $p_adresse, $p_postnr);
        if (!$saved) {
          $page_errors[] = "Error saving into the database!";
        } else {
                    // show login page
          $page = "main_page";
          $page_info = "Personen er naa registrert i databasen.";
        }
      }
    }

        // if there are any problems, we display the form again
    if (count($page_errors) > 0) {
      $step = 0;
    }
  }

    // displaying the form
  if ($step == 0) {
    $smarty->assign(array(
      "p_fornavn" => $p_fornavn,
      "p_etternavn" => $p_etternavn,
      "p_tlfnummer" => $p_tlfnummer,
      "p_epost" => $p_epost,
      "p_adresse" => $p_adresse,
      "p_postnr" => $p_postnr
      ));
    $page = "add_person";
    $page_title = "";
  }
}

function add_gruppe(){

 global $smarty, $page, $page_errors, $page_info, $page_title;

 $step = isset($_POST['step']) ? $_POST['step'] : 0;
 $g_gruppenavn = "";


    // form is submitted
 if ($step == 1) {
  $g_gruppenavn = $_POST['g_gruppenavn'];


        // input check
  $page_errors = __check_gruppe($g_gruppenavn);
        // no input error
  if (count($page_errors) == 0) {
            // check if the user exists
    if (__is_gruppe($g_gruppenavn)) {
      $page_errors[] = "Denne gruppen er allerede registrert!";
    } else {
      $saved = __save_gruppe_to_db($g_gruppenavn);
      if (!$saved) {
        $page_errors[] = "Error saving into the database!";
      } else {
                    // show login page
        $page = "main_page";
        $page_info = "Gruppen er nå registrert i databasen.";
      }
    }
  }

        // if there are any problems, we display the form again
  if (count($page_errors) > 0) {
    $step = 0;
  }
}

    // displaying the form
if ($step == 0) {
  $smarty->assign(array(
    "g_gruppenavn" => $g_gruppenavn
    ));
  $page = "add_gruppe";
  $page_title = "";
}
}


function add_avtale(){

 global $smarty, $page, $page_errors, $page_info, $page_title;

 $step = isset($_POST['step']) ? $_POST['step'] : 0;
 $a_avtaleType = "";
 $a_tidspunkt = "";
 $a_kommentar = "";
 $a_stedID = "";


    // form is submitted
 if ($step == 1) {
  $a_avtaleType = $_POST['a_avtaleType'];
  $a_tidspunkt = $_POST['a_tidspunkt'];
  $a_kommentar = $_POST['a_kommentar'];
  $a_stedID = $_POST['a_stedID'];


        // input check
  $page_errors = __check_avtale($a_avtaleType, $a_tidspunkt, $a_stedID);
        // no input error
  if (count($page_errors) == 0) {
            // check if the user exists
    if (__is_avtale($a_avtaleType, $a_tidspunkt, $a_kommentar, $a_stedID)) {
      $page_errors[] = "Denne avtalen er allerede registrert!";
    } else {
      $saved = __save_avtale_to_db($a_tidspunkt, $a_avtaleType, $a_kommentar, $a_stedID);
      if (!$saved) {
        $page_errors[] = "Error saving into the database!";
      } else {
                    // show login page
        $page = "main_page";
        $page_info = "Avtalen er nå registrert i databasen.";
      }
    }
  }

        // if there are any problems, we display the form again
  if (count($page_errors) > 0) {
    $step = 0;
  }
}

    // displaying the form
if ($step == 0) {
  $smarty->assign(array(
    "a_avtaleType" => $a_avtaleType,
    "a_tidspunkt" => $a_tidspunkt,
    "a_kommentar" => $a_kommentar,
    "a_stedID" => $a_stedID
    ));

  $page = "add_avtale";
  $page_title = "";
}
}

function add_avtale_person(){

 global $smarty, $page, $page_errors, $page_info, $page_title;

 $step = isset($_POST['step']) ? $_POST['step'] : 0;
 $aa_avtaleID = "";
 $aa_personID = "";



    // form is submitted
 if ($step == 1) {
  $aa_avtaleID = $_POST['aa_avtaleID'];
  $aa_personID = $_POST['aa_personID'];

        // input check
  $page_errors = __check_avtale_person($aa_avtaleID, $aa_personID);
        // no input error
  if (count($page_errors) == 0) {
            // check if the user exists
    if (__is_avtale_person($aa_avtaleID, $aa_personID)) {
      $page_errors[] = "Personen er allerede knyttet til avtalen!";
    } else {
      $saved = __save_avtale_person_to_db($aa_avtaleID, $aa_personID);
      if (!$saved) {
        $page_errors[] = "Error saving into the database!";
      } else {
                    // show login page
        $page = "main_page";
        $page_info = "Personen er nå knyttet til avtalen og registrert i databasen.";
      }
    }
  }

        // if there are any problems, we display the form again
  if (count($page_errors) > 0) {
    $step = 0;
  }
}

    // displaying the form
if ($step == 0) {
  $smarty->assign(array(
    "aa_avtaleID" => $aa_avtaleID,
    "aa_personID" => $aa_personID,
    ));
  $page = "add_avtale_person";
  $page_title = "";
}
}
function add_avtale_gruppe(){

 global $smarty, $page, $page_errors, $page_info, $page_title;

 $step = isset($_POST['step']) ? $_POST['step'] : 0;
 $aa_avtaleID = "";
 $aa_gruppeID = "";



    // form is submitted
 if ($step == 1) {
  $aa_avtaleID = $_POST['aa_avtaleID'];
  $aa_gruppeID = $_POST['aa_gruppeID'];


        // input check
  $page_errors = __check_avtale_gruppe($aa_avtaleID, $aa_gruppeID);
        // no input error
  if (count($page_errors) == 0) {
            // check if the user exists
    if (__is_avtale_gruppe($aa_avtaleID, $aa_gruppeID)) {
      $page_errors[] = "Gruppen er allerede knyttet til avtalen!";
    } else {
      $saved = __save_avtale_gruppe_to_db($aa_avtaleID, $aa_gruppeID);
      if (!$saved) {
        $page_errors[] = "Error saving into the database!";
      } else {
                    // show login page
        $page = "main_page";
        $page_info = "Gruppen er nå knyttet til avtalen og registrert i databasen.";
      }
    }
  }

        // if there are any problems, we display the form again
  if (count($page_errors) > 0) {
    $step = 0;
  }
}

    // displaying the form
if ($step == 0) {
  $smarty->assign(array(
    "aa_avtaleID" => $aa_avtaleID,
    "aa_gruppeID" => $aa_gruppeID
    ));
  $page = "add_avtale_gruppe";
  $page_title = "";
}
}

function add_gruppe_person(){

 global $smarty, $page, $page_errors, $page_info, $page_title;

 $step = isset($_POST['step']) ? $_POST['step'] : 0;
 $gp_gruppeID = "";
 $gp_personID = "";



    // form is submitted
 if ($step == 1) {
  $gp_gruppeID = $_POST['gp_gruppeID'];
  $gp_personID = $_POST['gp_personID'];



        // input check
  $page_errors = __check_gruppe_person($gp_gruppeID, $gp_personID);
        // no input error
  if (count($page_errors) == 0) {
            // check if the user exists
    if (__is_gruppe_person($gp_gruppeID, $gp_personID)) {
      $page_errors[] = "Personen er allerede registrert i denne gruppen!";
    } else {
      $saved = __save_gruppe_person_to_db($gp_gruppeID, $gp_personID);
      if (!$saved) {
        $page_errors[] = "Error saving into the database!";
      } else {
                    // show login page
        $page = "main_page";
        $page_info = "Personen er nå registrert i denne gruppen!";
      }
    }
  }

        // if there are any problems, we display the form again
  if (count($page_errors) > 0) {
    $step = 0;
  }
}

    // displaying the form
if ($step == 0) {
  $smarty->assign(array(
    "gp_gruppeID" => $gp_gruppeID,
    "gp_personID" => $gp_personID
    ));

  $page = "add_gruppe_person";
  $page_title = "";
}
}

?>
