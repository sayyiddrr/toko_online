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
        $data['invoice'] = $this->db->query("SELECT 	*
                                            FROM 	    tb_order
                                            INNER JOIN tb_customer ON tb_order.custID = tb_customer.custID")->result(); 
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar',$data);
        $this->load->view('admin/invoice',$data);
        $this->load->view('templates_admin/footer');
    }


    public function detail($orderID)
    {
        $data['admin'] = $this->db->get_where('tb_admin', ['adminID' => $this->session->userdata('adminID')])->row_array();
        $data['invoice'] = $this->model_order->ambil_id_invoice($orderID);
       
        $data['pesanan'] = $this->db->query("SELECT *
                                            FROM tb_produk, tb_orderdetail
                                            WHERE tb_produk.produkID = tb_orderdetail.produkID
                                            AND	tb_orderdetail.orderID = $orderID")->result();
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar',$data);
        $this->load->view('admin/detail_invoice',$data);
        $this->load->view('templates_admin/footer');
        
    }

    public function proses(){
        $data['admin'] = $this->db->get_where('tb_admin', ['adminID' => $this->session->userdata('adminID')])->row_array();
        $data['pesanan'] = $this->db->query("SELECT     *
                                            FROM        tb_order
                                            WHERE	    tb_order.status_order = 'sudah bayar'
                                            ORDER BY    orderID DESC")->result();
        $data['proses'] = $this->db->query("SELECT     *
                                            FROM        tb_order
                                            WHERE	    tb_order.status_order = 'dikirim'
                                            ORDER BY    orderID DESC")->result();
        $data['selesai'] = $this->db->query("SELECT     *
                                            FROM        tb_order
                                            WHERE	    tb_order.status_order = 'selesai'
                                            ORDER BY    orderID DESC")->result();
        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar',$data);
        $this->load->view('admin/proses',$data);
        $this->load->view('templates_admin/footer');

    }
    public function proses_kirim($id){
        $data['admin'] = $this->db->get_where('tb_admin', ['adminID' => $this->session->userdata('adminID')])->row_array();
        $where = array('orderID' =>$id);
        $data['transaksi'] = $this->db->query( "UPDATE tb_order
                                                SET status_order = 'proses'
                                                WHERE tb_order.orderID = $id");
        redirect('admin/order/proses');
    }

    public function cancel($id){
        $data['admin'] = $this->db->get_where('tb_admin', ['adminID' => $this->session->userdata('adminID')])->row_array();
        $where = array('orderID' =>$id);
        $data['transaksi'] = $this->db->query( "UPDATE tb_order
                                                SET status_order = 'gagal'
                                                WHERE tb_order.orderID = $id");
        redirect('admin/order/proses');
    }
}