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
		$this->db->join('user_type b', 'b.TYPEID=a.TYPEID');
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
				'TYPEID'=>$type_
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
		if ($rs->num_rows() !=0){
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
		$unit_ = $this->input->post('unit');
		$user_ = $this->session->userdata('user_');
		$this->db->where('USERNAME_',$user_);
		$this->db->where('CATEGORYNAME',$categoryname_);

		$rs = $this->db->get('category');	
		if ($rs->num_rows() !=0){
			$bool=false;
		}else {
		$data=array(
			'CATEGORYNAME'=>$categoryname_,
			'PURPOSE'=>$purpose,
			'USERNAME_'=>$user_,
			'UNITID'=>$unit_
			
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
		$user_ = $this->session->userdata('user_');
		$data=array(
			'CANDIDATENAME'=>$candidatename_,
			'GENDERID'=>$gender_,
			'MOBILENO'=>$mobileno_,
			'DOB'=>$dob_,
			'EMAIL'=>$email_,
			'CATEGORYID'=>$category_,
			'USERNAME_'=>$user_
	);
		$bool=$this->db->insert('candidate', $data);	
		return $bool;		
	}




	function insertadditional(){
		$firstname_ = $this->input->post('firstname');
		$lastname_ = $this->input->post('lastname');
		$gender_=$this->input->post('gender');
		$mobileno_ = $this->input->post('mobno');
		$mobilever_ = $this->input->post('mobver');
		$email_ = $this->input->post('email');
		$emailVer_ = $this->input->post('emailver');
		$user_ = $this->session->userdata('user_');
		
		$data=array(
			'FNAME'=>$firstname_,
			'LNAME'=>$lastname_,
			'GENDERID'=>$gender_,
			'MOBILE_NO'=>$mobileno_,
			'MOBILE_VERIFICATION'=>$mobilever_,
			'EMAIL'=>$email_,
			'EMAIL_VERIFICATION'=>$emailVer_,
			'USERNAME_'=>$user_
	);
		$bool=$this->db->insert('registration', $data);
		return $bool;
	}




	function insertattendance(){
		$attenstatus_ = $this->input->post('atten');
		$date_ = $this->input->post('date');
		$time_=$this->input->post('time');
		$unitid_ = $this->input->post('unit');
		$category_ = $this->input->post('category');
		//$canid_ = $this->input->post('category');
		$user_ = $this->session->userdata('user_');
		$data=array(
			'ATTENDANCESTATUS'=>$attenstatus_,
			'DATE'=>$date_,
			'TIME'=>$time_,
			'UNITID'=>$unitid_,
			'CATEGORYID'=>$category_,
			//'CANDIDATEID'=>$canid_,
			'USERNAME_'=>$user_
	);
		$bool=$this->db->insert('attendance', $data);
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
		$this->db->where ('USERNAME_',$this->session->userdata('user_'));
		$query=$this->db->get('unit');
		return $query->result();
	}


	function fetchcategory($category=''){
		if ($category !=''){
			$this->db->where ('CATEGORYID',$category);
		}
		$this->db->where ('USERNAME_',$this->session->userdata('user_'));
		$query=$this->db->get('category');
		return $query->result();	
	}

	function fetchcategorybyunit($unit){
		$this->db->where ('UNITID',$unit);
		$this->db->where ('USERNAME_',$this->session->userdata('user_'));

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





//fetching of unit data from databse
	function fetchunitdata(){
		$this->db->where('b.USERNAME_', $this->session->userdata('user_'));
		$this->db->select('b.*, a.STATE, c.COUNTRY');
		$this->db->from('state a');
		$this->db->join('unit b', 'a.STATEID=b.STATEID');
		$this->db->join('country c', 'c.COUNTRYID = a.COUNTRYID');
		$query=$this->db->get();
		return $query->result();
	}

	function fetchcategorydata(){
		$this->db->where('a.USERNAME_', $this->session->userdata('user_'));
		$this->db->select( 'a.* ,b.UNITNAME');
		$this->db->from('category a');
		$this->db->join('unit b', 'a.UNITID=b.UNITID');
		$query=$this->db->get();
		return $query->result();
	}



//fetching of candidate data from candidate table
	function fetchcandidatedata(){
		$this->db->where('a.USERNAME_', $this->session->userdata('user_'));
		$this->db->select('a.UNITNAME, b.*, c.GENDER,d.CATEGORYNAME');
		$this->db->from('unit a');
		$this->db->join('category d', 'a.UNITID=d.UNITID');
		$this->db->join('candidate b', 'd.CATEGORYID=b.CATEGORYID');
		$this->db->join('gender c', 'b.GENDERID=c.GENDERID');
		$query=$this->db->get();
		return $query->result();	
	}



//fetch mainpage data
	function fetchmainpagedata(){
		$this->db->where('a.USERNAME_', $this->session->userdata('user_'));
		$this->db->select('a.*, b.TYPE');
		$this->db->from('user_type b');
		$this->db->join('login a', 'a.TYPEID=b.TYPEID');
		$query=$this->db->get();
		return $query->result();
	}	


//fetch additinal data
function fetchadditional(){
		$this->db->where('a.USERNAME_', $this->session->userdata('user_'));
		$this->db->select('a.*,b.GENDER');
		$this->db->from('gender b');
		$this->db->join('registration a','b.GENDERID=a.GENDERID');
		$query=$this->db->get();
		return $query->result();
	}	


//for attendance data
//function fetchattendance(){
//		$this->db->where('a.USERNAME_', $this->session->userdata('user_'));
//		$this->db->select('a.CANDIDATEID,a.CANDIDATENAME');
//		$this->db->from('candidate b');
//		$this->db->join('registration a','b.GENDERID=a.GENDERID');
//		$query=$this->db->get();
//		return $query->result();
//	}	
}