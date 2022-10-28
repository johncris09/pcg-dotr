<?php 

class Substation_model extends CI_Model {

    protected $table_name = "sub_station";

    public function get_substation_by_station($data)
    {
        $query = $this->db
            ->where($data)
            ->get($this->table_name);
        if($query->num_rows() > 0){
            return $query->result_array();
        }
        return [];
    }
}
