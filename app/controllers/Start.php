<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Start extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('My_model', 'mm');
	}

	function index(){
		$this->check_login();
		$data['active'] = 'dashboard';
		$this->load->view('templates/header');
		$this->load->view('dashboard', $data);
		$this->load->view('templates/footer');	
	}

	function login(){
		$this->load->view('templates1/header1');
		$this->load->view('login');
		$this->load->view('templates1/footer1');
	}


	function registration(){
		$data['type_'] = $this->mm->fetchtype();
		$this->load->view('templates1/header1');
		$this->load->view('registration', $data);
		$this->load->view('templates1/footer1');	
	}

	function unit(){
		$this->check_login();
		$data['fetch_unit']=$this->mm->fetchunitdata();
		$data['country_'] = $this->mm->fetchcountry();
		$data['state_'] = $this->mm->fetchstate();
		$data['active'] = 'unit';
		$this->load->view('templates/header');
		$this->load->view('unit', $data);
		$this->load->view('templates/footer');
	}

	function category(){
		$this->check_login();
		$data['unit_']=$this->mm->fetchunit();
		$data['active'] = 'category';
		$this->load->view('templates/header');
		$this->load->view('category',$data);
		$this->load->view('templates/footer');
	}	

	function addcan(){
		$this->check_login();
		$data['active'] = 'addcan';
		$data['unit_']=$this->mm->fetchunit();
		$data['category_']=$this->mm->fetchcategory();
		$data['gender_']=$this->mm->fetchgender();
		$this->load->view('templates/header');
		$this->load->view('addcan',$data);
		$this->load->view('templates/footer');
	}	


	function addadditional(){
		$this->check_login();
		$data['active'] = 'addadditional';
		$data['gender_']=$this->mm->fetchgender();
		$this->load->view('templates/header');
		$this->load->view('addadditional', $data);
		$this->load->view('templates/footer');
	}

	function attendance(){
		$this->check_login();
		$data['active'] = 'attendance';
		$this->load->view('templates/header');
		$this->load->view('attendance',$data);
		$this->load->view('templates/footer');
	}

	function signin(){
		$res_ = $this->mm->authenticate();
		if($res_ == true){
			redirect('start');
		} else {
			redirect('start/login');
		}
	}
	function check_login(){
		if(!$this->session->userdata('user_')){
			redirect('start/login');
		}
	}

	function logout(){
		$this->check_login();
		$this->session->unset_userdata('user_');
		redirect('start');
	}

	function submitRegistration(){
		$this->load->model('universal', 'mm');
		$res = $this->mm->insertlogin();

		if($res == true){
			$this->session->set_flashdata('msg_', "Successfully submited.");
			redirect('start/login');
		} else {
			$this->session->set_flashdata('msg_', "User Already Exists. Please try again");
			redirect('start/registration');
		}
	}


	function submitunit(){

		$this->load->model('universal', 'mm');
		$res = $this->mm->insertunit();

		if($res == true){
			$this->session->set_flashdata('msg_', "Successfully submited.");
			redirect('start/category');
		} else {
			$this->session->set_flashdata('msg_', "Unit Already Exists. Please try again");
			redirect('start/unit');
		}	
	}

	function submitcategory(){
	$this->load->model('universal', 'mm');
		$res = $this->mm->insertcategory();

		if($res == true){
			$this->session->set_flashdata('msg_', "Successfully submited.");
			redirect('start/addcan');
		} else {
			$this->session->set_flashdata('msg_', "Unit Already Exists. Please try again");
			redirect('start/category');
		}	
	}	
	
	function submitcandidate(){
		$this->load->model('universal', 'mm');
		$res = $this->mm->insertcandidate();

		if($res == true){
			$this->session->set_flashdata('msg_', "Successfully submited.");
			redirect('start/addcan');
		} else {
			$this->session->set_flashdata('msg_', "Unit Already Exists. Please try again");
			redirect('start/addcan');
		}
	}



	function addadditional1(){
		$this->load->model('universal', 'mm');
		$res = $this->mm->insertadditional();

		if($res == true){
			$this->session->set_flashdata('msg_', "Successfully submited.");
			redirect('start');
		} else {
			$this->session->set_flashdata('msg_', "Unit Already Exists. Please try again");
			redirect('start/addcan');
		}	
	}
}
