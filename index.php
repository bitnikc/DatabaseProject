<?php
//REQUIRE SOME SHIT
require("inc/config.inc.php");
require("inc/functions.inc.php");
require(SMARTY_PATH . "/libs/Smarty.class.php");


//SMARTY SHIT
$smarty = new Smarty();

$smarty->setTemplateDir(PROJECT_DIR . "/smarty/templates");
$smarty->setCompileDir(PROJECT_DIR . "/smarty/templates_c");
$smarty->setCacheDir(PROJECT_DIR . "/smarty/cache");
$smarty->setConfigDir(PROJECT_DIR . "/smarty/configs");

// MYSQL initiation
$mysql = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);
if(mysqli_connect_errno($mysql)){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
mysqli_set_charset($mysql, 'utf8');
session_start();

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : "";

//Common stuff on all of the pages
$page = "";
$page_title = "Main Page";
$page_errors = array();
$page_info = "";

switch ($action){
  case "add_avtale":
    add_avtale();
    break;
  case "add_person":
    add_person();
    break;
  case "add_gruppe":
    add_gruppe();
    break;
  case "add_gruppe_person":
    add_gruppe_person();
    break;
  case "add_avtale_person":
    add_avtale_person();
    break;
  case "add_avtale_gruppe":
    add_avtale_gruppe();
    break;
  case "list_person":
    list_person();
    break;
  case "list_gruppe":
    list_gruppe();
    break;
  case "list_avtale":
    list_avtale();
    break;
  case "main_page":
    $page="main_page";
    break;
  case "list_avtaler":
    list_avtaler();
    break;
  default:
    break;
}

//MOAR SMARTY SHIT
$smarty->assign(array(
  "page" => $page,
  "page_title" => $page_title,
  "page_errors" => $page_errors,
  "page_info" => $page_info,
));
$smarty->display("index.tpl");

//Close MYSQL connection
mysqli_close($mysql);
?>
