<?php

class Data_barang extends CI_Controller{

    public function __construct(){
        parent::__construct();

        if($this->session->userdata('roleID') != '1'){
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
        $data['admin'] = $this->db->get_where('tb_admin', ['adminID' => $this->session->userdata('adminID')])->row_array();
        $data['produk'] = $this->model_barang->tampil_data()->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar', $data);
        $this->load->view('admin/data_barang', $data);
        $this->load->view('templates_admin/footer');
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
