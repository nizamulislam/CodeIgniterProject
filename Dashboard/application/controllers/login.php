<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
		/*//echo 'this is login page';
		$this->load->model('login_model');
		$data['id']=$this->login_model->student_id();
		$data['name']="nizam";
		$this->load->view('login_page',$data);*/

		/*$this->load->model('login_model');
		$data['s_data']=$this->login_model->student_id();
		$this->load->view('login_page',$data);

		*/
		$this->load->model('user_model');
		if($this->user_model->is_user_logged_in())
		{
		redirect('dashboard');
		}
		else
		{
			$this->load->view('login_page');
		}

	     



	}

	public function user_login_data_check()
	{
		$this->form_validation->set_rules('username','USERNAME','trim|xss_clean|min_length[3]');

		$this->form_validation->set_rules('password','PASSWORD','trim|xss_clean');

		  if($this->form_validation->run()==FALSE)
		  {
		  	$this->load->view('login_page');
		  }
		  else
		  {
		  	$this->load->model('user_model');
		  	$result=$this->user_model->user_login_data_check();
		  	if($result)
		  	{
		  		redirect('dashboard');
		  	}
		  	else
		  	{
		  		$data['errorLogin']='Username or password invalid';
		  		$this->load->view('login_page',$data);
		  	}
		  }
	}




	public function logout()
	{
      $this->session->unset_userdata('current_user_id');
      $this->session->unset_userdata('current_user_name');
      $this->session->sess_destroy();
      redirect('login/?Logout success');
	}






}
