<?php
  function generatePassword($length, $characterset) {
    $password = "";
    $charsArr = str_split($characterset);

    for($i=0; $i<$length; $i++) {
      $ind = rand(0,sizeof($charsArr) - 1);
      $password .= $charsArr[$ind];
    }

    return $password;
  }
?>