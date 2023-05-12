<?php

class Model_profile extends CI_Model
{
    public function tampilData()
    {
        return $this->db->get('tb_user');
    }

    public function tambahUser($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function editUser($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function updateData($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapusData($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}