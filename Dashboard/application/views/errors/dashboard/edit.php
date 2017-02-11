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
					
                    </div>









<div class="add">
<h1>Edit User</h1>
 


        <?php
   
                     if(isset($info)) :
                      foreach($info as $ed)  :

          ?>

            
                     

<?php echo form_open('dash/edit_user_data_check/'.$ed->id);  ?>


 
  <table>
    <tr>
    <td>firstname</td>
    <td>
       
      <?php 
           

         

                            $firstname = array (
                              'id' => 'username-input',
                            
                              'name'   => 'fname',
                              'placeholder' =>'your firstname',
                              'required' =>'required',
                              'value'    => $ed->first_name

                              );

                                  echo form_input($firstname);  
              ?>
              </td>
        
  
  </tr>
  
  
   <tr>
    <td>lastname</td>

  <td>
       <?php

                            $lastname = array (
                              'id' => 'username-input',
                            
                              'name'   => 'lname',
                              'placeholder' =>'your lastname',
                              'required' =>'required',
                               'value'    => $ed->last

                              );

                                  echo form_input($lastname);  
              ?>
              </td>
  
  
  </tr>
  
   <tr>
    <td>Email</td>
    <td>
          
          <?php

                            $email = array (
                              'id' => 'username-input',
                            
                              'name'   => 'email',
                              'placeholder' =>'your email',
                              'required' =>'required',
                               'value'    => $ed->email,
                               'readonly' => 'readonly'

                              );

                                  echo form_input($email);  
              ?>
              </td>
  
  
  </tr>
  
   <tr>
    <td>Username</td>
    <td>
     
     <?php

                            $username = array (
                              'id' => 'username-input',
                            
                              'name'   => 'username',
                              'placeholder' =>'your username',
                              'required' =>'required',
                               'value'    => $ed->username

                              );

                                  echo form_input($username);  
              ?>
  
  
  </td>
  </tr>

 
  
  
   <tr>
    <td>Old password</td>
    <td>
       
       <?php

                            $old_password = array (
                              'id' => 'password_input',
                            
                              'name'   => 'old-password',
                              'placeholder' =>'your old password',
                              'required' =>'required'
                               


                              );

                                  echo form_password($old_password);  
              ?>
  </td>
  
  </tr>


      <tr>
    <td>New password</td>
    <td>
       
       <?php

                            $new_password = array (
                              'id' => 'password_input',
                            
                              'name'   => 'new-password',
                              'placeholder' =>'your new password',
                              'required' =>'required',
                              


                              );

                                  echo form_password($new_password);  
              ?>
  </td>
  
  </tr>










  
   <tr>
    <td>confirm password</td>
    <td>
    
    <?php

                            $confirm_password = array (
                              'id' => 'confirm_password_input',
                            
                              'name'   => 'confirm-password',
                              'placeholder' =>'cofirm your password',
                              'required' =>'required',
                               

                              );

                                  echo form_password($confirm_password);  
              ?>
  
  </td>
  </tr>
  
   <tr>
    <td></td>
  <td><input type="submit" name="" value="UPDATE"></td>
     
    

    
  
  </tr>
  
  </table>
   
   


 
  

 

<?php echo form_close(); ?>
            </div>
               <?php endforeach ; ?>
        <?php endif ; ?>

          
                    
                    </body>
                    </html>









       
 




