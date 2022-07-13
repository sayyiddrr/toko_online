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
        $data['seller'] = $this->db->query("SELECT tb_customer.*, COUNT(tb_order.custID) as jumlah
                                            FROM tb_order, tb_customer
                                            WHERE tb_customer.custID = tb_order.custID
                                            GROUP BY tb_order.custID
                                            ORDER BY jumlah DESC
                                            LIMIT 1")->result();
        $this->load->view('templates/karma/header', $data);
        $this->load->view('best_member', $data);
        $this->load->view('templates/karma/footer');
    }
}