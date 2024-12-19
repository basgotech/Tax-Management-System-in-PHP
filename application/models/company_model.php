
<?php

class company_model extends CI_Model{

	function __construct() {
        parent::__construct();
        $this->load->database();
    }


	public function get_com($get_id=null){
		
		if($get_id==null){

			$query = $this->db->get('comp_type');

			return $query;
		}else{
$this->db->where('com_type_id',$get_id);
$query = $this->db->get('comp_type');
return $query;
		}


}


public function reg_com(){
	$data=array(
		'com_type'=>$this->input->post('com_name')
	 );

	 $this->db->insert('comp_type',$data);
	 $this->session->set_flashdata('suc', 'successfuly Registerd');
	 redirect('Company');
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

}

?>
