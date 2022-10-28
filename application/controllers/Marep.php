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
        $data['page_title'] = "Add MAREP"; 
        $this->load->view('admin/add_marep', $data);  
	}

	 

  
        
}
         