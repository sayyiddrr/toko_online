<?php

class Data_user extends CI_Controller{

    public function tenant()
    {
        $data['admin'] = $this->db->get_where('tb_admin', ['adminID' => $this->session->userdata('adminID')])->row_array();
        $datauser['tenant'] = $this->model_user->tampil_tenant()->result();
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar',$data);
        $this->load->view('admin/data_tenant', $datauser);
        $this->load->view('templates_admin/footer');
    }

    public function customer()
    {
        $data['admin'] = $this->db->get_where('tb_admin', ['adminID' => $this->session->userdata('adminID')])->row_array();
        $datauser['customer'] = $this->model_user->tampil_customer()->result();
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar',$data);
        $this->load->view('admin/data_customer', $datauser);
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

    public function edittenant($id)
    {
        $where = array('tenantID' =>$id);
        $datauser['user'] = $this->model_user->edit_user($where, 'tb_tenant')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_user', $datauser);
        $this->load->view('templates_admin/footer');
    }

    public function editcustomer($id)
    {
        $where = array('custID' =>$id);
        $datauser['user'] = $this->model_user->edit_user($where, 'tb_customer')->result();
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

    public function hapustenant($id){
        $where = array('tenantID'=> $id);
        $this->model_user->hapus_user($where,'tb_tenant');
        redirect('admin/data_user/index');
    }

    public function hapuscustomer($id){
        $where = array('custID'=> $id);
        $this->model_user->hapus_user($where,'tb_customer');
        redirect('admin/data_user/index');
    }
}