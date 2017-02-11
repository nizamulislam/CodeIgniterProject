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
<!--
<table class="tbl_one" id="all_table">
   <tr>
   <th>category_id </th>
   <th> category_name </th>
   <th>category_description </th>
   <th>publication status</th>

   

   </tr>
       <?php

         //if($data) :
         	//foreach ($data as $udata) :

       ?>
   <tr>
    <td><?php echo $udata->category_id;?></td>
   <td><?php echo $udata->category_name;?></td>
   <td><?php echo $udata->category_description;?></td>
   <td><?php echo $udata->publication_status;?></td>

   
  

   </tr>

   <?php
    
       //endforeach;


            //endif;
    ?>       
</table>
</div>
-->




                <div class="alert">
                     <?php
                       foreach($data as $v)
                       {

                     ?>
                <div class="categoryall">
                  
                <h1>category 
                <a href="#" style="color:red;"><?php echo $v->category_name?></a></h1>
                <p><?php echo $v->category_description;?></p>


                </div>
               <?php  }  ?>

              </div>




</body>
</html>