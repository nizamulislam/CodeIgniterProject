<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	 public function __construct()
	 {
	 	parent::__construct();
	 		$this->load->model('user_model');
		if(!$this->user_model->is_user_logged_in())
		{
			
	   redirect('login/?Logged_in_First');
		}
		
	 }





	 public function index()
	 {
	 	redirect('dashboard');
	 }



  public function add_user()
  {
  	$data['addUser']='addUser.php';
  	$this->load->view('dashboard_layout',$data);
  }


  public function add_user_data_check()

  {
       	   	$this->form_validation->set_rules('uname','username','trim|xss_clean|min_length[3]');
      	   	   	$this->form_validation->set_rules('email','email','trim|xss_clean|min_length[9]|valid_email|is_unique[adduser.email]');
      	   	  
      	   	   	   	   	$this->form_validation->set_rules('password','password','trim|xss_clean|min_length[3]');

      	   	   	   	   	   	$this->form_validation->set_rules('cpassword','confirmpassword','trim|xss_clean|min_length[3]|matches[password]');

	
  

        if($this->form_validation->run()==FALSE)
		  {
		  		$data['addUser']='addUser.php';
		       $this->load->view('dashboard_layout',$data);
		  }
		  else
		  {
		  	if($this->user_model->add_user_data_insert() )
		  	{
		  		redirect('users/all_users');
		  	}
		  	else
		  	{
		  		 $data['errorInsert']='Process invalid';
		  		 $data['addUser']='addUser.php';
		  		$this->load->view('dashboard_layout',$data);
		  	}
		  }

		 




}



public function all_users()
{
	$data['allUser']='allUser.php';
	$data['allUserData']=$this->user_model->all_users_list();
	$this->load->view('dashboard_layout',$data);
}

public function user_delete($id=null)
{
	
		if($this->user_model->user_delete($id))
		{
			redirect('users/all_users');
		}
		else
		{
			redirect('dashboard');
		}
	
}




		 public function user_edit($id=null)
	{
		if($this->user_model->user_edit($id))
		{
	   $data['info']= $this->user_model->user_edit($id);
	   }		
       $data['editUser'] = 'editUser.php';
       $this->load->view('dashboard_layout',$data);
	}





	
	
	     public function edit_user_data_check($id=null)
	{
		
		    $this->form_validation->set_rules('username', 'User Name', 'trim|xss_clean|min_length[3]');
		     $this->form_validation->set_rules('email', 'User Email', 'trim|xss_clean|min_length[9]');
		   
	

             if($this->form_validation->run()==FALSE)
	        {    if($this->user_model->user_edit($id))
	        	{
	        		$data['info']=$this->user_model->user_edit($id);
	            }
        		

        		$data['editUser']='editUser.php';
		        $this->load->view('dashboard_layout',$data);
        	
          }
           else
           {
              if($this->user_model->edit_user_update($id)) :
              	redirect('dashboard');

              else :
              	    if($this->user_model->user_edit($id))
              	    {
              	    	$data['info']=$this->user_model->user_edit($id);
              	    }

              	    $data['errorUpdate']="Something may wrong";
              $data['editUser']='editUser.php';
        	    $this->load->view('dashboard_layout',$data);

        	  endif;  

           }




	}





     public function profile()
     {
     	   $id=$this->session->userdata['current_user_id'];
     	   if($this->user_model->user_edit($id))
     	   {
     	   	$data['proinfo']=$this->user_model->user_edit($id);
     	   }

     	$data['profile']="profile.php";
     	$this->load->view('dashboard_layout',$data);
     }




     public function edit_profile()
     {
     	$id=$this->session->userdata['current_user_id'];
     	   if($this->user_model->user_edit($id))
     	   {
     	   	$data['info']=$this->user_model->user_edit($id);
     	   }

     	   $data['edit_profile']='edit_profile.php';
     	   $this->load->view('dashboard_layout',$data);
     }
	 
	 
	




    public function edit_profile_user_data_check()
     {
       $id=$this->session->userdata['current_user_id'];

     $this->form_validation->set_rules('username', 'User Name', 'trim|required|xss_clean|min_length[3]');
	//$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|xss_clean|min_length[2]');
	$this->form_validation->set_rules('title', 'title', 'trim|required|xss_clean|min_length[2]');
	$this->form_validation->set_rules('about', 'About', 'trim|required|xss_clean|min_length[2]');
	$this->form_validation->set_rules('skill', 'Skill', 'trim|required|xss_clean|min_length[2]');
	$this->form_validation->set_rules('facebook', 'Facebook', 'trim|xss_clean|min_length[2]');
    $this->form_validation->set_rules('twitter', 'Twitter', 'trim|xss_clean|min_length[2]');
    $this->form_validation->set_rules('google', 'Google', 'trim|xss_clean|min_length[2]');
   $this->form_validation->set_rules('skype', 'Skype', 'trim|xss_clean|min_length[2]');
     





          if($this->form_validation->run()==FALSE)
	        {    if($this->user_model->user_edit($id))
	        	{
	        		$data['info']=$this->user_model->user_edit($id);
	            }
        		

        	  $data['edit_profile']='edit_profile.php';
		        $this->load->view('dashboard_layout',$data);
        	
          }

          /*
           else
           {
              if($this->user_model->edit_user_update($id)) :
              	redirect('bash');

              else :
              	    if($this->user_model->user_edit($id))
              	    {
              	    	$data['info']=$this->user_model->user_edit($id);
              	    }

              	    $data['errorUpdate']="Something may wrong";
                    $data['edituser']='edit.php';
        	        $this->load->view('dashboard_layout',$data);

        	  endif;  

           } */



         else
         {

         	  if($this->user_model->edit_profile_user_data_update($id)) :
         	  
         	  	  $data['updateSuccess']='updated succesdfully';
         	  	 $data['profile']="profile.php";
		       
        	    $this->load->view('dashboard_layout',$data);




        	    else :

                   ///if($this->user_model->user_edit($id))
           // /{
            /// $data['info']= $this->user_model->user_edit($id);
            ///}   

            
               
            $data['errorUpdate']='u are try update same user data and it\'s not accepted';
           
        	  $data['edit_profile']='edit_profile.php';
               //$this->load->view('dashboard_layout',$data);




         	  	  endif;
         	  
         }







     }


      public function profile_image_check()
      {
      	$this->do_upload();
      }
      private function do_upload()
      {

      	$type=explode('.',$_FILES['uploadImage']['name']);
      	$type=$type[count($type)-1];

      if(in_array($type,array('jpg','JPG','jpeg','JPEG','png','PNG')))	
      {
      	if(is_uploaded_file($_FILES['uploadImage']['tmp_name']))
      	 {
      	 	//move_uploaded_file($_FILES['uploadImage']['tmp_name'],"./libs/img/".uniqid(rand()).$_FILES['uploadImage']['name']);   //orrrrrrrrrrrrrrrrrrrrrrrr
               
      	 	move_uploaded_file($_FILES['uploadImage']['tmp_name'],"./libs/img/".uniqid(rand()).".".$type);
              redirect('dashboard');
      	 

      	 }
      }

       else
       {
       	 
       	 $data['ErrorImageUpload']='this image not uploaded';
           
        $data['edit_profile']='edit_profile.php';
        $this->load->view('dashboard_layout',$data);
      	 
       }
      

      }








}


?>