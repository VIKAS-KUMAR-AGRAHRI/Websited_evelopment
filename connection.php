<?php
session_start();
$idv=$_SESSION['userid'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname="ResumeBuilder";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql="SELECT * FROM `contact_info` WHERE id='$idv'";
$sql2="SELECT * FROM `about_info` WHERE id='$idv'";
$res=mysqli_query($conn,$sql);
$val=mysqli_fetch_assoc($res);
$res2=mysqli_query($conn,$sql2);
$val2=mysqli_fetch_assoc($res2);
?>