<?php 

class Auth extends CI_Controller {

    public function login()
    {
        $this->form_validation->set_rules('username','username','required',['required' => 'Username wajib diisi']);
        $this->form_validation->set_rules('password','password','required',['required' => 'Password wajib diisi']);
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('form_login');

        }else{
            $auth = $this->model_auth->cek_login();

            if($auth  == FALSE)
            {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Username atau Password Anda Salah!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="ture">&times;</span>
                </button>
                </div>');
                    redirect('auth/login');
            }else{
                $this->session->set_userdata('username',$auth->username);
                $this->session->set_userdata('roleID',$auth->roleID);

                switch($auth->roleID){
                    
                    case 3 : redirect('welcome');
                            break; 
                    default: break;
                }
            }
        }
    }

    public function login_tenant()
    {
        $this->form_validation->set_rules('email','email','required',['required' => 'Username wajib diisi']);
        $this->form_validation->set_rules('password','password','required',['required' => 'Password wajib diisi']);
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('login_tenant');

        }else{
            $auth = $this->model_auth->cek_login_tenant();

            if($auth  == FALSE)
            {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Email atau Password Anda Salah!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="ture">&times;</span>
                </button>
                </div>');
                    redirect('auth/login_tenant');
            }else{
                $this->session->set_userdata('email',$auth->email);
                $this->session->set_userdata('roleID',$auth->roleID);

                switch($auth->roleID){
                    
                    case 2 : redirect('tenant/dashboard_tenant');
                            break;
                    
                    default: break;
                }
            }
        }
    }

    public function login_admin()
    {
        $this->form_validation->set_rules('adminID','adminID','required',['required' => 'ID wajib diisi']);
        $this->form_validation->set_rules('password','password','required',['required' => 'Password wajib diisi']);
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('login_admin');

        }else{
            $auth = $this->model_auth->cek_login_admin();

            if($auth  == FALSE)
            {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                ID atau Password Anda Salah!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="ture">&times;</span>
                </button>
                </div>');
                    redirect('auth/login');
            }else{
                $this->session->set_userdata('adminID',$auth->adminID);
                $this->session->set_userdata('roleID',$auth->roleID);

                switch($auth->roleID){
                    case 1 : redirect('admin/dashboard_admin');
                            break;
                    
                    default: break;
                }
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}