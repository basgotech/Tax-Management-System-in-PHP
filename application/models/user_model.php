
<?php

class user_model extends CI_Model{

	function __construct() {
        parent::__construct();
        $this->load->database();
    }


	public function get_employe(){	
$query = $this->db->get('users');
return $query;
	}
	public function get_user($id){
		
		$query=$this->db->where('id',$id);
		$query = $this->db->get('users');
		return $query;
		
		
		
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

	
	public function update_user(){

		$data = array(
			'fname' => $this->input->post('fname'),
			'lname' => $this->input->post('lname'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'status' => $this->input->post('status'),
			'address' => $this->input->post('address'),
			'role' => $this->input->post('role'),
			'password' => $this->input->post('password')
		);
		$user_id=$this->input->post('user_id');
		$this->db->where('id',$user_id);
		$this->db->update('users',$data);
		$this->session->set_flashdata('suc', 'user information updated successfully');
		redirect('Users');
    
	}

	public function register_user(){

		$data = array(
			'fname' => $this->input->post('fname'),
			'lname' => $this->input->post('lname'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'sex' => $this->input->post('sex'),
			'address' => $this->input->post('address'),
			'role' => $this->input->post('role'),
			'password' => $this->input->post('password')
		);

		$this->db->insert('users',$data);
		$this->session->set_flashdata('suc', 'user Registerd successfully');
		redirect('Users');



	}

	public function delete_user(){
		$id=$this->input->post('user_id');

		$this->db->where('id',$id);
		$this->db->delete('users');
		$this->session->set_flashdata('suc', 'user Deleted successfully');
		redirect('Users');
	}


}

?>
