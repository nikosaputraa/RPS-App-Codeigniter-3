<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Mlogin','Mlogin');
    }

	public function index()
	{
        if($this->session->userdata('logged') !=TRUE){
            $this->load->view('autentikasi/view_login');
        }else{
            $url=base_url('home');
            redirect($url);
        };
	}

    function autentikasi() {
        $email = $this->input->post('email');
        $password = $this->input->post('pass');
        
        $validasi_email = $this->Mlogin->query_validasi_email($email);
        
        if ($validasi_email->num_rows() > 0) {
            $validate_ps = $this->Mlogin->query_validasi_password($email, $password);
            
            if ($validate_ps->num_rows() > 0) {
                $x = $validate_ps->row_array();
    
                if ($x['user_status'] == '1') {
                    $this->session->set_userdata('logged', TRUE);
                    $this->session->set_userdata('user', $email);
                    $id = $x['user_id'];
    
                    $x['user_akses'] == '1'; // Administrator
                    $name = $x['user_name'];
                    $user_email = $x['user_email'];
                    $this->session->set_userdata('access', 'Administrator');
                    $this->session->set_userdata('id', $id);
                    $this->session->set_userdata('name', $name);
                    $this->session->set_userdata('email', $user_email);
                    redirect('home');

                }else if ($x['user_status'] == '2'){
                    $this->session->set_userdata('logged', TRUE);
                    $this->session->set_userdata('user', $email);
                    $id = $x['user_id'];
    
                    $x['user_akses'] == '2'; // Dosen
                    $name = $x['user_name'];
                    $user_email = $x['user_email'];
                    $this->session->set_userdata('access', 'Dosen');
                    $this->session->set_userdata('id', $id);
                    $this->session->set_userdata('name', $name);
                    $this->session->set_userdata('email', $user_email);
                    redirect('home');  

                }else if ($x['user_status'] == '3'){
                    $this->session->set_userdata('logged', TRUE);
                    $this->session->set_userdata('user', $email);
                    $id = $x['user_id'];
    
                    $x['user_akses'] == '3'; // Mahasiswa
                    $name = $x['user_name'];
                    $user_email = $x['user_email'];
                    $this->session->set_userdata('access', 'Mahasiswa');
                    $this->session->set_userdata('id', $id);
                    $this->session->set_userdata('name', $name);
                    $this->session->set_userdata('email', $user_email);
                    redirect('home');  
                }else {
                    $url = base_url('/');
                    $this->session->set_flashdata('msg',
                    '<div class="alert alert-danger alert-dismissible fade show position-fixed top-0 end-0 m-3" role="alert">
                    <span onclick="this.parentElement.style.display=`none`" class="btn-close" aria-label="Close"></span>
                    <h6 class="alert-heading">Uupps!</h6>
                    <small>Akun kamu telah di blokir. Silahkan hubungi operator.</small>
                    </div>');
                    redirect($url);
                }
            } else {
                $url = base_url('/');
                $this->session->set_flashdata('msg', 
                '<div class="alert alert-danger alert-dismissible fade show position-fixed top-0 end-0 m-3" role="alert">
                    <span onclick="this.parentElement.style.display=`none`" class="btn-close" aria-label="Close"></span>
                    <h6 class="alert-heading">Uupps!</h6>
                    <small>Password yang kamu masukan salah.</small>
                </div>');
                redirect($url);
            }
        } else {
            $url = base_url('/');
            $this->session->set_flashdata('msg',
            '<div class="alert alert-danger alert-dismissible fade show position-fixed top-0 end-0 m-3" role="alert">
                    <span onclick="this.parentElement.style.display=`none`" class="btn-close" aria-label="Close"></span>
                    <h6 class="alert-heading">Uupps!</h6>
                    <small>Email yang kamu masukan salah.</small>
                </div>');
            redirect($url);
        }
    }
    

    function logout(){ 
        $this->session->sess_destroy();
        $url=base_url('/');
        redirect($url);
    }
}