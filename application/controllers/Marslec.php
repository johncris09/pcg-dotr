<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Marslec extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();  
        if ( !$this->session->userdata('user_id') ) { 
            redirect('login'); 
        }
    }

    public function index()
	{ 
        $data['page_title'] = "MARSLEC"; 
        $this->load->view('admin/marslec', $data);  
	}
 
    public function add()
	{  
          
        $data['page_title'] = "Add MARSLEC"; 
        $data['station'] = $this->station_model->get_all(); 
        $data['report'] = $this->report_selection_model->get_all();  
         
        $this->base->load('admin', 'add_marslec', $data); 
 
	} 

    public function insert_marslec()
	{ 
        $data = $_POST;

        print_r($data);
	}
  
        
}
         