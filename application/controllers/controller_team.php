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
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('team');
            $this->load->view('templates/footer');
        }else{
            $data = [
                "nama" => $this->input->post('nama',true),
                "deskripsi"=> $this->input->post('deskripsi',true),
                "jenis_game"=> $this->input->post('game',true)
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

    public function deleteTeam($id){
        $cek = $this->Model_team->deleteTeam($id);
        if($cek) $this->session->set_flashdata('flash', 'Berhasil dihapus');
        redirect('controller_team');
    }   
}
?>