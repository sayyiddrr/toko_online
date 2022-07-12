<?php

class dashboard extends CI_Controller{

    public function __construct(){
        parent::__construct();

        if($this->session->userdata('role_id') != '3'){
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
            'id'      => $barang->id_brg,
            'qty'     => 1,
            'price'   => $barang->harga,
            'name'    => $barang->nama_brg,
            
        );
    
        $this->cart->insert($data);
        redirect('welcome');
    }

    public function detail_keranjang(){
        $this->load->view('templates/karma/header');
        $this->load->view('keranjang');
        $this->load->view('templates/karma/footer');
    }

    public function hapus_keranjang(){
        $this->cart->destroy();
        redirect('welcome');
    }

    public function pembayaran(){
        $this->load->view('templates/karma/header');
        $this->load->view('pembayaran');
        $this->load->view('templates/karma/footer');

    }
    public function proses_pesanan(){
        $is_processed = $this->model_invoice->index();
        if($is_processed){
            $this->cart->destroy();
            $this->load->view('templates/karma/header');
            $this->load->view('proses_pesanan');
            $this->load->view('templates/karma/footer');
        } else{
            echo "Sorry Your Order is Failed";
        }
    }

    public function detail($id_brg)
    {
        $data['barang'] = $this->model_barang->detail_brg($id_brg);
        $this->load->view('templates/karma/header');
        $this->load->view('detail_barang',$data);
        $this->load->view('templates/karma/footer');
    }

    public function official_store(){
        $this->load->view('templates/karma/header');
        $this->load->view('official_store');
        $this->load->view('templates/karma/footer');
    }

    public function discount(){
        $this->load->view('templates/karma/header');
        $this->load->view('discount');
        $this->load->view('templates/karma/footer');
    }

    public function myaccount(){
        $this->load->view('user/myaccount');
    }

    public function invoice(){
        $this->load->view('user/dashboard_invoice');
        
    }

}