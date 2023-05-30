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

    public function getAllParticipant(){
        $this->db->select('*');
        $this->db->from('tb_partisipasi_tournament');
        $this->db->join('tb_team', 'tb_partisipasi_tournament.id_team = tb_team.id_team');
        $data = $this->db->get();
        return $data->result_array();
    }

    public function checkParticipant($id_tour, $id_team)
    {
        $this->db->where('id_tour', $id_tour);
        $this->db->where('id_team', $id_team);
        $data = $this->db->get('tb_partisipasi_tournament');
        return $data->num_rows();
    }

    public function joinTournament($data)
    {
        return $this->db->insert('tb_partisipasi_tournament', $data);
    }

    public function countParticipant($id_tour){
        $this->db->where('id_tour', $id_tour);
        $data = $this->db->get('tb_partisipasi_tournament');
        return $data->num_rows();
    }

    public function getTournamentById($id){
        $this->db->where('id_tour', $id);
        $data = $this->db->get('tb_tournament');
        return $data->row();
    }

    public function getParticipatedTournamentByIdTeam($id){
        $this->db->select('tb_tournament.nama');
        $this->db->from('tb_partisipasi_tournament');
        $this->db->join('tb_tournament', 'tb_partisipasi_tournament.id_tour = tb_tournament.id_tour');
        $this->db->where('tb_partisipasi_tournament.id_team', $id);
        $data = $this->db->get();
        return $data->result_array();
    }
    
}