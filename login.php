<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Registeration page</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
<ul class="topnav">
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="login.php">Login</a></li>
  <li class="right"><a href="logout.php">Logout</a></li>
</ul>
  <form id="resumeForm" action="registerinsert.php" method="post" class="form">
    <label >Mobile Number:</label>
    <input type="text" name="mobile" required maxlength="10" class="box">
    <label>password:</label>
    <input type="password" name="password" required class="box">
    
    <button type="submit" name="login" value="login" class="login">Login</button>
    <a href="register1.php" >New user? click here</a>
  </form>

  

</body>
</html>