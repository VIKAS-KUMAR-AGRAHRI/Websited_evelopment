<?php
//session_start();
error_reporting(E_ERROR | E_PARSE);
include 'connection.php';
if(isset($_SESSION['userid']) && $_SESSION['userid']!=$val2['id'])
{  
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <style type="text/css">
    .plus{
    font-size: 30px;
    color: red;
   
    top:20px;

    
  }
  .minus{
     font-size: 35px;
     color: red;
    top:40px;
    
  }
  table{
    width: 100%;
    border: 1px solid red;
    margin-bottom: 4px;
    margin-top: 4px;
  }
  td{
    border: 1px dashed blue;
  }
  </style>
</head>
<body>
<ul class="topnav">
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="information1.php">Information</a></li>
  <li class="right"><a href="logout.php">Logout</a></li>
</ul>
<center>
  <h2>If you want to multiple data then use # symbol like <br>project1_name#project2_name#project3_name</h2>
</center>
  <form id="resumeForm" action="aboutinsert.php" method="post" class="form" style="margin-top:2px;">
    <div style="border: 2px dashed red ;margin-bottom: 4px;">
    <label><u><b>Skills:</b></u></label>
    <input type="checkbox" name="skill[]" value="C">C Language
    <input type="checkbox" name="skill[]" value="Java">Java Language
    <input type="checkbox" name="skill[]" value="Php">Php language
    <input type="checkbox" name="skill[]" value="HTML">HTML language
    <input type="checkbox" name="skill[]" value="CSS">CSS
    <input type="checkbox" name="skill[]" value="Java Script">Java Script
    </div>
<!--multiple Education related insert form input......................................................................-->
    <table>
                  <tr>
                      <td>
                        <div id="addedu">  
          
                             <label>Education Name:</label>
                              <input type="text" name="edu_name[]" required  class="box">
                            <!-- Made it Multiple choice........................................ --> 
                              <label>Education Year:</label>
                               <input type="text" name="edu_year[]" required class="box">
                               <label>Education College:</label>
                                <input type="text" name="edu_coll[]" required class="box"><br>

            
            
                         </div>
                      </td>
                   <td valign="top">    
                <p>
                            <h3 id="p" onclick="edu(this.id)" class="plus">+</h3>
                            <h3 id="m" onclick="edu(this.id)" class="minus">-</h3>
                          </p>
                    </td>
                  </tr>
  </table>
<!--multiple Education related insert End  here####################################################################-->
    <!--multiple project insert form input......................................................................-->
    <table>
                  <tr>
                      <td>
                        <div id="addhere">  
          
                             <label>Project Name:</label>
                              <input type="text" name="pro_name[]" required  class="box">
                            <!-- Made it Multiple choice........................................ --> 
                              <label>Project Description:</label>
                               <input type="text" name="pro_des[]" required class="box">
                               <label>Project Duration:</label>
                                <input type="text" name="pro_dur[]" required class="box"><br>

            
            
                         </div>
                      </td>
                   <td valign="top">    
                <p>
                            <h3 id="p" onclick="inc(this.id)" class="plus">+</h3>
                            <h3 id="m" onclick="inc(this.id)" class="minus">-</h3>
                          </p>
                    </td>
                  </tr>
  </table>
   <!-- Company Experience Related design ......................................................-->
    <table>
                  <tr>
                      <td>
                        <div id="addproject">  
          
                             <label>Experience Technology:</label>
                              <input type="text" name="exp[]" required  class="box">
                            <!-- Made it Multiple choice........................................ --> 
                              <label>Experience Company:</label>
                               <input type="text" name="exp_cmp[]" required class="box">
                               <label>Experience Year:</label>
                                <input type="text" name="exp_year[]" required class="box"><br>
                                <label>Experience Description:</label>
                                <input type="text" name="exp_des[]" required class="box"><br>

            
            
                         </div>
                      </td>
                   <td valign="top">    
                <p>
                            <h3 id="p" onclick="company(this.id)" class="plus">+</h3>
                            <h3 id="m" onclick="company(this.id)" class="minus">-</h3>
                          </p>
                    </td>
                  </tr>
  </table>

    <button type="submit" name="submit" class="login">Save</button>
  </form>
  <script type="text/javascript" src="dynamic-element.js"></script>
  
</body>
</html>
<?php
}
else{
      echo $_SESSION['userid']."about information of data in presenet";
      echo "<h1> Wait 2 second for redirection</h1>";
      //header("Location:template2.php");
      header("Refresh:2; url=template2.php");
}
  ?>
