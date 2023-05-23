<?php
class Model_team extends CI_Model{
    public function getAllTeam(){
        $data = $this->db->get('tb_team');
        return $data->result_array();
    }

    
    public function insertTeam($data){
        return $this->db->insert('tb_team', $data);
    }
    
    public function updateTeam($data, $id){
        $this->db->where('id_team', $id);
        return $this->db->update('tb_team', $data);
    }
    
    public function joinTeam($data, $username){  
        $this->db->where('username',$username);
        return $this->db->update('tb_user',$data);
    }

    public function countMember($id_team){
        $this->db->where('id_team', $id_team);
        $data = $this->db->get('tb_user');
        return $data->num_rows();
    }

    public function getQuota($id){
        $this->db->where('id_team', $id);
        $data = $this->db->get('tb_team');
        return $data->row();
    }
}
?>