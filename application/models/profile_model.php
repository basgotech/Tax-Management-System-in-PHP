
<?php

class profile_model extends CI_Model{

	function __construct() {
        parent::__construct();
        $this->load->database();
    }


	public function login(){
		
$this->db->where('email',$this->input->post('email'));
$this->db->where('password',$this->input->post('password'));
$query = $this->db->get('users');
$count=$query->num_rows();



	}

	public function update_fname(){
		$data=array(
			'fname'=>$this->input->post('fname')
		  );
		$user_id=$this->session->userdata('id');
		$this->db->where('id',$user_id);
		$this->db->update('users',$data);
		$this->session->set_flashdata('suc', 'Your First name Information Updated');
		$this->session->set_userdata($data);
		redirect('profile');
	}
	
	public function update_lname(){
		$data=array(
			'lname'=>$this->input->post('lname')
		  );
		$user_id=$this->session->userdata('id');
		$this->db->where('id',$user_id);
		$this->db->update('users',$data);
		$this->session->set_flashdata('suc', 'Your last name Information Updated');
		$this->session->set_userdata($data);
		redirect('profile');
	}

	public function update_phone(){
		$data=array(
			'phone'=>$this->input->post('phone')
		  );
		$user_id=$this->session->userdata('id');
		$this->db->where('id',$user_id);
		$this->db->update('users',$data);
		$this->session->set_flashdata('suc', 'Your Phone Information Updated');
		$this->session->set_userdata($data);
		redirect('profile');
	}
	
	public function update_email(){
		$data=array(
			'address'=>$this->input->post('address')
		  );
		$user_id=$this->session->userdata('id');
		$this->db->where('id',$user_id);
		$this->db->update('users',$data);
		$this->session->set_flashdata('suc', 'Your Email Address Updated');
		$this->session->set_userdata($data);
		redirect('profile');
	}
	public function update_address(){
		$data=array(
			'address'=>$this->input->post('address')
		  );
		$user_id=$this->session->userdata('id');
		$this->db->where('id',$user_id);
		$this->db->update('users',$data);
		$this->session->set_flashdata('suc', 'Your  Address Updated');
		$this->session->set_userdata($data);
		redirect('profile');
	}

	public function update_password(){

		if($this->input->post('new_password')!=$this->input->post('con_password')){

			$this->session->set_flashdata('worng', 'Your confirm  Password not matched!');
			redirect('profile');
		}
		else if($this->input->post('old_password')!=$this->session->userdata('password')){
			$this->session->set_flashdata('worng', 'Your Old  Password not Correct!');
			redirect('profile');
		}
		else if(strlen($this->input->post('new_password'))<6){
			$this->session->set_flashdata('worng', 'Password Length must be greater than 5!');
			redirect('profile');
		}
		else{

		
		$data=array(
			'password'=>$this->input->post('new_password')
		  );
		$user_id=$this->session->userdata('id');
		$this->db->where('id',$user_id);
		$this->db->update('users',$data);
		$this->session->set_flashdata('suc', 'Your  Password Updated');
		$this->session->set_userdata($data);
		redirect('profile');

		}
	}
}

?>
