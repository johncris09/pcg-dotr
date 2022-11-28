<?php 

class Station_model extends CI_Model {

    protected $table_name = "station";

    public function get_all()
    {
        $this->db->order_by('station_id','ASC');
        $query = $this->db
            ->get($this->table_name);
        if($query->num_rows() > 0){
            return $query->result();
        }
        return [];
    }

    public function save_station($data)
    {
        $this->db->insert($this->table_name,$data);
        return $this->db->affected_rows();
    }

    public function update_station($data,$id){
        $this->db->update($this->table_name,$data, "station_id='$id'");
        return $this->db->affected_rows();
    }
    
    public function delete_station($id){
        $this->db->where('station_id', $id);
        $this->db->delete($this->table_name);
        return $this->db->affected_rows();
    }
}