<?php

class Model_auth extends CI_Model{

    public function cek_login()
    {
        $username = set_value('username');
        $password = set_value('password');

        $result   = $this->db->where('username',$username)
                            ->where('password',$password)
                            ->limit(1)
                            ->get('tb_customer');
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return array();
        }
    }

    public function cek_login_tenant()
    {
        $email    = set_value('email');
        $password        = set_value('password');

        $result   = $this->db->where('email',$email)
                            ->where('password',$password)
                            ->limit(1)
                            ->get('tb_tenant');
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return array();
        }
    }
    public function cek_login_admin()
    {
        $adminID    = set_value('adminID');
        $password        = set_value('password');

        $result   = $this->db->where('adminID',$adminID)
                            ->where('password',$password)
                            ->limit(1)
                            ->get('tb_admin');
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return array();
        }
    }
}