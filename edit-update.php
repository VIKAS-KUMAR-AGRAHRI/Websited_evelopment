<?php
include 'connection.php';
$name=$_POST['name'];
$job=$_POST['job_role'];
$co=$_POST['career_obje'];
$mob=$_POST['mob'];
$add=$_POST['address'];
$email=$_POST['email'];
$linkedin=$_POST['linkedin'];
//these are about table data ...........................................................
$edu_name="";
$edu_coll="";
$edu_year="";
$pro_name="";
$pro_des="";
$pro_dur="";
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
//update query written here......................................................................
$sql="UPDATE `contact_info` SET `name`='$name',`mobile`='$mob',`email`='$email',`linkedin`='$linkedin',`address`='$add',`career`='$co',`job_role`='$job' WHERE id='$idv'";
if(mysqli_query($conn,$sql))
{
	$sql="UPDATE `about_info` SET `edu_name`='$edu_name',`edu_year`='$edu_year',`edu_coll`='$edu_coll',`pro_name`='$pro_name',`pro_des`='$pro_des',`pro_duration`='$pro_dur' WHERE id='$idv'";
	mysqli_query($conn,$sql);
	echo "<center><h1>updation successfull</h1></center>";
}
else{
	echo "there are some error.";

}
 header("Refresh:1; url=edit.php");
?>