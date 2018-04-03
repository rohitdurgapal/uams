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


	function insert(){
		$username_ = $this->input->post('username');
		$createpwd_ = $this->input->post('createpwd');
		$status_=$this->input->post('sta_');
		$type_=$this->input->post('type');

		$this->db->where('USERNAME_', $username_);
		$rs = $this->db->get('login');	

		if($rs->num_rows() != 0){
			$bool = false;
		} else {
			$bool = true; 
			
			$data = array(
				'USERNAME_' => $username_,
				'PASSWORD_' => $createpwd_,
				'STATUS'=>$status_,
				'USER_UPLINE'=>$username_,
				'TYPE_ID'=>$type_
			);
			$bool_ = $this->db->insert('login', $data);
			
		}	
		return $bool;
	}






	
	function fetchtype($type='1'){
		if($type != ''){
			$this->db->where('TYPEID',$type);
		}
		$query = $this->db->get('user_type');
		return $query->result();
	}


	function fetchcountry($country=''){
		if ($country != ''){
			$this->db->where('COUNTRYID',$country);
		}
		$query=$this->db->get('country');
		return $query->result();
		}
	

	function fetchstate($state=''){
		if ($state != ''){
			$this->db->where('STATEID',$state);
		}
		$query=$this->db->get('state');
		return $query->result();
		}

}