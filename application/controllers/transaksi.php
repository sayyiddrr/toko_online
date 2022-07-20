<?php

class Transaksi extends CI_Controller{
    
    public function index(){
        $data['customer'] = $this->db->get_where('tb_customer', ['username' => $this->session->userdata('username')])->row_array();
        $custID = $data['customer']['custID'];
        $data['transaksi'] = $this->db->query( "SELECT DISTINCT *
                                                FROM	tb_customer, tb_order
                                                WHERE		tb_order.custID = tb_customer.custID
                                                AND		tb_customer.custID = $custID
                                                AND     tb_order.status_order = 'belum'
                                                ORDER BY tb_order.orderID DESC")->result();

        $data['proses'] = $this->db->query( "SELECT DISTINCT *
                                                FROM	tb_customer, tb_order
                                                WHERE		tb_order.custID = tb_customer.custID
                                                AND		tb_customer.custID = $custID
                                                AND     tb_order.status_order = 'sudah bayar'
                                                ORDER BY tb_order.orderID DESC")->result();

        $data['tunggu'] = $this->db->query( "SELECT *
                                                FROM	tb_customer, tb_order
                                                WHERE		tb_order.custID = tb_customer.custID
                                                AND		tb_customer.custID = $custID
                                                AND     tb_order.status_order = 'proses'
                                                ORDER BY tb_order.orderID DESC")->result();
        
        $data['kirim'] = $this->db->query( "SELECT *
                                                FROM	tb_customer, tb_order
                                                WHERE		tb_order.custID = tb_customer.custID
                                                AND		tb_customer.custID = $custID
                                                AND     tb_order.status_order = 'dikirim'
                                                ORDER BY tb_order.orderID DESC")->result();
        //print_r($datachart);die();
        $this->load->view('user/orderstatus', $data);
    }

    public function bayar($id){
        $data['customer'] = $this->db->get_where('tb_customer', ['username' => $this->session->userdata('username')])->row_array();
        $where = array('orderID' =>$id);
        $data['order'] = $this->model_order->edit_order($where, 'tb_order')->result();
        
        $this->load->view('user/bayar', $data);

        /*$data['tenant'] = $this->db->get_where('tb_tenant', ['email' => $this->session->userdata('email')])->row_array();
        $where = array('produkID' =>$id);
        $data['produk'] = $this->model_barang->edit_barang($where, 'tb_produk')->result();
        $this->load->view('templates_tenant/header', $data);
        $this->load->view('templates_tenant/sidebar', $data);
        $this->load->view('tenant/edit_barang', $data);
        $this->load->view('templates_tenant/footer');*/

    }

    public function update($id){
        $data['customer'] = $this->db->get_where('tb_customer', ['username' => $this->session->userdata('username')])->row_array();

        $where = array('orderID' =>$id);
        $data['transaksi'] = $this->db->query( "UPDATE tb_order
                                                SET status_order = 'sudah bayar'
                                                WHERE tb_order.orderID = $id");
        
        redirect('transaksi');
        /*redirect('transaksi/index');
        $data = array(
            'orderID'   =>      $orderID,
            'status_order'   => 'selesai',
        );

        
        $this->model_order->upload_bukti($data);
        redirect('transaksi');*/
        
    }
    public function konfirmasi($id){
        $data['customer'] = $this->db->get_where('tb_customer', ['username' => $this->session->userdata('username')])->row_array();

        $where = array('orderID' =>$id);
        $data['kirim'] = $this->db->query( "UPDATE tb_order
                                                SET status_order = 'selesai'
                                                WHERE tb_order.orderID = $id");
        
        redirect('transaksi');
    }
}