<?php 

class Model_barang extends CI_Model{
    public function index(){
        date_default_timezone_set('Asia/Jakarta');
        $nama       = $this->input->post('nama');
        $alamat     = $this->input->post('alamat');
        $invoice    = array{
            'nama'          => $nama,
            'alamat'        => $alamat,
            'tgl_pesan'     => date('Y-m-d H:i:s'),
            'batas_bayar'   => date('Y-m-d H:i:s', mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y'))),
        }
    }
}