<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Login extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();  
        if ( $this->session->userdata('user_id')  ) { 
            redirect('dashboard'); 
        }
    }

    public function index()
	{ 
        $data['page_title'] = "Login"; 
        $this->load->view('login', $data); 
	}

    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE)
        { 
			redirect('login');
        }
        else
        {
            $login_data = array(
                'username' => $this->input->post('username', TRUE),
                'password' => $this->input->post('password', TRUE),
            );

            /**
             * Load User Model
             */
            $this->load->model('User_model', 'UserModel');
            $result = $this->UserModel->check_login($login_data); 

            if (!empty($result['status']) && $result['status'] === TRUE) {
				// echo $result;
				// print_r($result);

                /**
                 * Create Session
                 * -----------------
                 * First Load Session Library
                 */
                $session_array = array(
                    'user_id'  => $result['data']->user_id,
                    'username'  => ucwords($result['data']->username), 
                    'email'  => $result['data']->email, 
                    'firstname'  => $result['data']->first_name, 
                    'lastname'  => $result['data']->last_name, 
                    'profile_picture'  => $result['data']->profile_picture,  
                );
                
                $this->session->set_userdata($session_array);

                $this->session->set_flashdata('success_flashData', 'Login Success');
                redirect('Dashboard');

            } else { 
                $this->session->set_flashdata('error_flashData', 'Invalid Username/Password.');
				redirect('login');
            }
        }
		 
    }

  
        
}
         