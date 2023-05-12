<?php
class Model_news extends CI_Model
{

    public function tampilData()
    {
        return $this->db->get('tb_news');
    }

    public function tambahNews($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function editNews($where, $table)
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

    public function detailNews($id)
    {
        $result = $this->db->where('id', $id)->get('tb_news');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return FALSE;
        }
    }

    public function find($id)
    {
        $result = $this->db->where('id', $id)
            ->limit(1)
            ->get('tb_news');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }
}