
<?php

class register_model extends CI_Model{

	function __construct() {
        parent::__construct();
        $this->load->database();
    }


	public function register_user(){

		if($this->input->post('password')!=$this->input->post('con_password')){
			$this->session->set_flashdata('worng', 'Password Not Much');
			redirect('Register');
		}
		if(strlen($this->input->post('password'))<6){
			$this->session->set_flashdata('worng', 'Password length less than 6 digit');
			redirect('Register');
		}
		
		$data=array(
           'fname'=>$this->input->post('fname'),
           'lname'=>$this->input->post('lname'),
           'username'=>$this->input->post('username'),
           'phone'=>$this->input->post('phone'),
           'sex'=>$this->input->post('sex'),
           'email'=>$this->input->post('email'),
           'password'=>$this->input->post('password'),
           'role'=>'Not Assign'
		);

		$this->db->insert('users',$data);
		$this->session->set_flashdata('suc', 'successfuly Registerd');
		redirect('Auth/login');
		
	}

	
}

?>
