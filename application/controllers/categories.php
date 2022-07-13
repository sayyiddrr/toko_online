<?php

class Categories extends CI_Controller{
    public function index()
    {
        $data['customer'] = $this->db->get_where('tb_customer', ['username' => $this->session->userdata('username')])->row_array();
        $data['produk']=$this->model_barang->tampil_data()->result();
        $this->load->view('templates/karma/header', $data);
		$this->load->view('categories', $data);
        $this->load->view('templates/karma/footer');
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
        redirect('categories');
    }

    public function detail_keranjang(){
        $data['customer'] = $this->db->get_where('tb_customer', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/karma/header', $data);
        $this->load->view('keranjang');
        $this->load->view('templates/karma/footer');
    }
    
    public function elektronik()
    {
        $data['elektronik'] = $this->model_kategori->
            data_elektronik()->result();
        $data['customer'] = $this->db->get_where('tb_customer', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/karma/header', $data);
        $this->load->view('elektronik',$data);
        $this->load->view('templates/karma/footer');
    }

    public function pakaian_pria()
    {
        $data['pakaian_pria'] = $this->model_kategori->
            data_pakaian_pria()->result();
        $data['customer'] = $this->db->get_where('tb_customer', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/karma/header', $data);
        $this->load->view('pakaian_pria',$data);
        $this->load->view('templates/karma/footer');
    }

    public function pakaian_wanita()
    {
        $data['pakaian_wanita'] = $this->model_kategori->
            data_pakaian_wanita()->result();
        $data['customer'] = $this->db->get_where('tb_customer', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/karma/header', $data);
        $this->load->view('pakaian_wanita',$data);
        $this->load->view('templates/karma/footer');
    }

    public function pakaian_anak_anak()
    {
        $data['pakaian_anak_anak'] = $this->model_kategori->
            data_pakaian_anak_anak()->result();
        $data['customer'] = $this->db->get_where('tb_customer', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/karma/header', $data);
        $this->load->view('pakaian_anak_anak',$data);
        $this->load->view('templates/karma/footer');
    }

    public function peralatan_olahraga()
    {
        $data['peralatan_olahraga'] = $this->model_kategori->
            data_peralatan_olahraga()->result();
        $data['customer'] = $this->db->get_where('tb_customer', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/karma/header', $data);
        $this->load->view('peralatan_olahraga',$data);
        $this->load->view('templates/karma/footer');
    }

}
