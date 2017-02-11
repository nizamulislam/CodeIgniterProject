<html>
<head>
<style>
table.tbl_one{margin:0 auto;}
table.tbl_one tr{text-align:center;}

 table.tbl_one tr th{background:#888; color:#fff; padding:15px 22px;
 text-shadow:1px 1px 2px #000;}
 
 table.tbl_one tr:nth-child(2n+1){background:pink;height:40px;}
 table.tbl_one tr:nth-child(2n){background:red; height:40px;}
 table.tbl_one tr td a{color:#009bda;text-decoration:none;}
 table.tbl_one tr td a:hover{color:#003972; text-decoration:none;}
 
</style>
</head>
<body>
<div class="allcategory">
<h1>ALL category</h1>
   
  
    

   </div>

<table class="tbl_one" id="all_table">
   <tr>
   <th>category_id </th>
   <th> category_name </th>
   <th>category_description </th>
   <th>publication status</th>
    <th>Action</th>

   

   </tr>
       <?php

         if($manage) :
          foreach ($manage as $udata) :

       ?>
   <tr>
    <td><?php echo $udata->category_id;?></td>
   <td><?php echo $udata->category_name;?></td>
   <td><?php echo $udata->category_description;?></td>
   <td>
   
   <?php 
    if($udata->publication_status=='1')
     {
       echo"published";
     }

     else
     {
      echo"unpublished";
     }

   ?>


   </td>

    <td>
    <a href="">Edit</a>
      <a href="">Delete</a>







         <?php 
    if($udata->publication_status=='1')
     {
      ?>
       <a href="<?php echo base_url(); ?>dash/unpublished_category/<?php echo $udata->category_id ;?>">unpublished</a>
    <?php  
      }



     else
     {

      ?>
     <a href="<?php echo base_url(); ?>dash/published_category/<?php echo $udata->category_id ;?>">published</a>
    <?php 
     }

   ?>








      </td>
  

   </tr>

   <?php
    
       endforeach;


            endif;
    ?>       
</table>
</div>
</body>
</html>