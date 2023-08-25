<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname="ResumeBuilder";
$val='';
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
//get register data values from the form submission...................
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else
{	
	$mob=$_POST['mobile'];
	$pass=$_POST['password'];
	//Registeration logic written here..........................................................................
	if (isset($_POST['reg']) && $_POST['reg']=="register") {
		// code...
					$name=$_POST['fullName'];
					$sql=	"INSERT INTO `logindata` VALUES ('','$name','$mob','$pass')";
					if(mysqli_query($conn,$sql))
					{
						echo "successfully insert into database";
						echo "<h1> Wait 2 second for redirection</h1>";
						header("Refresh:2; url=login.php");
					}
					else
					{
						echo "failed to insert";
					}
	}
	//Login step written here.........................................................................................
	else if (isset($_POST['login']) && $_POST['login']=="login") {
						$sql=	"SELECT `id`, `name`, `mobile`, `password` FROM `logindata` WHERE mobile='$mob'
						AND 
						password='$pass'";
						$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) > 0) {
					  // output data of each row
					  $row = mysqli_fetch_assoc($result);
					    $_SESSION["userid"] = $row["id"];
					    //echo "<h1> Wait 2 second for redirection</h1>";
					 		header("Location:index.php");

					}
					else{
						 echo "No data found";
					}

	}
	else
	{
		echo "something went wrong";
	}

}

?>