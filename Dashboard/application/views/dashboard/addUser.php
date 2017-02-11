<?php echo form_open('users/add_user_data_check');?>
  
<div>


 <div class="card-panel">
      <?php
      if(validation_errors())
     
      {
      ?>

  <div class="alert">
    <?php echo validation_errors();?>
  </div>


   
      <?php
      }
  ?>





 <?php
      if(isset($errorInsert))
     
      {
      ?>

  <div class="alert">
    <?php echo $errorInsert;?>
  </div>


   
      <?php
      }
  ?>




 <div class="input-field">
          <i class="fa fa-user prefix"></i>
          <?php
          $userName=array(
          'id'       => 'username-input',
          'class'    => 'validate',
          'name'     => 'uname',
          'required' => 'required',

          );
          echo form_input($userName);
          ?>
         
          <label for="username-input">UserName</label>
        </div>









 <div class="input-field">
          <i class="fa fa-user prefix"></i>
          <?php
          $email=array(
          'id'       => 'username-input',
          'class'    => 'validate',
          'name'     => 'email',
          'required' => 'required',

          );
          echo form_input($email);
          ?>
         
          <label for="username-input">Email</label>
        </div>















         <div class="input-field">
          <i class="fa fa-user prefix"></i>
          <?php
          $pass=array(
          'id'       => 'username-input',
          'class'    => 'validate',
          'name'     => 'password',
          'required' => 'required',

          );
          echo form_input($pass);
          ?>
         
          <label for="username-input">Password</label>
        </div>


         <div class="input-field">
          <i class="fa fa-user prefix"></i>
          <?php
          $cpass=array(
          'id'       => 'username-input',
          'class'    => 'validate',
          'name'     => 'cpassword',
          'required' => 'required',

          );
          echo form_input($cpass);
          ?>
         
          <label for="username-input">ConfirmPassword</label>
        </div>




  <button class="waves-effect waves-light btn-large z-depth-0 z-depth-1-hover">ADD USER</button>
      </div>

<?php echo form_close();?>