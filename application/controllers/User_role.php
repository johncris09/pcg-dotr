<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class User_role extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();  
        if ( !$this->session->userdata('user_id') ) { 
            redirect('login'); 
        }
    }
    
    
    public function get_user_role($id)
    {
        $user_role = $this->user_role_model->get_user_role($id);
        return $user_role;
    }

    public function index()
	{ 
        $data['page_title'] = "User Roles";  
        $data['user_role'] = $this->user_role_model->get_all(); 

        $this->base->load('admin', 'user/user_role', $data);
	}

    public function save(){  
        $this->form_validation->set_rules('role', 'User Role','required|is_unique[user_role.text]');

        if ($this->form_validation->run() == FALSE){

            $this->session->set_flashdata('errors', validation_errors());

        }else{

            $data = array(
                'value' => strtolower(str_replace(" ","-", $this->input->post('role'))),
                'text' => strtoupper($this->input->post('role')),
            );
            $insert = $this->user_role_model->save_user_role($data);
            
            if($insert){
                $this->session->set_flashdata('message', 'User role has been created successfully!');
            }else{
                $this->session->set_flashdata('errors', 'User not successfully created!');
            }
        }
        redirect("user_role",'refresh');
	}

    public function update(){  
        $this->form_validation->set_rules('role', 'User Role','required');

        if ($this->form_validation->run() == FALSE){

            $this->session->set_flashdata('errors', validation_errors());

        }else{
            $id = $this->input->post('user_role_id');
            $data = array(
                'value' => strtolower(str_replace(" ","-", $this->input->post('role'))),
                'text' => strtoupper($this->input->post('role')),
            );
            $update = $this->user_role_model->update_user_role($data, $id);
            
            if($update){
                $this->session->set_flashdata('message', 'User role has been updated successfully!');
            }else{
                $this->session->set_flashdata('errors', 'No changes has been made!');
            }
        }
        redirect("user_role",'refresh');
	}

    public function delete($id){

		$delete = $this->user_role_model->delete_user_role($id);

        if($delete){
            $this->session->set_flashdata('errors', 'User role has been deleted!');
        }else{
            $this->session->set_flashdata('errors', 'Something went wrong!');
        }
		redirect('user_role', 'refresh');
	}
        
}
         