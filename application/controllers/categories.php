<?php

class Categories extends CI_Controller{
    public function index()
    {
        $data['customer'] = $this->db->get_where('tb_customer', ['username' => $this->session->userdata('username')])->row_array();
        $data['produk']=$this->db->query("SELECT 	*
                                            FROM    tb_produk
                                            INNER JOIN tb_tenant ON tb_produk.tenantID = tb_tenant.tenantID")->result();
        $data['brand'] = $this->db->query("SELECT tb_tenant.*, COUNT(tb_produk.produkID) AS jumlah 
                                            FROM tb_tenant, tb_produk
                                            WHERE tb_tenant.tenantID = tb_produk.tenantID
                                            GROUP BY tb_tenant.tenantID")->result();
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
            'diskon'  => $barang->diskon,
            
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
        $data['elektronik'] = $this->db->
            query("SELECT 	*
                    FROM    tb_produk
                    INNER JOIN tb_tenant ON tb_produk.tenantID = tb_tenant.tenantID
                    INNER JOIN tb_kategori ON tb_produk.kategoriID = tb_kategori.kategoriID
                    AND tb_kategori.kategoriID = 1")->result();
        $data['customer'] = $this->db->get_where('tb_customer', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/karma/header', $data);
        $this->load->view('elektronik',$data);
        $this->load->view('templates/karma/footer');
    }

    public function pakaian_pria()
    {
        $data['pakaian_pria'] = $this->db->
            query("SELECT 	*
                    FROM    tb_produk
                    INNER JOIN tb_tenant ON tb_produk.tenantID = tb_tenant.tenantID
                    INNER JOIN tb_kategori ON tb_produk.kategoriID = tb_kategori.kategoriID
                    AND tb_kategori.kategoriID = 2")->result();
        $data['customer'] = $this->db->get_where('tb_customer', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/karma/header', $data);
        $this->load->view('pakaian_pria',$data);
        $this->load->view('templates/karma/footer');
    }

    public function pakaian_wanita()
    {
        $data['pakaian_wanita'] = $this->db->
            query("SELECT 	*
                    FROM    tb_produk
                    INNER JOIN tb_tenant ON tb_produk.tenantID = tb_tenant.tenantID
                    INNER JOIN tb_kategori ON tb_produk.kategoriID = tb_kategori.kategoriID
                    AND tb_kategori.kategoriID = 3")->result();
        $data['customer'] = $this->db->get_where('tb_customer', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/karma/header', $data);
        $this->load->view('pakaian_wanita',$data);
        $this->load->view('templates/karma/footer');
    }

    public function pakaian_anak_anak()
    {
        $data['pakaian_anak_anak'] = $this->db->
            query("SELECT 	*
                    FROM    tb_produk
                    INNER JOIN tb_tenant ON tb_produk.tenantID = tb_tenant.tenantID
                    INNER JOIN tb_kategori ON tb_produk.kategoriID = tb_kategori.kategoriID
                    AND tb_kategori.kategoriID = 4")->result();
        $data['customer'] = $this->db->get_where('tb_customer', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/karma/header', $data);
        $this->load->view('pakaian_anak_anak',$data);
        $this->load->view('templates/karma/footer');
    }

    public function peralatan_olahraga()
    {
        $data['peralatan_olahraga'] = $this->db->
            query("SELECT 	*
                    FROM    tb_produk
                    INNER JOIN tb_tenant ON tb_produk.tenantID = tb_tenant.tenantID
                    INNER JOIN tb_kategori ON tb_produk.kategoriID = tb_kategori.kategoriID
                    AND tb_kategori.kategoriID = 5")->result();
        $data['customer'] = $this->db->get_where('tb_customer', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/karma/header', $data);
        $this->load->view('peralatan_olahraga',$data);
        $this->load->view('templates/karma/footer');
    }

    public function search(){
        $keyword = $this->input->post('keyword');
        $data['produk']=$this->model_barang->get_keyword($keyword);
        $this->load->view('templates/karma/header', $data);
        $this->load->view('search',$data);
        $this->load->view('templates/karma/footer');
    }

    public function adidas()
    {
        $data['adidas'] = $this->db->
            query("SELECT 	*
                    FROM    tb_produk
                    INNER JOIN tb_tenant ON tb_produk.tenantID = tb_tenant.tenantID
                    INNER JOIN tb_kategori ON tb_produk.kategoriID = tb_kategori.kategoriID
                    AND tb_tenant.tenantID = 11")->result();
        $data['customer'] = $this->db->get_where('tb_customer', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/karma/header', $data);
        $this->load->view('adidas',$data);
        $this->load->view('templates/karma/footer');
    }

    public function nike()
    {
        $data['nike'] = $this->db->
            query("SELECT 	*
                    FROM    tb_produk
                    INNER JOIN tb_tenant ON tb_produk.tenantID = tb_tenant.tenantID
                    INNER JOIN tb_kategori ON tb_produk.kategoriID = tb_kategori.kategoriID
                    AND tb_tenant.tenantID = 12")->result();
        $data['customer'] = $this->db->get_where('tb_customer', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/karma/header', $data);
        $this->load->view('nike',$data);
        $this->load->view('templates/karma/footer');
    }

    public function asus()
    {
        $data['asus'] = $this->db->
            query("SELECT 	*
                    FROM    tb_produk
                    INNER JOIN tb_tenant ON tb_produk.tenantID = tb_tenant.tenantID
                    INNER JOIN tb_kategori ON tb_produk.kategoriID = tb_kategori.kategoriID
                    AND tb_tenant.tenantID = 14")->result();
        $data['customer'] = $this->db->get_where('tb_customer', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/karma/header', $data);
        $this->load->view('asus',$data);
        $this->load->view('templates/karma/footer');
    }

    public function hp()
    {
        $data['hp'] = $this->db->
            query("SELECT 	*
                    FROM    tb_produk
                    INNER JOIN tb_tenant ON tb_produk.tenantID = tb_tenant.tenantID
                    INNER JOIN tb_kategori ON tb_produk.kategoriID = tb_kategori.kategoriID
                    AND tb_tenant.tenantID = 15")->result();
        $data['customer'] = $this->db->get_where('tb_customer', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/karma/header', $data);
        $this->load->view('hp',$data);
        $this->load->view('templates/karma/footer');
    }

    public function rexona()
    {
        $data['rexona'] = $this->db->
            query("SELECT 	*
                    FROM    tb_produk
                    INNER JOIN tb_tenant ON tb_produk.tenantID = tb_tenant.tenantID
                    INNER JOIN tb_kategori ON tb_produk.kategoriID = tb_kategori.kategoriID
                    AND tb_tenant.tenantID = 16")->result();
        $data['customer'] = $this->db->get_where('tb_customer', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/karma/header', $data);
        $this->load->view('rexona',$data);
        $this->load->view('templates/karma/footer');
    }

    public function zara()
    {
        $data['zara'] = $this->db->
            query("SELECT 	*
                    FROM    tb_produk
                    INNER JOIN tb_tenant ON tb_produk.tenantID = tb_tenant.tenantID
                    INNER JOIN tb_kategori ON tb_produk.kategoriID = tb_kategori.kategoriID
                    AND tb_tenant.tenantID = 17")->result();
        $data['customer'] = $this->db->get_where('tb_customer', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/karma/header', $data);
        $this->load->view('zara',$data);
        $this->load->view('templates/karma/footer');
    }

    public function hm()
    {
        $data['hm'] = $this->db->
            query("SELECT 	*
                    FROM    tb_produk
                    INNER JOIN tb_tenant ON tb_produk.tenantID = tb_tenant.tenantID
                    INNER JOIN tb_kategori ON tb_produk.kategoriID = tb_kategori.kategoriID
                    AND tb_tenant.tenantID = 18")->result();
        $data['customer'] = $this->db->get_where('tb_customer', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/karma/header', $data);
        $this->load->view('hm',$data);
        $this->load->view('templates/karma/footer');
    }

    public function rebook()
    {
        $data['rebook'] = $this->db->
            query("SELECT 	*
                    FROM    tb_produk
                    INNER JOIN tb_tenant ON tb_produk.tenantID = tb_tenant.tenantID
                    INNER JOIN tb_kategori ON tb_produk.kategoriID = tb_kategori.kategoriID
                    AND tb_tenant.tenantID = 19")->result();
        $data['customer'] = $this->db->get_where('tb_customer', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/karma/header', $data);
        $this->load->view('rebook',$data);
        $this->load->view('templates/karma/footer');
    }

    public function samsung()
    {
        $data['samsung'] = $this->db->
            query("SELECT 	*
                    FROM    tb_produk
                    INNER JOIN tb_tenant ON tb_produk.tenantID = tb_tenant.tenantID
                    INNER JOIN tb_kategori ON tb_produk.kategoriID = tb_kategori.kategoriID
                    AND tb_tenant.tenantID = 20")->result();
        $data['customer'] = $this->db->get_where('tb_customer', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/karma/header', $data);
        $this->load->view('samsung',$data);
        $this->load->view('templates/karma/footer');
    }

    public function apple()
    {
        $data['apple'] = $this->db->
            query("SELECT 	*
                    FROM    tb_produk
                    INNER JOIN tb_tenant ON tb_produk.tenantID = tb_tenant.tenantID
                    INNER JOIN tb_kategori ON tb_produk.kategoriID = tb_kategori.kategoriID
                    AND tb_tenant.tenantID = 21")->result();
        $data['customer'] = $this->db->get_where('tb_customer', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/karma/header', $data);
        $this->load->view('apple',$data);
        $this->load->view('templates/karma/footer');
    }
}
