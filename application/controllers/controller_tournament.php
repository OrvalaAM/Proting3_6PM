<?php
class controller_tournament extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Model_tournament', '', TRUE);
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function index(){
        $data['tournament'] = $this->Model_tournament->getAllTournament();
        $data['participant'] = $this->Model_tournament->getAllParticipant();
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('tournament', $data);
		$this->load->view('templates/footer');
    }

    public function tambahTournament(){
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('tempat', 'Tempat', 'required');
        if($this->form_validation->run() == false){
            $data['tournament'] = $this->Model_tournament->getAllTournament();
			$this->load->view('templates/header');
		    $this->load->view('templates/sidebar');
		    $this->load->view('tournament', $data);
		    $this->load->view('templates/footer');
        }else{
            $data = [
                "nama" => $this->input->post('nama', true),
                "deskripsi" => $this->input->post('deskripsi', true),
                "tempat" => $this->input->post('tempat', true),
                "tanggal" => $this->input->post('tanggal', true),
                "jenis_games" => $this->input->post('game', true),
                "kuota" => $this->input->post('kuota', true),
                "status" => "processing"
            ];
            $cek = $this->Model_tournament->insertTournament($data);
            if($cek) $this->session->set_flashdata('flash', 'Tournament berhasil ditambah');
            redirect('controller_tournament');
        }
    }

    public function ubahTournament(){
        
            $data = [
                "nama" => $this->input->post('namaUpdate', true),
                "deskripsi" => $this->input->post('deskripsiUpdate', true),
                "tempat" => $this->input->post('tempatUpdate', true),
                "tanggal" => $this->input->post('tanggalUpdate', true),
                "jenis_games" => $this->input->post('gameUpdate', true) 
            ];
            $id = $this->input->post('idUpdate', true);
            $cek = $this->Model_tournament->updateTournament($data, $id);
            if($cek) $this->session->set_flashdata('flash', 'Tournament berhasil diubah');
            redirect('controller_tournament');

    }

    public function hapusTournament($id){
        $cek = $this->Model_tournament->deleteTournament($id);
        if($cek) $this->session->set_flashdata('flash', 'Tournament berhasil dihapus');
        redirect('controller_tournament');
    }

    public function gabungTournament(){
        $idTournament = $this->uri->segment(3);
        $idTeam = $this->uri->segment(4);
        $validasi = $this->Model_tournament->checkParticipant($idTournament, $idTeam);
        $jumlah_pendaftar = $this->Model_tournament->countParticipant($idTournament);
        $kuota = $this->Model_tournament->getTournamentById($idTournament);
        if($idTeam == 0){
            $this->session->set_flashdata('fail', 'Anda belum tergabung dengan tim manapun');
            redirect('controller_tournament');
        }
        else if($validasi != 0){
            $this->session->set_flashdata('fail', 'Anda sudah bergabung');
            redirect('controller_tournament');
        }
        else if($jumlah_pendaftar >= $kuota->kuota){
            
            $this->session->set_flashdata('fail', 'Kuota penuh');
            redirect('controller_tournament');
        }
        else{
            $data = [
                "id_tour" => $idTournament,
                "id_team" => $idTeam,
            ];
            $cek = $this->Model_tournament->joinTournament($data);
            if($cek) $this->session->set_flashdata('flash', 'Pendaftaran berhasil');
            redirect('controller_tournament');
        }
        
    }
}
?>