<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Marslec extends CI_Controller {
    public function __construct()
    {
        parent:: __construct();  
        if ( !$this->session->userdata('user_id') ) { 
            redirect('login'); 
        }
    }
    public function index()
	{ 
        $data['marslec'] = $this->marslec_model->get_all();   
        $data['page_title'] = "MARSLEC"; 
        $this->base->load('admin', 'marslec/manage_marslec', $data);
	}
    public function add()
	{          
        $data['page_title'] = "Add MARSLEC"; 
        $data['station'] = $this->station_model->get_all();   
        $data['ra_10654'] = $this->ra_10654_model->get_all(); 
        $data['ra_9165'] = $this->ra_9165_model->get_all(); 
        $data['ra_10591'] = $this->ra_10591_model->get_all(); 
        $data['ra_9208'] = $this->ra_9208_model->get_all(); 
        $data['ra_9147'] = $this->ra_9147_model->get_all(); 
        $data['pd_no_705'] = $this->pd_no_705_model->get_all(); 
        $data['ra_1937'] = $this->ra_1937_model->get_all(); 
        $data['pd_no_532'] = $this->pd_no_532_model->get_all(); 
        $data['ra_10066'] = $this->ra_10066_model->get_all(); 
        $data['ra_6539'] = $this->ra_6539_model->get_all(); 
        $data['ra_10845'] = $this->ra_10845_model->get_all(); 
        $data['marpol_violation'] = $this->marpol_violation_model->get_all(); 
        $data['seaborne_patrol_activity_conduct'] = $this->seaborne_patrol_activity_conduct_model->get_all();   
        $data['panelling_conducted_facilities'] = $this->panelling_conducted_facilities_model->get_all();  
        $data['k9_deployed_type'] = $this->k9_deployed_type_model->get_all(); 
        $data['eod_deployment'] = $this->eod_deployment_model->get_all(); 
        $data['marslec'] = $this->marslec_model->get_all();   
        $this->base->load('admin', 'add_marslec', $data); 
	} 
    public function insert()
	{  
        
        $data = array(
            'station' => $this->input->post('station'),
            'sub_station' => $this->input->post('sub_station'),
            'date_created' => date('Y-m-d H:i:s'),
            'ra_10654' => implode(',',(array) $this->input->post('ra_10654')), 
            'ra_9165' => implode(',',(array) $this->input->post('ra_9165')),  
            'ra_10591' => implode(',',(array) $this->input->post('ra_10591')),  
            'ra_9208' => implode(',',(array) $this->input->post('ra_9208')),   
            'ra_9147' => implode(',',(array) $this->input->post('ra_9147')),    
            'pd_no_705' => implode(',',(array) $this->input->post('pd_no_705')),    
            'ra_1937' => implode(',',(array) $this->input->post('ra_1937')),     
            'pd_no_532' => implode(',',(array) $this->input->post('pd_no_532')),  
            'ra_10066' => implode(',',(array) $this->input->post('ra_10066')),  
            'ra_6539' => implode(',',(array) $this->input->post('ra_6539')),   
            'ra_10845' => implode(',',(array) $this->input->post('ra_10845')),  
            'marpol_violation' => implode(',',(array) $this->input->post('marpol_violation')), 
            'seaborne_patrol_date' => $this->input->post('seaborne_patrol_date') . " " .$this->input->post('seaborne_patrol_hour') . ":" .$this->input->post('seaborne_patrol_minute') . ":00",  //2022-12-30 11:55:46 
            'seaborne_patrol_location' => $this->input->post('seaborne_patrol_location'),
            'seaborne_patrol_activity_conduct' => implode(',',(array) $this->input->post('seaborne_patrol_activity_conduct')),   
            'seaborne_patrol_number_conduncted' => $this->input->post('seaborne_patrol_number_conduncted'),
            'seaborne_patrol_area_covered' => $this->input->post('seaborne_patrol_area_covered'),
            'seaborne_patrol_number_hour_conducted' => $this->input->post('seaborne_patrol_number_hour_conducted'),
            'shore_patrol_date_started' => $this->input->post('shore_patrol_date') . " " .$this->input->post('shore_patrol_hour_started') . ":" .$this->input->post('shore_patrol_minute_started') . ":00",  //2022-12-30 11:55:46  
            'shore_patrol_date_ended' => $this->input->post('shore_patrol_date') . " " .$this->input->post('shore_patrol_hour_ended') . ":" .$this->input->post('shore_patrol_minute_ended') . ":00",  //2022-12-30 11:55:46 
            'shore_patrol_number_conducted' => $this->input->post('shore_patrol_number_conducted'),
            'shore_patrol_coastline_covered_length' => $this->input->post('shore_patrol_coastline_covered_length'),
            'sea_marshall_date_started' => $this->input->post('sea_marshall_date') . " " .$this->input->post('sea_marshall_hour_started') . ":" .$this->input->post('sea_marshall_minute_started') . ":00",  //2022-12-30 11:55:46 
            'sea_marshall_date_ended' => $this->input->post('sea_marshall_date') . " " .$this->input->post('sea_marshall_hour_ended') . ":" .$this->input->post('sea_marshall_minute_ended') . ":00",  //2022-12-30 11:55:46 
            'panelling_conducted_date' => $this->input->post('panelling_conducted_date') . " " .$this->input->post('panelling_conducted_hour_started') . ":" .$this->input->post('panelling_conducted_minute_started') . ":00",  //2022-12-30 11:55:46 
            'panelling_conducted_facilities' => implode(',',(array) $this->input->post('panelling_conducted_facilities')),   
            'k9_deployed_type' => implode(',',(array) $this->input->post('k9_deployed_type')),  
            'eod_deployment' => implode(',',(array) $this->input->post('eod_deployment')),   
        ); 
        $insert = $this->marslec_model->insert($data);
        if($insert){
            $this->session->set_flashdata('message', 'Marslec has been created successfully!');
        }else{
            $this->session->set_flashdata('errors', 'Marslec not successfully created!');
        }  
        redirect("add_marslec",'refresh');
	} 
         
}
         