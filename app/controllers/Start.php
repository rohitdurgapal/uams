<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Start extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	function index(){
		$this->load->view('templates1/header1');
		$this->load->view('registration');
		$this->load->view('templates1/footer1');
	}
	function login(){
		$this->load->view('templates1/header1');
		$this->load->view('login');
		$this->load->view('templates1/footer1');	
	}
	
	function dashboard(){
		$data['active'] = 'dashboard';
		$this->load->view('templates/header');
		$this->load->view('dashboard', $data);
		$this->load->view('templates/footer');	
	}
	function unit(){
		$data['active'] = 'unit';
		$this->load->view('templates/header');
		$this->load->view('unit', $data);
		$this->load->view('templates/footer');
	}

	function category(){
		$data['active'] = 'category';
		$this->load->view('templates/header');
		$this->load->view('category',$data);
		$this->load->view('templates/footer');
	}	

	function addcan(){
		$this->load->view('templates/header');
		$this->load->view('addcan');
		$this->load->view('templates/footer');
	}	
	function addadditional(){
		$data['active'] = 'addadditional';
		$this->load->view('templates/header');
		$this->load->view('addadditional', $data);
		$this->load->view('templates/footer');
	}


	function attendance(){
		$this->load->view('templates/header');
		$this->load->view('attendance');
		$this->load->view('templates/footer');
	}

}
