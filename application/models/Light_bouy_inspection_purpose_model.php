<?php 

class Light_bouy_inspection_purpose_model extends CI_Model {

    protected $table_name = "light_bouy_inspection_purpose";

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