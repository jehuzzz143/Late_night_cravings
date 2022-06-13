<?php
// Destroy the session.
include "db_connection.php";
session_start();
$_SESSION["loggedin"]=false;
$sqlLog = "INSERT into tbl_logs (log_Description, log_Time) VALUES('Logged Out', NOW())";
$result2 = $conn->query($sqlLog);
session_unset();
session_destroy();
 
// Redirect to Home page
header("location:Index.php");
exit;
?>