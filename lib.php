<?php

  //make the global variable $_SESSION available
  !isset($_SESSION) ? session_start() : null;

  $errors = array(); //errors container

  // check if the user has not submited an empty form
  foreach($_POST as $index => $value){

    if( empty($value) || trim($value) == '' && ($index !== "signupbtn" || $index !== "signinbtn") )
    {
      $errors[] = "The field ".$index." is empty.";
    }else{
      $$index = htmlspecialchars($_POST[$index], ENT_QUOTES, "UTF-8");
    }
    
  }
