<?php

class Registrasi extends CI_Controller{

    public function index()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => 'Nama Wajib Diisi!']);
        $this->form_validation->set_rules('email', 'email', 'required', ['required' => 'email Wajib Diisi!']);
        $this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'Username Wajib Diisi!']);
        $this->form_validation->set_rules('password_1', 'Password', 'required|matches[password_2]', ['required' => 'Password Wajib Diisi!', 'matches' => 'Password Tidak Cocok!']);
        $this->form_validation->set_rules('password_2', 'Password', 'required|matches[password_1]');
        $this->form_validation->set_rules('role_id', 'role_id', 'required', ['required' => 'role_id Wajib Diisi!']);

        if($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header');
            $this->load->view('registrasi');
            $this->load->view('templates/footer');
        } else {
            $data = array(
                'id'        => '',
                'nama'      => $this->input->post('nama'),
                'e-mail'    => $this->input->post('email'),
                'username'  => $this->input->post('username'),
                'password'  => $this->input->post('password_1'),
                'role_id'   => $this->input->post('role_id'),
            );

            $this->db->insert('tb_user',$data);
            redirect('auth/login');
        }
    }
}