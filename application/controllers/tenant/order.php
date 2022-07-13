<?php

class Order extends CI_Controller{

    public function __construct(){
        parent::__construct();

        if($this->session->userdata('roleID') != '2'){
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda Belum Login!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="ture">&times;</span>
            </button>
            </div>');
            redirect('auth/login');
        }
    }
    public function index(){
        $data['tenant'] = $this->db->get_where('tb_tenant', ['email' => $this->session->userdata('email')])->row_array();
        $data['order'] = $this->model_order->tampil_order_tenant($data['tenant']['tenantID'])->result();
        $this->load->view('templates_tenant/header',$data);
        $this->load->view('templates_tenant/sidebar',$data);
        $this->load->view('tenant/order',$data);
        $this->load->view('templates_tenant/footer');
    }
}