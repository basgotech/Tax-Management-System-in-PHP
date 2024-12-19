
<?php

class service_provider_model extends CI_Model{

	function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function check_req_status(){
        $this->db->where('req_by_id',$this->session->userdata('user_id'));
$query = $this->db->get('request');
$count=$query->num_rows();

return $count;
    }

    public function send_req(){
        
    	$config['upload_path']   = './uploads'; 
$name='licence'.$this->session->userdata('fname').''.$this->session->userdata('user_id');
		
$config['overwrite'] = TRUE;
$config['allowed_types'] = 'png'; 
$config['file_name']      = $name; 
$config['max_size']      = 4096; 
$this->load->library('upload', $config);
if ( ! $this->upload->do_upload('userfile')) {
   
	$this->session->set_flashdata('worng', $this->upload->display_errors());
	redirect('Service_Provider/not_active');
}
   
else { 
	
	//
	$data=array(
		'req_by_id'=>$this->session->userdata('user_id'),
        'req_document'=>$name,
        'req_comp_name'=>$this->input->post('comp_name'),
        'req_comp_type'=>$this->input->post('comp_type')
	  );
	$this->db->insert('request',$data);
	$this->session->set_flashdata('suc', 'Request Sent');
	redirect('Service_Provider/not_active');
	}
    }

	public function get_item($get_id=null){
		$user_id=$this->session->userdata('user_id');

		if($get_id==null){
			$query=$this->db->where('ilist_by',$user_id);
			$query = $this->db->get('item_list');
			return $query;
		}else{
			$query=$this->db->where('ilist_by',$user_id);
			$query=$this->db->where('ilist_id',$get_id);
			$query = $this->db->get('item_list');
			return $query;
		}
		
		
	}

//add item 
public function add_item(){
	$user_id=$this->session->userdata('user_id');
	$data=array(
		'ilist_by'=>$user_id,
		'ilist_name'=>$this->input->post('item_name'),
		'ilist_cate_id'=>$this->input->post('item_category'),
		'ilist_single_amount'=>$this->input->post('item_single_amount')
	 );

	 $this->db->insert('item_list',$data);
	 $this->session->set_flashdata('suc', 'successfuly Item Added');
	 redirect('item');
}

}

?>
