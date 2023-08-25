<!DOCTYPE html>
<html>
<head>
  
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <title>Registeration page</title>
  <style>
    h1{
      text-align: center;
     

    }
  </style>
</head>
<body>
<ul class="topnav">
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="login.php">Login</a></li>
  <li class="right"><a href="logout.php">Logout</a></li>
</ul>
  <h1>Please don't Repeat registeration if already register</h1>
  <form id="resumeForm" action="registerinsert.php" method="post" class="form">
    <label >Full Name:</label>
    <input type="text" name="fullName" required class="box">
    <label >Mobile Number:</label>
    <input type="text" name="mobile" required maxlength="10" class="box">
    <label>password:</label>
    <input type="password" name="password" required class="box">
    <label>confirm password:</label>
    <input type="password" name="cpass" required class="box" >
    <input type="submit" name="reg" value="register" class="login" align="center">
    <a href="login.php">Already account? click here</a>
  </form>

  
  

</body>
</html>