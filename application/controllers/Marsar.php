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
        $data['maritime_incident_type'] = $this->maritime_incident_type_model->get_all();   
        $data['incident_cause'] = $this->marsar_incident_cause_model->get_all(); 
        $data['material_report'] = $this->material_report_model->get_all();
        $data['asset_deployment'] = $this->asset_deployment_model->get_all();
        $data['information_acquired_thru'] = $this->information_acquired_thru_model->get_all(); 
        $data['time_assets_deployment'] = $this->time_assets_deployment_model->get_all(); 
        $data['vessel_size'] = $this->vessel_size_model->get_all();
        $data['vessel_age'] = $this->vessel_age_model->get_all();
        $data['vessel_type_involved'] = $this->vessel_type_involved_model->get_all();
        $data['fire_cause'] = $this->fire_cause_model->get_all();  
        $data['man_overboard_incident_cause'] = $this->man_overboard_incident_cause_model->get_all();   
        $this->base->load('admin', 'admin/add_marsar', $data); 
 
	} 

    public function insert_marsar()
	{ 
        $data = $_POST;

        print_r($data);
	}
  
        
}
         