<?php
// Destroy the session.

session_start();
$_SESSION["loggedin"]=false;

session_unset();
session_destroy();
 
// Redirect to Home page
header("location:Index.php");
exit;
?>