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
        $data['station'] = $this->station_model->get_all(); 
        $data['report'] = $this->report_selection_model->get_all();  
        $data['activity_conduct'] = $this->activity_conduct_model->get_all(); 
        $data['participating_agency'] = $this->participating_agency_model->get_all();
        $data['garbage_type_collected'] = $this->garbage_type_collected_model->get_all();
        $data['vessel_type'] = $this->vessel_type_model->get_all();
        $data['inspection_type'] = $this->inspection_type_model->get_all();
        $data['facility_type'] = $this->facility_type_model->get_all();
        $data['training_type'] = $this->training_type_model->get_all();
        $data['incident_cause'] = $this->incident_cause_model->get_all();
        $data['spiller'] = $this->spiller_model->get_all();
        $data['tier_level'] = $this->tier_level_model->get_all();
        $data['oil_type'] = $this->oil_type_model->get_all();
        $data['responding_unit'] = $this->responding_unit_model->get_all();
        $data['affected_area'] = $this->affected_area_model->get_all();
        $data['affected_biodiversity'] = $this->affected_biodiversity_model->get_all();
         
        $this->base->load('admin', 'admin/add_marep', $data); 
 
	} 

    public function insert_marep()
	{ 
        $data = $_POST;

        print_r($data);
	}
  
        
}
         