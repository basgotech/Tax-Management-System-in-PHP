
<?php

class employee_model extends CI_Model{

	function __construct() {
        parent::__construct();
        $this->load->database();
    }
    

//get request
public function get_request(){

	
		$query = $this->db->get('request');
		return $query;
}

//update company

public function edit_com($get_id){
	$data=array(
		'com_type'=>$this->input->post('com_name')
	 );

     $this->db->where('com_type_id',$get_id);
	 $this->db->update('comp_type',$data);
	 $this->session->set_flashdata('suc', 'successfuly Updated');
	 redirect('Company');
}

//delete comppany

public function delete_com($get_id){
	$this->db->where('com_type_id',$get_id);
	$this->db->delete('comp_type');
	$this->session->set_flashdata('suc', 'Compnay Deleted successfully');
	redirect('Company');
}

//approve service provider 

public function approve_request($get_id){
	$data=array(
		'req_status'=>"Approved"
	 );
	$this->db->where('req_by_id',$get_id);
	$this->db->update('request',$data);
	$data=array(
		'role'=>"Service_Provider"
	 );
	$this->db->where('id',$get_id);
	$this->db->update('users',$data);
	$this->session->set_flashdata('suc', 'Request successfuly Approved');
	redirect('Employee');
}

// service provider disapprove_request

public function disapprove_request($get_id){
	$data=array(
		'req_status'=>"Disapproved"
	 );
	$this->db->where('req_by_id',$get_id);
	$this->db->update('request',$data);
	$data=array(
		'role'=>"Not Assign"
	 );
	$this->db->where('id',$get_id);
	$this->db->update('users',$data);
	$this->session->set_flashdata('suc', 'Request successfuly Dis Approved');
	redirect('Employee');
}

}

?>
