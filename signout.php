<?php
!isset($_SESSION) ? session_start() : null;

// remove the current session key
unset($_SESSION['loggedUser']);

// redirect to home page
header("location:index.php");
