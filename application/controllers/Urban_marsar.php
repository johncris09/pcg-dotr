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
        $data['urban_rescue_type'] = $this->urban_rescue_type_model->get_all(); 
        $data['time_assets_deployment'] = $this->time_assets_deployment_model->get_all(); 
        $data['asset_mobility_deployed_type'] = $this->asset_mobility_deployed_type_model->get_all(); 
        $data['victim_age'] = $this->victim_age_model->get_all(); 
        $data['victim_number'] = $this->victim_number_model->get_all(); 
        $data['drowning_cause'] = $this->drowning_cause_model->get_all(); 
        $data['drowning_incident_location'] = $this->drowning_incident_location_model->get_all(); 
        $data['body_built'] = $this->body_built_model->get_all(); 
        $data['cadaver_approximate_age'] = $this->cadaver_approximate_age_model->get_all(); 
        $data['cadaver_location'] = $this->cadaver_location_model->get_all();  
        $data['victim_number'] = $this->victim_number_model->get_all(); 
        $data['weather_forecast'] = $this->weather_forecast_model->get_all(); 
        $data['earthquake_location'] = $this->victim_number_model->get_all(); 
        $data['earthquake_cause'] = $this->victim_number_model->get_all(); 
        $data['earthquake_magnitude_level'] = $this->victim_number_model->get_all(); 
        $data['fire_incident_location'] = $this->victim_number_model->get_all(); 
        $data['damage_estimated_cost'] = $this->damage_estimated_cost_model->get_all();   
        $data['information_acquired_thru'] = $this->information_acquired_thru_model->get_all();   
        
        $this->base->load('admin', 'add_urban_marsar', $data); 
 
	} 
 
  
        
}
         