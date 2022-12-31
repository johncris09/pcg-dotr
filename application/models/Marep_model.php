<?php 

class Marep_model extends CI_Model {

    protected $table_name = "marep"; 
    public function insert($data)
    {
        $this->db->insert($this->table_name,$data);
        return $this->db->affected_rows();
    }
 
}