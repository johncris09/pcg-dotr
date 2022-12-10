<?php 

class Action_code_model extends CI_Model {

    protected $table_name = "action_code";

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