<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Marsaf extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();  
        if ( !$this->session->userdata('user_id') ) { 
            redirect('login'); 
        }
    }

    public function index()
	{ 
        $data['page_title'] = "MARSAF"; 
        $this->base->load('admin', 'marsaf/manage_marsaf', $data);
	}
 
    public function add()
	{  
          
        $data['page_title'] = "Add MARSAF"; 
        $data['station'] = $this->station_model->get_all(); 
        $data['report_type'] = $this->report_type_model->get_all();  
        $data['psc_center'] = $this->psc_center_model->get_all();   
        $data['vessel_type'] = $this->marsaf_vessel_type_model->get_all();
        $data['pdi_result'] = $this->pdi_result_model->get_all(); 
        $data['noted_deficiency'] = $this->noted_deficiency_model->get_all();
        $data['action_code'] = $this->action_code_model->get_all();  
        $data['inspection_type'] = $this->marsaf_inspection_type_model->get_all(); 
        $data['vsei_result'] = $this->vsei_result_model->get_all();  
        $data['vsei_deficiency_code'] = $this->vsei_deficiency_code_model->get_all();  
        $data['drill_conducted'] = $this->drill_conducted_model->get_all();  
        $data['related_international_conventions_noted_deficiency'] = $this->related_international_conventions_noted_deficiency_model->get_all();  
        $data['psc_action_code'] = $this->psc_action_code_model->get_all();  
        $data['coastal_and_beach_violation'] = $this->coastal_and_beach_violation_model->get_all();  
        $data['beach_coast_line_length'] = $this->beach_coast_line_length_model->get_all();  
        $data['recration_watercraft'] = $this->recration_watercraft_model->get_all();   
        $data['recreational_violation'] = $this->recreational_violation_model->get_all();  
        $data['lighthouse_type'] = $this->lighthouse_type_model->get_all();   
        $data['lighthouse_inspection_purpose'] = $this->lighthouse_inspection_purpose_model->get_all(); 
        $data['lighthouse_status'] = $this->lighthouse_status_model->get_all();  
        $data['lighthouse_cause_if_not_operating'] = $this->lighthouse_cause_if_not_operating_model->get_all();  
        
        $data['bouy_type'] = $this->bouy_type_model->get_all();  
        $data['light_bouy_inspection_purpose'] = $this->light_bouy_inspection_purpose_model->get_all();   
        $data['light_buoy_status'] = $this->light_buoy_status_model->get_all(); 
        $data['light_buoy__cause_if_not_operating'] = $this->light_buoy__cause_if_not_operating_model->get_all();  

        $data['maritime_casualty_nature'] = $this->maritime_casualty_nature_model->get_all();  
        $data['incident_cause'] = $this->marsaf_incident_cause_model->get_all();  
        $data['incident_consequences'] = $this->incident_consequences_model->get_all();  
        $data['very_serious_mc_category'] = $this->very_serious_mc_category_model->get_all();  
        $data['application_type'] = $this->application_type_model->get_all();   
        $data['salvage_operation_purpose'] = $this->salvage_operation_purpose_model->get_all(); 
        $data['maritime_acitivity'] = $this->maritime_acitivity_model->get_all();   
        $data['maritime_related_violation'] = $this->maritime_related_violation_model->get_all();   
 
        
        $this->base->load('admin', 'admin/add_marsaf', $data); 
 
	} 

    public function insert_marsaf()
	{ 
        $data = $_POST;

        print_r($data);
	}
  
        
}
         