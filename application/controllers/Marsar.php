<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Marsar extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();  
        if ( !$this->session->userdata('user_id') ) { 
            redirect('login'); 
        }
    }

    public function index()
	{ 
        $data['page_title'] = "MARSAR"; 
        $this->load->view('admin/marsar', $data);  
	}
 
    public function add()
	{  
          
        $data['page_title'] = "Add MARSAR"; 
        $data['station'] = $this->station_model->get_all(); 
        $data['report'] = $this->report_selection_model->get_all();  
         
        $this->base->load('admin', 'admin/add_marsar', $data); 
 
	} 

    public function insert_marsar()
	{ 
        $data = $_POST;

        print_r($data);
	}
  
        
}
         