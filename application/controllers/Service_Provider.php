<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service_Provider extends CI_Controller {


	public function not_active(){
	if(!$this->session->userdata('log')){
    redirect('Auth/login');
	}
    $data['title']="Not Assign";
    $data['comp_type']=$this->company_model->get_com();
	$data['check_req_status']=$this->service_provider_model->check_req_status();
	$this->load->view('Service_Provider/Include/header',$data);
    $this->load->view('Service_Provider/not_active',$data);
    $this->load->view('Service_Provider/Include/footer');

	}

    //send request

    public function send_request(){
        $this->service_provider_model->send_req();
    }
}
