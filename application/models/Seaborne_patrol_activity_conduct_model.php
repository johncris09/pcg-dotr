<?php 

class Seaborne_patrol_activity_conduct_model extends CI_Model {

    protected $table_name = "seaborne_patrol_activity_conduct";

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