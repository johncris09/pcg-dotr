<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Marsaf extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();  
        if ( !$this->session->userdata('user_id') ) { 
            redirect('login'); 
        }
    }

    public function index()
	{ 
        $data['page_title'] = "MARSAF"; 
        $this->load->view('admin/marsaf', $data);  
	}
 
    public function add()
	{  
          
        $data['page_title'] = "Add MARSAF"; 
        $data['station'] = $this->station_model->get_all(); 
        $data['report_type'] = $this->report_type_model->get_all();  
        $data['psc_center'] = $this->psc_center_model->get_all();   
        $this->base->load('admin', 'admin/add_marsaf', $data); 
 
	} 

    public function insert_marsaf()
	{ 
        $data = $_POST;

        print_r($data);
	}
  
        
}
         