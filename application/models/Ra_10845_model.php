<?php 

class Ra_10845_model extends CI_Model {

    protected $table_name = "ra_10845";

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