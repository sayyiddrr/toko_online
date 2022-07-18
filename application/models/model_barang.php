<?php 

class Model_barang extends CI_Model{

    public function tampil_data(){
        return $this->db->get('tb_produk');
    }

    public function tampil_produk_tenant($id){
        $query = "SELECT tb_produk.* FROM tb_produk, tb_tenant WHERE tb_produk.tenantID = tb_tenant.tenantID AND tb_produk.tenantID = $id";
        return $this->db->query($query);      
    }

    public function tambah_barang($data,$table){
        $this->db->insert($table,$data);
    }

    public function edit_barang($where,$table){
        return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function detail_data($id){
        $result = $this->db->where('produkID',$produkID)->get('tb_produk');
        if($result->num_rows() > 0){
            return $result->result();
        }else {
            return false;
        }
    }
    

    public function find($id){
        $result = $this->db->where('produkID', $id)
                           ->limit(1)
                           ->get('tb_produk');
        if($result->num_rows()>0){
            return $result->row();

        }else{
            return array();
        }
    }

    public function detail_brg($produkID)
    {
        $result = $this->db->where('produkID',$produkID)->get('tb_produk');
        if($result->num_rows() > 0){
            return $result->result();
        }else {
            return false;
        }
    }

    public function get_keyword($keyword){
        $this->db->select('*');
        $this->db->from('tb_produk');
        $this->db->like('nama_produk', $keyword);
        $this->db->or_like('deskripsi', $keyword);
        $this->db->or_like('harga_produk', $keyword);
        $this->db->or_like('stok', $keyword);
        return $this->db->get()->result();
    }

    public function tampil_kategori(){
        return $this->db->get('tb_kategori');
    }

    public function tambah_kategori($data,$table){
        $this->db->insert($table,$data);
    }

}