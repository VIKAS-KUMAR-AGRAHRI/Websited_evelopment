<?php
session_start();
    $lang="";
    $interest="";
    $i=1;
    // Check if form is submitted successfully
    if(isset($_POST["submit"]))
    {
        // Check if any option is selected
        if(isset($_POST["lang"]))
        {
            // Retrieving each selected option
            
            foreach ($_POST['lang'] as $subject){
                if ($i<count($_POST['lang'])) {
                    $lang=$lang.$subject."#";
                    $i++;
                }
                else{
                    $lang=$lang.$subject;
                }
            }
            $i=1;
            foreach ($_POST['interest'] as $subject){
                if ($i<count($_POST['interest'])) {
                    $interest=$interest.$subject."#";
                    $i++;
                }
                else{
                    $interest=$interest.$subject;
                }
            }
        }
    } 
    
//image upload code...................
   
    $filename = $_FILES["pic"]["name"];
    $tempname = $_FILES["pic"]["tmp_name"];
    $folder = "./resumepic/" . $filename;
   
//image upload end here...................
// Get all the submitted data from the form

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ResumeBuilder";
//fatch the value from information.php file
$name=$_POST['fullName'];
$mob=$_POST['mobile'];
$email=$_POST['email'];
$linkedin=$_POST['linkedin'];
$address=$_POST['address'];
//$hobbis=$_POST['hobbis'];
$lang= $lang;//$_POST['language'];
$interest=$interest;//$_POST['interest'];
$career_obje=$_POST['career_obje'];
$job_role=$_POST['job_role'];
//user id willll............
$id=$_SESSION['userid'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//upload data to table 
$sql = "INSERT INTO `contact_info`(`id`, `name`, `mobile`, `email`, `linkedin`, `address`, `language`, `interest`, `career`, `job_role`, `pic`) VALUES ('$id','$name','$mob','$email','$linkedin','$address','$lang','$interest','$career_obje','$job_role','$filename')";


//upload data to folder which located at htdocs folder on Xampp 
if (mysqli_query($conn, $sql)) {
                         echo "New record created successfully";
                         if (move_uploaded_file($tempname, $folder)) {
                                echo "<script>alert('Image upload succesfully');</script>";
                            } else {
                                echo "<script>alert('Unsuccessfull');</script>";
                            }
                         header("Refresh:2; url=about.php");
                    } else {
                         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }

//connecte to output.php file to view the datafrom databse
mysqli_close($conn);
?> 