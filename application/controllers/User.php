<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class User extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();  
        if ( !$this->session->userdata('user_id') ) { 
            redirect('login'); 
        }
    }

    public function index()
	{ 
        $data['page_title'] = "User"; 
        
        $data['user'] = $this->user_model->get_all(); 

        $this->base->load('admin', 'user/manage', $data);
	}
 
    public function save(){  
        $this->form_validation->set_rules('username', 'Username','required|trim|is_unique[user.username]');
        $this->form_validation->set_rules('firstname', 'First Name', 'required|trim');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim'); 

        if ($this->form_validation->run() == FALSE){

            $this->session->set_flashdata('errors', validation_errors());

        }else{

            $data = array(
                'username' => $this->input->post('username'),
                'first_name' => $this->input->post('firstname'),
                'last_name' => $this->input->post('lastname'), 
                'email' => $this->input->post('email'),
            );
            $insert = $this->user_model->save_user($data);
            
            if($insert){
                $this->session->set_flashdata('message', 'User has been created successfully!');
            }else{
                $this->session->set_flashdata('errors', 'User not successfully created!');
            }
        }
        redirect("user",'refresh');
	}

    public function update()
	{ 
  
        $this->form_validation->set_rules('user_id', 'User ID', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('firstname', 'First Name', 'required|trim');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim'); 
        if ($this->form_validation->run() == FALSE){

            $this->session->set_flashdata('errors', validation_errors());

        }else{
 
            $id = $this->input->post('user_id');

            $data = array(
                'username' => $this->input->post('username'),
                'first_name' => $this->input->post('firstname'),
                'last_name' => $this->input->post('lastname'), 
                'email' => $this->input->post('email'),
            );
            print_r($data);
            $update = $this->user_model->update_user($data, $id);
            
            if($update){
                $this->session->set_flashdata('message', 'User has been updated successfully!');
            }else{
                $this->session->set_flashdata('errors', 'No changes has been made!');
            }
        }
        redirect("user",'refresh');
	}

    public function delete($id){

		$delete = $this->user_model->delete_user($id);

        if($delete){
            $this->session->set_flashdata('errors', 'User has been deleted!');
        }else{
            $this->session->set_flashdata('errors', 'Something went wrong!');
        }
		redirect('user', 'refresh');
	}
        
}
         