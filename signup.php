<?php

  require_once 'lib.php';


  // make sure the two passwords are the same
  if( $password !== $repassword )
  {
    $errors[] = "Passwords dont match.";
  }

  //session_unset(signup);

  /// make records in session variable - think about it
  if( sizeof($errors) == 0 )
  {
      ///insert user information into a database
      if( !array_key_exists($username, $_SESSION['signup'] )){
        $_SESSION['signup'][$username]['login'] = $username;
        $_SESSION['signup'][$username]['pass'] = $password;
      }else{
        print" > you are already a member";
      }

  }

  // display the current content of the $_SESSION DB
  var_dump($_SESSION);

    print '<a href="index.php">Return</a>';

?>

<!-- Check if there are errors and display theme if any -->
<?php require_once 'error_displayer.php'; ?>
