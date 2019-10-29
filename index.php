<?php
  require_once 'externals/functions.php';

  if(!($_SERVER['REQUEST_METHOD']=='GET' || $_SERVER['REQUEST_METHOD']=='POST')) {
    http_response_code(404);
    die();
  }

  $error = "";
  $nums = "0123456789";
  $uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  $lowercase = "abcdefghijklmnopqrstuvwxyz";
  $specialchars = "!%^&*()_-+={[}]~#@:;?/>.<,|";
  
  if($_SERVER['REQUEST_METHOD'] == 'GET') {
    # Use defaults
    $length = 25;
    $characterset = $nums . $uppercase . $lowercase . $specialchars;
    $password = generatePassword($length, $characterset);
  }
  elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    var_dump($_POST);

    $length   = isset($_POST['length']) ? intval($_POST['length']) : 25;

    $upper    = isset($_POST['upper']) ? $_POST['upper'] : "off";
    $lower    = isset($_POST['lower']) ? $_POST['lower'] : "off";
    $numbers  = isset($_POST['numbers']) ? $_POST['numbers'] : "off";
    $special  = isset($_POST['special']) ? $_POST['special'] : "off";

    $upperState    = ($upper == "on")    ? 1 : 0;
    $lowerState    = ($lower == "on")    ? 1 : 0;
    $specialState  = ($special == "on")  ? 1 : 0;
    $numbersState  = ($numbers == "on")  ? 1 : 0;

    $state = intval($upperState) + intval($lowerState) + intval($specialState) + intval($numbersState);

    if($state < 1) {
      $password = "";
      $error = "One of the character sets must be set.";
    }
    else {
      $error = "";
      $characterset = "";
      if($upperState) {
        $characterset .= $uppercase;
      }
      if($lowerState) {
        $characterset .= $lowercase;
      }
      if($specialState) {
        $characterset .= $specialchars;
      }
      if($numbersState) {
        $characterset .= $nums;
      }
      var_dump($characterset);
      
      $password = generatePassword($length, $characterset);
    }
  }
  else {
    http_response_code(404);
    die();
  }

  $page = file_get_contents('templates/header.php');
  $page .= file_get_contents('templates/footer.php');

  #$password = generatePassword($length, $characterset);
  $page = sprintf($page, $password, $error);

  $page = eval("?>$page");
  echo $page;

?>