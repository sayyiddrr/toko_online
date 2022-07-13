<?php

class Model_kategori extends CI_MOdel{
    public function data_elektronik(){
        return $this->db->get_where("tb_produk",array('kategoriID' => '1'));
    }

    public function data_pakaian_pria(){
        return $this->db->get_where("tb_produk",array('
            kategoriID' => '2'));
    }

    public function data_pakaian_wanita(){
        return $this->db->get_where("tb_produk",array('
            kategoriID' => '3'));
    }

    public function data_pakaian_anak_anak(){
        return $this->db->get_where("tb_produk",array('
            kategoriID' => '4'));
    }

    public function data_peralatan_olahraga(){
        return $this->db->get_where("tb_produk",array('
            kategoriID' => '5'));
    }
}