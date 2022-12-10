<?php 

class Beach_coast_line_length_model extends CI_Model {

    protected $table_name = "beach_coast_line_length";

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