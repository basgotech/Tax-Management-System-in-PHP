<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {


	public function index(){
	if(!$this->session->userdata('role')){
			redirect('Auth/login');
    }
    
	$data['title']="Main";

	if($this->session->userdata('role')){
    $role=$this->session->userdata('role');
	
	if($role=='Admin'){
    $data['user_count']=$this->dashboard_model->users_count();
	$data['title']="Admin";
    $this->load->view('Admin/Include/header',$data);
    $this->load->view('Admin/index',$data);
    $this->load->view('Admin/Include/footer');
	}
	else if($role=='Not Assign'){
	$data['title']="Not Assign";
	$data['comp_type']=$this->company_model->get_com();
	$data['check_req_status']=$this->service_provider_model->check_req_status();
	$this->load->view('Service_Provider/Include/header',$data);
    $this->load->view('Service_Provider/not_active',$data);
    $this->load->view('Service_Provider/Include/footer');
	}
	else if($role=='Service_Provider'){
	$data['title']="Service Provider";
	$this->load->view('Service_Provider/Include/header',$data);
    $this->load->view('Service_Provider/index');
    $this->load->view('Service_Provider/Include/footer');
	}
	else if($role=='Employee'){
		$data['title']="Employee";
		$data['get_req']=$this->employee_model->get_request();
		$this->load->view('Employee/Include/header',$data);
		$this->load->view('Employee/index',$data);
		$this->load->view('Employee/Include/footer');
		}
	else{
	$data['title']="Login";
	$this->load->view('Admin/Include/header',$data);
    $this->load->view('Auth/login');
    $this->load->view('Admin/Include/footer');
	}

}
       
	}
}
