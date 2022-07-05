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

    public function detail_keranjang(){
        $this->load->view('templates/karma/header');
        $this->load->view('keranjang');
        $this->load->view('templates/karma/footer');
    }
}
?>