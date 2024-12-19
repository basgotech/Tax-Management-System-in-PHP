<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {


	public function index(){
	if(!$this->session->userdata('log')){
    redirect('Auth/login');
	}
	    $data['title']="Manage Employee";
		$data['users']=$this->user_model->get_employe();
        $this->load->view('Admin/Include/header',$data);
        $this->load->view('Admin/employe',$data);
        $this->load->view('Admin/Include/footer');
	}
	public function edit_user($id=""){
		if(!$this->session->userdata('log')){
			redirect('Auth/login');
        }
        $selected_user['user']=$this->user_model->get_user($id);
		$this->load->view('Admin/employee/edit_user_modal',$selected_user);
	}
	public function edit_form(){
		$this->user_model->update_user();
	}
	public function reg_user(){
		$this->load->view('Admin/employee/reg_user_modal');
	}
		public function register_user(){
		$this->user_model->register_user();
	}
	public function delete_user($id){
		if(!$this->session->userdata('log')){
			redirect('Auth/login');
    }
		$selected_user['user']=$this->user_model->get_user($id);
		$this->load->view('Admin/employee/delete_user_modal',$selected_user);
	}

	public function delete_user_db(){
		$this->user_model->delete_user();
	}
}
