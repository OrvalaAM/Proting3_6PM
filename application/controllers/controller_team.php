<?php
class Controller_team extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this ->load->model('Model_team', '', TRUE);
        $this ->load->library('session');
        $this ->load->library('form_validation');
    }

    public function index(){
        $data['team']=$this->Model_team->getAllTeam();
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('team',$data);
		$this->load->view('templates/footer');
    }

    public function tambahTeam(){
        $this->form_validation->set_rules('nama','Nama','required');
        if ($this->form_validation->run()==false){
            $data['team']=$this->Model_team->getAllTeam();
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('team',$data);
		$this->load->view('templates/footer');
            
        }else{
            $data = [
                "nama" => $this->input->post('nama',true),
                "deskripsi"=> $this->input->post('deskripsi',true),
                "jenis_game"=> $this->input->post('game',true),
                "member"=> $this->input->post('member',true)
            ];
            $cek = $this->Model_team->insertTeam($data);
            if($cek) $this->session->set_flashdata('flash', 'berhasil ditambah');
            redirect('controller_team');
        
        }
    }

    public function updateTeam(){
        $data = [
            "nama" => $this->input->post('namaUpdate', true),
            "deskripsi" => $this->input->post('deskripsiUpdate', true),
            "jenis_game" => $this->input->post('gameUpdate', true) 
        ];
        $id = $this->input->post('idUpdate', true);
        $cek = $this->Model_team->updateTeam($data, $id);
        if($cek) $this->session->set_flashdata('flash', 'Berhasil diubah');
        redirect('controller_team');
    }

    public function joinTeam(){
        $id_team = $this->uri->segment(3);
        $username = $this->uri->segment(4);
        $jumlah_pendaftar = $this->Model_team->countMember($id_team);
        $kuota = $this->Model_team->getQuota($id_team);
        if($username == null){
            $this->session->set_flashdata('fail', 'Anda belum tergabung dengan tim manapun');
            redirect('controller_team');
        }
        else if($jumlah_pendaftar >= $kuota->member){
            
            $this->session->set_flashdata('fail', 'Kuota penuh');
            redirect('controller_team');
        }
        else{
            $data = [
                "id_team" => $id_team,
                "username" => $username,
            ];
            $cek = $this->Model_team->joinTeam($data, $username);
            if($cek) $this->session->set_flashdata('flash', 'Pendaftaran berhasil');
            redirect('controller_team');
        }
    }  

    public function leftTeam(){
        $id_team = 0;
        $username = $this->uri->segment(3);
        
            $data = [
                "id_team" => $id_team,
                "username" => $username,
            ];
            $cek = $this->Model_team->joinTeam($data, $username);
            if($cek) $this->session->set_flashdata('flash', 'Anda meninggalkan team');
            redirect('controller_team');
        }
    
}
?>