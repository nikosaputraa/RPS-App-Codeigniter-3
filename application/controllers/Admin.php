<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('Madmin','Madmin');
        $this->load->model('Mfakultas','Mfakultas');
        $this->load->model('Mprodi','Mprodi');
    }

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('tampilan/admin/dashboard');
		$this->load->view('template/footer');
	}

	function profile()
	{
		$this->load->view('template/header');
		$this->load->view('tampilan/admin/profile');
		$this->load->view('template/footer');
	}

	function daftar_dosen()
	{
		$data['admin'] = $this->Madmin->data_dosen();

		$this->load->view('template/header');
		$this->load->view('tampilan/admin/daftar_dosen', $data);
		$this->load->view('template/footer');
	}

	function daftar_mahasiswa()
	{
		$data['admin'] = $this->Madmin->data_mahasiswa();

		$this->load->view('template/header');
		$this->load->view('tampilan/admin/daftar_mahasiswa', $data);
		$this->load->view('template/footer');
	}


	//Fakultas
	function fakultas()
	{
		$data['fakultas'] = $this->Mfakultas->fakultas();

		$this->load->view('template/header');
		$this->load->view('tampilan/admin/fakultas', $data);
		$this->load->view('template/footer');
	}


	function add_fakultas() {
        $last_id_fakultas = $this->Mfakultas->get_last_id_fakultas();
    	$id_fakultas = $last_id_fakultas + 1;

        $nama_fakultas = $this->input->post('nama_fakultas');
        $nama_dekan = $this->input->post('nama_dekan');

        $result = $this->Mfakultas->add_fakultas($id_fakultas, $nama_fakultas, $nama_dekan);
        if ($result) {
            // Jika registrasi berhasil, tampilkan alert dan redirect ke halaman login
            echo '<script type="text/javascript">
                    alert("Data telah berhasil ditambahkan!");
                    window.location.href = "' . site_url('admin/fakultas') . '";
                  </script>';
            exit;
        } else {
            // Jika registrasi gagal, tampilkan alert dan redirect ke halaman register
            echo '<script type="text/javascript">
                    alert("Data gagal ditambahkan!");
                    window.location.href = "' . site_url('admin/fakultas') . '";
                  </script>';
        }

    }

	function delete_fakultas()
	{
		// Ambil nilai 'kode_matkul' dari URL
		$id_fakultas = $this->uri->segment(3);

		echo "
        <script>
            var confirmation = confirm('Anda yakin ingin menghapus data ini?');
            if (confirmation) {
                document.location.href = '" . site_url('admin/confirm_delete_fakultas/' . $id_fakultas) . "';
            } else {
                history.go(-1);
            }
        </script>";
	}

	function confirm_delete_fakultas($id_fakultas){
		// Panggil model untuk menghapus data
		$this->Mfakultas->delete_fakultas($id_fakultas);

		redirect('admin/fakultas');
	}

	//Prodi
	function prodi()
	{
		$data['prodi'] = $this->Mprodi->prodi();
		$data['fakultas'] = $this->Mfakultas->fakultas();
		$this->load->view('template/header');
		$this->load->view('tampilan/admin/prodi', $data);
		$this->load->view('template/footer');
	}

	function add_prodi() {
        $last_id_prodi = $this->Mprodi->get_last_id_prodi();
    	$id_prodi = $last_id_prodi + 1;

        $fakultas_id= $this->input->post('fakultas_id');
        $nama_prodi = $this->input->post('nama_prodi');
        $fakultas = $this->input->post('nama_fakultas');
        $nama_kaprodi = $this->input->post('nama_kaprodi');

        $result = $this->Mprodi->add_prodi($id_prodi, $fakultas_id, $nama_prodi, $fakultas, $nama_kaprodi);
        if ($result) {
            // Jika registrasi berhasil, tampilkan alert dan redirect ke halaman login
            echo '<script type="text/javascript">
                    alert("Data telah berhasil ditambahkan!");
                    window.location.href = "' . site_url('admin/prodi') . '";
                  </script>';
            exit;
        } else {
            // Jika registrasi gagal, tampilkan alert dan redirect ke halaman register
            echo '<script type="text/javascript">
                    alert("Data gagal ditambahkan!");
                    window.location.href = "' . site_url('admin/prodi') . '";
                  </script>';
        }

    }

	function delete_prodi()
	{
		// Ambil nilai 'kode_matkul' dari URL
		$id_prodi = $this->uri->segment(3);

		echo "
        <script>
            var confirmation = confirm('Anda yakin ingin menghapus data ini?');
            if (confirmation) {
                document.location.href = '" . site_url('admin/confirm_delete_prodi/' . $id_prodi) . "';
            } else {
                history.go(-1);
            }
        </script>";
	}

	function confirm_delete_prodi($id_prodi){
		// Panggil model untuk menghapus data
		$this->Mprodi->delete_prodi($id_prodi);

		redirect('admin/prodi');
	}
}