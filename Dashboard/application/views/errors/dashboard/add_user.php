



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


                     if(isset($errorInsert)) :

					?>

				    <div class="alert">
				    <?php echo $errorInsert; ?>
				    </div>
				<?php endif ; ?>
					
                    </div>









<div class="add">
<h1>Add User</h1>
<?php   echo form_open('dash/add_user_data_check'); ?>
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

                            	);

                                  echo form_input($username);  
							?>
	
	
	</td>
	</tr>
	
	
	 <tr>
    <td>password</td>
    <td>
       
       <?php

                            $pass = array (
                            	'id' => 'password_input',
                            
                            	'name'   => 'password',
                            	'placeholder' =>'your password',
                            	'required' =>'required',

                            	);

                                  echo form_password($pass);  
							?>
	</td>
	
	</tr>
	
	 <tr>
    <td>confirm password</td>
    <td>
	  
	  <?php

                            $pass2 = array (
                            	'id' => 'confirm_password_input',
                            
                            	'name'   => 'password2',
                            	'placeholder' =>'cofirm your password',
                            	'required' =>'required',

                            	);

                                  echo form_password($pass2);  
							?>
	
	</td>
	</tr>
	
	 <tr>
    <td></td>
	<td><input type="submit" name="" value="ADD USER"></td>
	
	
	</tr>
  
  </table>
	<?php echo form_close(); ?>
</div>
</body>
</html>