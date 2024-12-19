<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {

    
	public function index(){
	if(!$this->session->userdata('log')){
    redirect('Auth/login');
	}                  
        $data['company']=$this->company_model->get_com();
        $data['title']="Admin";
        $this->load->view('Admin/Include/header',$data);
        $this->load->view('Admin/company',$data);
        $this->load->view('Admin/Include/footer');
	}

    //modal reg form
    public function reg_company(){
        
        $this->load->view('Admin/company/reg_com_modal');

    }
    //register compnay
    public function register_com(){
       $this->company_model->reg_com();
        
    }

    //modal edit company

    public function edit_com($get_id){
        $data['company']=$this->company_model->get_com($get_id);
        $data['get_id']=$get_id;
        
        $this->load->view('Admin/company/edit_com_modal',$data);

    }

    //edit_company

    public function edit_company($get_id){
       $this->company_model->edit_com($get_id);

    }

    //load delete modal

    public function delete_com($get_id){
        $data['company']=$this->company_model->get_com($get_id);

        $data['get_id']=$get_id;
        
        $this->load->view('Admin/company/delete_com_modal',$data);
    }

    //delete com db

    public function delete_com_db($get_id){
       $this->company_model->delete_com($get_id);

    }
}
