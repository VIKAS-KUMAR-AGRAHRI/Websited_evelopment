<?php
error_reporting(E_ERROR | E_PARSE);
include 'connection.php';
if(isset($_SESSION['userid'])){
$sql="DELETE FROM `contact_info` WHERE id='$idv'";
$sql2="DELETE FROM `about_info` WHERE id='$idv'";
  if(mysqli_query($conn,$sql))
  {
    mysqli_query($conn,$sql2);
    echo "deletion successfull";
    header('Refresh:1;index.php');
  }
  else
  {
    echo "<center><h1>No record found</h1></center>";
  }
  
}
else
{
  echo "<center>404 Page not Found</center>";
}
?>