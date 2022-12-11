<?php 

class Lighthouse_cause_if_not_operating_model extends CI_Model {

    protected $table_name = "lighthouse_cause_if_not_operating";

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