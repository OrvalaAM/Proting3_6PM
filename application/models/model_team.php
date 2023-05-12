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
    
    public function deleteTeam($id){
        $this->db->where('id_team', $id);           
        return $this->db->delete('tb_team');
    }
}
?>