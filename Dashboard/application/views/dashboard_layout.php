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


<!-- Mirrored from nkdev.info/con/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 18 Apr 2015 12:56:29 GMT -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Con - Admin Dashboard with Material Design</title>

  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>

  <link rel="icon" type="image/png" href="<?php echo base_url();?>libs/assets/_con/images/icon.png">

  <!-- nanoScroller -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>libs/assets/nanoScroller/nanoscroller.css" />


  <!-- FontAwesome -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>libs/assets/font-awesome/css/font-awesome.min.css" />

  <!-- Material Design Icons -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>libs/assets/material-design-icons/css/material-design-icons.min.css" />

  <!-- IonIcons -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>libs/assets/ionicons/css/ionicons.min.css" />

  <!-- WeatherIcons -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>libs/assets/weatherIcons/css/weather-icons.min.css" />

  <!-- Rickshaw -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>libs/assets/rickshaw/rickshaw.min.css" />

  <!-- jvectormap -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>libs/assets/jquery-jvectormap/jquery-jvectormap.css" />

  <!-- Google Prettify -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>libs/assets/google-code-prettify/prettify.css" />
  <!-- Main -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>libs/assets/_con/css/_con.min.css" />

  <!--[if lt IE 9]>
    <script src="<?php echo base_url();?>libs/assets/html5shiv/html5shiv.min.js"></script>
  <![endif]-->
<script type='text/javascript'>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48958097-1', 'nkdev.info');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');

</script>
</head>

<body>


  <!--
  Top Navbar
    Options:
      .navbar-dark - dark color scheme
      .navbar-static - static navbar
      .navbar-under - under sidebar
-->
  <nav class="navbar-top">
    <div class="nav-wrapper">

      <!-- Sidebar toggle -->
      <a href="#" class="yay-toggle">
        <div class="burg1"></div>
        <div class="burg2"></div>
        <div class="burg3"></div>
      </a>
      <!-- Sidebar toggle -->

      <!-- Logo -->
      <a href="#!" class="brand-logo">
        <img src="<?php echo base_url();?>libs/assets/_con/images/logo.png" alt="Con">
      </a>
      <!-- /Logo -->

      <!-- Menu -->
      <ul>
        <li><a href="#!" class="search-bar-toggle"><i class="mdi-action-search"></i></a>
        </li>
        <li class="user">
          <a class="dropdown-button" href="#!" data-activates="user-dropdown">
            <img src="<?php echo base_url();?>libs/assets/_con/images/user.jpg" alt="John Doe" class="circle"><?php echo $this->session->userdata('current_user_name');?><i class="mdi-navigation-expand-more right"></i>
          </a>

          <ul id="user-dropdown" class="dropdown-content">
            <li><a href="<?php echo base_url();?>users/profile"><i class="fa fa-user"></i> Profile</a>
            </li>
            <li><a href="mail-inbox.html"><i class="fa fa-envelope"></i> Messages <span class="badge new">2</span></a>
            </li>
            <li><a href="#!"><i class="fa fa-cogs"></i> Settings</a>
            </li>
            <li class="divider"></li>
            <li><a href="<?php echo base_url();?>login/logout"><i class="fa fa-sign-out"></i> Logout</a>
            </li>
          </ul>
        </li>
      </ul>
      <!-- /Menu -->

    </div>
  </nav>
  <!-- /Top Navbar -->


  <!--
  Yay Sidebar
  Options [you can use all of theme classnames]:
    .yay-hide-to-small         - no hide menu, just set it small with big icons
    .yay-static                - stop using fixed sidebar (will scroll with content)
    .yay-gestures              - to show and hide menu using gesture swipes
    .yay-light                 - light color scheme
    .yay-hide-on-content-click - hide menu on content click

  Effects [you can use one of these classnames]:
    .yay-overlay  - overlay content
    .yay-push     - push content to right
    .yay-shrink   - shrink content width
-->
  <aside class="yaybar yay-shrink yay-hide-to-small yay-gestures yay-light yay-static">

    <div class="top">
      <div>
        <!-- Sidebar toggle -->
        <a href="#" class="yay-toggle">
          <div class="burg1"></div>
          <div class="burg2"></div>
          <div class="burg3"></div>
        </a>
        <!-- Sidebar toggle -->

        <!-- Logo -->
        <a href="#!" class="brand-logo">
          <img src="<?php echo base_url();?>libs/assets/_con/images/logo-white.png" alt="Con">
        </a>
        <!-- /Logo -->
      </div>
    </div>


    <div class="nano">
      <div class="nano-content">

        <ul>
          <li class="label">Menu</li>
          <li class="open">
            <a class="yay-sub-toggle waves-effect waves-blue"><i class="fa fa-dashboard"></i> Dashboards<span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
            <ul>
              <li class="active">
                <a href="<?php echo base_url();?>dashboard" class="waves-effect waves-blue"> Dashboard <span class="badge new"></span></a>
              </li>
              <li>
                <a href="<?php echo base_url();?>dashboard" class="waves-effect waves-blue"> Dashboard v1</a>
              </li>

               <li>
                <a href="<?php echo base_url();?>users/all_users" class="waves-effect waves-blue">User/AllUser</a>
              </li>

               <li>
                <a href="<?php echo base_url();?>users/add_user" class="waves-effect waves-blue">ADD User</a>
              </li>


             



            </ul>
          </li>

          <li>
            <a href="widgets.html" class="waves-effect waves-blue"><i class="fa fa-magic"></i> Widgets</a>
          </li>

          <li>
            <a href="layouts.html" class="waves-effect waves-blue"><i class="mdi mdi-av-web"></i> Layouts</a>
          </li>

          <li>
            <a class="yay-sub-toggle waves-effect waves-blue"><i class="fa fa-indent"></i> Menu Levels<span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
            <ul>
              <li>
                <a class="yay-sub-toggle waves-effect waves-blue" href="#!">Second Level<span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
                <ul>
                  <li>
                    <a class="yay-sub-toggle waves-effect waves-blue" href="#!">Third Level<span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
                    <ul>
                      <li><a href="#!" class="waves-effect waves-blue">Fourth Level</a>
                      </li>
                      <li><a href="#!" class="waves-effect waves-blue">Fourth Level</a>
                      </li>
                      <li><a href="#!" class="waves-effect waves-blue">Fourth Level</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a class="yay-sub-toggle waves-effect waves-blue" href="#!">Third Level<span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
                    <ul>
                      <li><a href="#!" class="waves-effect waves-blue">Fourth Level</a>
                      </li>
                      <li><a href="#!" class="waves-effect waves-blue">Fourth Level</a>
                      </li>
                      <li><a href="#!" class="waves-effect waves-blue">Fourth Level</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </li>

          <li class="label">Elements</li>
          <li>
            <a class="yay-sub-toggle waves-effect waves-blue"><i class="fa fa-css3"></i> CSS<span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
            <ul>
              <li><a class="waves-effect waves-blue" href="css-alerts.html"><i class="mdi-alert-warning"></i> Alerts</a>
              </li>
              <li><a class="waves-effect waves-blue" href="css-badges.html"><i class="mdi-action-stars"></i> Badges</a>
              </li>
              <li><a class="waves-effect waves-blue" href="css-colors.html"><i class="mdi-image-palette"></i> Colors</a>
              </li>
              <li><a class="waves-effect waves-blue" href="css-grid.html"><i class="mdi-action-dashboard"></i> Grid</a>
              </li>
              <li><a class="waves-effect waves-blue" href="css-icons.html"><i class="mdi-communication-invert-colors-on"></i> Icons</a>
              </li>
              <li><a class="waves-effect waves-blue" href="css-shadow.html"><i class="mdi-maps-layers"></i> Shadow</a>
              </li>
              <li><a class="waves-effect waves-blue" href="css-typography.html"><i class="fa fa-font"></i> Typography</a>
              </li>
            </ul>
          </li>

          <li>
            <a class="yay-sub-toggle waves-effect waves-blue"><i class="fa fa-cubes"></i> UI Elements<span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
            <ul>
              <li><a class="waves-effect waves-blue" href="ui-buttons.html"><i class="fa fa-square"></i> Buttons</a>
              </li>
              <li><a class="waves-effect waves-blue" href="ui-cards.html"><i class="mdi-av-web"></i> Cards</a>
              </li>
              <li><a class="waves-effect waves-blue" href="ui-collapsible.html"><i class="mdi-action-view-day"></i> Collapsible</a>
              </li>
              <li><a class="waves-effect waves-blue" href="ui-collections.html"><i class="fa fa-server"></i> Collections</a>
              </li>
              <li><a class="waves-effect waves-blue" href="ui-dropdown.html"><i class="mdi-navigation-arrow-drop-down-circle"></i> Dropdown</a>
              </li>
              <li><a class="waves-effect waves-blue" href="ui-modals.html"><i class="fa fa-external-link"></i> Modals</a>
              </li>
              <li><a class="waves-effect waves-blue" href="ui-progress-bars.html"><i class="fa fa-tasks"></i> Progress Bars</a>
              </li>
              <li><a class="waves-effect waves-blue" href="ui-tabs.html"><i class="mdi-action-tab-unselected"></i> Tabs</a>
              </li>
              <li><a class="waves-effect waves-blue" href="ui-toasts.html"><i class="mdi-action-announcement"></i> Toasts</a>
              </li>
              <li><a class="waves-effect waves-blue" href="ui-tooltips.html"><i class="fa fa-comment-o"></i> Tooltips</a>
              </li>
              <li><a class="waves-effect waves-blue" href="ui-waves.html"><i class="mdi-image-blur-on"></i> Waves</a>
              </li>

              <li><a class="waves-effect waves-blue" href="ui-search-bar.html"><i class="mdi-action-search"></i> Search Bar</a>
              </li>
            </ul>
          </li>

          <li class="label">Components</li>
          <li>
            <a class="yay-sub-toggle waves-effect waves-blue"><i class="fa fa-check-square-o"></i> Forms<span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
            <ul>
              <li><a class="waves-effect waves-blue" href="forms-base.html"><i class="fa fa-cube"></i> Base</a>
              </li>
              <li><a class="waves-effect waves-blue" href="forms-advanced.html"><i class="fa fa-cubes"></i> Advanced</a>
              </li>
              <li><a class="waves-effect waves-blue" href="forms-validation.html"><i class="fa fa-check-square-o"></i> Validation</a>
              </li>
              <li><a class="waves-effect waves-blue" href="forms-editors.html"><i class="fa fa-edit"></i> Editors</a>
              </li>
              <li><a class="waves-effect waves-blue" href="forms-checkout.html"> Checkout</a>
              </li>
              <li><a class="waves-effect waves-blue" href="forms-contacts.html"> Contacts</a>
              </li>
              <li><a class="waves-effect waves-blue" href="forms-login.html"> Login</a>
              </li>
              <li><a class="waves-effect waves-blue" href="forms-register.html"> Register</a>
              </li>
            </ul>
          </li>

          <li>
            <a class="yay-sub-toggle waves-effect waves-blue"><i class="fa fa-globe"></i> Pages<span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
            <ul>
              <li><a class="waves-effect waves-blue" href="page-profile.html">Profile</a>
              </li>
              <li><a class="waves-effect waves-blue" href="page-timeline.html">Timeline</a>
              </li>
              <li><a class="waves-effect waves-blue" href="page-calendar.html">Calendar</a>
              </li>
              <li><a class="waves-effect waves-blue" href="page-forgot-password.html">Forgot Password</a>
              </li>
              <li><a class="waves-effect waves-blue" href="page-lock.html">Screen Lock</a>
              </li>
              <li><a class="waves-effect waves-blue" href="page-sign-in.html">Sign In</a>
              </li>
              <li><a class="waves-effect waves-blue" href="page-sign-up.html">Sign Up</a>
              </li>
              <li><a class="waves-effect waves-blue" href="page-404.html">404</a>
              </li>
              <li><a class="waves-effect waves-blue" href="page-500.html">500</a>
              </li>
              <li><a class="waves-effect waves-blue" href="page-blank.html">Blank</a>
              </li>
            </ul>
          </li>

          <li class="label">Extra</li>
          <li>
            <a class="yay-sub-toggle waves-effect waves-blue"><i class="fa fa-envelope"></i> Mailbox<span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
            <ul>
              <li><a class="waves-effect waves-blue" href="mail-inbox.html"><i class="mdi-content-inbox"></i> Inbox</a>
              </li>
              <li><a class="waves-effect waves-blue" href="mail-compose.html"><i class="mdi-content-add-circle"></i> Compose</a>
              </li>
              <li><a class="waves-effect waves-blue" href="mail-view.html"><i class="mdi-content-drafts"></i> View</a>
              </li>
            </ul>
          </li>

          <li>
            <a class="yay-sub-toggle waves-effect waves-blue"><i class="mdi mdi-action-shopping-cart"></i> eCommerce<span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
            <ul>
              <li><a class="waves-effect waves-blue" href="ecommerce-dashboard.html"><i class="fa fa-dashboard"></i> Dashboard</a>
              </li>
              <li><a class="waves-effect waves-blue" href="ecommerce-products.html"><i class="fa fa-tags"></i> Products</a>
              </li>
              <li><a class="waves-effect waves-blue" href="ecommerce-product-single.html"><i class="fa fa-tag"></i> Product Single</a>
              </li>
              <li><a class="waves-effect waves-blue" href="ecommerce-orders.html"><i class="fa fa-cart-plus"></i> Orders</a>
              </li>
              <li><a class="waves-effect waves-blue" href="ecommerce-order-single.html"><i class="fa fa-cart-plus"></i> Order Single</a>
              </li>
              <li><a class="waves-effect waves-blue" href="ecommerce-customers.html"><i class="fa fa-users"></i> Customers</a>
              </li>
              <li><a class="waves-effect waves-blue" href="ecommerce-settings.html"><i class="fa fa-cog"></i> Settings</a>
              </li>
              <li><a class="waves-effect waves-blue" href="ecommerce-invoice.html"><i class="ion ion-android-list"></i> Invoice</a>
              </li>
            </ul>
          </li>

          <li>
            <a class="yay-sub-toggle waves-effect waves-blue"><i class="fa fa-bar-chart"></i> Charts<span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
            <ul>
              <li><a class="waves-effect waves-blue" href="charts-flot.html">Flot</a>
              </li>
              <li><a class="waves-effect waves-blue" href="charts-rickshaw.html">Rickshaw</a>
              </li>
              <li><a class="waves-effect waves-blue" href="charts-sparkline.html">Sparkline</a>
              </li>
              <li><a class="waves-effect waves-blue" href="charts-nvd3.html">NVD3</a>
              </li>
            </ul>
          </li>

          <li>
            <a class="yay-sub-toggle waves-effect waves-blue"><i class="mdi mdi-maps-place"></i> Maps<span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
            <ul>
              <li><a class="waves-effect waves-blue" href="maps-google.html">Google Maps</a>
              </li>
              <li><a class="waves-effect waves-blue" href="maps-vector.html">Vector Maps</a>
              </li>
            </ul>
          </li>

          <li>
            <a class="yay-sub-toggle waves-effect waves-blue"><i class="fa fa-table"></i> Tables<span class="yay-collapse-icon mdi-navigation-expand-more"></span></a>
            <ul>
              <li><a class="waves-effect waves-blue" href="ui-tables.html">Base Tables</a>
              </li>
              <li><a class="waves-effect waves-blue" href="ui-datatables.html">Data Tables</a>
              </li>
            </ul>
          </li>

          <li class="label">Stats</li>
          <li class="content">
            <span><i class="fa fa-spinner"></i> Server Load</span>
            <div class="progress small light-green lighten-4">
              <div class="light-green accent-5" style="width: 37%"></div>
            </div>

            <span><i class="fa fa-thumbs-o-up"></i> User Satisfaction</span>
            <div class="progress small">
              <div style="width: 91%"></div>
            </div>
          </li>
        </ul>

      </div>
    </div>
  </aside>
  <!-- /Yay Sidebar -->


  <!-- Main Content -->
  <section class="content-wrap">
<?php
    if(isset($homepage)):
       $this->load->view('dashboard/home.php'); //or $this->load->view('dashboard/'.$homepage);
  
  elseif(isset($addUser)):
    $this->load->view('dashboard/addUser.php');

 elseif(isset($allUser)):
    $this->load->view('dashboard/allUser.php');

 elseif(isset($editUser)):
    $this->load->view('dashboard/editUser.php');

   elseif(isset($profile)):
    $this->load->view('dashboard/profile.php');

   elseif(isset($edit_profile)):
    $this->load->view('dashboard/edit_profile.php');


  endif;
     ?>
 

  </section>
  <!-- /Main Content -->

  <!-- Search Bar -->
  <div class="search-bar">
    <div class="layer-overlay"></div>
    <div class="layer-content">
      <form action="#!">
        <!-- Header -->
        <a class="search-bar-toggle grey-text text-darken-2" href="#!"><i class="mdi-navigation-close"></i></a>

        <!-- Search Input -->
        <div class="input-field">
          <i class="mdi-action-search prefix"></i>
          <input type="text" name="con-search" placeholder="Search...">
        </div>

        <!-- Search Results -->
        <div class="search-results">

          <div class="row">
            <div class="col s12 l4">
              <h4>Users</h4>

              <div class="each-result">
                <img src="<?php echo base_url();?>libs/assets/_con/images/user2.jpg" alt="Felecia Castro" class="circle photo">
                <div class="title">Felecia Castro</div>
                <div class="label">Content Manager</div>
              </div>

              <div class="each-result">
                <img src="<?php echo base_url();?>libs/assets/_con/images/user3.jpg" alt="Max Brooks" class="circle photo">
                <div class="title">Max Brooks</div>
                <div class="label">Programmer</div>
              </div>

              <div class="each-result">
                <img src="<?php echo base_url();?>libs/assets/_con/images/user4.jpg" alt="Patsy Griffin" class="circle photo">
                <div class="title">Patsy Griffin</div>
                <div class="label">Support</div>
              </div>

              <div class="each-result">
                <img src="<?php echo base_url();?>libs/assets/_con/images/user6.jpg" alt="Vernon Garrett" class="circle photo">
                <div class="title">Vernon Garrett</div>
                <div class="label">Photographer</div>
              </div>
            </div>
            <div class="col s12 l4">
              <h4>Articles</h4>

              <div class="each-result">
                <div class="icon circle blue white-text">MD</div>
                <div class="title">Material Design</div>
                <div class="label nowrap">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi consequatur debitis veritatis dolorum, enim libero!</div>
              </div>

              <div class="each-result">
                <div class="icon circle teal white-text">
                  <i class="fa fa-dashboard"></i>
                </div>
                <div class="title">Admin Dashboard</div>
                <div class="label nowrap">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi consequatur debitis veritatis dolorum, enim libero!</div>
              </div>

              <div class="each-result">
                <div class="icon circle orange white-text">RD</div>
                <div class="title">Responsive Design</div>
                <div class="label nowrap">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi consequatur debitis veritatis dolorum, enim libero!</div>
              </div>

              <div class="each-result">
                <div class="icon circle red white-text">
                  <i class="fa fa-tablet"></i>
                </div>
                <div class="title">Mobile First</div>
                <div class="label nowrap">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi consequatur debitis veritatis dolorum, enim libero!</div>
              </div>
            </div>
            <div class="col s12 l4">
              <h4>Posts</h4>

              <div class="no-result">No results were found ;(</div>
            </div>
          </div>

        </div>

      </form>
    </div>
  </div>
  <!-- /Search Bar -->



  <!--
  Chat
    .chat-light - light color scheme
-->
  <div class="chat">
    <div class="layer-overlay"></div>

    <div class="layer-content">

      <!-- Contacts -->
      <div class="contacts">
        <!-- Top Bar -->
        <div class="topbar">
          <a href="#!" class="text">Chat</a>
          <a href="#!" class="chat-toggle"><i class="mdi-navigation-close"></i></a>
        </div>
        <!-- /Top Bar -->

        <div class="nano">
          <div class="nano-content">

            <span class="label">Online</span>

            <div class="user">
              <img src="<?php echo base_url();?>libs/assets/_con/images/user2.jpg" alt="Felecia Castro" class="circle photo">

              <div class="name">Felecia Castro</div>
              <div class="status">Lorem status</div>

              <div class="online"><i class="green-text fa fa-circle"></i>
              </div>
            </div>

            <div class="user">
              <img src="<?php echo base_url();?>libs/assets/_con/images/user3.jpg" alt="Max Brooks" class="circle photo">

              <div class="name">Max Brooks</div>
              <div class="status">Lorem status</div>

              <div class="online"><i class="green-text fa fa-circle"></i>
              </div>
            </div>

            <div class="user">
              <img src="<?php echo base_url();?>libs/assets/_con/images/user4.jpg" alt="Patsy Griffin" class="circle photo">

              <div class="name">Patsy Griffin</div>
              <div class="status">Lorem status</div>

              <div class="online"><i class="green-text fa fa-circle"></i>
              </div>
            </div>

            <div class="user">
              <img src="<?php echo base_url();?>libs/assets/_con/images/user5.jpg" alt="Chloe Morgan" class="circle photo">

              <div class="name">Chloe Morgan</div>
              <div class="status">Lorem status</div>

              <div class="online"><i class="green-text fa fa-circle"></i>
              </div>
            </div>

            <div class="user">
              <img src="<?php echo base_url();?>libs/assets/_con/images/user6.jpg" alt="Vernon Garrett" class="circle photo">

              <div class="name">Vernon Garrett</div>
              <div class="status">Lorem status</div>

              <div class="online"><i class="yellow-text fa fa-circle"></i>
              </div>
            </div>

            <div class="user">
              <img src="<?php echo base_url();?>libs/assets/_con/images/user7.jpg" alt="Greg Mcdonalid" class="circle photo">

              <div class="name">Greg Mcdonalid</div>
              <div class="status">Lorem status</div>

              <div class="online"><i class="yellow-text fa fa-circle"></i>
              </div>
            </div>

            <div class="user">
              <img src="<?php echo base_url();?>libs/assets/_con/images/user8.jpg" alt="Christian Jackson" class="circle photo">

              <div class="name">Christian Jackson</div>
              <div class="status">Lorem status</div>

              <div class="online"><i class="yellow-text fa fa-circle"></i>
              </div>
            </div>


            <span class="label">Offline</span>

            <div class="user">
              <img src="<?php echo base_url();?>libs/assets/_con/images/user9.jpg" alt="Willie Kelly" class="circle photo">

              <div class="name">Willie Kelly</div>
              <div class="status">Lorem status</div>
            </div>

            <div class="user">
              <img src="<?php echo base_url();?>libs/assets/_con/images/user10.jpg" alt="Jenny Phillips" class="circle photo">

              <div class="name">Jenny Phillips</div>
              <div class="status">Lorem status</div>
            </div>

            <div class="user">
              <img src="<?php echo base_url();?>libs/assets/_con/images/user11.jpg" alt="Darren Cunningham" class="circle photo">

              <div class="name">Darren Cunningham</div>
              <div class="status">Lorem status</div>
            </div>

            <div class="user">
              <img src="<?php echo base_url();?>libs/assets/_con/images/user12.jpg" alt="Sandra Cole" class="circle photo">

              <div class="name">Sandra Cole</div>
              <div class="status">Lorem status</div>
            </div>

          </div>
        </div>
      </div>
      <!-- /Contacts -->

      <!-- Messages -->
      <div class="messages">

        <!-- Top Bar with back link -->
        <div class="topbar">
          <a href="#!" class="chat-toggle"><i class="mdi-navigation-close"></i></a>
          <a href="#!" class="chat-back"><i class="mdi-hardware-keyboard-arrow-left"></i> Back</a>
        </div>
        <!-- /Top Bar with back link -->

        <!-- All messages list -->
        <div class="list">
          <div class="nano scroll-bottom">
            <div class="nano-content">

              <div class="date">Monday, Feb 23, 8:23 pm</div>

              <div class="from-me">
                Hi, Felicia.
                <br>How are you?
              </div>

              <div class="clear"></div>

              <div class="from-them">
                <img src="<?php echo base_url();?>libs/assets/_con/images/user2.jpg" alt="John Doe" class="circle photo">Hi! I am good!
              </div>

              <div class="clear"></div>

              <div class="from-me">
                Glad to see you :)
                <br>This long text is intended to show how the chat will display it.
              </div>

              <div class="clear"></div>

              <div class="from-them">
                <img src="<?php echo base_url();?>libs/assets/_con/images/user2.jpg" alt="John Doe" class="circle photo">Also, we will send the longest word to show how it will fit in the chat window: <strong>Pneumonoultramicroscopicsilicovolcanoconiosis</strong>
              </div>

              <div class="date">Friday, Mar 10, 5:07 pm</div>

              <div class="from-me">
                Hi again!
              </div>

              <div class="clear"></div>

              <div class="from-them">
                <img src="<?php echo base_url();?>libs/assets/_con/images/user2.jpg" alt="John Doe" class="circle photo">Hi! Glad to see you.
              </div>

              <div class="clear"></div>

              <div class="from-me">
                I want to add you in my Facebook.
              </div>

              <div class="clear"></div>

              <div class="from-me">
                Can you give me your page?
              </div>

              <div class="clear"></div>

              <div class="from-them">
                <img src="<?php echo base_url();?>libs/assets/_con/images/user2.jpg" alt="John Doe" class="circle photo">I do not use Facebook. But you can follow me in Twitter.
              </div>

              <div class="clear"></div>

              <div class="from-me">
                It's good idea!
              </div>

              <div class="clear"></div>

              <div class="from-them">
                <img src="<?php echo base_url();?>libs/assets/_con/images/user2.jpg" alt="John Doe" class="circle photo">You can find me here - <a href="https://twitter.com/nkdevv">https://twitter.com/nkdevv</a>
              </div>

            </div>
          </div>
        </div>
        <!-- /All messages list -->

        <!-- Send message -->
        <div class="send">
          <form action="#!">
            <div class="input-field">
              <input id="chat-message" type="text" name="chat-message">
            </div>

            <button class="btn waves-effect z-depth-0"><i class="mdi-content-send"></i>
            </button>
          </form>
        </div>
        <!-- /Send message -->

      </div>
      <!-- /Messages -->
    </div>

  </div>
  <!-- /Chat -->



  <footer>&copy; <strong>Edited By Nizam</strong>. All rights reserved.</footer>
  <!-- DEMO [REMOVE IT ON PRODUCTION] -->
  <script type="text/javascript" src="<?php echo base_url();?>libs/assets/_con/js/_demo.js"></script>

  <!-- jQuery -->
  <script type="text/javascript" src="<?php echo base_url();?>libs/assets/jquery/jquery.min.js"></script>

  <!-- jQuery RAF (improved animation performance) -->
  <script type="text/javascript" src="<?php echo base_url();?>libs/assets/jqueryRAF/jquery.requestAnimationFrame.min.js"></script>

  <!-- nanoScroller -->
  <script type="text/javascript" src="<?php echo base_url();?>libs/assets/nanoScroller/jquery.nanoscroller.min.js"></script>

  <!-- Materialize -->
  <script type="text/javascript" src="<?php echo base_url();?>libs/assets/materialize/js/materialize.min.js"></script>


  <!-- Simple Weather -->
  <script type="text/javascript" src="<?php echo base_url();?>libs/assets/simpleWeather/jquery.simpleWeather.min.js"></script>

  <!-- Sparkline -->
  <script type="text/javascript" src="<?php echo base_url();?>libs/assets/sparkline/jquery.sparkline.min.js"></script>

  <!-- Flot -->
  <script type="text/javascript" src="<?php echo base_url();?>libs/assets/flot/jquery.flot.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>libs/assets/flot/jquery.flot.time.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>libs/assets/flot/jquery.flot.pie.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>libs/assets/flot/jquery.flot.tooltip.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>libs/assets/flot/jquery.flot.categories.min.js"></script>

  <!-- d3 -->
  <script type="text/javascript" src="<?php echo base_url();?>libs/assets/d3/d3.min.js"></script>

  <!-- Rickshaw -->
  <script type="text/javascript" src="<?php echo base_url();?>libs/assets/rickshaw/rickshaw.min.js"></script>

  <!-- jvectormap -->
  <script type="text/javascript" src="<?php echo base_url();?>libs/assets/jquery-jvectormap/jquery-jvectormap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>libs/assets/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>libs/assets/jquery-jvectormap/gdp-data.js"></script>
  <!-- Sortable -->
  <script type="text/javascript" src="<?php echo base_url();?>libs/assets/sortable/Sortable.min.js"></script>

  <!-- Main -->
  <script type="text/javascript" src="<?php echo base_url();?>libs/assets/_con/js/_con.min.js"></script>


  <!-- Google Prettify -->
  <script type="text/javascript" src="<?php echo base_url();?>libs/assets/google-code-prettify/prettify.js"></script>
  <script>
    /*
     * Sparkline in Card panel
     */
    (function() {
      $("#sparkcard1").conSparkline([76,78,87,65,43,35,23,25,12,14,27,35,32,37,31,46,43,32,36,57,78,87,82,75,58,54,70,23,54,67,34,23,87,12,43,65,23,76,32,55], {
        type: 'bar',
        width: '100%',
        height: 20,
        barColor: '#2196f3'
      });
    }());
    
    
    var rickshawLine1 = [{"x":0,"y":13},{"x":1,"y":12},{"x":2,"y":24},{"x":3,"y":25},{"x":4,"y":12},{"x":5,"y":16},{"x":6,"y":24},{"x":7,"y":13},{"x":8,"y":12},{"x":9,"y":11}];
    var rickshawLine2 = [{"x":0,"y":16},{"x":1,"y":23},{"x":2,"y":17},{"x":3,"y":16},{"x":4,"y":22},{"x":5,"y":25},{"x":6,"y":21},{"x":7,"y":22},{"x":8,"y":12},{"x":9,"y":13}];
    
    /*
     * Rickshaw Stacked Area Chart
     */
    (function() {
      var element = $("#rickshawStackedArea");
      var graph = new Rickshaw.Graph( {
        element: element[0],
        renderer: 'area',
        stroke: false,
        series: [ {
          data: rickshawLine1,
          color: '#42a5f5',
          name: 'Visits'
        }, {    
          data: rickshawLine2,
          color: '#90caf9',
          name: 'Views'
        } ]
      } );
      graph.render();
    
      var hoverDetail = new Rickshaw.Graph.HoverDetail({
        graph: graph,
        xFormatter: function(x) { return x },
        yFormatter: function(y) { return y }
      });
    
      // responsive
      $(window).on('resize', function() {
        graph.configure({
          width: element.width()
        });
        graph.render();
      });
    }());
    
    
    /*
     * Rickshaw Stacked Bars
     */
    (function() {
      var element = $("#rickshawStackedBars");
      var graph = new Rickshaw.Graph( {
        element: element[0],
        renderer: 'bar',
        series: [ {
          data: rickshawLine1,
          color: '#26a69a',
          name: 'Visits'
        }, {    
          data: rickshawLine2,
          color: '#80cbc4',
          name: 'Views'
        } ]
      } );
      graph.render();
    
      var hoverDetail = new Rickshaw.Graph.HoverDetail({
        graph: graph,
        xFormatter: function(x) { return x },
        yFormatter: function(y) { return y }
      });
    
      // responsive
      $(window).on('resize', function() {
        graph.configure({
          width: element.width()
        });
        graph.render();
      });
    }());
    
    
    
    /*
     * Flot Line Chart
     */
    (function() {
      var chart = $("#flotLineChart");
      var data1 = {
        data: [[1, 50], [2, 58], [3, 45], [4, 62],[5, 55],[6, 65],[7, 61],[8, 70],[9, 65],[10, 70],[11, 53],[12, 49]],
        label: "Mails"
      };
      var data2 = {
        data: [[1, 25], [2, 31], [3, 23], [4, 48],[5, 38],[6, 40],[7, 47],[8, 55],[9, 43],[10,50],[11,37],[12, 29]],
        label: "SMS"
      };
      var data3 = {
        data: [[1, 4], [2, 13], [3, 7], [4, 17],[5, 20],[6, 24],[7, 13],[8, 17],[9, 10],[10,17],[11,6],[12, 3]],
        label: "Invoices"
      };
      var options = {
        series: {
          lines: {
            show: true,
            lineWidth: 1,
            fill: true, 
            fillColor: { colors: [ { opacity: 0.1 }, { opacity: 0.13 } ] }
          },
          points: {
            show: true, 
            lineWidth: 2,
            radius: 3
          },
          shadowSize: 0,
          stack: true
        },
        grid: {
          hoverable: true, 
          clickable: true, 
          tickColor: "#f9f9f9",
          borderWidth: 0
        },
        legend: {
          // show: false
          backgroundOpacity: 0,
          labelBoxBorderColor: "#fff"
        },  
        colors: ["#3f51b5", "#009688", "#2196f3"],
        xaxis: {
          ticks: [[1, "Jan"], [2, "Feb"], [3, "Mar"], [4,"Apr"], [5,"May"], [6,"Jun"], 
                     [7,"Jul"], [8,"Aug"], [9,"Sep"], [10,"Oct"], [11,"Nov"], [12,"Dec"]],
          font: {
            family: "Roboto,sans-serif",
            color: "#ccc"
          }
        },
        yaxis: {
          ticks:7, 
          tickDecimals: 0,
          font: {color: "#ccc"}
        }
      };
      
      function initFlot() {
        $.plot(chart, [data1, data2, data3], options);
        chart.find('.legend table').css('width', 'auto')
             .find('td').css('padding', 5);
      }
      initFlot();
      $(window).on('resize', initFlot);
    
      function showTooltip(x, y, contents) {
        $('<div id="tooltip">' + contents + '</div>').css( {
          position: 'absolute',
          display: 'none',
          top: y - 40,
          left: x - 55,
          color: "#fff",
          padding: '5px 10px',
          'border-radius': '3px',
          'background-color': 'rgba(0,0,0,0.6)'
        }).appendTo("body").fadeIn(200);
      }
    
      var previousPoint = null;
      chart.bind("plothover", function (event, pos, item) {
        if (item) {
          if (previousPoint != item.dataIndex) {
            previousPoint = item.dataIndex;
    
            $("#tooltip").remove();
            var x = item.datapoint[0].toFixed(0),
                y = item.datapoint[1].toFixed(0);
    
            var month = item.series.xaxis.ticks[item.dataIndex].label;
    
            showTooltip(item.pageX, item.pageY,
                        item.series.label + " of " + month + ": " + y);
          }
        }
        else {
          $("#tooltip").remove();
          previousPoint = null;
        }
      });
    }());
    
    
    
    /*
     * Flot Pie Chart
     */
    (function() {
      var chart = $("#flotPieChart");
      var data = [
          { label: "IE",  data: 19.5, color: "#90a4ae"},
          { label: "Safari",  data: 4.5, color: "#7986cb"},
          { label: "Opera",  data: 2.3, color: "#9575cd"},
          { label: "Firefox",  data: 36.6, color: "#4db6ac"},
          { label: "Chrome",  data: 36.3, color: "#64b5f6"}
      ];
      var options = {
        series: {
          pie: {
            innerRadius: 0.5,
            show: true
          }
        },
        grid: {
          hoverable: true
        },
        legend: {
          backgroundOpacity: 0,
          labelBoxBorderColor: "#fff"
        },
        tooltip: true,
        tooltipOpts: {
          content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
          shifts: {
            x: 20,
            y: 0
          },
          defaultTheme: false
        }
      };
    
      function initFlot() {
        $.plot(chart, data, options);
        chart.find('.legend table').css('width', 'auto')
             .find('td').css('padding', 5);
      }
      initFlot();
      $(window).on('resize', initFlot);
    
    }());
    
    
    /*
     * MAP 1
     */
    (function() {
      $('#map1').vectorMap({
        map: 'world_mill_en',
        zoom: 2,
        series: {
          regions: [{
            values: gdpData,
            scale: ['#e3f2fd', '#2196f3'],
            normalizeFunction: 'polynomial'
          }]
        },
        backgroundColor: '#fff',
        onRegionTipShow: function(e, el, code){
          el.html(el.html()+' (GDP - '+gdpData[code]+')');
        }
      });
    }());
    
    
    
    
    /*
     * Rickshaw
     */
    (function() {
      var rickshawSeries = [[], []];
    
      // Create random data
      var randomData = new Rickshaw.Fixtures.RandomData(50);
      for (var i = 0; i < 40; i++) {
        randomData.addData(rickshawSeries);
      }
    
      // Init Richshaw graph
      var element = $("#rickshawGraph");
      var graph = new Rickshaw.Graph({
        element: element[0],
        height: 253,
        interpolation: 'cardinal',
        renderer: 'area',
        series: [
          {
            data: rickshawSeries[0],
            color: '#4db6ac',
            name: 'HDD'
          }, {
            data: rickshawSeries[1],
            color: '#b2dfdb',
            name: 'CPU'
          }
        ]
      });
    
      // Add hover info
      new Rickshaw.Graph.HoverDetail({
        graph: graph
      });
    
      // Render graph
      graph.render();
    
      // Live Update
      setInterval(function () {
        randomData.removeData(rickshawSeries);
        randomData.addData(rickshawSeries);
        graph.update();
      }, 1000);
    
      // Responsive
      $(window).on('resize', function() {
        graph.configure({
          width: element.width()
        });
        graph.render();
      });
    
    }());
    
    
    setTimeout(function() {
      toast('Welcome to Con!', 1000);
    }, 1000);
    
    
    // setTimeout(function() {
    //   $(window).resize();
    // }, 1);
  </script>
</body>


<!-- Mirrored from nkdev.info/con/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 18 Apr 2015 12:57:25 GMT -->
</html>