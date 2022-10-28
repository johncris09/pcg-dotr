<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Marep extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();  
        if ( !$this->session->userdata('user_id') ) { 
            redirect('login'); 
        }
    }

    public function index()
	{ 
        $data['page_title'] = "MAREP"; 
        $this->load->view('admin/marep', $data);  
	}
 
    public function add()
	{ 
        
        $this->load->model('Station_model', 'StationModel');
        $this->load->model('Report_selection_model', 'ReportSelectionModel');


        $data['page_title'] = "Add MAREP"; 
        $data['station'] = $this->StationModel->get_all(); 
        $data['report'] = $this->ReportSelectionModel->get_all(); 
        
        $this->load->view('admin/add_marep', $data);  
	}

	 

  
        
}
         