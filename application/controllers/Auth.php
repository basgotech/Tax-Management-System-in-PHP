<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {


	public function login()
	{
		$data['title']="Login";
        $this->load->view('Admin/Include/header',$data);
        $this->load->view('Auth/login');
        $this->load->view('Admin/Include/footer');
        
	}

	public function login_form(){
		
		$this->auth_model->login();
		
	}

	public function signout(){
		$this->session->set_userdata('id',null);
		$this->session->set_userdata('fname',null);
		$this->session->set_userdata('lname',null);
		$this->session->set_userdata('email',null);
		$this->session->set_userdata('phone',null);
		$this->session->set_userdata('role',null);
		$this->session->set_userdata('sex',null);
		$this->session->set_userdata('address',null);
		$this->session->set_userdata('log',null);

		redirect('Auth/login'); 
	}
}
