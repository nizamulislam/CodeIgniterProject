

  
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
      if(isset($errorUpdate))
     
      {
      ?>

  <div class="alert">
    <?php echo $errorUpdate;?>
  </div>


   
      <?php
      }
  ?>

 <?php
   
    if(isset($info)) :
    foreach($info as $user)  :
  ?>

<?php echo form_open('users/edit_user_data_check/'.$user->id);  ?>

  





 <div class="input-field">
          <i class="fa fa-user prefix"></i>
          <?php
          $userName=array(
          'id'       => 'username-input',
          'class'    => 'validate',
          'name'     => 'uname',
          'required' => 'required',
          'value'     =>$user->username

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
          'value'    =>$user->email

          );
          echo form_input($email);
          ?>
         
          <label for="username-input">Email</label>
        </div>


















  <button class="waves-effect waves-light btn-large z-depth-0 z-depth-1-hover">ADD USER</button>
      </div>


      </div>

  


<?php echo form_close();?>
       <?php endforeach ; ?>
        <?php endif ; ?>


 