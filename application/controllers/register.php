<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{



    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('vw_register');
        $this->load->view('templates/footer');
    }

    public function proses()
    {
        $this->form_validation->set_rules('username', 'username', 'trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('nama', 'nama', 'trim|required|min_length[1]|max_length[255]');
        if ($this->form_validation->run() == true) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $nama = $this->input->post('nama');


            $dataInsert = [
                'nama' => $nama,
                'username' => $username,
                'password' => $password,
                'role_id' => 2
            ];


            $checkUser = $this->db->get_where('tb_user', ['username' => $username])->row_array();


            if ($checkUser == null) {

                $insert = $this->db->insert('tb_user', $dataInsert);
                if ($insert) {

                    $this->session->set_userdata('username', $auth->username);
                    $this->session->set_userdata('role_id', $auth->role_id);
                    $this->session->set_flashdata('success_register', 'Proses Pendaftaran User Berhasil, silahkan login');
                    redirect('auth/login');
                } else {

                    $this->session->set_flashdata('error', 'Gagal mendaftar, silahkan coba lagi');
                    redirect('register');
                }
            } else {

                $this->session->set_flashdata('error', 'Username sudah terdaftar, silahkan login atau gunakan username lain');
                redirect('register');
            }
        } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect('register');
        }
    }
}