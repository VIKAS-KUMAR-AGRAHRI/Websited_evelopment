<?php
include 'connection.php';
if(isset($_SESSION['userid']) && $_SESSION['userid']==$val['id'])
{
?>
<html>
    <head>
        <link rel="stylesheet" href="template3.css">
    </head>

    <body>
      <?php
      include 'templatemenu.php'; 
      ?>
        <div class="resume">
            <div class="resume_left">
              <div class="resume_profile">
                <img src="./resumepic/<?php echo $val['pic']; ?>" alt="profile_pic">
              </div>
              <div class="resume_content">
                <div class="resume_item resume_info">
                  <div class="title">
                    <p class="bold">
                     <?php

                      if(isset($val['name']) && $val['name']!='')
                      {

                        echo $val['name'];
                      }
                      else{
                        echo "Chih-Hsiang Chen";
                      }
                      ?>
                  </p>
                    <p class="regular">
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
                  <ul>
                    <li>
                    
                      <div class="data">
                       <?php

                        if(isset($val['address']) && $val['address']!='')
                        {

                          echo $val['address'];
                        }
                        else{
                          echo "Kaoshiung, Taiwan";
                        }
                        ?>        <br />
                      </div>
                    </li>
                    <li>
                      
                      <div class="data">
                        <?php

                      if(isset($val['mobile']) && $val['mobile']!='')
                      {

                        echo $val['mobile'];
                      }
                      else{
                        echo "(+886)888-888-888";
                      }
                      ?>        
                      </div>
                    </li>
                    <li>
                      
                      <div class="data">
                        <?php

                        if(isset($val['email']) && $val['email']!='')
                        {

                          echo $val['email'];
                        }
                        else{
                          echo "chih.hsi.chen@gmail.com";
                        }
                        ?>    
                      </div>
                    </li>
                    <li>
                     
                      <div class="data">
                       <?php

                        if(isset($val['linkedin']) && $val['linkedin']!='')
                        {

                          echo $val['linkedin'];
                        }
                        else{
                          echo "chih.hsi.linkedin.in";
                        }
                        ?>   
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="resume_item resume_skills">
                  <div class="title">
                    <p class="bold">skill's</p>
                  </div>
                  <ul>
                    <?php 
              if (isset($val2['skill'])) {
              $str3=$val2['skill'];
              $arr=explode("#",$str3);
                    for ($i=0; $i <count($arr) ; $i++) 
              { 
                         
              
          ?>
                     <li>
                      <div class="skill_name">
                        <?php
                        if(isset($arr[$i]) && $arr[$i]!="")
                      {
                              echo $arr[$i];     
                            ?>
                      </div>
                      <div class="skill_progress">
                        <span style="width: 80%;"></span>
                      </div>
                    </li>
                    <?php
    }
  }
}
         else{

            ?>
                    <li>
                      <div class="skill_name">
                        HTML
                      </div>
                      <div class="skill_progress">
                        <span style="width: 80%;"></span>
                      </div>
                      <div class="skill_per">80%</div>
                    </li>
                    <li>
                      <div class="skill_name">
                        CSS
                      </div>
                      <div class="skill_progress">
                        <span style="width: 70%;"></span>
                      </div>
                      <div class="skill_per">70%</div>
                    </li>
                    <li>
                      <div class="skill_name">
                        Java
                      </div>
                      <div class="skill_progress">
                        <span style="width: 90%;"></span>
                      </div>
                      <div class="skill_per">90%</div>
                    </li>
                    <li>
                      <div class="skill_name">
                        JS
                      </div>
                      <div class="skill_progress">
                        <span style="width: 60%;"></span>
                      </div>
                      <div class="skill_per">60%</div>
                    </li>
                    <li>
                      <div class="skill_name">
                        Jsp
                      </div>
                      <div class="skill_progress">
                        <span style="width: 88%;"></span>
                      </div>
                      <div class="skill_per">88%</div>
                    </li>
                    <?php 
        }
      ?>
                  </ul>
                </div>

                <div class="resume_item resume_skills">
                  <div class="title">
                    <p class="bold">Hobby</p>
                  </div>
                 <ul>
                  <?php 
                      if (isset($val['interest'])) {
                      $str3=$val['interest'];
                      $arr=explode("#",$str3);
                      if($arr[0]!="" && isset($arr[0]))
                      {
                          for ($i=0; $i <count($arr) ; $i++) 
                      { 
                  ?>
                    <li> <?php echo $arr[$i]; ?></li>
                   <?php        
              }

            }
             }
      else
            {
            ?>
               
                  <li>Reading book</li>
                  <li>Playing Cricket</li>
                  <li>Writing</li>
               </ul>
          <?php 
        }
        ?>
                </div>
                
             <div class="resume_item resume_skills">
                  <div class="title">
                    <p class="bold">Languages</p>
                  </div>
                 <ul>
                  <?php 
                      if (isset($val['language'])) {
                      $str3=$val['language'];
                      $arr=explode("#",$str3);
                      if($arr[0]!="" && isset($arr[0]))
                      {
                          for ($i=0; $i <count($arr) ; $i++) 
                      { 
                  ?>
                    <li> <?php echo $arr[$i]; ?></li>
                   <?php        
              }

            }
             }
      else
            {
            ?>
               
                  <li>Hindi</li>
                  <li>English</li>
                  <li>Bhojpuri</li>
               </ul>
          <?php 
        }
        ?>
                </div>
                
              </div>
           </div>
           <div class="resume_right">
             <div class="resume_item resume_about">
                 <div class="title">
                    <p class="bold">Career Objective</p>
                  </div>
                 <p>
                  <?php
            if (isset($val['career']) && $val['career']!='') {
              echo $val['career'];
            }
            else
            {
              echo "Hi everyone, I am a web front-end developer, graduated from NTHU, Taiwan and my major is CS. I recently try my
            best to improve my skills on web front-end. My favorite thing is to observe others' portfolio.";
            }
            ?></p>
             </div>
             <div class="resume_item resume_work">
                 <div class="title">
                    <p class="bold">Work Experience</p>
                  </div>
                  <ul>
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
                 
                  <li>
                         <div class="date">
                          <?php
                          if(isset($arr3[$i]) && $arr3[$i]!=""){
                            echo $arr3[$i];
                          } 
                      ?> 
                      - 
              <?php
                  if(isset($arr2[$i]) && $arr2[$i]!=""){
                    echo $arr2[$i];
                  } 
              ?></div> 
                         <div class="info">
                              <p class="semi-bold"><?php
                  if(isset($arr[$i]) && $arr[$i]!=""){
                    echo $arr[$i];
                  } 
              ?>
                
              </p> 
                           <p>
                            <?php
                              if(isset($arr4[$i]) && $arr4[$i]!=""){
                                echo $arr4[$i];
                              } 
                          ?>
                
              </p>
                         </div>
                     </li>
                  <?php 
                }
              }
      else
      {
      ?>
                     <li>
                         <div class="date">2013 - 2015</div> 
                         <div class="info">
                              <p class="semi-bold">Lorem ipsum dolor sit amet.</p> 
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus!</p>
                         </div>
                     </li>
                     <li>
                       <div class="date">2015 - 2017</div>
                       <div class="info">
                              <p class="semi-bold">Lorem ipsum dolor sit amet.</p> 
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus!</p>
                         </div>
                     </li>
                     <li>
                       <div class="date">2017 - Present</div>
                       <div class="info">
                              <p class="semi-bold">Lorem ipsum dolor sit amet.</p> 
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus!</p>
                         </div>
                     </li>
                 </ul>
                 <?php 
               }
                 ?>
             </div>
             <div class="resume_item resume_education">
               <div class="title">
                    <p class="bold">Projects</p>
                  </div>
               <ul>
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
                  <li>
                   <div class="date">
                           <?php
              if(isset($arr[$i]) && $arr[$i]!=""){
                echo $arr[$i];
              }
              ?>
                 </div> 
              <div class="info">
                              <p class="semi-bold"><?php
              if(isset($arr2[$i]) && $arr2[$i]!=""){
                echo $arr2[$i];
              }?>
                
              </p> 
              <p><?php
              if(isset($arr3[$i]) && $arr3[$i]!=""){
                echo $arr3[$i];
              }
              ?>
              </p>
             </div>
              </li>

                <?php 
                }
              }
              else{
                ?>
                     <li>
                         <div class="date">2010 - 2013</div> 
                         <div class="info">
                              <p class="semi-bold">Web Designing (Texas University)</p> 
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus!</p>
                         </div>
                     </li>
                     <li>
                       <div class="date">2000 - 2010</div>
                       <div class="info">
                              <p class="semi-bold">Texas International School</p> 
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus!</p>
                         </div>
                     </li>
                     <?php 
                   }
                     ?>
                 </ul>
             </div>
             
             <div class="resume_item resume_education">
               <div class="title">
                    <p class="bold">Education</p>
                  </div>
               <ul>
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
                  <li>
                   <div class="date">
                           <?php
              if(isset($arr3[$i]) && $arr3[$i]!=""){
                echo $arr3[$i];
              }
              ?>
                 </div> 
              <div class="info">
                              <p class="semi-bold"><?php
              if(isset($arr2[$i]) && $arr2[$i]!=""){
                echo $arr2[$i];
              }?>
                
              </p> 
              <p><?php
              if(isset($arr[$i]) && $arr[$i]!=""){
                echo $arr[$i];
              }
              ?>
              </p>
             </div>
              </li>

                <?php 
                }
              }
              else{
                ?>
                     <li>
                         <div class="date">2010 - 2013</div> 
                         <div class="info">
                              <p class="semi-bold">Web Designing (Texas University)</p> 
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus!</p>
                         </div>
                     </li>
                     <li>
                       <div class="date">2000 - 2010</div>
                       <div class="info">
                              <p class="semi-bold">Texas International School</p> 
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus!</p>
                         </div>
                     </li>
                     <?php 
                   }
                     ?>
                 </ul>
             </div>
              <?php 
                  if (isset($val2['extra_carriculam']) && $val2['extra_carriculam']!="") {
                    ?>
             <div class="resume_item resume_education">
               <div class="title">
                    <p class="bold">Extra Carriculam</p>
                  </div>
               <ul>
                <?php              
                    $str=$val2['extra_carriculam'];
                    $arr=explode("#",$str);
                    for ($i=0; $i <sizeof($arr) ; $i++) { 
                  ?>
                  <li>
                   <div class="date">
                           <?php
                                if(isset($arr[$i]) && $arr[$i]!=""){
                                  echo $arr[$i];
                                }
                           ?>
                 </div> 
              </li>

                <?php 
                }
              }
             ?>           </ul>
             </div>
              <?php 
                  if (isset($val2['extra_carriculam']) && $val2['extra_carriculam']!="") {
                    ?>
             <div class="resume_item resume_education">
               <div class="title">
                    <p class="bold">Extra Carriculam</p>
                  </div>
               <ul>
                <?php              
                    $str=$val2['extra_carriculam'];
                    $arr=explode("#",$str);
                    for ($i=0; $i <sizeof($arr) ; $i++) { 
                  ?>
                  <li>
                   <div class="date">
                           <?php
                                if(isset($arr[$i]) && $arr[$i]!=""){
                                  echo $arr[$i];
                                }
                           ?>
                 </div> 
              </li>

                <?php 
                }
              }
             ?>           </ul>
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