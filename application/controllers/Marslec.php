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
        $data['page_title'] = "MARSLEC"; 
        $this->load->view('admin/marslec', $data);  
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
        $this->base->load('admin', 'add_marslec', $data); 
 
	} 

    public function insert_marslec()
	{ 
        $data = $_POST;

        print_r($data);
	}
  
        
}
         