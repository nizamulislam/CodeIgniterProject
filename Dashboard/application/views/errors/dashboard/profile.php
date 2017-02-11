<html>
<head>
</head>
<body>
<div class="pqrt1">
   <h1>Edit user</h1>
     <ul>
        <li>
    <a href="<?php echo base_url();?>dashboard"><i class="fa fa-circle-o"></i> Dashboard v2</a>
        </li>
         <li>
        <a href="<?php echo base_url();?>dash/profile">Profile</a>
        </li>

               <a href="<?php echo base_url();?>dash/edit_profile">Edit</a>
        </li>
        </ul>
</div>

                
                 <?php    if(isset($updateSuccess)) : ?>

          

            <div class="alert">
            <?php echo $updateSuccess; ?>

            </div>
        <?php endif ; ?>


      


  <div class="main">
            <?php
   
                     if(isset($proinfo)) :
                      foreach($proinfo as $ed)  :

          ?>

        <div class="pqrt2">
        
        <table>
        <tbody>
        <tr>
        <td></td>
        </tr>
        <tr>
        <td class="photo"><img src="<?php echo base_url();?>libs/img/aaa.JPG" width="150"></td>
          <td>
          <h3><?php  echo $ed->first_name. " " .$ed->last; ?></h3> <!-- Jhone Doe name -->
             <span ><?php echo $ed->title;  ?></span>  <!-- u ser title -->

               

               <div class="contacts">
                  <?php if(!empty($ed->facebook)) :  ?>
               <a href="<?php echo $ed->facebook;  ?>"class="a1">
                  <i class="fa fa-facebook"></i>Facebook
                  </a>
              <?php endif;  ?>


                        <?php if(!empty($ed->twitter)) :  ?>
               <a href="<?php echo $ed->twitter;  ?>"class="a2">
                  <i class="fa fa-twitter"></i>Twitter
                  </a>
              <?php endif;  ?>

                      <?php if(!empty($ed->google)) :  ?>
               <a href="<?php echo $ed->google;  ?>"class="a3">
                  <i class="fa fa-google"></i>Google
                  </a>
              <?php endif;  ?>


                      <?php if(!empty($ed->skype)) :  ?>
               <a href="<?php echo $ed->skype;  ?>"class="a4">
                  <i class="fa fa-skype"></i>Skype
                  </a>
              <?php endif;  ?>



                  </div>
                  </td>
                 </tr>
                 </tbody>
                 </table>


          </div>





          <div class="about">
              <div class="part3">
          <h5><i class="fa-fa user"></i>About</h5>
          <a class="close" href="#">
            <i class="md1-navigation-expand-less"></i>
            </a>

          </div>


            <div class="content">
          <?php echo $ed->about;  ?>
            </div>
           </div>  







          <div class="send message">
            <div class="part3">
        <h5><i class="fa-fa user"></i>Send message</h5>
        <a class="close" href="#">
          <i class="md1-navigation-expand-less"></i>
          </a>

        </div>


          <div class="content">
            About somporka ja bolta hoi
                About somporka ja bolta hoi
                    About somporka ja bolta hoi

          </div>
         </div> 




            <div class="skill">
            <div class="part4">
        <h5><i class="fa-fa user"></i>Skill</h5>
        <a class="close" href="#">
          <i class="md1-navigation-expand-less"></i>
          </a>

        </div>


          <div class="content">
           <?php
              $skill=explode(",", $ed->skill);
              foreach($skill as $sk)
              {
                echo '<a href="" class="skill">'.$sk.'</a>';
              }

           ?>
        
                 
        </div>


        </div>
    <?php   endforeach; endif;  ?>

        </div>












</body>
</html>