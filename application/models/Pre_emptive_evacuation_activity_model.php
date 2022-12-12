<?php 

class Pre_emptive_evacuation_activity_model extends CI_Model {

    protected $table_name = "pre_emptive_evacuation_activity";

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