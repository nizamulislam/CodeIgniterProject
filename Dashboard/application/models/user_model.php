<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model{
	  public function user_login_data_check()
	  {
        $username=$this->input->post('username');
        //$password=md5($this->input->post('password'));
           $password=$this->input->post('password');

        $attr=array(
        	'username'=>$username,
        	'password'=>$password,
        	);

        $result=$this->db->get_where('users',$attr);
        if($result->num_rows()==1)
        {
        	$attr=array(
        		'current_user_id'   =>$result->row(0)->id,
        		'current_user_name' =>$username
        		);

        	$this->session->set_userdata($attr);
        	return true;
        }
        else
        {
        	return false;
        }
	  }



    public function is_user_logged_in()
    {
        return $this->session->userdata('current_user_id')!=FALSE;
    }

    public function add_user_data_insert()
    {
       
    //$pass=md5($this->input->post('password'));

    $pass=$this->input->post('password');
        $attr=array(
               // 'first_name'=>$this->input->post('fname'),
                //'last_name'=>$this->input->post('lname'),
                'username'=>$this->input->post('uname'),
                'email'=>$this->input->post('email'),
               
                'password'=>$pass


                );

            $insert=$this->db->insert('users',$attr);
            if($insert)
            {

                 return true;
            }
            else
            {
                return false;
            }
    }




    public function all_users_list()
    {
        $query=$this->db->get('users');
        $result=$query->result();
      
        return $result;
    }

    public function user_delete($id=null)
    {
        $this->db->delete('users',array('id'=>$id));
          if($this->db->affected_rows())
          {
                return true;
          }
          else
          {
                return false;
          }

    }








    public function user_edit($id=null)
     {
        $atr =array(
           'id'   => $id


          );

        $query= $this->db->get_where('users',$atr);
           if($query->num_rows()==1)
             {
              return $query->result();
             }

             else
             {
              return false;
             }
     }







  
       public function edit_user_update($id=null)
       {
        
       
          $u=$this->input->post('username');
          $e=$this->input->post('email');
          
           //$c=$this->input->post('confirm-password');
       
        

               $attr=array(
                'id'       =>$id

                
            );

  
         $query= $this->db->get_where('users', $attr);
        
      // var_dump($result);
        if($query->num_rows()==1)
        {
        
              
             $attr = array(
                         
                            'username' => $u,
                          'email'       =>$e,

                           );





            $this->db->where('id', $id);
             $query= $this->db->update('users', $attr);
               if($this->db->affected_rows() )
                 {
                  return true;
                 }

                 else
                 {
                  return FALSE;
                 }

       } 

       else{
        
            return false;
       }     

    }






         
  public function edit_profile_user_data_update($id)
  {
      
          $f=$this->input->post('username');
          //$l=$this->input->post('lname');
           $t=$this->input->post('title');
          $ab=$this->input->post('about');
           $sk=$this->input->post('skill');
          $face=$this->input->post('facebook');
           $tw=$this->input->post('twitter');
          $g=$this->input->post('google');
           $sky=$this->input->post('skype');
      


       $attr = array(
                           'username' => $f,
                           // 'last' => $l,
                             'title' => $t,
                            'about' => $ab,
                            
                             'skill' => $sk,
                            'facebook' => $face,
                            
                             'twitter' => $tw,
                            'google' => $g,
                             'skype' => $sky
                      
                            
                            
                            

                           );





            $this->db->where('id', $id);
             $query= $this->db->update('users', $attr);
               if($this->db->affected_rows() )
               {
                return true;
               }
               else
               {
                //return false;
                $this->throughException($id, $msg='u are try update same user data and it\'s not accepted');
               }

  }




      public function throughException($id, $msg)
      {
         if($this->user_edit($id))
            {
             $data['info']= $this->user_edit($id);
            }    
               
            $data['errorUpdate']=$msg;
               //$data['edituser'] = 'edit.php';
               //$this->load->view('dashboard_layout',$data);

              $data['edit_profile']='edit_profile.php';
               $this->load->view('dashboard_layout',$data);
               return false;
               exit();


    }



  
  


     
        
        





}




?>