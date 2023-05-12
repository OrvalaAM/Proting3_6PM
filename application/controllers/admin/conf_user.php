<?php

class Profile extends CI_Controller
{

    public function index()
    {
        $data['user'] = $this->model_profile->tampilData()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/user', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambahData()
    {
        $username           = $this->input->post('username');
        $role_id            = $this->input->post('role_id');

        $data = array(
            'username'      => $username,
            'role_id'       => $role_id
        );

        $this->model_profile->tambahUser($data, 'tb_user');
        redirect('admin/conf_user/index');
    }

    public function edit($id)
    {
        $where = array('id' => $id);
        $data['user'] = $this->model_profile->editUser($where, 'tb_user')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/user', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update()
    {
        $id             = $this->input->post('id');
        $username       = $this->input->post('username');

        $data = array(
            'username'      => $username
        );

        $where = array(
            'id'            => $id
        );

        $this->model_profile->updateData($where, $data, 'tb_user');
        redirect('admin/conf_user/index');
    }
}