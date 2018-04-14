<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Start extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('My_model', 'mm');
	}



												//Showing pages
//dashboard page
	function index(){
		$this->check_login();
		$data['active'] = 'dashboard';
		$data['fetch_info']=$this->mm->fetchmainpagedata();
		$this->load->view('templates/header');
		$this->load->view('dashboard', $data);
		$this->load->view('templates/footer');	
	}

//login
	function login(){
		$this->load->view('templates1/header1');
		$this->load->view('login');
		$this->load->view('templates1/footer1');
	}

//registration
	function registration(){
		$data['type_'] = $this->mm->fetchtype();
		$this->load->view('templates1/header1');
		$this->load->view('registration', $data);
		$this->load->view('templates1/footer1');	
	}
//unit
	function unit(){
		$this->check_login();
		$data['fetch_info']=$this->mm->fetchmainpagedata();
		$data['fetch_unit']=$this->mm->fetchunitdata();
		$data['country_'] = $this->mm->fetchcountry();
		$data['state_'] = $this->mm->fetchstate();
		$data['active'] = 'unit';
		$this->load->view('templates/header');
		$this->load->view('unit', $data);
		$this->load->view('templates/footer');
	}
//category
	function category(){
		$this->check_login();
		$data['fetch_info']=$this->mm->fetchmainpagedata();
		$data['fetch_category']=$this->mm->fetchcategorydata();
		$data['unit_']=$this->mm->fetchunit();
		$data['active'] = 'category';
		$this->load->view('templates/header');
		$this->load->view('category',$data);
		$this->load->view('templates/footer');
	}	
//fetchcategory_via_ajax
	function fetchcategory_via_ajax(){
		$unit = $this->input->post('unit');
		$data['category'] = $this->mm->fetchcategorybyunit($unit);
		echo json_encode($data);

	}
//add candidate	
	function addcan(){
		$this->check_login();
		$data['fetch_candidate']=$this->mm->fetchcandidatedata();
		$data['active'] = 'addcan';
		$data['fetch_info']=$this->mm->fetchmainpagedata();
		$data['unit_']=$this->mm->fetchunit();
		$data['category_']=$this->mm->fetchcategory();
		$data['gender_']=$this->mm->fetchgender();
		$this->load->view('templates/header');
		$this->load->view('addcan',$data);
		$this->load->view('templates/footer');
	}	

//add additional information
	function addadditional(){
		$this->check_login();
		$data['fetch_info']=$this->mm->fetchmainpagedata();
		$data['fetch_add']=$this->mm->fetchadditional();
		$data['active'] = 'addadditional';
		$data['gender_']=$this->mm->fetchgender();
		$data['profile']=$this->mm->fetchadditional();
		$this->load->view('templates/header');
		$this->load->view('addadditional', $data);
		$this->load->view('templates/footer');
	}

//attendance
	function attendance(){
		$this->check_login();
		$data['fetch_info']=$this->mm->fetchmainpagedata();
		$data['active'] = 'attendance';
		$data['unit_']=$this->mm->fetchunit();
		$data['category_']=$this->mm->fetchcategory();
		$this->load->view('templates/header');
		$this->load->view('attendance',$data);
		$this->load->view('templates/footer');
	}


//check at login time
	function signin(){
		$res_ = $this->mm->authenticate();
		if($res_ == true){
			redirect('start');
		} else {
			redirect('start/login');
		}
	}


//check session	
	function check_login(){
		if(!$this->session->userdata('user_')){
			redirect('start/login');
		}
	}


//logout function

	function logout(){
		$this->check_login();
		$this->session->unset_userdata('user_');
		redirect('start');
	}

													//add data in database



//insert registration
	function submitRegistration(){

		$res = $this->mm->insertlogin();

		if($res == true){
			$this->session->set_flashdata('msg_', "Successfully submited.");
			redirect('start/login');
		} else {
			$this->session->set_flashdata('msg_', "User Already Exists. Please try again");
			redirect('start/registration');
		}
	}




//insert unit
	function submitunit(){

		$res = $this->mm->insertunit();

		if($res == true){
			$this->session->set_flashdata('msg_', "Successfully submited.");
			redirect('start/unit');
		} else {
			$this->session->set_flashdata('msg_', "Unit Already Exists. Please try again");
			redirect('start/unit');
		}	
	}


//insert category
	function submitcategory(){
		$res = $this->mm->insertcategory();

		if($res == true){
			$this->session->set_flashdata('msg_', "Successfully submited.");
			redirect('start/category');
		} else {
			$this->session->set_flashdata('msg_', "Category Already Exists. Please try again");
			redirect('start/category');
		}	
	}	

//insert candidate
	
	function submitcandidate(){
		$res = $this->mm->insertcandidate();

		if($res == true){
			$this->session->set_flashdata('msg_', "Successfully submited.");
			redirect('start/addcan');
		} else {
			$this->session->set_flashdata('msg_', "Candidate Already Exists. Please try again");
			redirect('start/addcan');
		}
	}


//insert attendance
	function submitattendance(){
		
		$res = $this->mm->insertattendance();
			if($res == true){
		$this->session->set_flashdata('msg_', "Successfully submited.");
			redirect('start');
		} else {
			$this->session->set_flashdata('msg_', "Attendance can't Submit. Please try again");
			redirect('start/attendance');
		}

	}

//add and update additional information
	function updateadditional(){
		$res = $this->mm->updateadditional();
			$this->session->set_flashdata('msg_', "Information Already Exists. Please try again");
			redirect('start/addadditional');
	}



														//upddation of forms
	function updateunit(){
			$res = $this->mm->updateunit();
			$this->session->set_flashdata('msg_', "Information Already Exists. Please try again");
			redirect('start/unit');

	}

	function updatecategory(){
			$res = $this->mm->updatecategory();
			$this->session->set_flashdata('msg_', "Information Already Exists. Please try again");
			redirect('start/category');
	}

	function updatecandidate(){
			$res = $this->mm->updatecandidate();
			$this->session->set_flashdata('msg_', "Information Already Exists. Please try again");
			redirect('start/addcan');	
	}




	


											//fetch data in combo box dynamically
	
	function fetchCandidates(){
		$data['candidates'] = $this->mm->fetch_candidates();
		echo json_encode($data);
	}
	



							//show data in aother form for updation(UPDATION FORMS)
	

	function u_unit($unitid='x'){
		$this->check_login();
		
		$data['fetch_info']=$this->mm->fetchmainpagedata();
		$data['fetch_unit']=$this->mm->fetchunitdata();
		$data['fetch_unit_single']=$this->mm->fetchunitdata($unitid);
		$data['country_'] = $this->mm->fetchcountry();
		$data['state_'] = $this->mm->fetchstate();
		$data['active'] = 'unit';
		$this->load->view('templates/header');
		$this->load->view('updateunit', $data);
		$this->load->view('templates/footer');
	}


	function u_category($categoryid='x'){
		$this->check_login();
		$data['fetch_info']=$this->mm->fetchmainpagedata();
		$data['fetch_category']=$this->mm->fetchcategorydata();
		$data['fetch_category_single']=$this->mm->fetchcategorydata($categoryid);
		$data['unit_']=$this->mm->fetchunit();
		$data['active'] = 'category';
		$this->load->view('templates/header');
		$this->load->view('updatecategory', $data);
		$this->load->view('templates/footer');

	}
		

	function u_candidates($candidateid='x', $categid){
		$this->check_login();
		$data['fetch_candidate']=$this->mm->fetchcandidatedata();
		$data['active'] = 'addcan';
		$data['fetch_info']=$this->mm->fetchmainpagedata();
		$data['fetch_candidate_single']=$this->mm->fetchcandidatedata($candidateid);
		$data['unit_']=$this->mm->fetchunit();
		$data['unitid']=$this->mm->fetchwithcategory($categid);
		$data['category_']=$this->mm->fetchcategory();
		$data['gender_']=$this->mm->fetchgender();
		$this->load->view('templates/header');
		$this->load->view('updatecandidate',$data);
		$this->load->view('templates/footer');
	}	

	

	function u_additional(){
		$this->check_login();
		$data['fetch_info']=$this->mm->fetchmainpagedata();
		$data['fetch_add']=$this->mm->fetchadditional();
		$data['active'] = 'addadditional';
		$data['gender_']=$this->mm->fetchgender();
		$this->load->view('templates/header');
		$this->load->view('updateadditional', $data);
		$this->load->view('templates/footer');
	}

	

	function u_attendance(){
		$this->check_login();
		$data['fetch_info']=$this->mm->fetchmainpagedata();
		$data['active'] = 'attendance';
		$data['unit_']=$this->mm->fetchunit();
		$data['category_']=$this->mm->fetchcategory();
		$this->load->view('templates/header');
		$this->load->view('updateattendance',$data);
		$this->load->view('templates/footer');
	}






						//delete data from database




	public function d_unit($unitid){
		$this->check_login();

		$this->mm->deleteunit($unitid);

		$data['fetch_info']=$this->mm->fetchmainpagedata();
		$data['fetch_unit']=$this->mm->fetchunitdata();
		$data['country_'] = $this->mm->fetchcountry();
		$data['state_'] = $this->mm->fetchstate();
		$data['active'] = 'unit';
		$this->load->view('templates/header');
		$this->load->view('unit', $data);
		$this->load->view('templates/footer');
		$this->mm->deleteunit($unitid);
		
		redirect('start/unit');
	}


	public function d_category($categoryid){
		$this->check_login();

		$this->mm->deletecategory($categoryid);

		$data['fetch_info']=$this->mm->fetchmainpagedata();
		$data['fetch_category']=$this->mm->fetchcategorydata();
		$data['unit_']=$this->mm->fetchunit();
		$data['active'] = 'category';
		$this->load->view('templates/header');
		$this->load->view('category',$data);
		$this->load->view('templates/footer');
	}


}