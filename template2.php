<?php
include 'connection.php';
if(isset($_SESSION['userid']) && $_SESSION['userid']==$val['id'])
{
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Template2 design</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="template2.css">
  <script type="text/javascript" src="template2.js"></script>
  <title>teplate2 design</title>
</head>
<body>
<?php include 'templatemenu.php';?>
<div class="wrapper">
  <div class="intro">
    <div class="profile">
      <div class="photo">
        <img src="https://i.imgur.com/zh9eNsh.jpg">
      </div>
      <div class="bio">
        <h1 class="name">
        <?php

        if(isset($val['name']) && $val['name']!='')
        {

          echo $val['name'];
        }
        else{
          echo "Chih-Hsiang Chen";
        }
        ?>
      </h1>
        <p class="profession">
        
        <?php

        if(isset($val['job_role']) && $val['job_role']!='')
        {

          echo $val['job_role'];
        }
        else{
          echo "Front-end Developer";
        }
        ?>
      </p>
      </div>
    </div>
    
    <div class="intro-section contact">
      <h1 class="title">Contact</h1>
      <div class="info-section">
        <i class="fas fa-phone"></i>
        <span>
        
        <?php

        if(isset($val['mobile']) && $val['mobile']!='')
        {

          echo $val['mobile'];
        }
        else{
          echo "(+886)888-888-888";
        }
        ?>        
      </span>
      </div>
      <div class="info-section">
        <i class="fas fa-map-marker-alt"></i>
        <span>
         <?php

        if(isset($val['address']) && $val['address']!='')
        {

          echo $val['address'];
        }
        else{
          echo "Kaoshiung, Taiwan";
        }
        ?>        
      </span>
      </div>
      <div class="info-section">
        <i class="fas fa-paper-plane"></i>
        <span>
        
        <?php

        if(isset($val['email']) && $val['email']!='')
        {

          echo $val['email'];
        }
        else{
          echo "chih.hsi.chen@gmail.com";
        }
        ?>        
      </span>
      </div>
      <div class="info-section link">
        <i class="fab fa-facebook"></i>
        <span>
          <?php

        if(isset($val['linkedin']) && $val['linkedin']!='')
        {

          echo $val['linkedin'];
        }
        else{
          echo "chih.hsi.linkedin.in";
        }
        ?>   

        </span>
        </a>
      </div>
    </div>
<!-- Language defined here..........................................-->
    <div class="intro-section follow">

      <h1 class="title">Language</h1>
         <?php 
              if (isset($val['language'])) {
              $str3=$val['language'];
              $arr=explode("#",$str3);
              if($arr[0]!="" && isset($arr[0]))
              {
                    for ($i=0; $i <count($arr) ; $i++) 
              { 
          ?>
                  <div class="info-section link">
                <i class="fab fa-github"></i>
               
                  <span>
                    <?php echo $arr[$i]; ?>
                  </span>
                </a>
                </div>
        <?php        
              }

            }
        }
      else
      {
      ?>
        <div class="info-section link">
        <i class="fab fa-github"></i>
       
          <span>
            Hindi
          </span>
        </a>
        </div>
        <div class="info-section link">
          <i class="fab fa-codepen"></i>
            <span>English</span>
          </a>
        </div>
        <div class="info-section link">
          <i class="fab fa-medium"></i>
         
            <span>Chinese</span>
          </a>
        </div>
      <?php
      }
      ?>

    </div>
    <!-- Language section data end here.............................................................-->
    <!-- Interest section data.............................................................-->
    <div class="intro-section follow">
      <h1 class="title">Interest</h1>
      <?php 
              if (isset($val['interest'])) {
              $str3=$val['interest'];
              $arr=explode("#",$str3);
              if($arr[0]!="" && isset($arr[0]))
              {
                    for ($i=0; $i <count($arr) ; $i++) 
              { 
          ?>
                  <div class="info-section link">
                <i class="fab fa-github"></i>
               
                  <span>
                    <?php echo $arr[$i]; ?>
                  </span>
                </a>
                </div>
        <?php        
              }

            }
             }
      else
            {
            ?>
      <div class="info-section link">
        <i class="fab fa-github"></i>
       
          <span>
            Self-learning
          </span>
        </a>
    </div>
    <div class="info-section link">
        <i class="fab fa-github"></i>
       
          <span>
            Cooking
          </span>
        </a>
    </div>
    <div class="info-section link">
        <i class="fab fa-github"></i>
       
          <span>
            Reading
          </span>
        </a>
    </div>
    <?php 
      }
    ?>
    </div>
  </div>
  <!-- Interest end here................................................................-->
  

<!--Education section......................................................................-->
<div class="detail">
    <div class="detail-section edu">
      <div class="intro-section about">
      <h1 class="title">Career Objective</h1>
      <p class="paragraph">
        <?php
        if (isset($val['career']) && $val['career']!='') {
          // code...
          echo $val['career'];
        }
        else
        {
          echo "Hi everyone, I am a web front-end developer, graduated from NTHU, Taiwan and my major is CS. I recently try my
        best to improve my skills on web front-end. My favorite thing is to observe others' portfolio.";
        }
        ?>
      </p>
    </div>
      <div class="detail-title">

        <div class="title-icon">
          <i class="fas fa-user-graduate"></i>
        </div>
        <span>Eduation</span>
      </div>
      <div class="detail-content">
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
        <div class="timeline-block">
          <h1>
            <?php
              if(isset($arr[$i]) && $arr[$i]!=""){
                echo $arr[$i];
              }
              else{
                 echo "Department of Computer Science";
              }
             ?>
         
        
        </h1>
        <p>
          <?php
              if(isset($arr2[$i]) && $arr2[$i]!=""){
                echo $arr2[$i];
              }
              else{
                 echo "National Tsing Hua University, Taiwan";
              }
             ?>
          
        </p>
          <time>
          
          <?php
              if(isset($arr3[$i]) && $arr3[$i]!=""){
                echo $arr3[$i];
              }
              else{
                 echo "2015 - 2019";
              }
             ?>
        </time>
        </div>
        <?php 
                }
              }
              else{
                ?>
                <div class="detail-content">
                <div class="timeline-block">
                  <h1>Department of Computer Science</h1>
                  <p>National Tsing Hua University, Taiwan</p>
                  <time>2015 - 2019</time>
                </div>
                <div class="timeline-block">
                  <h1>Institute of Computer Science and Engineering</h1>
                  <p>National Chiao Tung University, Taiwan</p>
                  <time>2020 - present</time>
                </div>
              </div>
                <?php

                  }
        ?>
        
      </div>
    </div>
<!-- Education end here......................................................................-->
    <div class="detail-section pg-skill">
      <div class="detail-title">
        <div class="title-icon">
          <i class="fas fa-laptop-code"></i>
        </div>
        <span>Programming skills</span>
      </div>
      <div class="detail-content">
        <ul class="pg-list">
          <?php 
              if (isset($val2['skill'])) {
              $str3=$val2['skill'];
              $arr=explode("#",$str3);
                    for ($i=0; $i <count($arr) ; $i++) 
              { 
                         
              
          ?>
                  <li>
                    <span>
                      <?php
                      if(isset($arr[$i]) && $arr[$i]!="")
                      {
                              echo $arr[$i];     
                            ?>
                    </span>
                    <div class="sb-skeleton">
                      <div class="skillbar" style="--pgbar-length: 90%"></div>
                    </div>
                  </li>
                  <?php 
                      }
              } 
            }
          else{

            ?>
            <li>
            <span>
              HTML
            </span>
            <div class="sb-skeleton">
              <div class="skillbar" style="--pgbar-length: 90%"></div>
            </div>
          </li>
          <li>
            <span>
              CSS
            </span>
            <div class="sb-skeleton">
              <div class="skillbar" style="--pgbar-length: 70%"></div>
            </div>
          </li>
          <li>
            <span>
              JAVASCRIPT
            </span>
            <div class="sb-skeleton">
              <div class="skillbar" style="--pgbar-length: 80%"></div>
            </div>
          </li>
            <?php
          }
          ?>
        </ul>
      </div>
    </div>

<!--project related data..............-->
    
      
    <div class="detail-section edu">
      <div class="detail-title">
        <div class="title-icon">
          <i class="fas fa-user-graduate"></i>
        </div>
        <span>Project</span>
      </div>
      <div class="detail-content">
        <?php 
         if (isset($val2['pro_name'])) {
          $str=$val2['pro_name'];
          $str2=$val2['pro_des'];
          $str3=$val2['pro_duration'];
          $arr=explode("#",$str);
          $arr2=explode("#",$str2);
          $arr3=explode("#",$str3);
          for ($i=0; $i <sizeof($arr) ; $i++) { 
        ?>
        <div class="timeline-block">
          <h1>
            <?php
              if(isset($arr[$i]) && $arr[$i]!=""){
                echo $arr[$i];
              }
             ?>
         
        
        </h1>
        <p>
          <?php
              if(isset($arr2[$i]) && $arr2[$i]!=""){
                echo $arr2[$i];
              }
             ?>
          
        </p>
          <time>
          
          <?php
              if(isset($arr3[$i]) && $arr3[$i]!=""){
                echo $arr3[$i];
              }
             ?>
        </time>
        </div>
        <?php 
            }
          }
          else{
            ?>
            <div class="detail-content">
                <div class="timeline-block">
                  <h1>Department of Computer Science</h1>
                  <p>National Tsing Hua University, Taiwan</p>
                  <time>2015 - 2019</time>
                </div>
                <div class="timeline-block">
                  <h1>Institute of Computer Science and Engineering</h1>
                  <p>National Chiao Tung University, Taiwan</p>
                  <time>2020 - present</time>
                </div>
              </div>
            <?php
          }
        ?>
        
      </div>
    </div>
</div>

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
     header('Refresh:1;information1.php');
   }
 
  }
  ?>
