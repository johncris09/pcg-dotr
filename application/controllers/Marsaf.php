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
        $this->load->view('admin/marsaf', $data);  
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
  
        $this->base->load('admin', 'admin/add_marsaf', $data); 
 
	} 

    public function insert_marsaf()
	{ 
        $data = $_POST;

        print_r($data);
	}
  
        
}
         