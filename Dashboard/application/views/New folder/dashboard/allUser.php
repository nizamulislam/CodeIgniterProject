
 <div class="card-panel">
 <h1>AllUser</h1>
 <div class="row">
   <div class="col-s12 12">
     <table id="allUsertable">
     <thead>
     <tr>

      <th>Username</th>
      <th>Email</th>
      <th>Role</th>
      <th>Action</th>
      </tr>
      </thead>
      <tbody>
      <?php
     foreach($allUserData as $users ):
      ?>
      <tr>
     
      	<td><?php echo $users->username;?></td>
      	<td><?php echo $users->email;?></td>
      	<td>Adminstrator</td>
      	<th>

     <?php if($this->session->userdata('current_user_id')!=$users->id):?>
        <a onclick="return confirm('r u sure delete this data?');" href="<?php echo base_url();?>users/user_delete/<?php echo $users->id;?>">
      	
      	<i class="fa fa-close bigico"></i>
      	
      
      	</a>
      <?php endif;?>
      	
<a href="<?php echo base_url();?>users/user_edit/<?php echo $users->id;?>">
      	<i class="fa fa-edit bigico"></i>
      	</th>
      	</tr>
      	<?php
      	endforeach;
      	?>
       </tbody>
        </table>
      </div>
    </div>
 </div>