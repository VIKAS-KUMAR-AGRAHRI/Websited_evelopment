<?php 
		include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>	Edit the page</title>
	<style type="text/css">
		.mainDiv{

						width: 60%;
						background-color: blueviolet;
						margin: auto;
		}
		.item{
				border: 2px solid red;
				margin-bottom: 10px;
		}
		input{
			display: block;
			width: 95%;
			height:50px;
			margin: 5px;
			font-size: 20px;
			border-radius:5px;
		}
   		label{
   			font-size: 30px;
   		}
   		.co-height{
   			height:70px;
			margin: 5px;
			font-size: 17px;
   		}
   		.education{
   			border:2px solid burlywood;
   		}
	</style>
</head>
<body>
	<?php include 'templatemenu.php';?>
	<form action="edit-update.php" method="post">	
<div class="mainDiv">	
		<div class="item">
			<label>	Name</label>
			<input type="text" name="name" value="<?php echo $val['name'];?>">
			<label>Job Role</label>
			<input type="text" name="job_role" value="<?php echo $val['job_role'];?>">
			<label>	Career Objective</label>
			<input type="text" name="career_obje" value="<?php echo $val['career'];?>" class="co-height">
		</div>
		<div class="item">
			<label>Mobile Number</label>
			<input type="text" name="mob" value="<?php echo $val['mobile'];?>">
			<label>Address</label>
			<input type="text" name="address" value="<?php echo $val['address'];?>">
			<label>	Email</label>
			<input type="text" name="email" value="<?php echo $val['email'];?>" class="co-height">
			<label>	Linked-in Profile</label>
			<input type="text" name="linkedin" value="<?php echo $val['linkedin'];?>" class="co-height">
		</div>
		<div class="item">
			<center  style='color:darkred;'><label>EDUCATION</label></center>
			 <?php 
        if (isset($val2['edu_name'])) {
         
        
          $str=$val2['edu_name'];
          $str2=$val2['edu_coll'];
          $str3=$val2['edu_year'];
          $arr=explode("#",$str);
          $arr2=explode("#",$str2);
          $arr3=explode("#",$str3);
          for ($i=0; $i <sizeof($arr) ; $i++) { 
              if(isset($arr[$i]) && $arr[$i]!=""){
                ?>
               <div class="education">
               	<h3><?php echo $i+1; ?> College/Schoole Information</h3>
               	<label>Education Name:</label>
               <input type="text" name="edu_name[]" value="<?php echo $arr[$i];?>" class="co-height">
                 <label>Education College:</label>
               <input type="text" name="edu_coll[]" value="<?php echo $arr2[$i];?>" class="co-height">
               <label>Education Year:</label>
               <input type="text" name="edu_year[]" value="<?php echo $arr3[$i];?>" class="co-height">
               </div>
              <?php 
              }
          }
      }
              ?>
		</div>
		<div class="item">
			<center style='color:darkred;'><label>PROJECTS</label></center>
			 <?php 
        if (isset($val2['pro_name'])) {
         
        
          $str=$val2['pro_name'];
          $str2=$val2['pro_des'];
          $str3=$val2['pro_duration'];
          $arr=explode("#",$str);
          $arr2=explode("#",$str2);
          $arr3=explode("#",$str3);
          for ($i=0; $i <sizeof($arr) ; $i++) { 
              if(isset($arr[$i]) && $arr[$i]!=""){
                ?>
            <div class="education">
               	<h3><?php echo $i+1; ?> Project information</h3>
                <label>Project Name:</label>
               <input type="text" name="pro_name[]" value="<?php echo $arr[$i];?>" required  class="co-height">
             <!-- Made it Multiple choice........................................ --> 
              <label>Project Description:</label>
              <input type="text" name="pro_des[]" value="<?php echo $arr2[$i];?>" required class="co-height">
              <label>Project Duration:</label>
               <input type="text" name="pro_dur[]" value="<?php echo $arr3[$i];?>" required class="co-height">

               </div>
              <?php 
              }
          }
      }
              ?>
		</div>
		<input type="submit" name="submit" value="Save">
</div>
</form>
</table>
</body>
</html>