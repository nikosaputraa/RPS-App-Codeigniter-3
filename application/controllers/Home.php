<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged') !=TRUE){
			$url=base_url('login');
			redirect($url);
		};
	}

	public function index()
	{
		$this->load->view('template/header');
		if($this->session->userdata('access')=='Administrator'){
			$this->load->view('tampilan/admin/dashboard');
		};
		if($this->session->userdata('access')=='Dosen'){
			$this->load->view('tampilan/dosen/dashboard');
		};
		if($this->session->userdata('access')=='Mahasiswa'){
			$this->load->view('tampilan/mahasiswa/dashboard');
		};
		$this->load->view('template/footer');
	}
}
