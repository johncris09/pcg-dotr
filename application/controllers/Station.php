<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Station extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();  
        if ( !$this->session->userdata('user_id') ) { 
            redirect('login'); 
        }
    }

    public function index()
	{ 
        $data['page_title'] = "Station"; 
        
        $data['station'] = $this->station_model->get_all();

        $this->base->load('admin', 'station/manage', $data);
	}
 
    public function save(){ 
        $this->form_validation->set_rules('station', 'Station Name', 'required|trim|is_unique[station.station]');

        if ($this->form_validation->run() == FALSE){

            $this->session->set_flashdata('errors', validation_errors());

        }else{

            $data = array(
                'station' => $this->input->post('station'),
            );
            $insert = $this->station_model->save_station($data);
            
            if($insert){
                $this->session->set_flashdata('message', 'Station has been created successfully!');
            }else{
                $this->session->set_flashdata('errors', 'Station not successfully created!');
            }
        }
        redirect("station",'refresh');
	}

    public function update()
	{ 

        $this->form_validation->set_rules('station_id', 'Station ID', 'required|trim');
        $this->form_validation->set_rules('station', 'Station Name', 'required|trim');

        if ($this->form_validation->run() == FALSE){

            $this->session->set_flashdata('errors', validation_errors());

        }else{

            $id = $this->input->post('station_id');

            $data = array(
                'station' => $this->input->post('station'),
            );
            $update = $this->station_model->update_station($data, $id);
            
            if($update){
                $this->session->set_flashdata('message', 'Station has been updated successfully!');
            }else{
                $this->session->set_flashdata('errors', 'No changes has been made!');
            }
        }
        redirect("station",'refresh');
	}

    public function delete($id){

		$delete = $this->station_model->delete_station($id);

        if($delete){
            $this->session->set_flashdata('errors', 'Station has been deleted!');
        }else{
            $this->session->set_flashdata('errors', 'Something went wrong!');
        }
		redirect('station', 'refresh');
	}
        
}
         