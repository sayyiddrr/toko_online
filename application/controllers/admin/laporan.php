<?php

class Laporan extends CI_Controller{

    public function index(){
        $data['admin'] = $this->db->get_where('tb_admin', ['adminID' => $this->session->userdata('adminID')])->row_array();

        if((isset($_GET['tahun']) && $_GET['tahun']!='')){
            
            $tahun = $_GET['tahun'];
        }else{
            $tahun = date('Y');
        }

        $data['penjualan'] = $this->db->query( "SELECT MONTH(tb_order.tgl_order) AS bulan, SUM(tb_orderdetail.harga) AS jumlah
                                                FROM tb_orderdetail, tb_order
                                                WHERE tb_orderdetail.orderID = tb_order.orderID
                                                AND YEAR(tb_order.tgl_order) = $tahun
                                                GROUP BY MONTH(tb_order.tgl_order)")->result();
        
        $data['kategori'] = $this->db->query(  "SELECT MONTH(tb_order.tgl_order) AS bulan, SUM(tb_orderdetail.harga) AS jumlah, tb_kategori.nama_kategori
                                                FROM tb_orderdetail, tb_order, tb_produk, tb_kategori
                                                WHERE tb_kategori.kategoriID = tb_produk.kategoriID
                                                AND	tb_produk.produkID = tb_orderdetail.produkID
                                                AND tb_orderdetail.orderID = tb_order.orderID
                                                AND YEAR(tb_order.tgl_order) = $tahun
                                                GROUP BY  tb_kategori.nama_kategori, MONTH(tb_order.tgl_order)")->result();
    
        $data['tenant'] = $this->db->query("SELECT MONTH(tb_order.tgl_order) AS bulan, SUM(tb_orderdetail.harga) AS jumlah, tb_tenant.nama_tenant
                                            FROM tb_orderdetail, tb_order, tb_produk, tb_tenant
                                            WHERE tb_tenant.tenantID = tb_produk.tenantID
                                            AND	tb_produk.produkID = tb_orderdetail.produkID
                                            AND tb_orderdetail.orderID = tb_order.orderID
                                            AND YEAR(tb_order.tgl_order) = $tahun
                                            GROUP BY tb_tenant.nama_tenant, MONTH(tb_order.tgl_order)")->result();


        $this->load->view('templates_admin/header',$data);
        $this->load->view('templates_admin/sidebar',$data);
        $this->load->view('admin/laporan', $data);
        $this->load->view('templates_admin/footer');
    }
}