<?php 

class User_role_model extends CI_Model {

    protected $table_name = "user_role";

    public function get_all()
    {
        $this->db->order_by('user_role_id','ASC');
        $query = $this->db
            ->get($this->table_name);
        if($query->num_rows() > 0){
            return $query->result();
        }
        return [];
    }

    public function get_user_role($id)
    {

        $query = $this->db
            ->where('user_role_id', $id)
            ->get($this->table_name);
        if($query->num_rows() > 0){
            return $query->result_array()[0];
        }
        return [
            "user_role_id" => "",
            "value" => "",
            "text" => "",
        ];
    }

    public function save_user_role($data)
    {
        $this->db->insert($this->table_name,$data);
        return $this->db->affected_rows();
    } 

    public function update_user_role($data,$id){
        $this->db->update($this->table_name,$data, "user_role_id='$id'");
        return $this->db->affected_rows();
    }
    
    public function delete_user_role($id){
        $this->db->where('user_role_id', $id);
        $this->db->delete($this->table_name);
        return $this->db->affected_rows();
    }
}