<!--
  Name: Con - Admin Dashboard with Material Design
  Version: 1.6.0
  Author: nK
  Website: http://nkdev.info
  Support: http://nk.ticksy.com
  Purchase: http://themeforest.net/item/con-material-admin-dashboard-template/10621512?ref=nKdev
  License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
  Copyright 2015.
-->
<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="lt-ie7"> <![endif]-->
<!--[if IE 7]>     <html class="lt-ie8"> <![endif]-->
<!--[if IE 8]>     <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html>
<!--<![endif]-->


<!-- Mirrored from nkdev.info/con/page-sign-in.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 18 Apr 2015 12:58:44 GMT -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CCourse management System</title>

  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>

  <link rel="icon" type="image/png" href="<?php echo base_url() ?>libs/assets/_con/images/icon.png">

  <!-- nanoScroller -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>libs/assets/nanoScroller/nanoscroller.css" />


  <!-- FontAwesome -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>libs/assets/font-awesome/css/font-awesome.min.css" />

  <!-- Material Design Icons -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>libs/assets/material-design-icons/css/material-design-icons.min.css" />

  <!-- IonIcons -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>libs/assets/ionicons/css/ionicons.min.css" />

  <!-- WeatherIcons -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>libs/assets/weatherIcons/css/weather-icons.min.css" />
  <!-- Main -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>libs/assets/_con/css/_con.min.css" />

  <!--[if lt IE 9]>
    <script src="assets/html5shiv/html5shiv.min.js"></script>
  <![endif]-->
</head>

<body>

  <section id="sign-in">

    <!-- Background Bubbles -->
    <canvas id="bubble-canvas"></canvas>
    <!-- /Background Bubbles -->

    <!-- Sign In Form -->
   

      <?php echo form_open('login/user_login_data_check');?>

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


     if(isset($errorLogin)):


      ?>
        <div class="alert">
    <?php echo $errorLogin;?>
  </div>
<?php endif ?>

     

        <!-- Social Sign Up -->
        <div class="row socials">
          <div class="col s4">
            <a class="btn blue darken-2 z-depth-0 z-depth-1-hover" href="#"><i class="fa fa-2x fa-facebook"></i></a>
          </div>
          <div class="col s4">
            <a class="btn blue lighten-2 z-depth-0 z-depth-1-hover" href="#"><i class="fa fa-2x fa-twitter"></i></a>
          </div>
          <div class="col s4">
            <a class="btn red z-depth-0 z-depth-1-hover" href="#"><i class="fa fa-2x fa-google-plus"></i></a>
          </div>
        </div>
        <!-- /Social Sign Up -->

        <div class="row">
          <div class="col"></div>
        </div>

        <!-- Username -->
        <div class="input-field">
          <i class="fa fa-user prefix"></i>
          <?php
          $username=array(
          'id'       => 'username-input',
          'class'    => 'validate',
          'name'     => 'username',
          'required' => 'required',

          );
          echo form_input($username);
          ?>
         
          <label for="username-input">Username</label>
        </div>
        <!-- /Username -->

        <!-- Password -->
        <div class="input-field">
          <i class="fa fa-unlock-alt prefix"></i>
            <?php
          $pass=array(
          'id'       => 'username-input',
          'class'    => 'validate',
          'name'     => 'password',
          'required' => 'required',

          );
          echo form_input($pass);
          ?>
          <label for="password-input">Password</label>
        </div>
        <!-- /Password -->

        <div class="switch">
          <label>
            <input type="checkbox" checked />
            <span class="lever"></span>
            Remember
          </label>
        </div>

        <button class="waves-effect waves-light btn-large z-depth-0 z-depth-1-hover">Sign In</button>
      </div>
      <?php echo form_close();?>

     

   </section>
    <!-- /Sign In Form -->

  </section>


  <!-- DEMO [REMOVE IT ON PRODUCTION] -->
  <script type="text/javascript" src="<?php echo base_url() ?>libs/assets/_con/js/_demo.js"></script>

  <!-- jQuery -->
  <script type="text/javascript" src="<?php echo base_url() ?>libs/assets/jquery/jquery.min.js"></script>

  <!-- jQuery RAF (improved animation performance) -->
  <script type="text/javascript" src="<?php echo base_url() ?>libs/assets/jqueryRAF/jquery.requestAnimationFrame.min.js"></script>

  <!-- nanoScroller -->
  <script type="text/javascript" src="<?php echo base_url() ?>libs/assets/nanoScroller/jquery.nanoscroller.min.js"></script>

  <!-- Materialize -->
  <script type="text/javascript" src="<?php echo base_url() ?>libs/assets/materialize/js/materialize.min.js"></script>

  <!-- Sortable -->
  <script type="text/javascript" src="<?php echo base_url() ?>libs/assets/sortable/Sortable.min.js"></script>

  <!-- Main -->
  <script type="text/javascript" src="<?php echo base_url() ?>libs/assets/_con/js/_con.min.js"></script>

</body>


<!-- Mirrored from nkdev.info/con/page-sign-in.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 18 Apr 2015 12:58:44 GMT -->
</html>