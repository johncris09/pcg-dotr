<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Substation extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();  
        if ( !$this->session->userdata('user_id') ) { 
            redirect('login'); 
        }
    }


    public function get_substation_by_station($station_id)
    {
        
        $this->load->model('Substation_model', 'SubstationModel');

        $data = array(
            'station_id' => $station_id,
        );
        $data = $this->SubstationModel->get_substation_by_station($data);
        echo json_encode($data);
    }
  
        
}
         