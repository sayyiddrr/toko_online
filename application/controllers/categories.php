<?php

class Categories extends CI_Controller{
    public function index()
    {
        $data['barang']=$this->model_barang->tampil_data()->result();
        $this->load->view('categories', $data);
    }
}
?>