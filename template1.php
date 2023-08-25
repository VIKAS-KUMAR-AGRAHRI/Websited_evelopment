<?php
include 'connection.php';
if(isset($_SESSION['userid']) && $_SESSION['userid']==$val['id'])
{
?>
<!DOCTYPE html>
<html lang="eg">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="template1.css">

</head>
<body>
	<?php include 'templatemenu.php';?>
<center>
<div id="outer">
	<div id="h">
		<div id="h1"></div>
		<div id="h2">
			<div id="h21"></div>
			<div id="h22"></div>
		</div>
	</div>
	
	<div id="name">
		<?php

        if(isset($val['name']) && $val['name']!='')
        {

          echo $val['name'];
        }
        else{
          echo "<span style='color:#fc5e03;'>NIHARIKA</span> SEN&nbsp";
        }
        ?>
		<img src="image/capture.png" style="width:350px;"/>
	</div>
	<div id="profile">
		<div id="pro1">
			<div id="pro11">
			
			<?php

		        if(isset($val['job_role']) && $val['job_role']!='')
		        {

		          echo $val['job_role'];
		        }
		        else{
		          echo "GRAPHIC DESIGNER";
		        }
		    ?>
		</div>
			<div id="pro12"><img src="image/resume.jpg" style="height:210px; width:210px; border-radius:100%; border:2px groove #fc5e03;" /></div>
		</div>
		<div id="pro2">
			<div id="pro21" style="color:white;">“</div>
			<div id="pro22">
			<?php
        if (isset($val['career']) && $val['career']!='') {
          // code...
          echo $val['career'];
        }
        else
        {
          echo "An organized and motivated employee capable of time management and working under pressure in all environments. Seeking to join Acme Corp as an Administrative Assistant to assist in ensuring good internal communications and budget management.";
        }
        ?>
		</div>
		</div>
	</div>
	<div id="main">
		<div id="contact">
		<h2>Contact</h2>
			<span><b>Phone</b></span><br/>
			<?php

		        if(isset($val['mobile']) && $val['mobile']!='')
		        {

		          echo $val['mobile'];
		        }
		        else{
		          echo "(+886)888-888-888";
		        }
		        ?>   
			<br/></br>
			<span><b>Email</b></span><br/>
			<?php

		        if(isset($val['email']) && $val['email']!='')
		        {

		          echo $val['email'];
		        }
		        else{
		          echo "niharika3234@gmail.com";
		        }
		        ?>      
			<br/></br>
			<span><b>Address</b></span><br/>
			123 Prayagraj, UttarPradesh
			<?php

		        if(isset($val['address']) && $val['address']!='')
		        {

		          echo $val['address'];
		        }
		        else{
		          echo "Kaoshiung, Taiwan";
		        }
		        ?>   
			<br/></br>
		<h2>Programming skills</h2>
			<ul>
			<?php 
              if (isset($val2['skill'])) {
              $str3=$val2['skill'];
              $arr=explode("#",$str3);
                    for ($i=0; $i <count($arr) ; $i++) 
              { 
                         
              
          ?>
          <li>
          	<?php
               if(isset($arr[$i]) && $arr[$i]!="")
                      {
                              echo $arr[$i];     
                            ?>
                            	
			</li>
			<?php
		}
	}
}
				 else{

            ?>
				<li>C</li>
				<li>Java </li>
				<li>Python</li>
				<li>Php</li>
				<li>HTML</li>
				<li>CSS</li>
			<?php 
				}
			?>
			</ul>
		<h2>Language</h2>
		<?php 
              if (isset($val['language'])) {
              $str3=$val['language'];
              $arr=explode("#",$str3);
              if($arr[0]!="" && isset($arr[0]))
              {
                    for ($i=0; $i <count($arr) ; $i++) 
              { 

          ?>
          		<span>
                    <?php echo $arr[$i]; ?>
                  </span>
            <img src="image/hindi.png" style="width:150px;"/>
        <?php        
              }

            }
        }
      else
      {
      ?>
		Hindi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<img src="image/hindi.png" style="width:150px;"/>
		<br/>
		English&nbsp;&nbsp;
		<img src="image/eng.png" style="width:150px;"/>
	<?php 
	} 
	?>
		</div>
		<div id="experience">
			<h2>Experience</h2>
			<?php 
		        if (isset($val2['exp'])) {
		         
		        
		          $str=$val2['exp_cmp'];
		          $str2=$val2['exp_year'];
		          $str3=$val2['exp'];
		          $str4=$val2['exp_des'];
		          $arr=explode("#",$str);
		          $arr2=explode("#",$str2);
		          $arr3=explode("#",$str3);
		          $arr4=explode("#",$str4);
		          for ($i=0; $i <sizeof($arr) ; $i++) { 
		        ?>
		        <p style="text-align:justify;">
				<span style="line-height:19px;">
				<span>
					<b><?php
		              if(isset($arr[$i]) && $arr[$i]!=""){
		                echo $arr[$i];
		              } 
              ?>
              </b>
					<?php
		              if(isset($arr2[$i]) && $arr2[$i]!=""){
		                echo $arr2[$i];
		              }
		               ?>
					</span>
					 <br/>
				<img src="image/hindi.png" style="width:100px;height:4px;"/>&nbsp;&nbsp;&nbsp; 
				<?php
	              if(isset($arr3[$i]) && $arr3[$i]!=""){
	                echo $arr3[$i];
	              }?><br/>
	          </span>
				<?php
	              if(isset($arr3[$i]) && $arr3[$i]!=""){
	                echo $arr4[$i];
	              }?>
				</p>
			<?php 
                }
              }
			else
			{
			?>
				<p style="text-align:justify;">
				<span style="line-height:19px;">
				<span><b>Company Name</b> 2017-2020</span><br/>
				<img src="image/hindi.png" style="width:100px;height:4px;"/>&nbsp;&nbsp;&nbsp;Job Position<br/></span>
				A job title in your work experience section explains your employment history and shows how your experience is relevant.
				</p>
				<p style="text-align:justify;">
				<span style="line-height:19px;">
				<span><b>Company Name</b> 2017-2020</span><br/>
				<img src="image/hindi.png" style="width:100px;height:4px;"/>&nbsp;&nbsp;&nbsp;
				Job Position<br/></span>
				A job title in your work experience section explains your employment history and shows how your experience is relevant.
				</p>
			<?php 
		}
		if (isset($val2['exp'])) {
			?>
				<h2>Project</h2>
			<?php 
		        
		         
		        
		          $str=$val2['pro_name'];
		          $str2=$val2['pro_duration'];
		          $str3=$val2['pro_des'];
		          $arr=explode("#",$str);
		          $arr2=explode("#",$str2);
		          $arr3=explode("#",$str3);
		         
		          for ($i=0; $i <sizeof($arr) ; $i++) { 
		        ?>
		        <p style="text-align:justify;">
				<span style="line-height:19px;">
				<span>
					<b><?php
		              if(isset($arr[$i]) && $arr[$i]!=""){
		                echo $arr[$i];
		              } 
              ?>
              </b>
					<?php
		              if(isset($arr2[$i]) && $arr2[$i]!=""){
		                echo $arr2[$i];
		              }
		               ?>
					</span>
					 <br/>
				<img src="image/hindi.png" style="width:100px;height:4px;"/>&nbsp;&nbsp;&nbsp; 
				<br/>
	          </span>
				<?php
	              if(isset($arr3[$i]) && $arr3[$i]!=""){
	                echo $arr3[$i];
	              }?>
				</p>
			<?php 
                }
              }
			else
			{
			?>
				<p style="text-align:justify;">
				<span style="line-height:19px;">
				<span><b>Company Name</b> 2017-2020</span><br/>
				<img src="image/hindi.png" style="width:100px;height:4px;"/>&nbsp;&nbsp;&nbsp;Job Position<br/></span>
				A job title in your work experience section explains your employment history and shows how your experience is relevant.
				</p>
				<p style="text-align:justify;">
				<span style="line-height:19px;">
				<span><b>Company Name</b> 2017-2020</span><br/>
				<img src="image/hindi.png" style="width:100px;height:4px;"/>&nbsp;&nbsp;&nbsp;
				Job Position<br/></span>
				A job title in your work experience section explains your employment history and shows how your experience is relevant.
				</p>
			<?php 
		}
			?>
		
			<h2>Education</h2>

				<table cellpadding="10px">
					<?php 
				        if (isset($val2['edu_name'])) {
				         
				        
				          $str=$val2['edu_name'];
				          $str2=$val2['edu_coll'];
				          $str3=$val2['edu_year'];
				          $arr=explode("#",$str);
				          $arr2=explode("#",$str2);
				          $arr3=explode("#",$str3);
				          for ($i=0; $i <sizeof($arr) ; $i++) { 
				        ?>
					<tr>
						<td width="35%">
							<?php
			              if(isset($arr3[$i]) && $arr3[$i]!=""){
			                echo $arr3[$i];
			              }
			              ?>
							<br/>University/College<br/>Your Degree

						</td>
						<td width="65%"><?php
			              if(isset($arr2[$i]) && $arr2[$i]!=""){
			                echo $arr2[$i];
			              }
			              ?>
			              <br/>
						<?php
			              if(isset($arr[$i]) && $arr[$i]!=""){
			                echo $arr[$i];
			              }
			              ?>
			          </td>
					</tr>
					 <?php 
                }
              }
              else{
                ?>
					<tr>
						<td width="35%">2015<br/>University Name<br/>Your Degree</td>
						<td width="65%">Shambunath Institute of Engineering and Technology<br/>
						Becholar of Technology</td>
					</tr>
					<tr>
						<td>2015<br/>University Name<br/>Your Degree</td>
						<td>Shambunath Institute of Engineering and Technology<br/>
						Becholar of Technology</td>
					</tr>
					<tr>
						<td>2015<br/>University Name<br/>Your Degree</td>
						<td>Shambunath Institute of Engineering and Technology<br/>
						Becholar of Technology</td>
					</tr>
				<?php
			}
			?>
				</table>
		</div>
	</div>
</div>
</center>
</body>
</html>
<?php
}
else{
   if (!isset($_SESSION['userid'])){
     echo '<script>alert("Please login first")</script>';
     header('Location:login.php');
   }
   else{
     //header('Refresh:1;information1.php');
     header('Location:information1.php');
   }
 
  }
  ?>