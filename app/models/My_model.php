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



	function insertlogin(){
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
			$bool = $this->db->insert('login', $data);
			
		}	
		return $bool;
	}


	function insertunit(){
		$unitname_ = $this->input->post('unitname');
		$country = $this->input->post('country');
		$state = $this->input->post('state'); 
		$user_ = $this->session->userdata('user_');
		
		$this->db->where('USERNAME_',$user_);
		$this->db->where('UNITNAME',$unitname_);
		$rs = $this->db->get('unit');	
		if ($rs->num_rows !=0){
			$bool=false;
		}else {
		$data=array(
			'UNITNAME'=>$unitname_,
			'USERNAME_'=>$user_,
			'STATEID'=>$state
	);
		$bool=$this->db->insert('unit', $data);

	}
	return $bool;	

}

	function insertcategory(){
		$unitname_ = $this->input->post('unit');
		$categoryname_ = $this->input->post('categoryname');
		$purpose = $this->input->post('purpose');
		$state = $this->input->post('state'); 
		$user_ = $this->session->userdata('user_');
		$this->db->where('USERNAME_',$user_);
		$this->db->where('CATEGORYNAME',$categoryname_);
		$rs = $this->db->get('category');	
		if ($rs->num_rows !=0){
			$bool=false;
		}else {
		$data=array(
			'CATEGORYNAME'=>$categoryname_,
			'PURPOSE'=>$purpose,
			'USERNAME_'=>$user_
			
	);
		$bool=$this->db->insert('category', $data);

	}
return $bool;
	}



	function insertcandidate(){
		$unitname_ = $this->input->post('unit');
		$category_ = $this->input->post('category');
		$candidatename_ = $this->input->post('canname');
		$gender_ = $this->input->post('gender');
		$mobileno_ = $this->input->post('mobno');
		$dob_ = $this->input->post('dob');
		$email_ = $this->input->post('email');
		$data=array(
			'CANDIDATENAME'=>$candidatename_,
			'GENDERID'=>$gender_,
			'MOBILENO'=>$mobileno_,
			'DOB'=>$dob_,
			'EMAIL'=>$email_,
			'CATEGORYID'=>$category_

	);
		$bool=$this->db->insert('candidate', $data);

	
return $bool;	
	}



	function insertadditional(){
		$firstname_ = $this->input->post('firstname');
		$lastname_ = $this->input->post('lastname');
		$gender_=$this->input->post('gender');
		$mobileno_ = $this->input->post('mobnumber');
		$mobilever_ = $this->input->post('mobver');
		$email_ = $this->input->post('email');
		$emailVer_ = $this->input->post('emailver');
		$user_ = $this->session->userdata('user_');
		$data=array(
			'FNAME'=>$firstname_,
			'LNAME'=>$lastname_,
			'GENDER'=>$gender_,
			'MOBILE_NO'=>$mobileno_,
			'MOBILE_VERIFICATION'=>$mobilever_,
			'EMAIL'=>$email_,
			'EMAIL_VERIFICATION'=>$emailVer_,
			'USERNAME_'=>$user_
	);
		$bool=$this->db->insert('registration', $data);






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

	function fetchunit($unit=''){
		if ($unit !=''){
			$this->db->where ('UNITID',$unit);
		}
		$query=$this->db->get('unit');
		return $query->result();
	}


	function fetchcategory($category=''){
		if ($category !=''){
			$this->db->where ('CATEGORYID',$category);
		}
		$query=$this->db->get('category');
		return $query->result();	
	}


	function fetchgender($gender=''){
		if ($gender !=''){
			$this->db->where ('GENDERID',$gender);
		}
		$query=$this->db->get('gender');
		return $query->result();	
	}

}