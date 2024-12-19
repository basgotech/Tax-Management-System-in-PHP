
<?php

class dashboard_model extends CI_Model{

	function __construct() {
        parent::__construct();
        $this->load->database();
    }


	public function users_count(){
		$query = $this->db->get('users');
        return $query->num_rows();
	}

    //used to get total jobs

    public function total_job(){
        $query = $this->db->get('job_application');
        return $query->num_rows();
    }	

    //used to get active jobs

    public function active_job(){
        $this->db->where('close_status','Open');
        $query = $this->db->get('job_application');
        return $query->num_rows();
    }
    //used to get close jobs

    public function closed_jobs(){
        $this->db->where('close_status','Closed');
        $query = $this->db->get('job_application');
        return $query->num_rows();
    }

       //used to get total applicant

       public function total_applicant(){
        $query = $this->db->get('job_seeker');
        return $query->num_rows();
    }


}

?>
