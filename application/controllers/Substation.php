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

    public function index(){ 
        $data['page_title'] = "Sub-Station"; 
        
        $data['station'] = $this->station_model->get_all();
        $data['sub_station'] = $this->substation_model->get_all();
        
        $this->base->load('admin', 'station/sub_station', $data);
    }

    public function save(){ 
        $this->form_validation->set_rules('sub_station', 'Sub-Station Name', 'required|trim|is_unique[sub_station.sub_station]');
        $this->form_validation->set_rules('station_id', 'Station Name', 'required|trim');
        
        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
        }else{

            $data = array(
                'sub_station' => $this->input->post('sub_station'),
                'station_id' => $this->input->post('station_id'),
            );
            $insert = $this->substation_model->save_sub_station($data);
            
            if($insert){
                $this->session->set_flashdata('message', 'Sub-station has been created successfully!');
            }else{
                $this->session->set_flashdata('errors', 'Sub-station not successfully created!');
            }
        }
        redirect("substation",'refresh');
	}

    public function update(){ 
        $this->form_validation->set_rules('sub_station', 'Sub-Station Name', 'required|trim');
        $this->form_validation->set_rules('station_id', 'Station Name', 'required|trim');
        
        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
        }else{
            $id = $this->input->post('sub_station_id');
            $data = array(
                'sub_station' => $this->input->post('sub_station'),
                'station_id' => $this->input->post('station_id'),
            );
            $insert = $this->substation_model->update_sub_station($data, $id);
            
            if($insert){
                $this->session->set_flashdata('message', 'Sub-station has been updated successfully!');
            }else{
                $this->session->set_flashdata('errors', 'No changes has been made!');
            }
        }
        redirect("substation",'refresh');
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
  
    public function delete($id){
		$delete = $this->substation_model->delete_substation($id);
        if($delete){
            $this->session->set_flashdata('errors', 'Station has been deleted!');
        }else{
            $this->session->set_flashdata('errors', 'Something went wrong!');
        }
		redirect('substation', 'refresh');
	}
        
}
         