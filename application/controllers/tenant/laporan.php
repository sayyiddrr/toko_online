<?php

class Laporan extends CI_Controller{

    public function index(){
        $data['tenant'] = $this->db->get_where('tb_tenant', ['email' => $this->session->userdata('email')])->row_array();

        $id = $data['tenant']['tenantID'];
        if((isset($_GET['tahun']) && $_GET['tahun']!='')){
            
            $tahun = $_GET['tahun'];
        }else{
            $tahun = date('Y');
        }
        $data['penjualan'] = $this->db->query( "SELECT MONTH(tb_order.tgl_order) AS bulan, SUM(tb_orderdetail.harga) AS jumlah
                                                FROM tb_orderdetail, tb_order, tb_produk, tb_tenant
                                                WHERE tb_tenant.tenantID = tb_produk.tenantID
                                                AND	tb_produk.produkID = tb_orderdetail.produkID
                                                AND tb_orderdetail.orderID = tb_order.orderID
                                                AND YEAR(tb_order.tgl_order) = $tahun
                                                AND tb_tenant.tenantID = $id
                                                GROUP BY MONTH(tb_order.tgl_order)")->result();

        $data['produk'] = $this->db->query("SELECT tb_produk.nama_produk, SUM(tb_orderdetail.harga) AS jumlah
                                            FROM tb_orderdetail, tb_order, tb_produk, tb_tenant
                                            WHERE tb_tenant.tenantID = tb_produk.tenantID
                                            AND	tb_produk.produkID = tb_orderdetail.produkID
                                            AND tb_orderdetail.orderID = tb_order.orderID
                                            AND YEAR(tb_order.tgl_order) = $tahun
                                            AND tb_tenant.tenantID = $id
                                            GROUP BY tb_produk.nama_produk;")->result();
                                            
        $this->load->view('templates_tenant/header', $data);
        $this->load->view('templates_tenant/sidebar', $data);
        $this->load->view('tenant/laporan', $data);
        $this->load->view('templates_tenant/footer');
    }
    
}