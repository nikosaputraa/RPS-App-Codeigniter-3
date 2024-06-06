<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('Mdosen','Mdosen');
        $this->load->model('Mmatkul','Mmatkul');
        $this->load->model('Mmateri','Mmateri');
    }

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('tampilan/dosen/dashboard');
		$this->load->view('template/footer');
	}

	function profile()
	{
		$this->load->view('template/header');
		$this->load->view('tampilan/dosen/profile');
		$this->load->view('template/footer');
	}


	function daftar_mahasiswa()
	{
		$data['mahasiswa'] = $this->Mdosen->data_mahasiswa();

		$this->load->view('template/header');
		$this->load->view('tampilan/dosen/daftar_mahasiswa', $data);
		$this->load->view('template/footer');
		
	}

	
	// ===================================================================================
	// Function untuk Materi Mata Kuliah
	function daftar_matkul()
	{
		$data['matkul'] = $this->Mmatkul->data_matkul();

		$this->load->view('template/header');
		$this->load->view('tampilan/dosen/matkul/daftar_matkul', $data);
		$this->load->view('template/footer');
	}

	function detail_matkul()
	{
		$id_matkul = $this->uri->segment(3);
		$data['matkul'] = $this->Mmatkul->detail_matkul($id_matkul);

		$this->load->view('template/header');
		$this->load->view('tampilan/dosen/matkul/detail_matkul', $data);
		$this->load->view('template/footer');
	}

	function view_add_matkul()
	{
		$this->load->view('template/header');
		$this->load->view('tampilan/dosen/matkul/add_matkul');
		$this->load->view('template/footer');
	}

	function add_matkul() {
        $last_id_matkul = $this->Mmatkul->get_last_id_matkul();
    	$id_matkul = $last_id_matkul + 1;

        $nm_matkul = $this->input->post('nama_matkul');
        $kode_matkul = $this->input->post('kode_matkul');
        $prodi_matkul = $this->input->post('prodi_matkul');
        $dos_pengampu = $this->input->post('dosen_pengampu');
        $bobot_sks = $this->input->post('bobot_sks');
        $tipe_matkul = $this->input->post('tipe_matkul');
        $sem_matkul = $this->input->post('semester_matkul');
        $des_matkul = $this->input->post('deskripsi_matkul');

        $result = $this->Mmatkul->add_matkul($id_matkul, $nm_matkul, $kode_matkul, $prodi_matkul, $dos_pengampu, $bobot_sks, $tipe_matkul, $sem_matkul, $des_matkul);
        if ($result) {
            // Jika registrasi berhasil, tampilkan alert dan redirect ke halaman login
            echo '<script type="text/javascript">
                    alert("Data telah berhasil ditambahkan!");
                    window.location.href = "' . site_url('dosen/daftar_matkul') . '";
                  </script>';
            exit;
        } else {
            // Jika registrasi gagal, tampilkan alert dan redirect ke halaman register
            echo '<script type="text/javascript">
                    alert("Data gagal ditambahkan!");
                    window.location.href = "' . site_url('dosen/view_add_matkul') . '";
                  </script>';
        }

    }

	function edit_matkul()
	{
		// Ambil nilai 'kode_matkul' dari URL
		$id_matkul = $this->uri->segment(3);

		$data['matkul'] = $this->Mmatkul->edit_data_matkul($id_matkul);
	
		$this->load->view('template/header');
		$this->load->view('tampilan/dosen/matkul/edit_matkul', $data);
		$this->load->view('template/footer');
	}

	function update_matkul()
    {
        $id_matkul = $this->uri->segment(3);

        $id_matkul = $this->input->post('id_matkul');
        $nm_matkul = $this->input->post('nm_matkul');
        $kode_matkul = $this->input->post('kode_matkul');
        $prodi_matkul = $this->input->post('prodi_matkul');
        $dos_pengampu = $this->input->post('dos_pengampu');
        $bobot_sks = $this->input->post('bobot_sks');
        $tipe_matkul = $this->input->post('tipe_matkul');
        $sem_matkul = $this->input->post('sem_matkul');
        $des_matkul = $this->input->post('des_matkul');

        $result = $this->Mmatkul->update_matkul($id_matkul, $nm_matkul, $kode_matkul, $prodi_matkul, $dos_pengampu, $bobot_sks, $tipe_matkul, $sem_matkul, $des_matkul);
        if ($result) {
            // Jika registrasi berhasil, tampilkan alert dan redirect ke halaman login
			echo '<script>
				alert("Perubahan data berhasil disimpan");
				document.location.href = "' . site_url('dosen/daftar_matkul') . '";
			</script>';
            exit;
        } else {
            // Jika registrasi gagal, tampilkan alert dan redirect ke halaman register
            echo '<script>
				alert("Perubahan data gagal disimpan");
				document.location.href = "' . site_url('dosen/edit_matkul') . '";
			</script>';
        }

    }

	function delete_matkul()
	{
		// Ambil nilai 'kode_matkul' dari URL
		$id_matkul = $this->uri->segment(3);
		$kode_matkul = $this->uri->segment(4);

		echo "
        <script>
            var confirmation = confirm('Anda yakin ingin menghapus mata kuliah ini beserta data materinya?');
            if (confirmation) {
                document.location.href = '" . site_url('dosen/confirm_delete_matkul/' . $id_matkul . '/' . $kode_matkul) . "';
            } else {
                history.go(-1);
            }
        </script>";
	}

	function confirm_delete_matkul($id_matkul, $kode_matkul){
		// Panggil model untuk menghapus data
		$this->Mmatkul->delete_matkul($id_matkul, $kode_matkul);

		redirect('dosen/daftar_matkul');
	}


    // ===================================================================================
	// Function untuk Materi Mata Kuliah
	
	function upload_materi()
	{
		$kode_matkul = $this->uri->segment(4);

		$data['materi'] = $this->Mmateri->data_materi($kode_matkul);

		$this->load->view('template/header');
		$this->load->view('tampilan/dosen/materi/daftar_materi', $data);
		$this->load->view('template/footer');
	}

	function view_add_materi()
	{
		$this->load->view('template/header');
		$this->load->view('tampilan/dosen/materi/add_materi');
		$this->load->view('template/footer');
	}

	function add_materi() {
        $last_id_materi = $this->Mmateri->get_last_id_materi();
    	$id_materi = $last_id_materi + 1;

        $id_matkul = $this->input->post('id_matkul');
        $kode_matkul = $this->input->post('kode_matkul');
        $pertemuan = $this->input->post('pertemuan');
        $judul_materi = $this->input->post('judul_materi');
        $cp_pembelajaran = $this->input->post('cp_pembelajaran');
        $des_materi = $this->input->post('des_materi');
        $tgl_dibuat = $this->input->post('tgl_dibuat');

        $result = $this->Mmateri->add_materi($id_matkul, $id_materi, $kode_matkul, $pertemuan, $judul_materi, $cp_pembelajaran, $des_materi, $tgl_dibuat);
        
		if ($result) {
            // Jika registrasi berhasil, tampilkan alert dan redirect ke halaman login
            echo '<script type="text/javascript">
                    alert("Data telah berhasil ditambahkan!");
                    window.location.href = "' . site_url('dosen/upload_materi/' . $id_matkul . '/' . $kode_matkul) . '";
                  </script>';
            exit;
        } else {
            // Jika registrasi gagal, tampilkan alert dan redirect ke halaman register
            echo '<script type="text/javascript">
                    alert("Data gagal ditambahkan!");
                    window.location.href = "' . site_url('dosen/view_add_materi/' . $id_matkul . '/' . $kode_matkul) . '";
                  </script>';
        }

    }

	function edit_materi()
	{
		// Ambil nilai 'kode_matkul' dari URL
		$id_materi = $this->uri->segment(4);
		$kode_matkul = $this->uri->segment(5);

		$data['materi'] = $this->Mmateri->edit_data_materi($id_materi, $kode_matkul);
	
		$this->load->view('template/header');
		$this->load->view('tampilan/dosen/materi/edit_materi', $data);
		$this->load->view('template/footer');
	}

	function update_materi()
    {
        $id_matkul = $this->input->post('id_matkul');
        $id_materi = $this->input->post('id_materi');
        $kode_matkul = $this->input->post('kode_matkul');

        $pertemuan = $this->input->post('pertemuan');
        $judul_materi = $this->input->post('judul_materi');
        $cp_pembelajaran = $this->input->post('cp_pembelajaran');
        $des_materi = $this->input->post('des_materi');
        $tgl_dibuat = $this->input->post('tgl_dibuat');

        $result = $this->Mmateri->update_materi($id_materi, $kode_matkul, $pertemuan, $judul_materi, $cp_pembelajaran, $des_materi, $tgl_dibuat);
        if ($result) {
            // Jika registrasi berhasil, tampilkan alert dan redirect ke halaman login
			echo '<script>
				alert("Perubahan data berhasil disimpan");
				document.location.href = "' . site_url('dosen/upload_materi/' . $id_matkul . '/' . $kode_matkul) . '";
			</script>';
            exit;
        } else {
            // Jika registrasi gagal, tampilkan alert dan redirect ke halaman register
            echo '<script>
				alert("Perubahan data gagal disimpan");
				document.location.href = "' . site_url('dosen/edit_materi/' . $id_matkul . '/' . $id_matkul . '/' . $kode_matkul) . '";
			</script>';
        }
    }

	function delete_materi()
	{
		// Ambil nilai 'kode_matkul' dari URL
		$id_matkul = $this->uri->segment(3);
		$id_materi = $this->uri->segment(4);
		$kode_matkul = $this->uri->segment(5);

		echo "
        <script>
            var confirmation = confirm('Anda yakin ingin menghapus materi ini?');
            if (confirmation) {
                document.location.href = '" . site_url('dosen/confirm_delete_materi/' . $id_matkul . '/' . $id_materi . '/' . $kode_matkul) . "';
            } else {
                history.go(-1);
            }
        </script>";
	}

	function confirm_delete_materi($id_matkul, $id_materi, $kode_matkul){
		// Panggil model untuk menghapus data
		$this->Mmateri->delete_materi($id_materi, $kode_matkul);

		redirect('dosen/upload_materi/' . $id_matkul . '/' . $kode_matkul);
	}

}