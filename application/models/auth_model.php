
<?php

class auth_model extends CI_Model{

	function __construct() {
        parent::__construct();
        $this->load->database();
    }


	public function login(){
		
$this->db->where('username',$this->input->post('username'));
$this->db->where('password',$this->input->post('password'));
$query = $this->db->get('users');
$count=$query->num_rows();

if($query->row()->status=="Deactivate"){
	$this->session->set_flashdata('worng', 'Your Account Deactivated');
	redirect('Auth/login');
}

if($count==1){
    
	$this->session->set_userdata('user_id',$query->row()->id);
	$this->session->set_userdata('fname',$query->row()->fname);
	$this->session->set_userdata('lname',$query->row()->lname);
	$this->session->set_userdata('username',$query->row()->username);
	$this->session->set_userdata('email',$query->row()->email);
	$this->session->set_userdata('sex',$query->row()->sex);
	$this->session->set_userdata('phone',$query->row()->phone);
	$this->session->set_userdata('role',$query->row()->role);
	$this->session->set_userdata('sex',$query->row()->sex);
	$this->session->set_userdata('address',$query->row()->address);
	$this->session->set_userdata('log','logged');
	$this->session->set_flashdata('suc', 'Login Granted');
	redirect('Main');
	
}else{
	$this->session->set_flashdata('worng', 'Invalid Account');
	redirect('Auth/login');
}

	}
	


}

?>
