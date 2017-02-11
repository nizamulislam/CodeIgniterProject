<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>AdminLTE 2 | Morris.js Charts</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Morris charts -->
    <link rel="stylesheet" href="../../plugins/morris/morris.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
  

    
          <!-- search form -->
         <div class="addcategory">
              <?php
                           $message=$this->session->userdata('message');
                           if(isset($message))
                           {
                              
                            ?>  
                              <div class="alert">
                            <?php echo $message; ?>
                            </div>
                            <?php
                              $this->session->unset_userdata('message');
                           }
            ?>
<h1>Add blog</h1>
<?php echo form_open('dash/save_blog'); ?>
   <table>


      <tr>
   <td>Blog title</td>
      <td><input type="text" name="blog_title"></td>
   
   </tr>




   <tr>
   <td>	select category id</td>

  <td>
   <select name="category_id">
     <option value="">Select Category------</option>
       <?php
          foreach($blog as $t)
          {

         ?>
        
      <option value="<?php echo $t->category_id;?>"><?php echo $t->short?></option>
        <?php   } ?>
   </select>

   </td>



  
   
   </tr>
     <tr>
   <td>category short description</td>
   <td><textarea rows="2" cols="18" name="short"></textarea></td>
   
   </tr>


      <tr>
   <td>category long description</td>
   <td><textarea rows="2" cols="18" name="long"></textarea></td>
   
   </tr>



      <tr>
      <td>
		 <div class="form-group">
		   <label class="">select image</label>
		     <div class="">
			    <div class="">
				 <span class="">
				 <span class="">select file</span>
				 	 <span class="">change</span>
					 <input type="file" name="">
					 </span>
					 
					 <span class=""></span>
					 <a href="" class=""></a>
		 
		   </div>
		</div>
	</div>
	</td>
   
   </tr>






    <tr>
   <td>Publish Date</td>
      <td><input type="text" name=""></td>
   
   </tr>
   
   <tr>
   <td>Author name</td>

 <td><input type="text" name="author_name" class=""></td>

   


   </tr>


      <tr>
   <td>Author email</td>

 <td><input type="text" name="author_email" class=""></td>

   


   </tr>







   
     <tr>
   <td>Blog status</td>
   <td>published</td>
   <td><input type="radio" name="publication_status" value="1"></td>
   
    <td>unpublished</td>
   <td><input type="radio"  name="publication_status" value="0"></td>
   
   
   </tr>
   
   <tr>
   <td></td>
   <td><input type="submit" value="blog publish"></td>
   
   </tr>

   </table>
	<?php echo form_close(); ?>
     </div>
	 
        
   
  </body>
</html>
