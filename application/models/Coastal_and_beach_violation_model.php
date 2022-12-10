<?php 

class Coastal_and_beach_violation_model extends CI_Model {

    protected $table_name = "coastal_and_beach_violation";

    public function get_all()
    {
        $this->db->order_by('id','ASC');
        $query = $this->db
            ->get($this->table_name);
        if($query->num_rows() > 0){
            return $query->result();
        }
        return [];
    }
}