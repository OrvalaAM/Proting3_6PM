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
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('tournament', $data);
		$this->load->view('templates/footer');
    }

    public function tambahTournament(){
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('tempat', 'Tempat', 'required');
        //$this->form_validation->set_rules('tanggal', 'Tanggal', 'date_valid');
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
                "jenis_games" => $this->input->post('game', true) 
            ];
            $cek = $this->Model_tournament->insertTournament($data);
            if($cek) $this->session->set_flashdata('flash', 'Berhasil ditambah');
            redirect('controller_tournament');
        }
    }

    public function ubahTournament(){
        // $this->form_validation->set_rules('namaupdate', 'Nama', 'required');
        // $this->form_validation->set_rules('tempatUpdate', 'Tempat', 'required');
        // #$this->form_validation->set_rules('tanggal', 'Tanggal', 'date_valid');
        // if($this->form_validation->run() == false){
        //     $data['tournament'] = $this->Model_tournament->getAllTournament();
		// 	$this->load->view('templates/header');
		//     $this->load->view('templates/sidebar');
		//     $this->load->view('tournament', $data);
		//     $this->load->view('templates/footer');
        //}else{
            $data = [
                "nama" => $this->input->post('namaUpdate', true),
                "deskripsi" => $this->input->post('deskripsiUpdate', true),
                "tempat" => $this->input->post('tempatUpdate', true),
                "tanggal" => $this->input->post('tanggalUpdate', true),
                "jenis_games" => $this->input->post('gameUpdate', true) 
            ];
            $id = $this->input->post('idUpdate', true);
            $cek = $this->Model_tournament->updateTournament($data, $id);
            if($cek) $this->session->set_flashdata('flash', 'Berhasil diubah');
            redirect('controller_tournament');
        //}
    }

    public function hapusTournament($id){
        $cek = $this->Model_tournament->deleteTournament($id);
        if($cek) $this->session->set_flashdata('flash', 'Berhasil dihapus');
        redirect('controller_tournament');
    }
}