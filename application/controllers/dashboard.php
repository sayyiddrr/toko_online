<?php

class dashboard extends CI_Controller{

    public function __construct(){
        parent::__construct();

        if($this->session->userdata('roleID') != '3'){
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda Belum Login!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="ture">&times;</span>
            </button>
            </div>');
            redirect('auth/login');
        }
    }

   

    public function tambah_ke_keranjang($id){

        $barang = $this->model_barang->find($id);
        $data = array(
            'id'      => $barang->produkID,
            'qty'     => 1,
            'price'   => $barang->harga_produk,
            'name'    => $barang->nama_produk,
            'diskon'    => $barang->diskon,
            
        );
    
        $this->cart->insert($data);
        redirect('welcome');
    }
    
    public function detail_keranjang(){
        $data['customer'] = $this->db->get_where('tb_customer', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/karma/header', $data);
        $this->load->view('keranjang');
        $this->load->view('templates/karma/footer');
    }

    public function hapus_keranjang(){
        $this->cart->destroy();
        redirect('welcome');
    }

    public function pembayaran(){
        $this->form_validation->set_rules('gambar','gambar','required',['required' => 'gambar wajib diisi']);
        $data['customer'] = $this->db->get_where('tb_customer', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/karma/header', $data);
        $this->load->view('pembayaran');
        $this->load->view('templates/karma/footer');

    }
    public function proses_pesanan(){
        $data['customer'] = $this->db->get_where('tb_customer', ['username' => $this->session->userdata('username')])->row_array();
        $is_processed = $this->model_order->index();
        if($is_processed){
            $this->cart->destroy();
            $data['customer'] = $this->db->get_where('tb_customer', ['username' => $this->session->userdata('username')])->row_array();
            $this->load->view('templates/karma/header', $data);
            $this->load->view('proses_pesanan');
            $this->load->view('templates/karma/footer');
        } else{
            echo "Sorry Your Order is Failed";
        }
    }

    public function detail($produkID)
    {
        $data['barang'] = $this->model_barang->detail_brg($produkID);
        $data['barang'] = $this->db->query("SELECT * 
                                            FROM tb_produk
                                            INNER JOIN tb_tenant ON tb_produk.tenantID = tb_tenant.tenantID
                                            INNER JOIN tb_kategori ON tb_produk.kategoriID = tb_kategori.kategoriID
                                            WHERE produkID = $produkID;")->result();
        $data['customer'] = $this->db->get_where('tb_customer', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/karma/header', $data);
        $this->load->view('detail_barang',$data);
        $this->load->view('templates/karma/footer');
    }

    public function official_store(){
        $data['customer'] = $this->db->get_where('tb_customer', ['username' => $this->session->userdata('username')])->row_array();
        $data['tenant'] = $this->model_user->tampil_tenant()->result();
        $this->load->view('templates/karma/header', $data);
        $this->load->view('official_store', $data);
        $this->load->view('templates/karma/footer');
    }

    public function discount(){
        $data['customer'] = $this->db->get_where('tb_customer', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/karma/header', $data);
        $this->load->view('discount');
        $this->load->view('templates/karma/footer');
    }

    public function myaccount(){
        $data['customer'] = $this->db->get_where('tb_customer', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('user/myaccount', $data);
    }

    public function invoice(){
        $this->load->view('user/dashboard_invoice');
        
    }
    public function best_member(){
        $data['customer'] = $this->db->get_where('tb_customer', ['username' => $this->session->userdata('username')])->row_array();
        $data['member'] = $this->db->query("SELECT tb_customer.*, COUNT(tb_order.custID) as jumlah
                                            FROM tb_order, tb_customer
                                            WHERE tb_customer.custID = tb_order.custID
                                            GROUP BY tb_order.custID
                                            ORDER BY jumlah DESC
                                            LIMIT 1")->result();
        $this->load->view('templates/karma/header', $data);
        $this->load->view('best_member', $data);
        $this->load->view('templates/karma/footer');
    }

    public function best_tenant(){
        $data['customer'] = $this->db->get_where('tb_customer', ['username' => $this->session->userdata('username')])->row_array();
        $data['seller'] = $this->db->query("SELECT tb_tenant.*, COUNT(tb_orderdetail.produkID) as jumlah
                                            FROM tb_tenant, tb_orderdetail, tb_produk
                                            WHERE tb_tenant.tenantID = tb_produk.tenantID
                                            AND tb_produk.produkID = tb_orderdetail.produkID
                                            GROUP BY tb_tenant.nama_tenant
                                            ORDER BY jumlah DESC
                                            LIMIT 1")->result();
        $this->load->view('templates/karma/header', $data);
        $this->load->view('best_tenant', $data);
        $this->load->view('templates/karma/footer');
    }

    public function tambah_jumlah_produk($id_produk)
    {
      $produk = $this->cart->get_item($id_produk);
      $data = array(
        'rowid' => $id_produk,
        'qty' => $produk['qty'] + 1,
      );
      $this->cart->update($data);
      redirect('dashboard/detail_keranjang');
    }
  
    public function kurang_jumlah_produk($id_produk)
    {
      $produk = $this->cart->get_item($id_produk);
      $data = array(
        'rowid' => $id_produk,
        'qty' => $produk['qty'] - 1,
      );
      $this->cart->update($data);
      redirect('dashboard/detail_keranjang');
    }

}