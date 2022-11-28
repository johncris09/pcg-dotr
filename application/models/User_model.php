<?php 

class User_model extends CI_Model {

    protected $table_name = "user";

    /**
     * Check User Login in Database
     * @param: {array} userData
     */
    public function check_login($userData) {

        /**
         * First Check username and Password is Exists in Database
         */
        $query = $this->db->get_where($this->table_name, array('username' => $userData['username'], 'password' => md5($userData['password'])));
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

    public function save_user($data)
    {
        $this->db->insert($this->table_name,$data);
        return $this->db->affected_rows();
    } 

    public function get_all()
    {
        $this->db->order_by('user_id','ASC');
        $query = $this->db
            ->get($this->table_name);
        if($query->num_rows() > 0){
            return $query->result();
        }
        return [];
    }

    public function update_user($data,$id){
        $this->db->update($this->table_name,$data, "user_id='$id'");
        return $this->db->affected_rows();
    }
    
    public function delete_user($id){
        $this->db->where('user_id', $id);
        $this->db->delete($this->table_name);
        return $this->db->affected_rows();
    }


}
