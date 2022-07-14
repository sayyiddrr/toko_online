<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
    {
		$data['customer'] = $this->db->get_where('tb_customer', ['username' => $this->session->userdata('username')])->row_array();
        $data['produk'] = $this->db->query("SELECT *
                                            FROM tb_produk
											ORDER BY produkID DESC
                                            LIMIT 4")->result();
		$data['favorite'] = $this->db->query("SELECT tb_produk.*, COUNT(tb_orderdetail.produkID) as jumlah
                                            FROM tb_produk, tb_orderdetail
											WHERE tb_produk.produkID = tb_orderdetail.produkID
											GROUP BY produkID
											ORDER BY jumlah DESC
                                            LIMIT 1")->result();
        $this->load->view('templates/karma/header');
		$this->load->view('dashboard', $data);
        $this->load->view('templates/karma/footer');
    }
}
