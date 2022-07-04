<?php

class Categories extends CI_Controller{
    public function index()
    {
        $data['barang']=$this->model_barang->tampil_data()->result();
        $this->load->view('templates/karma/header');
		$this->load->view('categories', $data);
        $this->load->view('templates/karma/footer');
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
        redirect('categories');
    }
    
    public function elektronik()
    {
        $data['elektronik'] = $this->model_kategori->
            data_elektronik()->result();
        $this->load->view('templates/karma/header');
        $this->load->view('elektronik',$data);
        $this->load->view('templates/karma/footer');
    }

    public function pakaian_pria()
    {
        $data['pakaian_pria'] = $this->model_kategori->
            data_pakaian_pria()->result();
        $this->load->view('templates/karma/header');
        $this->load->view('pakaian_pria',$data);
        $this->load->view('templates/karma/footer');
    }

    public function pakaian_wanita()
    {
        $data['pakaian_wanita'] = $this->model_kategori->
            data_pakaian_wanita()->result();
        $this->load->view('templates/karma/header');
        $this->load->view('pakaian_wanita',$data);
        $this->load->view('templates/karma/footer');
    }

    public function pakaian_anak_anak()
    {
        $data['pakaian_anak_anak'] = $this->model_kategori->
            data_pakaian_anak_anak()->result();
        $this->load->view('templates/karma/header');
        $this->load->view('pakaian_anak_anak',$data);
        $this->load->view('templates/karma/footer');
    }

    public function peralatan_olahraga()
    {
        $data['peralatan_olahraga'] = $this->model_kategori->
            data_peralatan_olahraga()->result();
        $this->load->view('templates/karma/header');
        $this->load->view('peralatan_olahraga',$data);
        $this->load->view('templates/karma/footer');
    }

}
?>