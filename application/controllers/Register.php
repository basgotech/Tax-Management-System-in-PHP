<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {


	public function index()
	{
		$data['title']="Register";
        $this->load->view('Admin/Include/header',$data);
        $this->load->view('Auth/register');
        $this->load->view('Admin/Include/footer');
        
	}


	public function register_form(){
        $this->register_model->register_user();
	}

}
