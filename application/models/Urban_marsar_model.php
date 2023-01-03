<?php 

class Urban_marsar_model extends CI_Model {

    protected $table_name = "urban_marsar"; 
    public function insert($data)
    {
        $this->db->insert($this->table_name,$data);
        return $this->db->affected_rows();
    }  
    
    public function get_all()
    { 
        $query = $this->db 
            ->get('urban_marsar'); 
        if($query->num_rows() > 0){
            return $query->result();
        }
        return [];
    }
}