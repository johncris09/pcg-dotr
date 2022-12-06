<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Urban_marsar extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();  
        if ( !$this->session->userdata('user_id') ) { 
            redirect('login'); 
        }
    }

    public function index()
	{ 
        $data['page_title'] = "URBAN MARSAR"; 
        $this->load->view('admin/urban_marsar', $data);  
	}
 
    public function add()
	{  
          
        $data['page_title'] = "Add URBAN MARSAR"; 
        $data['station'] = $this->station_model->get_all(); 
        $data['report'] = $this->report_selection_model->get_all();  
         
        $this->base->load('admin', 'add_urban_marsar', $data); 
 
	} 
 
  
        
}
         