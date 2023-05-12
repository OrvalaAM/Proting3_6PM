<?php
class Model_tournament extends CI_Model
{

    public function getAllTournament()
    {
        $data = $this->db->get('tb_tournament');
        return $data->result_array();
    }

    public function insertTournament($data)
    {
        return $this->db->insert('tb_tournament', $data);
    }

    public function deleteTournament($id)
    {
        $this->db->where('id_tour', $id);
        return $this->db->delete('tb_tournament');
    }

    public function updateTournament($data, $id)
    {
        $this->db->where('id_tour', $id);
        return $this->db->update('tb_tournament', $data);
    }
}