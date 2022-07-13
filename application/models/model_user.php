<?php 

class Model_user extends CI_Model{

    public function tampil_tenant(){
        return $this->db->get('tb_tenant');
    }

    public function tampil_customer(){
        return $this->db->get('tb_customer');
    }

    public function tambah_customer($datauser,$table){
        $this->db->insert($table,$datauser);
    }

    public function tambah_tenant($datauser,$table){
        $this->db->insert($table,$datauser);
    }

    public function edit_user($where,$table){
        return $this->db->get_where($table,$where);
    }

    public function update_user($where,$datauser,$table){
        $this->db->where($where);
        $this->db->update($table,$datauser);
    }

    public function hapus_user($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function detail_user($id){
        $result = $this->db->where('id_usr',$id_usr)->get('tb_user');
        if($result->num_rows() > 0){
            return $result->result();
        }else {
            return false;
        }
    }
    

    public function find($id){
        $result = $this->db->where('id_usr', $id)
                           ->limit(1)
                           ->get('tb_user');
        if($result->num_rows()>0){
            return $result->row();

        }else{
            return array();
        }
    }

    public function detail_usr($id_usr)
    {
        $result = $this->db->where('id_usr',$id_usr)->get('tb_user');
        if($result->num_rows() > 0){
            return $result->result();
        }else {
            return false;
        }
    }
}