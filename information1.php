<?php
//session_start();
error_reporting(E_ERROR | E_PARSE);
include 'connection.php';
if(isset($_SESSION['userid']) && $_SESSION['userid']!=$val['id'])
{  // code...
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
<ul class="topnav">
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="information1.php">Information</a></li>
  <li class="right"><a href="logout.php">Logout</a></li>
</ul>
  <center>
  <h2>If you want to multiple data then use # symbol like <br> cooking#Dancing#Singing</h2>
  </center>
  <form id="resumeForm" action="information.php" method="post" class="form" style="margin-top:2px;">
    <label >Full Name:</label>
    <input type="text" name="fullName" required class="box">
    <label >Mobile Number:</label>
    <input type="text" name="mobile" required maxlength="10" class="box">
    <label>Email:</label>
    <input type="email" name="email" required class="box">
    <label>linkedin Profile:</label>
    <input type="text" name="linkedin" required class="box">
    <label>Address:</label>
    <input type="text" name="address" required class="box">
<!-- Made it Multiple choice........................................ 
    <label>Language:</label>
    <input type="text" name="language" placeholder="Chinese#English$Tamil">
    <label>Interest:</label>
    <input type="text" name="interest" placeholder="cooking#Dancing#Singing">
--> 
    <br>
    <div style="border: 2px dashed red ;">
    <label><u><b>Languages:</b></u></label>
    <input type="checkbox" name="lang[]" value="Hindi">Hindi
    <input type="checkbox" name="lang[]" value="English">English
    <input type="checkbox" name="lang[]" value="Bhojpuri">Bhojpuri 
    <input type="checkbox" name="lang[]" value="Tamil">Tamil 
    </div>
    <br>
    <br>
    <div style="border: 2px dashed red ;">
    <label><u><b>Interests:</b></u></label>
    <input type="checkbox" name="interest[]" value="Reading Book" >Reading Book
    <input type="checkbox" name="interest[]" value="Playing Game">Playing Game
    <input type="checkbox" name="interest[]" value="Singing">Singing
    <input type="checkbox" name="interest[]" value="learn New skills">learn New skills
    </div>
    <br>
    <br>
<!-- Career Objective written here....................................-->
    <label for="fullName">Career Objective:</label>
    <input type="text" name="career_obje" class="box">
<!-- Job Role ..........................................................-->
    <label for="fullName">Job Role:</label>
    <input type="text" name="job_role" class="box">


    <button type="submit" name="submit" class="login">Save</button>
  </form>
  
  

</body>
</html>
<?php
}
else{
      echo "No information".$_SESSION['userid']."contact information of data in presenet";
      echo "<h1> Wait 2 second for redirection</h1>";
      //header("Location:about.php");
      header("Refresh:2; url=about.php");
}
  ?>
