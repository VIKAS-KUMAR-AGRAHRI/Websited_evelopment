<?php
session_start();
//$_SESSION['userid']="";
session_unset();
session_destroy();
echo "<h1>you are now logout </h1>";
header("Refresh:.5; url=index.php");
?>