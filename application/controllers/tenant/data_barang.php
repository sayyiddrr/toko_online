<?php

class Data_barang extends CI_Controller{

    public function __construct(){
        parent::__construct();

        if($this->session->userdata('roleID') != '2'){
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda Belum Login!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="ture">&times;</span>
            </button>
            </div>');
            redirect('auth/login');
        }
    }
    public function index()
    {
        $data['tenant'] = $this->db->get_where('tb_tenant', ['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->model_barang->tampil_produk_tenant($data['tenant']['tenantID'])->result();
        $this->load->view('templates_tenant/header', $data);
        $this->load->view('templates_tenant/sidebar', $data);
        $this->load->view('tenant/data_barang', $data);
        $this->load->view('templates_tenant/footer');
    }

    public function tambah_aksi()
    {
        $data['tenant'] = $this->db->get_where('tb_tenant', ['email' => $this->session->userdata('email')])->row_array();
        $tenantID      = $data['tenant']['tenantID'];
        $nama_produk       = $this->input->post('nama_produk');
        $deskripsi     = $this->input->post('deskripsi');
        $kategoriID       = $this->input->post('kategoriID');
        $harga_produk          = $this->input->post('harga_produk');
        $stok           = $this->input->post('stok');
        $diskon         = $this->input->post('diskon');
        $gambar         = $_FILES['gambar']['name'];
        if ($gambar =''){}else{
            $config ['upload_path'] = './uploads';
            $config ['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('gambar')){
                echo "Input Failed";
            }else{
                $gambar=$this->upload->data('file_name');
            }
        }

        $data = array(
            'tenantID'     => $tenantID,
            'nama_produk'      => $nama_produk,
            'deskripsi'    => $deskripsi,
            'kategoriID'      => $kategoriID,
            'harga_produk'         => $harga_produk,
            'stok'          => $stok,
            'diskon'        => $diskon,
            'gambar'        => $gambar
        );

        $this->model_barang->tambah_barang($data, 'tb_produk');
        redirect('tenant/data_barang/index');
    }

    public function edit($id)
    {
        $data['tenant'] = $this->db->get_where('tb_tenant', ['email' => $this->session->userdata('email')])->row_array();
        $where = array('produkID' =>$id);
        $data['produk'] = $this->model_barang->edit_barang($where, 'tb_produk')->result();
        $this->load->view('templates_tenant/header', $data);
        $this->load->view('templates_tenant/sidebar', $data);
        $this->load->view('tenant/edit_barang', $data);
        $this->load->view('templates_tenant/footer');
    }

    public function update(){
        $id         = $this->input->post('produkID');
        $nama_produk   = $this->input->post('nama_produk');
        $deskripsi = $this->input->post('deskripsi');
        $kategoriID   = $this->input->post('kategoriID');
        $harga_produk      = $this->input->post('harga_produk');
        $stok       = $this->input->post('stok');
        $diskon     = $this->input->post('diskon');

        $data = array(
            'nama_produk'   => $nama_produk,
            'deskripsi' => $deskripsi,
            'kategoriID'   => $kategoriID,
            'harga_produk'      => $harga_produk,
            'stok'       => $stok,
            'diskon'     => $diskon
        );

        $where = array('produkID'=> $id);
        $this->model_barang->update_data($where,$data,'tb_produk');
        redirect('tenant/data_barang/index');
    }

    public function hapus($id){
        $where = array('produkID'=> $id);
        $this->model_barang->hapus_data($where,'tb_produk');
        redirect('tenant/data_barang/index');
    }

    public function detail($id)
    {
        $data['tenant'] = $this->db->get_where('tb_tenant', ['email' => $this->session->userdata('email')])->row_array();
        $where = array('produkID'=> $id);
        $data['produk'] = $this->model_barang->detail_brg($id);
        $this->load->view('templates_tenant/header', $data);
        $this->load->view('templates_tenant/sidebar', $data);
        $this->load->view('tenant/detail_data', $data);
        $this->load->view('templates_tenant/footer');
    }
}
