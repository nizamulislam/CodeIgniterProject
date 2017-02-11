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

            
                     

<?php echo form_open('users/edit_user_data_check/'.$ed->id);  ?>


 
  <table>

  
  
  
 
  
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
    <td>Email</td>
    <td>
     
     <?php

                            $email = array (
                              'id' => 'username-input',
                            
                              'name'   => 'email',
                              'placeholder' =>'your email',
                              'required' =>'required',
                               'value'    => $ed->email

                              );

                                  echo form_input($email);  
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









       
 




