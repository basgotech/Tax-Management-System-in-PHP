<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {


	public function index(){
		if(!$this->session->userdata('log')){
			redirect('Auth/login');
}
 
$role=$this->session->userdata('role');
	
if($role=='Admin'){
        $data['title']="Profile";
        $this->load->view('Admin/Include/header',$data);
        $this->load->view('Admin/profile');
        $this->load->view('Admin/Include/footer');
}
else if($role=='HR'){
    $data['title']="Profile";
        $this->load->view('HR/Include/header',$data);
        $this->load->view('HR/profile');
        $this->load->view('HR/Include/footer');
}
else if($role=='Not Assign'){
    $data['title']="Profile";
	$data['title']="Not Assign";
	$this->load->view('Service_Provider/Include/header',$data);
	$this->load->view('Service_Provider/profile');
	$this->load->view('Service_Provider/Include/footer');
}
		
	}

	public function edit_profile($type=0){
	if($type=='1'){
        $this->load->view('Admin/profile/fname_edit');
		
	}
	if($type=='2'){
        $this->load->view('Admin/profile/lname_edit');
		
	}
	if($type=='3'){
        $this->load->view('Admin/profile/phone_edit');
		
	}
	if($type=='4'){
        $this->load->view('Admin/profile/email_edit');
		
	}
	if($type=='5'){
        $this->load->view('Admin/profile/address_edit');
		
	}
	if($type=='6'){
        $this->load->view('Admin/profile/password_edit');
		
	}
	

	}

	//used to update fname
	public function update_fname(){
		$this->profile_model->update_fname();
	}
	//used to update lname
	public function update_lname(){
		$this->profile_model->update_lname();
	}
	//used to update phone
	public function update_phone(){
		$this->profile_model->update_phone();
	}
	//used to update email
	public function update_email(){
		$this->profile_model->update_email();
	}
	//used to update address
	public function update_address(){
		$this->profile_model->update_address();
	}
	//used to update password
	public function update_password(){
		$this->profile_model->update_password();
	}

}
