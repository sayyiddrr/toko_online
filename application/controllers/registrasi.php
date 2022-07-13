<?php

class Registrasi extends CI_Controller{

    public function index()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => 'Nama Wajib Diisi!']);
        $this->form_validation->set_rules('email', 'Email', 'required', ['required' => 'Email Wajib Diisi!']);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', ['required' => 'Alamat Wajib Diisi!']);
        $this->form_validation->set_rules('telepon', 'Telepon', 'required', ['required' => 'Telepon Wajib Diisi!']);
        $this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'Username Wajib Diisi!']);
        $this->form_validation->set_rules('password_1', 'Password', 'required|matches[password_2]', ['required' => 'Password Wajib Diisi!', 'matches' => 'Password Tidak Cocok!']);
        $this->form_validation->set_rules('password_2', 'Password', 'required|matches[password_1]');

        if($this->form_validation->run() == FALSE) {
            $this->load->view('registrasi');
        } else {
            $data = array(
                'custID'   => '',
                'roleID'   => 3,
                'nama'      => $this->input->post('nama'),
                'email'     => $this->input->post('email'),
                'alamat'     => $this->input->post('alamat'),
                'telepon'   => $this->input->post('telepon'),
                'username'  => $this->input->post('username'),
                'password'  => $this->input->post('password_1'),
            );

            $this->db->insert('tb_customer',$data);
            redirect('auth/login');
        }
    }

    public function registtenant()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => 'Nama Wajib Diisi!']);
        $this->form_validation->set_rules('email', 'Email', 'required', ['required' => 'Email Wajib Diisi!']);
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required', ['required' => 'Deskripsi Wajib Diisi!']);
        $this->form_validation->set_rules('kontak', 'Kontak', 'required', ['required' => 'Kontak Wajib Diisi!']);
        $this->form_validation->set_rules('password_1', 'Password', 'required|matches[password_2]', ['required' => 'Password Wajib Diisi!', 'matches' => 'Password Tidak Cocok!']);
        $this->form_validation->set_rules('password_2', 'Password', 'required|matches[password_1]');
        
        if($this->form_validation->run() == FALSE) {
            $this->load->view('regist_tenant');
        } else {
            $data1 = array(
                'tenantID'         => '',
                'roleID'           => 2,
                'nama_tenant'      => $this->input->post('nama'),
                'deskripsi_tenant' => $this->input->post('deskripsi'),
                'kontak_tenant'       => $this->input->post('kontak'),
                'email'             => $this->input->post('email'),
                'password'          => $this->input->post('password_1'),
            );

            $this->db->insert('tb_tenant',$data1);
            redirect('auth/login_tenant');
        }
    }

    public function registadmin()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => 'Nama Wajib Diisi!']);
        $this->form_validation->set_rules('email', 'Email', 'required', ['required' => 'Email Wajib Diisi!']);
        $this->form_validation->set_rules('kontak', 'Kontak', 'required', ['required' => 'Kontak Wajib Diisi!']);
        $this->form_validation->set_rules('nik', 'nik', 'required', ['required' => 'Email Wajib Diisi!']);
        $this->form_validation->set_rules('password_1', 'Password', 'required|matches[password_2]', ['required' => 'Password Wajib Diisi!', 'matches' => 'Password Tidak Cocok!']);
        $this->form_validation->set_rules('password_2', 'Password', 'required|matches[password_1]');
        
        if($this->form_validation->run() == FALSE) {
            $this->load->view('regist_admin');
        } else {
            $data1 = array(
                'adminID'         => '',
                'roleID'           => 1,
                'nama_admin'       => $this->input->post('nama'),
                'email_admin'       => $this->input->post('email'),
                'kontak_admin'       => $this->input->post('kontak'),
                'password'          => $this->input->post('password_1'),      
                'nik'             => $this->input->post('nik'),
            );

            $this->db->insert('tb_admin',$data1);
            redirect('auth/login_admin');
        }
    }
}