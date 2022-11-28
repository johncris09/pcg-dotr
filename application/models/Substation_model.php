<?php 

class Substation_model extends CI_Model {

    protected $table_name = "sub_station";

    public function get_all()
    {
        $this->db->join('station', 'sub_station.station_id=station.station_id');
        $this->db->order_by('sub_station_id','ASC');
        $query = $this->db
            ->get($this->table_name);
        if($query->num_rows() > 0){
            return $query->result();
        }
        return [];
    }

    public function save_sub_station($data)
    {
        $this->db->insert($this->table_name,$data);
        return $this->db->affected_rows();
    }

    public function update_sub_station($data,$id){
        $this->db->update($this->table_name, $data, "sub_station_id='$id'");
        return $this->db->affected_rows();
    }
    
    public function delete_substation($id){
        $this->db->where('sub_station_id', $id);
        $this->db->delete($this->table_name);
        return $this->db->affected_rows();
    }
        
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