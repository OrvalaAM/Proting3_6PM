<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Anda Belum Login.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            redirect('auth/login');
        }
    }

    public function index()
    {
        $data['news'] = $this->model_news->tampilData()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/v_admindashboard', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambahAksi()
    {
        $nama               = $this->input->post('nama');
        $deskripsi          = $this->input->post('deskripsi');
        $image              = $_FILES['image']['name'];
        if ($image = '') {
        } else {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {
                echo "failed to upload";
            } else {
                $image = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama'              => $nama,
            'deskripsi'         => $deskripsi,
            'image'             => $image
        );
        $this->model_news->tambahNews($data, 'tb_news');
        redirect('admin/news_admin/index');
    }

    public function edit($id)
    {
        $where = array('id' => $id);
        $data['news'] = $this->model_news->editNews($where, 'tb_news')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_news', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update()
    {
        $id                     = $this->input->post('id');
        $nama                   = $this->input->post('nama');
        $deskripsi              = $this->input->post('deskripsi');

        $data = array(
            'nama'          => $nama,
            'deskripsi'     => $deskripsi
        );

        $where = array(
            'id'        => $id
        );

        $this->model_news->updateData($where, $data, 'tb_news');
        redirect('admin/news_admin/index');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->model_news->hapusData($where, 'tb_news');
        redirect('admin/news_admin/index');
    }
}