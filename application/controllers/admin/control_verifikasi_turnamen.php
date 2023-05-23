<?php
class control_verifikasi_turnamen extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Model_tournament', '', TRUE);
        $this->load->library('session');
    }

    public function index(){
        $data['turnamen'] = $this->Model_tournament->getAllTournament();;
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/verifikasi_turnamen', $data);
        $this->load->view('templates_admin/footer');
    }

    public function updateStatus(){
        $idTournament = $this->uri->segment(4);
        $status = $this->uri->segment(5);
        $data = [
            "status" => $status
        ];
        $cek = $this->Model_tournament->updateTournament($data, $idTournament);
        redirect('admin/control_verifikasi_turnamen');

    }
}
?>