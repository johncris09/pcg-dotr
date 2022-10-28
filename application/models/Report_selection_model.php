<?php 

class Report_selection_model extends CI_Model {

    protected $table_name = "report_selection";

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
