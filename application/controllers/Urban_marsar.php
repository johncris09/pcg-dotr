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
        
        $this->base->load('admin', 'marsar/manage_urban_marsar', $data);
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
        $data['earthquake_location'] = $this->earthquake_location_model->get_all(); 
        $data['earthquake_cause'] = $this->earthquake_cause_model->get_all(); 
        $data['earthquake_magnitude_level'] = $this->earthquake_magnitude_level_model->get_all(); 
        $data['fire_incident_location'] = $this->fire_incident_location_model->get_all(); 
        $data['damage_estimated_cost'] = $this->damage_estimated_cost_model->get_all();   
        $data['information_acquired_thru'] = $this->information_acquired_thru_model->get_all();  
        $data['pre_emptive_evacuation_coordination_with'] = $this->pre_emptive_evacuation_coordination_with_model->get_all();    
        $data['pre_emptive_evacuation_activity'] = $this->pre_emptive_evacuation_activity_model->get_all();   
        $this->base->load('admin', 'add_urban_marsar', $data); 
 
	} 
  
    public function insert()
	{  
        
        $data = array(  
            'station' => $this->input->post('station'),
            'sub_station' => $this->input->post('sub_station'),  
            'urban_rescue_type' => implode(',',(array) $this->input->post('urban_rescue_type')),
            'date_created' => $this->input->post('date') . " " .$this->input->post('hour') . ":" .$this->input->post('minute') . ":00",  //2022-12-30 11:55:46
            'incident_details' => $this->input->post('incident_details'),
            'incident_barangay_name' => $this->input->post('incident_barangay_name'),
            'incident_map_location' => $this->input->post('incident_map_location'), 
            'information_acquired_thru' => implode(',',(array) $this->input->post('information_acquired_thru')),
            'time_assets_deployment' => implode(',',(array) $this->input->post('time_assets_deployment')),
            'asset_mobility_deployed_type' => implode(',',(array) $this->input->post('asset_mobility_deployed_type')),
            'response_barangay_name' => $this->input->post('response_barangay_name'), 
            'number_rescued_person' => $this->input->post('number_rescued_person'),
            'number_injured_person' => $this->input->post('number_injured_person'),
            'number_casualties' => $this->input->post('number_casualties'),
            'number_missing_person' => $this->input->post('number_missing_person'),
            'number_rescuers_deployed' => $this->input->post('number_rescuers_deployed'),
            'drowning_victim_name' => $this->input->post('drowning_victim_name'),
            'drowning_victim_gender' => $this->input->post('drowning_victim_gender'),
            'first_responder' => $this->input->post('first_responder'),
            'drowning_victim_age' => implode(',',(array) $this->input->post('drowning_victim_age')),
            'drowning_victim_number' => $this->input->post('drowning_victim_number'),
            'drowning_cause' => implode(',',(array) $this->input->post('drowning_cause')), 
            'drowning_incident_location' => implode(',',(array) $this->input->post('drowning_incident_location')),
            'drowning_action_taken' => $this->input->post('drowning_action_taken'),
            'retrieval_victim_name' => $this->input->post('retrieval_victim_name'),
            'retrieval_victim_gender' => implode(',',(array) $this->input->post('retrieval_victim_gender')),  
            'body_built' => $this->input->post('body_built'),
            'adistinct_feature' => $this->input->post('adistinct_feature'),
            'cadaver_location' => $this->input->post('cadaver_location'),
            'cadaver_approximate_age' => implode(',',(array) $this->input->post('cadaver_approximate_age')),
            'exact_cadaver_location' => $this->input->post('exact_cadaver_location'),
            'retrieval_barangay_name' => $this->input->post('retrieval_barangay_name'),
            'cadaver_discovered_number' => $this->input->post('cadaver_discovered_number'),
            'retrieval_operation_length' => $this->input->post('retrieval_operation_length'),
            'time_person_reported_missing' => $this->input->post('time_person_reported_missing'),
            'retrieval_last_location' => $this->input->post('retrieval_last_location'),
            'retrieval_action_taken' => $this->input->post('retrieval_action_taken'),
            'storm_surge_victim_name' => $this->input->post('storm_surge_victim_name'),
            'weather_forecast' => $this->input->post('weather_forecast'),
            'storm_surge_injured_person_number' => $this->input->post('storm_surge_injured_person_number'),
            'storm_surge_casualty_number' => $this->input->post('storm_surge_casualty_number'),
            'storm_surge_rescue_number' => $this->input->post('storm_surge_rescue_number'),
            'storm_surge_action_taken' => $this->input->post('storm_surge_action_taken'),
            'earthquake_barangay_name' => $this->input->post('earthquake_barangay_name'),
            'earthquake_location' => $this->input->post('earthquake_location'),
            'earthquake_cause' => $this->input->post('earthquake_cause'),
            'earthquake_magnitude_level' => implode(',',(array) $this->input->post('earthquake_magnitude_level')),
            'earthquake_action_taken' => $this->input->post('earthquake_action_taken'),
            'lanslide_casualty_number' => $this->input->post('lanslide_casualty_number'),
            'lanslide_affected_area' => $this->input->post('lanslide_affected_area'),
            'landslide_rescued_adult_male_number' => $this->input->post('landslide_rescued_adult_male_number'),
            'landslide_rescued_children_number' => $this->input->post('landslide_rescued_children_number'),
            'landslide_rescued_adult_female_number' => $this->input->post('landslide_rescued_adult_female_number'),
            'landslide_rescued_18y_below_female_number' => $this->input->post('landslide_rescued_18y_below_female_number'),
            'lanslide_location' => $this->input->post('lanslide_location'),
            'fire_incident_barangay_name' => $this->input->post('fire_incident_barangay_name'),
            'fire_incident_location' => implode(',',(array) $this->input->post('fire_incident_location')),
            'fire_incident_cause' => $this->input->post('fire_incident_cause'),
            'fire_incident_cost' => $this->input->post('fire_incident_cost'),
            'fire_incident_acton_taken' => $this->input->post('fire_incident_acton_taken'),
            'pre_emptive_evacuation_activity' => implode(',',(array) $this->input->post('pre_emptive_evacuation_activity')), 
            'pre_emptive_evacuation_date' => $this->input->post('pre_emptive_evacuation_date') . " " .$this->input->post('pre_emptive_evacuation_hour') . ":" .$this->input->post('pre_emptive_evacuation_minute') . ":00",  //2022-12-30 11:55:46
            'evacuation_center_location' => $this->input->post('evacuation_center_location'), 
            'pre_emptive_evacuation_coordination_with' => implode(',',(array) $this->input->post('pre_emptive_evacuation_coordination_with')),
             'spot_report' => $this->input->post('spot_report'),
            'photographs' => $this->input->post('photographs'), 
        ); 

        $insert = $this->urban_marsar_model->insert($data);
        if($insert){
            $this->session->set_flashdata('message', 'Urban Marsar has been created successfully!');
        }else{
            $this->session->set_flashdata('errors', 'Urban Marsar not successfully created!');
        } 
        echo json_encode($data);
        // redirect("add_urban_marsar",'refresh');

	}
        
}