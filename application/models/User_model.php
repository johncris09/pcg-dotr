<?php 

class User_model extends CI_Model {

    protected $User_table_name = "user";

    /**
     * Check User Login in Database
     * @param: {array} userData
     */
    public function check_login($userData) {

        /**
         * First Check username and Password is Exists in Database
         */
        $query = $this->db->get_where($this->User_table_name, array('username' => $userData['username'], 'password' => md5($userData['password'])));
        if ($this->db->affected_rows() > 0) {  

			/**
			 * Password and Username Valid
			 */
			return [
				'status' => TRUE,
				'data' => $query->row(),
			]; 

        } else {
            return ['status' => FALSE,'data' => FALSE];
        }
    }
}
