<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('Madmin','Madmin');
        $this->load->model('Mmatkul','Mmatkul');
        $this->load->model('Mmateri','Mmateri');
        $this->load->model('Mrps','Mrps');
    }

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('tampilan/mahasiswa/dashboard');
		$this->load->view('template/footer');
	}

	function profile()
	{
		$this->load->view('template/header');
		$this->load->view('tampilan/mahasiswa/profile');
		$this->load->view('template/footer');
	}

	function daftar_mahasiswa()
	{
		$data['admin'] = $this->Madmin->data_mahasiswa();

		$this->load->view('template/header');
		$this->load->view('tampilan/admin/daftar_mahasiswa', $data);
		$this->load->view('template/footer');
	}

	function daftar_matkul()
	{
		$data['matkul'] = $this->Mmatkul->data_matkul();

		$this->load->view('template/header');
		$this->load->view('tampilan/mahasiswa/daftar_matkul', $data);
		$this->load->view('template/footer');
	}

	function detail_matkul()
	{
		$id_matkul = $this->uri->segment(3);
		$data['matkul'] = $this->Mmatkul->detail_matkul($id_matkul);

		$this->load->view('template/header');
		$this->load->view('tampilan/mahasiswa/detail_matkul', $data);
		$this->load->view('template/footer');
	}

	function view_materi()
	{
		$kode_matkul = $this->uri->segment(4);

		$data['materi'] = $this->Mmateri->data_materi($kode_matkul);

		$this->load->view('template/header');
		$this->load->view('tampilan/mahasiswa/daftar_materi', $data);
		$this->load->view('template/footer');
	}

	public function daftar_rps()
	{
		$data['matkul'] = $this->Mrps->all('tb_matkul');
        $data['dosen'] = $this->Mrps->data_dosen();

		$data['rps'] = $this->Mrps->get_data_rps();

        $last_id_rps_up = $this->Mrps->get_last_id();
    	$data['rps_id'] = $last_id_rps_up + 1;

		$this->load->view('template/header');
		$this->load->view('tampilan/mahasiswa/daftar_rps', $data);
		$this->load->view('template/footer');
	}

	function detail_file($id)
    {
        $data['detail'] = $this->Mrps->detail_rps($id);
        $data['unit_pembelajaran'] = $this->Mrps->get_data_all_rps($id,'tb_rps_unit_pembelajaran');
        $data['unit_details'] = $this->Mrps->get_data_all_rps($id,'tb_rps_rencana_pelaksanaan');
        $data['unit_tugas'] = $this->Mrps->get_data_all_rps($id,'tb_rps_unit_tugas');
        
        $this->load->view('template/header');
		$this->load->view('tampilan/mahasiswa/detail_rps', $data);
		$this->load->view('template/footer');
    }

	function view_file($id)
	{
        $data['rps'] = $this->Mrps->cetak_rps($id);
        $data['unit_pembelajaran'] = $this->Mrps->get_data_all_rps($id,'tb_rps_unit_pembelajaran');
        $data['unit_details'] = $this->Mrps->get_data_all_rps($id,'tb_rps_rencana_pelaksanaan');
        $data['unit_tugas'] = $this->Mrps->get_data_all_rps($id,'tb_rps_unit_tugas');

        $data['title'] = $data['rps']->nomor;

		$this->load->library('pdf');
        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = $data['title'];
		$this->pdf->load_view('tampilan/dosen/file_rps/cetak', $data);
	}
}