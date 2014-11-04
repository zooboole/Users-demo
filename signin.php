<?php require_once 'lib.php' ?>

<!-- display our registered users -->
<pre>
  <?php  var_dump($_SESSION) ?>
</pre>

<!-- check user's cridentials -->
<?php
if( isset($username) ){
  if( array_key_exists($username, $_SESSION['signup']) )
  {
    if( $_SESSION['signup'][$username]['pass'] == $password )
    {
      $_SESSION['loggedUser'] = $username;
    }else{
      print "Invalid password";
    }
  }else{
    print "Invalid username";
  }
}

?>

<?php
print isset($_SESSION['loggedUser']) ? "Welcome, <strong>".$_SESSION['loggedUser']."</strong> | <a href='signout.php'>Sign out</a>" : '';
?>

<!-- display errors if any -->
<?php require_once 'error_displayer.php' ?>
