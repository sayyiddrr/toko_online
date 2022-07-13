<?php

class Metode extends CI_Controller{
    public function index(){
        $data['admin'] = $this->db->get_where('tb_admin', ['adminID' => $this->session->userdata('adminID')])->row_array();
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar',$data);
        $this->load->view('admin/metode',$data);
        $this->load->view('templates_admin/footer');
    }
}