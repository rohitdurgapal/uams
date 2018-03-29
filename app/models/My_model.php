<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_model extends CI_Model{

	function authenticate(){
		$user = $this->input->post('TXT_USER');
		$pwd = $this->input->post('TXT_PWD');

		$this->db->where('USERNAME_', $user);
		$this->db->where('PASSWORD_', $pwd);
		$this->db->select('a.USERNAME_, b.TYPE');
		$this->db->from('login a');
		$this->db->join('user_type b', 'b.TYPEID=a.TYPE_ID');
		$query = $this->db->get();
		
		if($query->num_rows() != 0){
			$row = $query->row();
			$this->session->set_userdata('user_', $row->USERNAME_);
			$this->session->set_userdata('user_type', $row->TYPE);
			$bool_ = true;
		} else {
			$bool_ = false;
		}

	return $bool_;
	}
}