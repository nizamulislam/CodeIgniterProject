<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function index()
	{
		$this->load->model('user_model');
		if($this->user_model->is_user_logged_in())
		{
			$data['homepage']='home.php';
		$this->load->view('dashboard_layout',$data);
		}
		else
		{
			redirect('login/?Logged_in_First');
		}


	}

}

?>	