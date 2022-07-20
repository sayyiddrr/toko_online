<?php

class Transaksi extends CI_Controller{
    
    public function index(){
        $data['customer'] = $this->db->get_where('tb_customer', ['username' => $this->session->userdata('username')])->row_array();
        $custID = $data['customer']['custID'];
        $data['transaksi'] = $this->db->query( "SELECT *
                                                FROM	tb_customer, tb_order
                                                WHERE		tb_order.custID = tb_customer.custID
                                                AND		tb_customer.custID = $custID
                                                ORDER BY tb_order.orderID DESC")->result();
        //print_r($datachart);die();
        $this->load->view('user/orderstatus', $data);
    }

    public function bayar($orderID){

    }
}