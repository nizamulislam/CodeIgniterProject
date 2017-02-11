<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_model extends CI_Model{
	public function student_id()
	{
		$query=$this->db->get('student');
		if($query->num_rows()==2)
		{
			//return $query->row(0)->id;
			/*var_dump($query->result());
			exit();*/

			return $query->result();
		}
	}

}

?>