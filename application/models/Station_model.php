<?php 

class Station_model extends CI_Model {

    protected $table_name = "station";

    public function get_all()
    {
        $query = $this->db
            ->get($this->table_name);
        if($query->num_rows() > 0){
            return $query->result_array();
        }
        return [];
    }
}
