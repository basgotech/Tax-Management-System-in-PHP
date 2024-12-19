<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {


	public function index()
	{
		$data['title']="Item";
        $data['item']=$this->service_provider_model->get_item();
        $this->load->view('Service_Provider/Include/header',$data);
        $this->load->view('Service_Provider/items');
        $this->load->view('Service_Provider/Include/footer');
        
	}

    //modal add item

    public function add_item(){
        $this->load->view('Service_Provider/item/add_item');
    }

    //add item model 
    public function add_item_model(){
        $this->service_provider_model->add_item();
    }
    
	
}
