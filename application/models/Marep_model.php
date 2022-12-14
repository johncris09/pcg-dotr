<?php 

class Marep_model extends CI_Model {

    protected $table_name = "marep"; 
    public function insert($data)
    {
        $this->db->insert($this->table_name,$data);
        return $this->db->affected_rows();
    } 


    public function get_all()
    { 
        $query = $this->db
            ->where('marep.report_type = report_selection.report_selection_id')
            ->get('marep, report_selection ');
 
        if($query->num_rows() > 0){
            return $query->result();
        }
        return [];
    }
 
}