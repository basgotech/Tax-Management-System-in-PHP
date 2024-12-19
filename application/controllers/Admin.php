<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function index(){
	if(!$this->session->userdata('log')){
    redirect('Auth/login');
	}
	    $data['user_count']=$this->dashboard_model->users_count();
        $data['title']="Admin";
        $this->load->view('Admin/Include/header',$data);
        $this->load->view('Admin/index',$data);
        $this->load->view('Admin/Include/footer');
	}
}
