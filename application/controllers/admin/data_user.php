<?php

class Data_user extends CI_Controller{

    public function index()
    {
        $datauser['user'] = $this->model_user->tampil_user()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_user', $datauser);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi()
    {
        $nama_usr   = $this->input->post('nama_usr');
        $email      = $this->input->post('email');
        $username   = $this->input->post('username');
        $password   = $this->input->post('password');
        $role_id    = $this->input->post('role_id');

        $datauser = array(
            'nama_usr'       => $nama_usr,
            'email'          => $email,
            'username'       => $username,
            'password'       => $password,
            'role_id'        => $role_id
        );

        $this->model_user->tambah_user($datauser, 'tb_user');
        redirect('admin/data_user/index');
    }

    public function edit($id)
    {
        $where = array('id_usr' =>$id);
        $datauser['user'] = $this->model_user->edit_user($where, 'tb_user')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_user', $datauser);
        $this->load->view('templates_admin/footer');
    }

    public function update(){
        $id         = $this->input->post('id_usr');
        $nama_usr   = $this->input->post('nama_usr');
        $username   = $this->input->post('username');
        $password   = $this->input->post('password');
        $role_id    = $this->input->post('role_id');

        $datauser = array(
            'nama_usr'       => $nama_usr,
            'email'          => $email,
            'username'       => $username,
            'password'       => $password,
            'role_id'        => $role_id
        );

        $where = array('id_usr'=> $id);
        $this->model_user->update_user($where,$datauser,'tb_user');
        redirect('admin/data_user/index');
    }

    public function hapus($id){
        $where = array('id_usr'=> $id);
        $this->model_user->hapus_user($where,'tb_user');
        redirect('admin/data_user/index');
    }

    public function detail($id)
    {
        $where = array('id_usr'=> $id);
        $datauser['user'] = $this->model_user->detail_user($id);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detail_user', $datauser);
        $this->load->view('templates_admin/footer');
    }
}