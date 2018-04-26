<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_model extends CI_Model{

	function authenticate(){
		$user = $this->input->post('TXT_USER');
		$pwd = $this->input->post('TXT_PWD');

		$this->db->where('USERNAME_', $user);
		$this->db->where('PASSWORD_', $pwd);
		$this->db->where('STATUS', 1);
		$this->db->select('a.USERNAME_, b.TYPE, a.USER_UPLINE');
		$this->db->from('login a');
		$this->db->join('user_type b', 'b.TYPEID=a.TYPEID');
		$query = $this->db->get();
		//echo $this->db->last_query(); die();
		if($query->num_rows() != 0){
			$row = $query->row();
			$this->session->set_userdata('user_', $row->USERNAME_);
			$this->session->set_userdata('user_type', $row->TYPE);
			$this->session->set_userdata('user_upline', $row->USER_UPLINE);
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
				'USER_UPLINE'=>$username_,
				'STATUS'=>$status_,
				'TYPEID'=>$type_
			);
			$bool = $this->db->insert('login', $data);
			
			if($bool == true){
				$data=array(
					'FNAME'=>'',
					'LNAME'=>'',
					'GENDERID'=>'1',
					'MOBILE_NO'=>'',
					'MOBILE_VERIFICATION'=>'NO',
					'EMAIL'=>'',
					'EMAIL_VERIFICATION'=>'NO',
					'USERNAME_'=>$username_
				);
				$bool=$this->db->insert('registration', $data);
			}
		}	
		return $bool;
	}



	//create new user (user management)
	
	function submit_user(){
		$username_ = $this->input->post('uname');
		$createpwd_ = $this->input->post('cpass');
		$status_=$this->input->post('sta_');
		$type_=$this->input->post('type');
		$user_ = $this->session->userdata('user_');
		$this->db->where('USERNAME_', $username_);
		$rs = $this->db->get('login');	
		if($rs->num_rows() != 0){
			$bool = false;
		} else {
			$bool = true; 
				$data = array(
				'USERNAME_' => $username_,
				'PASSWORD_' => $createpwd_,
				'TYPEID'=>$type_,
				'STATUS'=>$status_,
				'USER_UPLINE'=>$user_
			);
			$bool = $this->db->insert('login', $data);
			if($bool == true){
				$data=array(
					'FNAME'=>'',
					'LNAME'=>'',
					'GENDERID'=>'1',
					'MOBILE_NO'=>'',
					'MOBILE_VERIFICATION'=>'NO',
					'EMAIL'=>'',
					'EMAIL_VERIFICATION'=>'NO',
					'USERNAME_'=>$username_
				);
				$bool=$this->db->insert('registration', $data);
			}
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

//insertsharing
	function insertsharing(){
		$category_ = $this->input->post('category');
		$sharingname_ = $this->input->post('share');
		$user_ = $this->session->userdata('user_');
		$data=array(
			'CATEGORYID'=>$category_,
			'USERNAME_'=>$sharingname_,
			'USER_UPLINE'=>$user_
	);
		$bool=$this->db->insert('sharingcandidate', $data);	
		return $bool;	
	}






	//insert attendance
	function insertattendance(){
		$unitid_ = $this->input->post('unit');
		$category_ = $this->input->post('category');
		$user_ = $this->session->userdata('user_');
		$candidate = $this->fetch_candidates_internal($category_);
		$date_ = $this->input->post('date');
		//$time__='"'.$this->input->post('time_')."'";
		$time__=$this->input->post('time_');

				$this->db->where('USERNAME_', $this->session->userdata('user_'));
				$this->db->where('CATEGORYID',$category_);
				$this->db->where('UNITID',$unitid_);
				$this->db->where('DATE',$date_);
				$this->db->where('TIME',$time__);
				$rs = $this->db->get('attendance');	
				

				if($rs->num_rows() !=0){
					foreach ($candidate as $item) {
							$this->db->where('USERNAME_', $this->session->userdata('user_upline'));
							$this->db->where('CATEGORYID',$category_);
							$this->db->where('UNITID',$unitid_);
							$this->db->where('DATE',$date_);
							$this->db->where('TIME',$time__);
				$data=array(
						'UNITID'=>$unitid_,
						'CATEGORYID'=>$category_,
						'CANDIDATEID'=>$item->CANDIDATEID,
						'USERNAME_'=>$user_,
						'ATTENDANCESTATUS'=>$this->input->post($item->CANDIDATEID),
						'DATE'=>$date_,
						'TIME'=>$time__		
						);
							
							$bool=$this->db->update('attendance', $data); 
					  }	
					  $this->session->set_flashdata('msg_', "Successfully Updated.");
					}
 
		 			else{

					foreach ($candidate as $item) {
					$data=array(
						'UNITID'=>$unitid_,
						'CATEGORYID'=>$category_,
						'CANDIDATEID'=>$item->CANDIDATEID,
						'USERNAME_'=>$user_,
						'ATTENDANCESTATUS'=>$this->input->post($item->CANDIDATEID),
						'DATE'=>$date_,
						'TIME'=>$time__		
						);
							$bool=$this->db->insert('attendance', $data); 
					  }	
					  $this->session->set_flashdata('msg_', "Successfully submited.");
					}

		return $bool;
		}


													//Updation of data
	
//update additional info
	function updateadditional(){
		$firstname_ = $this->input->post('firstname');
		$lastname_ = $this->input->post('lastname');
		$gender_=$this->input->post('gender');
		$mobileno_ = $this->input->post('mobno');
		$email_ = $this->input->post('email');
		$user_ = $this->session->userdata('user_');
		
		$data=array(
			'FNAME'=>$firstname_,
			'LNAME'=>$lastname_,
			'GENDERID'=>$gender_,
			'MOBILE_NO'=>$mobileno_,
			'EMAIL'=>$email_,
	);
		$this->db->where('USERNAME_', $this->session->userdata('user_'));
		$bool=$this->db->update('registration', $data);
		return $bool;
	}


//update unit table data
	function updateunit(){
		$unitid_	=$this->input->post('unitid');
		$unitname_ = $this->input->post('unitname');
		$country = $this->input->post('country');
		$state = $this->input->post('state'); 
		$user_ = $this->session->userdata('user_');
		$data=array(
			'UNITNAME'=>$unitname_,
			'USERNAME_'=>$user_,
			'STATEID'=>$state
	);
		$this->db->where('USERNAME_',$user_);
		$this->db->where('UNITID',$unitid_);
		$bool=$this->db->update('unit', $data);
		return $bool;
	}

//update category table data
	function updatecategory(){
		$categoryid_	=$this->input->post('categoryid');
		$unitname_ = $this->input->post('unit');
		$categoryname_ = $this->input->post('categoryname');
		$purpose = $this->input->post('purpose');
		$state = $this->input->post('state'); 
		$unit_ = $this->input->post('unit');
		$user_ = $this->session->userdata('user_');
			$data=array(
			'CATEGORYNAME'=>$categoryname_,
			'PURPOSE'=>$purpose,
			'USERNAME_'=>$user_,
			'UNITID'=>$unit_
			
	);
		$this->db->where('USERNAME_',$user_);
		$this->db->where('CATEGORYID',$categoryid_);
		$bool=$this->db->update('category', $data);
		return $bool;	
	}

//update candidate table
	function updatecandidate(){
		$candidateid_ =$this->input->post('candidateid');
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
			'USERNAME_'=>$user_,
			'CANDIDATEID'=>$candidateid_
		);
		$this->db->where('USERNAME_',$user_);
		$this->db->where('CANDIDATEID',$candidateid_);
		$bool=$this->db->update('candidate', $data);
		return $bool;

	}







function fetchtype($type='1'){
		if($type != ''){
			$this->db->where('TYPEID',$type);
		}
		$query = $this->db->get('user_type');
		return $query->result();
	}


//for user management
function fetch_type($type='2'){
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
		$this->db->where ('USERNAME_',$this->session->userdata('user_upline'));
		$query=$this->db->get('unit');
		
		return $query->result();
	}

	function fetchwithcategory($categoryid){
		$this->db->where('CATEGORYID', $categoryid);
		$query = $this->db->get('category');
		if($query->num_rowS() != 0){
			$row = $query->row();
			$unitid = $row->UNITID;
		} else {
			$unitid = 'x';
		}
		return $unitid;
	}
	function fetchcategory($category=''){
		if ($category !=''){
			$this->db->where ('CATEGORYID',$category);
		}
		$this->db->where ('USERNAME_',$this->session->userdata('user_upline'));
		$query=$this->db->get('category');
		return $query->result();	
	}

	function fetchcategorybyunit($unit){
		$this->db->where ('UNITID',$unit);
		$this->db->where ('USERNAME_',$this->session->userdata('user_upline'));

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
	function fetchshare($share=''){
		if ($share !=''){
			$this->db->where ('USERNAME_',$share);
		}
		$query=$this->db->get('login');
		return $query->result();	
	}




//showing reports



	function fetchunitcategorydata(){
		$this->db->where('a.USER_UPLINE', $this->session->userdata('user_'));
		$this->db->select( 'a.* ,b.UNITID,b.UNITNAME');
		$this->db->from('category a');
		$this->db->join('unit b', 'a.UNITID=b.UNITID');
		$query=$this->db->get();
		return $query->result();
	}



	function fetchcan(){
		$category_ = $this->input->post('category');
		$user_ = $this->session->userdata('user_uline');
		$this->db->where('USERNAME_', $this->session->userdata('user_upline'));
		$this->db->where('CATEGORYID',$category_);
		$this->db->select('a.CANDIDATEID,a.CANDIDATENAME,a.DOB,a.MOBILENO,a.EMAIL');
		$this->db->from('candidate a');
		$query = $this->db->get();
		return $query->result();
	}




	function fetchattedance(){
		$unitid_ = $this->input->post('unit');
		$category_ = $this->input->post('category');
		$user_ = $this->session->userdata('user_');
		$candidate = $this->fetch_candidates_internal($category_);
		$date_ = $this->input->post('date');
		$this->db->where('b.USERNAME_',$user_);
		$this->db->where('b.CATEGORYID',$category_);
		$this->db->where('b.UNITID',$unitid_);
		$this->db->where('b.DATE',$date_);
		$this->db->select('a.CANDIDATEID,a.CANDIDATENAME,b.TIME,b.ATTENDANCESTATUS');
		$this->db->from('candidate a');
		$this->db->join('attendance b', 'a.CANDIDATEID = b.CANDIDATEID');
		$query = $this->db->get();
		return $query->result();
			
}

//fetching of unit data from databse
	function fetchunitdata($unitid='x'){
		if($unitid != 'x'){
			$this->db->where('UNITID', $unitid);
		}
		$this->db->where('b.USERNAME_', $this->session->userdata('user_'));
		$this->db->select('b.*, a.STATE, c.COUNTRY, c.COUNTRYID');
		$this->db->from('state a');
		$this->db->join('unit b', 'a.STATEID=b.STATEID');
		$this->db->join('country c', 'c.COUNTRYID = a.COUNTRYID');
		$query=$this->db->get();
		if($unitid != 'x'){
			return $query->row();
		} else {
			return $query->result();
		}
	}

	function fetchsharedata($sharingid='x'){
		if($sharingid !='x'){
		$this->db->where('SHARINGID', $sharingid);	
		}
		$this->db->where('b.USERNAME_', $this->session->userdata('user_'));
		$this->db->select('b.*,c.CATEGORYNAME');
		$this->db->from('category c');
		$this->db->join('sharingcandidate b','b.CATEGORYID=c.CATEGORYID');
		$query = $this->db->get();
		if($sharingid !='x'){
			return $query->row();
		}else{
			return $query->result();	
		}
		
	}









//fetch usermanagement data
	function fetchuserdata(){
		$this->db->where('b.USER_UPLINE',$this->session->userdata('user_'));
		$this->db->select('b.*,c.TYPE');
		$this->db->from('user_type c');
		$this->db->join('login b','b.TYPEID=c.TYPEID');
		$query=$this->db->get();
		return $query->result();
	}




//fetching of category data from databse
	function fetchcategorydata($categoryid='x'){
		if($categoryid != 'x'){
			$this->db->where('CATEGORYID',$categoryid);
		}
		$this->db->where('a.USERNAME_', $this->session->userdata('user_'));
		$this->db->select( 'a.* ,b.UNITNAME');
		$this->db->from('category a');
		$this->db->join('unit b', 'a.UNITID=b.UNITID');
		$query=$this->db->get();
		if($categoryid !='x'){
			return $query->row();
		} else{
			return $query->result();
		}
	}


//fetching of candidate data from candidate table
	function fetchcandidatedata($candidateid='x'){
		if($candidateid !='x'){
			$this->db->where('CANDIDATEID',$candidateid);	
		}
		$this->db->where('a.USERNAME_', $this->session->userdata('user_'));
		$this->db->select('a.UNITNAME, b.*, c.GENDER,d.CATEGORYNAME');
		$this->db->from('unit a');
		$this->db->join('category d', 'a.UNITID=d.UNITID');
		$this->db->join('candidate b', 'd.CATEGORYID=b.CATEGORYID');
		$this->db->join('gender c', 'b.GENDERID=c.GENDERID');
		$query = $this->db->get();
		if($candidateid !='x'){
				return $query->row();
		} else{
			return $query->result();	
		}
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
		return $query->row();
	}	



//for attendance data
function fetch_candidates(){
		$unitid_ = $this->input->post('unit');
		$category_ = $this->input->post('category');
		$user_ = $this->session->userdata('user_upline');
		$candidate = $this->fetch_candidates_internal($category_);
		$date_ = $this->input->post('date');
		$time__=$this->input->post('time_');
		//$time__='"'.$this->input->post('time_').'"';
		
		$this->db->where('USERNAME_',$user_);
		$this->db->where('CATEGORYID',$category_);
		$this->db->where('UNITID',$unitid_);
		$this->db->where('DATE',$date_);
		$this->db->where('TIME',$time__);
		$rs = $this->db->get('attendance');
		if($rs->num_rows() !=0){


			$this->db->where('b.USERNAME_',$user_);
			$this->db->where('b.CATEGORYID',$category_);
			$this->db->where('b.UNITID',$unitid_);
			$this->db->where('b.DATE',$date_);
			$this->db->where('b.TIME',$time__);

			$this->db->select('a.CANDIDATEID,a.CANDIDATENAME, b.ATTENDANCESTATUS');
			$this->db->from('candidate a');
			$this->db->join('attendance b', 'a.CANDIDATEID = b.CANDIDATEID');
			$query = $this->db->get();
			$cnt = 3;


			} else {
			$this->db->where('a.CATEGORYID', $this->input->post('category'));
			$this->db->where('a.USERNAME_', $this->session->userdata('user_'));
			$this->db->select('a.CANDIDATEID,a.CANDIDATENAME');
			$this->db->from('candidate a');
			$query=$this->db->get();	
			$cnt = 2;
		}
		$data['resultant'] = $query->result();
		$data['cols'] = $cnt;
		return $data;
	}	

function fetch_candidates_internal($categ){
			$this->db->where('a.CATEGORYID', $categ);
		$this->db->where('a.USERNAME_', $this->session->userdata('user_'));
		$this->db->select('a.CANDIDATEID,a.CANDIDATENAME');
		$this->db->from('candidate a');
		$query=$this->db->get();
		return $query->result();
	}	

						//delete data from database



//delete user management
	function deleteuser($uname){
		$this->load->database();
		$this->db->where('USERNAME_',$uname);
		$this->db->delete('login');
		return true;
	}

//delete sharing authority permision
	function deleteshare($sharingid){
		$this->load->database();
		$this->db->where('SHARINGID',$sharingid);
		$this->db->delete('sharingcandidate');
		return true;
	}	




//blockuser
	function blockuser($uname){
		$this->db->where('USERNAME_',$uname);
		$data = array(
				'STATUS'=>0
			);
		$this->db->update('login',$data);
		return $bool;
	}



	//unblockuser
	function unblockuser($uname){
		$this->db->where('USERNAME_',$uname);
		$data = array(
				'STATUS'=>1
			);
		$this->db->update('login',$data);
		return $bool;
	}






	//delete unit
function deleteunit($unitid){
	$this->load->database();
	$this->db->where('UNITID',$unitid);
	$this->db->delete('unit');
	return true;
	}
	
//delete category
function deletecategory($categoryid){
	$this->load->database();
	$this->db->where('CATEGORYID',$categoryid);
	$this->db->delete('category');
	return true;
	}

//delete candidates
function deletecandidate($candidateid){
	$this->load->database();
	$this->db->where('CANDIDATEID',$candidateid);
	$this->db->delete('candidate');
	return true;
	}



}