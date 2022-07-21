<?php

class Dashboard_admin extends CI_Controller{
    
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
    public function index()
    {
        $data['admin'] = $this->db->get_where('tb_admin', ['adminID' => $this->session->userdata('adminID')])->row_array();

        $data['member'] = $this->db->query("SELECT tb_customer.*, COUNT(tb_order.custID) as jumlah
                                            FROM tb_order, tb_customer
                                            WHERE tb_customer.custID = tb_order.custID
                                            GROUP BY tb_order.custID
                                            ORDER BY jumlah DESC")->result();

        $data['tenant'] = $this->db->query("SELECT tb_tenant.*, COUNT(tb_orderdetail.produkID) as jumlah
                                            FROM tb_tenant, tb_orderdetail, tb_produk
                                            WHERE tb_tenant.tenantID = tb_produk.tenantID
                                            AND tb_produk.produkID = tb_orderdetail.produkID
                                            GROUP BY tb_tenant.nama_tenant
                                            ORDER BY jumlah DESC")->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('templates_admin/footer', $data);
    }
}