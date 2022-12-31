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
        $data['participating_agency'] =  $this->participating_agency_model->get_all();
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

    public function insert()
	{  
        
        $data = array(
            'station' => $this->input->post('station'),
            'sub_station' => $this->input->post('sub_station'),
            'report_type' => $this->input->post('report_selection'),
            'date_created' => $this->input->post('date') . " " .$this->input->post('hour') . ":" .$this->input->post('minute') . ":00",  //2022-12-30 11:55:46
            'location' => $this->input->post('location'),
            'activity_conduct' => $this->input->post('activity_conduct'),
            'participating_agency' => implode(',',(array) $this->input->post('participating_agency')),
            'participant_number' => $this->input->post('participant_number'),
            'area_coverage' => $this->input->post('area_coverage'),
            'garbage_type_collected' => implode(',',(array) $this->input->post('garbage_type_collected')),
            'garbage_collected_volume' => $this->input->post('garbage_collected_volume'),
            'seedlings_planted_number' => $this->input->post('seedlings_planted_number'),
            'planted_trees_kind' => $this->input->post('planted_trees_kind'),
            'vessel_type' => $this->input->post('vessel_type'),
            'vessel_name' => $this->input->post('vessel_name'),
            'inspection_type' => $this->input->post('inspection_type'),
            'marpol_violation' => $this->input->post('marpol_violation'),
            'facility_type' => $this->input->post('facility_type'),
            'facility_name' => $this->input->post('facility_name'),
            'oil_spill_date_incident' => $this->input->post('oil_spill_date_incident'),
            'oil_spill_hour_incident' => $this->input->post('oil_spill_hour_incident'),
            'oil_spill_minute_incident' => $this->input->post('oil_spill_minute_incident'),
            'oil_spill_location' => $this->input->post('oil_spill_location'),
            'oil_spill_map_location' => $this->input->post('oil_spill_date_incident') . " " .$this->input->post('oil_spill_hour_incident') . ":" .$this->input->post('oil_spill_minute_incident') . ":00",  //2022-12-30 11:55:46
            'spiller' => $this->input->post('spiller'),
            'oil_spill_vessel_name' => $this->input->post('oil_spill_vessel_name'),
            'oil_spill_companyl_name' => $this->input->post('oil_spill_companyl_name'),
            'tier_level' => $this->input->post('tier_level'),
            'oil_type' => $this->input->post('oil_type'), 
            'responding_unit' => implode(',',(array) $this->input->post('responding_unit')),
            'oil_retrieved_volume' => $this->input->post('oil_retrieved_volume'), 
            'affected_area' => implode(',',(array) $this->input->post('affected_area')),
            'affected_biodiversity' => implode(',',(array) $this->input->post('affected_biodiversity')),
            'training_type' => implode(',',(array) $this->input->post('training_type')),
            'training_center_name' => $this->input->post('training_center_name'),
        ); 

        $insert = $this->marep_model->insert($data);
        if($insert){
            $this->session->set_flashdata('message', 'Marep has been created successfully!');
        }else{
            $this->session->set_flashdata('errors', 'Marep not successfully created!');
        } 
        redirect("add_marep",'refresh');

	}
  
        
}
         