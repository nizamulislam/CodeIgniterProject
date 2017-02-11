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
<div class="alluser">
<h1>ALL USER</h1>
   
      <?php if(isset($updateSuccess)):?>
      	   <div class="alert">
      	   <?php echo $updateSuccess;  ?>
      	   </div>
      	<?php endif; ?>

   </div>
<table class="tbl_one" id="all_table">
   <tr>
   <th>first Name </th>
   <th> last name </th>
   <th> Email </th>
   <th> Useranme </th>
   <th> Customize </th>
   

   </tr>
       <?php

         if($alldata) :
         	foreach ($alldata as $udata) :

       ?>

   <td><?php echo $udata->first_name;?></td>
   <td><?php echo $udata->last;?></td>
   <td><?php echo $udata->email;?></td>

   <td><?php echo $udata->username;?></td>
   <td>
   <?php if($this->session->userdata('current_user_id')!=$udata->id):    ?>

   <a class="a" id="<?php echo $udata->id;?>" href="<?php echo base_url();?>dash/user_delete/<?php echo $udata->id;?>">delete</a>
      <?php endif; ?>
	  
   <a href="<?php echo base_url();?>dash/user_edit/<?php echo $udata->id;?>">edit</a></td>

   </tr>

   <?php
    
       endforeach;


            endif;
    ?>       
</table>
</div>
</body>
</html>