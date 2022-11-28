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
        
}
         