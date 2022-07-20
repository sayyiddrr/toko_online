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
        $tenantID = $data['tenant']['tenantID'];
        $data['order'] = $this->db->query("SELECT     *
                                            FROM        tb_order, tb_orderdetail, tb_tenant, tb_produk
                                            WHERE	    tb_tenant.tenantID = tb_produk.tenantID
                                            AND         tb_produk.produkID = tb_orderdetail.produkID
                                            AND         tb_orderdetail.orderID = tb_order.orderID
                                            AND         tb_tenant.tenantID = $tenantID
                                            AND         tb_order.status_order = 'proses'
                                            ORDER BY    tb_orderdetail.orderID DESC")->result();

        $data['kirim'] = $this->db->query("SELECT     *
                                            FROM        tb_order, tb_orderdetail, tb_tenant, tb_produk
                                            WHERE	    tb_tenant.tenantID = tb_produk.tenantID
                                            AND         tb_produk.produkID = tb_orderdetail.produkID
                                            AND         tb_orderdetail.orderID = tb_order.orderID
                                            AND         tb_tenant.tenantID = $tenantID
                                            AND         tb_order.status_order = 'dikirim'
                                            ORDER BY    tb_orderdetail.orderID DESC")->result();

        $data['selesai'] = $this->db->query("SELECT     *
                                            FROM        tb_order, tb_orderdetail, tb_tenant, tb_produk
                                            WHERE	    tb_tenant.tenantID = tb_produk.tenantID
                                            AND         tb_produk.produkID = tb_orderdetail.produkID
                                            AND         tb_orderdetail.orderID = tb_order.orderID
                                            AND         tb_tenant.tenantID = $tenantID
                                            AND         tb_order.status_order = 'selesai'
                                            ORDER BY    tb_orderdetail.orderID DESC")->result();
        $this->load->view('templates_tenant/header',$data);
        $this->load->view('templates_tenant/sidebar',$data);
        $this->load->view('tenant/proses',$data);
        $this->load->view('templates_tenant/footer');
    }

    public function proses_kirim($id){
        $data['tenant'] = $this->db->get_where('tb_tenant', ['email' => $this->session->userdata('email')])->row_array();
        $where = array('orderID' =>$id);
        $data['transaksi'] = $this->db->query( "UPDATE tb_order
                                                SET status_order = 'dikirim'
                                                WHERE tb_order.orderID = $id");
        redirect('tenant/order/index');
    }
}