<?php 

class Marslec_model extends CI_Model {

    protected $table_name = "marslec"; 
    public function insert($data)
    {
        $this->db->insert($this->table_name,$data);
        return $this->db->affected_rows();
    }  
    
    public function get_all()
    { 
        $query = $this->db 
            ->get('marslec'); 
        if($query->num_rows() > 0){
            return $query->result();
        }
        return [];
    }
}