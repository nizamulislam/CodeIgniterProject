<html>
<head>
<title>
</title>
<style>

</style>
</head>
<body>


					<div class="error">
					<?php
					if(validation_errors())
					{
                      ?>
                         <div class="alert">
                         


                         <?php echo validation_errors(); ?>

					

                         </div>
                     <?php

					}



                     if(isset($errorUpdate)) :

					?>

				    <div class="alert">
				    <?php echo $errorUpdate; ?>
				    </div>
				<?php endif ; ?>



<?php
if(isset($ErrorImageUpload)):
  ?>
        <div class="alert">
        <?php echo $ErrorImageUpload;?>

        </div>
      <?php endif;?>
					
                    </div>









<div class="add">
<h1>Edit Profile</h1>
 


        <?php
   
                     if(isset($info)) :
                      foreach($info as $ed)  :

          ?>

            
                     

<?php echo form_open('users/edit_profile_user_data_check/');  ?>


 
  <table>
    <tr>
    <td>username</td>
    <td>
       
      <?php 
           

         

                            $username = array (
                              'id' => 'username-input',
                            
                              'name'   => 'username',
                              'placeholder' =>'your name',
                              'required' =>'required',
                              'value'    => $ed->username

                              );

                                  echo form_input($username);  
              ?>
              </td>
        
  
  </tr>
  
  
 
   <tr>
    <td>Title</td>
    <td>
          
          <?php

                            $title = array (
                              'id' => 'username-input',
                            
                              'name'   => 'title',
                              'placeholder' =>'title here ',
                              'required' =>'required',
                               'value'    => $ed->title
                               

                              );

                                  echo form_input($title);  
              ?>
              </td>
  
  
  </tr>
  
   <tr>
    <td>About</td>
    <td>
     
     <?php

                            $about = array (
                              'id' => 'username-input',
                            
                              'name'   => 'about',
                              
                              'required' =>'required',
                               'value'    => $ed->about

                              );

                                  echo form_input($about);  
              ?>
  
  
  </td>
  </tr>

 
  
  
   <tr>
    <td>Skill</td>
    <td>
       
       <?php

                            $skill = array (
                              'id' => 'skill_input',
                            
                              'name'   => 'skill',
                           
                              'required' =>'required',
                              'value'    =>$ed->skill
                               


                              );

                                  echo form_input($skill);  
              ?>
  </td>
  
  </tr>


      <tr>
    <td>Facebook</td>
    <td>
       
       <?php

                            $facebook = array (
                              'id' => 'facebook_input',
                            
                              'name'   => 'facebook',
                          
                              'required' =>'required',
                              'value'    =>$ed->facebook
                              


                              );

                                  echo form_input($facebook);  
              ?>
  </td>
  
  </tr>










   <tr>
    <td>Twitter</td>
    <td>
    
    <?php

                            $twitter = array (
                              'id' => 'twitter_input',
                            
                              'name'   => 'twitter',
                       
                              'required' =>'required',
                                 'value'    =>$ed->twitter
                               

                              );

                                  echo form_input($twitter);  
              ?>
  
  </td>
  </tr>










  
   <tr>
    <td>Google</td>
    <td>
    
    <?php

                            $google = array (
                              'id' => 'google_input',
                            
                              'name'   => 'google',
                       
                              'required' =>'required',
                                 'value'    =>$ed->google
                               

                              );

                                  echo form_input($google);  
              ?>
  
  </td>
  </tr>




    
   <tr>
    <td>Skype</td>
    <td>
    
    <?php

                            $skype = array (
                              'id' => 'skype_input',
                            
                              'name'   => 'skype',
                              'required' =>'required',
                       
                                 'value'    =>$ed->skype
                               

                              );

                                  echo form_input($skype);  
              ?>
  
  </td>
  </tr>

  








  
   <tr>
    <td></td>
  <td><input type="submit" name="" value="UPDATE Profile"></td>
     
    

    
  
  </tr>
  
  </table>
   
   


 
  

 

<?php echo form_close(); ?>
            </div>
               <?php endforeach ; ?>
        <?php endif ; ?>

          
                    
                    </body>
                    </html>




<a class="waves-effect waves-light btn modal-trigger" href="#modal1">Change image</a>
  <div id="modal1" class="modal">
  <?php echo form_open_multipart('users/profile_image_check');?>
    <a href="#" class="modal-close form-close">*</a>
    <h4>Upload Image</h4>
    <input type="file" name="uploadImage" class="upload-image">
    <div class="action-bar">
     <button> <input type="submit" value="Upload" class="upload-btn" required></button>
     </div>
     </div>





       
 




