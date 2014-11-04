<?php
!isset($_SESSION) ? session_start() : null;
if(isset($_SESSION['loggedUser']))
{
  header("location:signin.php");
}
?>
<!doctype html>
<html>
  <head>
    <meta name="charset" content="UTF-8">
    <title>Sign in our Sign up</title>
    <link rel="stylesheet" href="layout.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <h1 class="slogan">You can start using our App.</h1>
    <div class="container">
      <div class="sign-up">
        <h1>Sign up</h1>
        <p>Create an account if you are new</p>
        <form id="sup" action="signup.php" method="post">
          <label for="username">Username</label>
          <input type="text" name="username" id="username" value="" required>

          <label for="password">Password</label>
          <input type="password" id="password" name="password" value="" required>

          <label for="repassword">Password</label>
          <input type="password" id="repassword" name="repassword" value="" required>

          <button name="signupbtn" type="submit" class="btn" value="signupbtn">Sign me up</button>
          <!-- <div class="errors">

          </div> -->
        </form>
      </div>

      <div class="sign-in">
        <h1>Members</h1>
        <p>Log in to manage your profile</p>
        <form id="sin" action="signin.php" method="post">
          <label for="username">Username</label>
          <input type="text" name="username" id="username" value="" required>

          <label for="password">Password</label>
          <input type="password" id="password" name="password" value="" required>

          <button name="signinbtn" type="submit" class="btn" value="signinbtn">log me in</button>

        </form>
      </div>
    </div>
  </body>
</html>
