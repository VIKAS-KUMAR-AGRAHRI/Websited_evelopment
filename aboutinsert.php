<?php
session_start();
    // Check if form is submitted successfully
    if(isset($_POST["submit"]))
    {   
        $skills="";
        $i=1;
        $exp="";
        $exp_year="";
        $exp_cmp="";
        $exp_des="";
        $pro_name="";
        $pro_des="";
        $pro_dur="";
        $edu_name="";
        $edu_year="";
        $edu_coll="";
        // Check if any option is selected
        if(isset($_POST["skill"]))
        {
            // Retrieving each selected option
            
            foreach ($_POST['skill'] as $subject){
                if ($i<count($_POST['skill'])) {
                    $skills=$skills.$subject."#";
                    $i++;
                }
                else{
                    $skills=$skills.$subject;
                }
            }
        }
//Education related data Insert.......................................................................................
        $i=1;
        if(isset($_POST["edu_name"]))
        {
            // Retrieving each selected option
            
            foreach ($_POST['edu_name'] as $subject){
                if ($i<count($_POST['edu_name'])) {
                    $edu_name=$edu_name.$subject."#";
                    $i++;
                }
                else{
                    $edu_name=$edu_name.$subject;
                }
            }
            $i=1;
             foreach ($_POST['edu_year'] as $subject){
                if ($i<count($_POST['edu_year'])) {
                    $edu_year=$edu_year.$subject."#";
                    $i++;
                }
                else{
                    $edu_year=$edu_year.$subject;
                }
            }
            $i=1;
             foreach ($_POST['edu_coll'] as $subject){
                if ($i<count($_POST['edu_coll'])) {
                    $edu_coll=$edu_coll.$subject."#";
                    $i++;
                }
                else{
                    $edu_coll=$edu_coll.$subject;
                }
            }
        }
//Education related data end  here##################################################################################
//project related data fetch.......................................................................................
        $i=1;
        if(isset($_POST["pro_name"]))
        {
            // Retrieving each selected option
            
            foreach ($_POST['pro_name'] as $subject){
                if ($i<count($_POST['pro_name'])) {
                    $pro_name=$pro_name.$subject."#";
                    $i++;
                }
                else{
                    $pro_name=$pro_name.$subject;
                }
            }
            $i=1;
             foreach ($_POST['pro_des'] as $subject){
                if ($i<count($_POST['pro_des'])) {
                    $pro_des=$pro_des.$subject."#";
                    $i++;
                }
                else{
                    $pro_des=$pro_des.$subject;
                }
            }
            $i=1;
             foreach ($_POST['pro_dur'] as $subject){
                if ($i<count($_POST['pro_dur'])) {
                    $pro_dur=$pro_dur.$subject."#";
                    $i++;
                }
                else{
                    $pro_dur=$pro_dur.$subject;
                }
            }
        }
//project related data end  here##################################################################################
//Experience Company related multiple data fetch here......................................................
        $i=1;
        if(isset($_POST["exp"]))
        {
            // Retrieving each selected option
            
            foreach ($_POST['exp'] as $subject){
                if ($i<count($_POST['exp'])) {
                    $exp=$exp.$subject."#";
                    $i++;
                }
                else{
                    $exp=$exp.$subject;
                }
            }
            $i=1;
             foreach ($_POST['exp_year'] as $subject){
                if ($i<count($_POST['exp_year'])) {
                    $exp_year=$exp_year.$subject."#";
                    $i++;
                }
                else{
                    $exp_year=$exp_year.$subject;
                }
            }
            $i=1;
             foreach ($_POST['exp_cmp'] as $subject){
                if ($i<count($_POST['exp_cmp'])) {
                    $exp_cmp=$exp_cmp.$subject."#";
                    $i++;
                }
                else{
                    $exp_cmp=$exp_cmp.$subject;
                }
            }
             $i=1;
             foreach ($_POST['exp_des'] as $subject){
                if ($i<count($_POST['exp_des'])) {
                    $exp_des=$exp_des.$subject."#";
                    $i++;
                }
                else{
                    $exp_des=$exp_des.$subject;
                }
            }
        }
//Company related multiple data end here##################################################################

    } 
    
if(isset($_POST["submit"]))
    { 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ResumeBuilder";
//fatch the value from information.php file
$skill=$skills;
//$_POST['skill'];
//$edu_name=$_POST['edu_name'];
//$edu_year=$_POST['edu_year'];
//$edu_coll=$_POST['edu_coll'];
//$exp=$_POST['exp'];
//$exp_year=$_POST['exp_year'];
//$exp_cmp=$_POST['exp_cmp'];
//$pro_name=$_POST['pro_name'];
//$pro_des=$_POST['pro_des'];
//$pro_dur=$_POST['pro_dur'];
//user id willll............
$id=$_SESSION['userid'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//upload data to table 
$sql = "INSERT INTO `about_info`(`id`, `skill`, `edu_name`, `edu_year`, `edu_coll`, `exp`, `exp_year`, `exp_cmp`, `exp_des`, `pro_name`, `pro_des`, `pro_duration`) VALUES ('$id','$skill','$edu_name','$edu_year','$edu_coll','$exp','$exp_year','$exp_cmp','$exp_des','$pro_name','$pro_des','$pro_dur')";


//upload data to folder which located at htdocs folder on Xampp 
if (mysqli_query($conn, $sql)) {
                         echo "New record created successfully";
                         header("Refresh:2; url=index.php");
                    } else {
                         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }

//connecte to output.php file to view the datafrom databse
//include("skill.html");

mysqli_close($conn);
}
?> 