<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {


	public function index(){
	if(!$this->session->userdata('log')){
    redirect('Auth/login');
	}
	    $data['title']="Employee";
		$data['get_req']=$this->employee_model->get_request();
		$this->load->view('Employee/Include/header',$data);
		$this->load->view('Employee/index',$data);
		$this->load->view('Employee/Include/footer');
	}

	public function appove_request($get_id){
		
		$data['req_id']=$get_id;
		$this->load->view('Employee/Request/modal_approve',$data);
	}

	//approve request
	public function approve_req($get_id){
    $this->employee_model->approve_request($get_id);
	}

	//dis approve request 
	
	public function disappove_request($get_id){
		
		$data['req_id']=$get_id;
		$this->load->view('Employee/Request/modal_disapprove',$data);
	}

	//approve request
	public function disapprove_req($get_id){
    $this->employee_model->disapprove_request($get_id);
	}
	
}
