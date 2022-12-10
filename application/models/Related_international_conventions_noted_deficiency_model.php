<?php 

class Related_international_conventions_noted_deficiency_model extends CI_Model {

    protected $table_name = "related_international_conventions_noted_deficiency";

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