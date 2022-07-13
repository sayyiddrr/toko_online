<?php

class Order extends CI_Controller{

    public function __construct(){
        parent::__construct();

        if($this->session->userdata('roleID') != '1'){
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda Belum Login!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="ture">&times;</span>
            </button>
            </div>');
            redirect('auth/login');
        }
    }
    public function index(){
        $data['admin'] = $this->db->get_where('tb_admin', ['adminID' => $this->session->userdata('adminID')])->row_array();
        $data['invoice'] = $this->model_order->tampil_data();
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar',$data);
        $this->load->view('admin/invoice',$data);
        $this->load->view('templates_admin/footer');
    }


    public function detail($orderID)
    {
        $data['admin'] = $this->db->get_where('tb_admin', ['adminID' => $this->session->userdata('adminID')])->row_array();
        $data['invoice'] = $this->model_order->ambil_id_invoice($orderID);
        $data['pesanan'] = $this->model_order->ambil_id_pesanan($orderID);
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar',$data);
        $this->load->view('admin/detail_invoice',$data);
        $this->load->view('templates_admin/footer');
        
    }
}