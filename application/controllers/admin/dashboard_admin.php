<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_tournament', '', TRUE);
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

    public function user()
    {
        $data['user'] = $this->model_profile->tampilData()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/user', $data);
        $this->load->view('templates_admin/footer');
    }

    public function verifikasi_turnamen()
    {
        $data['turnamen'] = $this->Model_tournament->getAllTournament();;
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/verifikasi_turnamen', $data);
        $this->load->view('templates_admin/footer');
    }
}