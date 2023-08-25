<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Homepage</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">

</head>
<body>

<ul class="topnav">
	<li><a class="active" href="index.php">Home</a></li>
	<?php
	if(isset($_SESSION['userid']))
	{
		?>
			 <li class="right"><a href="logout.php">Logout</a></li>
		<?php
	}
	else{
		?>
		 <li><a href="login.php">Login</a></li>
		<?php
	}
?>
  
 
 
</ul>

	
	<div class="mainDiv">
<center>
<h1>There will different type layout</h1>
</center>
<?php
	if(isset($_SESSION['userid']))
	{
		?>
		
		<h1 style="color: red;"> Welcome your id :: <?php echo $_SESSION['userid'];?><h1>
		<?php
	}
?>
<div class="parent-div">
	<div class="child">
		<a href="template1.php"> <img src="temp/one.jfif" alt="template1"> </a>
	</div>
	<div class="child">
		<a href="template2.php"><img src="temp/two.jfif" alt="template2"></a>
	</div>
	<div class="child">
		<a href="template3.php"><img src="temp/three.jfif" alt="template3"></a>
	</div>
	<div class="child">
		<a href="template2.php"><img src="temp/four.jfif" alt="template4"></a>
	</div>
	<div class="child">
		<a href="template2.php"><img src="temp/five.jfif" alt="template5"></a>
	</div>
	<div class="child">
		<a href="template2.php"><img src="temp/six.jfif" alt="template6"></a>
	</div>
</div>
<!--<button onclick="logout()">logout</button>-->
<script type="text/javascript">
	// function logout() {
	// 	var url= "logout.php";
	// 	window.location = url;
	// }
</script>
</div>
</body>
</html>