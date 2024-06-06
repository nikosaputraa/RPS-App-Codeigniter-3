<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Mregistrasi');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

	public function index()
	{
        $this->load->view('autentikasi/view_registrasi');
	}

    function process_registration() {
        $url=base_url('/');

        $nama = $this->input->post('user_name');
        $email = $this->input->post('user_email');
        $nik = $this->input->post('nik');
        $status = $this->input->post('user_status');
        $password = $this->input->post('user_password');

        $result = $this->Mregistrasi->registrasi($nama, $email, $nik, $status, $password);

        if ($result) {
            // Jika registrasi berhasil, tampilkan alert dan redirect ke halaman login
            echo '<script type="text/javascript">
                    alert("Anda telah berhasil mendaftar!");
                    window.location.href = "' . base_url('/') . '";
                  </script>';
            exit;
        } else {
            // Jika registrasi gagal, tampilkan alert dan redirect ke halaman register
            echo '<script type="text/javascript">
                    alert("Anda gagal mendaftar!");
                    window.location.href = "' . base_url('register') . '";
                  </script>';
        }
    }
}