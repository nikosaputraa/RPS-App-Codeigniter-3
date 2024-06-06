<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class File_rps extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('Mdosen','Mdosen');
        $this->load->model('Mmatkul','Mmatkul');
        $this->load->model('Mmateri','Mmateri');
        $this->load->model('Mrps','Mrps');
    }

	public function index()
	{
		$data['matkul'] = $this->Mrps->all('tb_matkul');
        $data['dosen'] = $this->Mrps->data_dosen();

		$data['rps'] = $this->Mrps->get_data_rps();

        $last_id_rps_up = $this->Mrps->get_last_id();
    	$data['rps_id'] = $last_id_rps_up + 1;

		$this->load->view('template/header');
		$this->load->view('tampilan/dosen/file_rps/daftar_rps', $data);
		$this->load->view('template/footer');
	}

	public function add_rps()
    {
        $id                   = $this->input->post('id');
        $dosen_penyusun_id      = $this->input->post('dosen');
        $matkul_id               = $this->input->post('matkul');
        $tgl_berlaku            = $this->input->post('tgl_berlaku');
        $tgl_disusun            = $this->input->post('tgl_disusun');
        $nomor                  = $this->input->post('no_rps');
        $revisi                 = $this->input->post('revisi');
        $detail_penilaian       = $this->input->post('detail_penilaian');
        $gambaran_umum          = $this->input->post('gambaran_umum');
        $capaian                = $this->input->post('capaian');
        $prasyarat              = $this->input->post('prasyarat');

        $data = [
            'id'                => $id,
            'dosen_penyusun_id' => $dosen_penyusun_id,
            'id_matkul'          => $matkul_id,
            'tgl_berlaku'       => $tgl_berlaku,
            'tgl_disusun'       => $tgl_disusun,
            'nomor'             => $nomor,
            'revisi'            => $revisi,
            'detail_penilaian'  => $detail_penilaian,
            'gambaran_umum'     => $gambaran_umum,
            'capaian'           => $capaian,
            'prasyarat'         => $prasyarat,
            'revisi'            => '00',
        ];

        // data unit pembelajaran
        $last_id_rps_up = $this->Mrps->get_last_id();
    	$rps_id = $last_id_rps_up + 1;

        $kemampuan      = $this->input->post('kemampuan');
        $indikator      = $this->input->post('indikator');
        $bahan_kajian   = $this->input->post('bahan_kajian');
        $metode         = $this->input->post('metode');
        $pertemuan      = $this->input->post('pertemuan');
        $bahan_ajar     = $this->input->post('bahan_ajar');
        

        $data2 = [
            'rps_id'        => $rps_id,
            'kemampuan'     => $kemampuan,
            'indikator'     => $indikator,
            'bahan_kajian'  => $bahan_kajian,
            'metode'        => $metode,
            'pertemuan'     => $pertemuan,
            'bahan_ajar'    => $bahan_ajar
        
        ];

        // data unit tugas dan aktivitas
        $tugas                  = $this->input->post('tugas');
        $kemampuan              = $this->input->post('kemampuan');
        $pertemuan              = $this->input->post('pertemuan');
        $bobot                  = $this->input->post('bobot');
        $kriteria_penilaian     = $this->input->post('kriteria_penilaian');
        $indikator_penilaian    = $this->input->post('indikator_penilaian');
        

        $data3 = [
            'rps_id'            => $rps_id,
            'tugas'             => $tugas,
            'kemampuan'         => $kemampuan,
            'pertemuan'         => $pertemuan,
            'bobot'             => $bobot,
            'kriteria_penilaian' => $kriteria_penilaian,
            'indikator_penilaian' => $indikator_penilaian,
        
        ];

        // data rencana pelaksanaan
        $kemampuan      = $this->input->post('kemampuan_rencana');
        $indikator      = $this->input->post('indikator');
        $topik          = $this->input->post('topik');
        $aktivitas      = $this->input->post('aktivitas');
        $waktu          = $this->input->post('waktu');
        $penilaian      = $this->input->post('penilaian');

        $data4 = [
            'rps_id'    => $rps_id,
            'pertemuan' => $pertemuan,
            'kemampuan' => $kemampuan,
            'indikator' => $indikator,
            'topik'     => $topik,
            'aktivitas' => $aktivitas,
            'waktu'     => $waktu,
            'penilaian' => $penilaian,
        ];

        $this->Mrps->insert('tb_rps', $data, 'tb_rps_unit_pembelajaran', $data2, 'tb_rps_unit_tugas', $data3, 'tb_rps_rencana_pelaksanaan', $data4);

        redirect('file_rps');
    }

	function update_rps($id)
    {
        $dosen_penyusun_id      = $this->input->post('dosen_penyusun_id');
        $matkul_id               = $this->input->post('matkul_id');
        $tgl_berlaku            = $this->input->post('tgl_berlaku');
        $tgl_disusun            = $this->input->post('tgl_disusun');
        $nomor                  = $this->input->post('no_rps');
        $revisi                 = $this->input->post('revisi');
        $detail_penilaian       = $this->input->post('detail_penilaian');
        $gambaran_umum          = $this->input->post('gambaran_umum');
        $capaian                = $this->input->post('capaian');
        $prasyarat              = $this->input->post('prasyarat');

        $data = [
            'dosen_penyusun_id' => $dosen_penyusun_id,
            'id_matkul'          => $matkul_id,
            'tgl_berlaku'       => $tgl_berlaku,
            'tgl_disusun'       => $tgl_disusun,
            'nomor'             => $nomor,
            'revisi'            => $revisi,
            'detail_penilaian'  => $detail_penilaian,
            'gambaran_umum'     => $gambaran_umum,
            'capaian'           => $capaian,
            'prasyarat'         => $prasyarat,
            'revisi'            => $revisi,
        ];


        $this->Mrps->update('tb_rps', $data, $id);
        $this->session->set_flashdata('success', 'Data berhasil diupdate');

        redirect('file_rps/edit_file/' . $id);
    }

	function update_rps_unit_pembelajaran($id)
    {
        $rps_id         = $this->input->post('rps_id');
        $kemampuan      = $this->input->post('kemampuan');
        $indikator      = $this->input->post('indikator');
        $bahan_kajian   = $this->input->post('bahan_kajian');
        $metode         = $this->input->post('metode');
        $pertemuan      = $this->input->post('pertemuan');
        $bahan_ajar     = $this->input->post('bahan_ajar');
        

        $data = [
            'rps_id'        => $rps_id,
            'kemampuan'     => $kemampuan,
            'indikator'     => $indikator,
            'bahan_kajian'  => $bahan_kajian,
            'metode'        => $metode,
            'pertemuan'     => $pertemuan,
            'bahan_ajar'    => $bahan_ajar,
        ];

        $this->Mrps->update('tb_rps_unit_pembelajaran', $data, $id);
        $this->session->set_flashdata('success', 'Data berhasil diupdate');

        redirect('file_rps/edit_file/' . $id);
    }

	function update_rps_unit_tugas($id)
    {
        $rps_id                  = $this->input->post('rps_id');
        $tugas                   = $this->input->post('tugas');
        $kemampuan               = $this->input->post('kemampuan');
        $pertemuan               = $this->input->post('pertemuan');
        $bobot                   = $this->input->post('bobot');
        $kriteria_penilaian      = $this->input->post('kriteria_penilaian');
        $indikator_penilaian     = $this->input->post('indikator_penilaian');
        

        $data = [
            'rps_id'                 => $rps_id,
            'tugas'                  => $tugas,
            'kemampuan'              => $kemampuan,
            'pertemuan'              => $pertemuan,
            'bobot'                  => $bobot,
            'kriteria_penilaian'     => $kriteria_penilaian,
            'indikator_penilaian'    => $indikator_penilaian,
        ];

        $this->Mrps->update('tb_rps_unit_tugas', $data, $id);
        $this->session->set_flashdata('success', 'Data berhasil diupdate');

        redirect('file_rps/edit_file/' . $id);
    }

	function update_unit_rencana_pelaksanaan($id)
    {
        $rps_id         = $this->input->post('rps_id');
        $pertemuan      = $this->input->post('pertemuan');
        $kemampuan      = $this->input->post('kemampuan');
        $indikator      = $this->input->post('indikator');
        $topik          = $this->input->post('topik');
        $aktivitas      = $this->input->post('aktivitas');
        $waktu          = $this->input->post('waktu');
        $penilaian      = $this->input->post('penilaian');

        $data = [
            'rps_id'    => $rps_id,
            'pertemuan' => $pertemuan,
            'kemampuan' => $kemampuan,
            'indikator' => $indikator,
            'topik'     => $topik,
            'aktivitas' => $aktivitas,
            'waktu'     => $waktu,
            'penilaian' => $penilaian,
        ];

        $this->Mrps->update('tb_rps_rencana_pelaksanaan', $data, $id);
        $this->session->set_flashdata('success', 'Data berhasil diupdate');

        redirect('file_rps/edit_file/' . $id);
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

    public function detail_file($id)
    {
        $data['detail'] = $this->Mrps->detail_rps($id);
        $data['unit_pembelajaran'] = $this->Mrps->get_data_all_rps($id,'tb_rps_unit_pembelajaran');
        $data['unit_details'] = $this->Mrps->get_data_all_rps($id,'tb_rps_rencana_pelaksanaan');
        $data['unit_tugas'] = $this->Mrps->get_data_all_rps($id,'tb_rps_unit_tugas');
        
        $this->load->view('template/header');
		$this->load->view('tampilan/dosen/file_rps/detail_rps', $data);
		$this->load->view('template/footer');
    }

    public function edit_file($id)
    {

        $data['matkul'] = $this->Mrps->all('tb_matkul');
        $data['dosen'] = $this->Mrps->data_dosen();

        $data['detail'] = $this->Mrps->detail_rps($id);
        $data['unit_pembelajaran'] = $this->Mrps->get_data_all_rps($id,'tb_rps_unit_pembelajaran');
        $data['unit_details'] = $this->Mrps->get_data_all_rps($id,'tb_rps_rencana_pelaksanaan');
        $data['unit_tugas'] = $this->Mrps->get_data_all_rps($id,'tb_rps_unit_tugas');
        
        $this->load->view('template/header');
		$this->load->view('tampilan/dosen/file_rps/edit_rps', $data);
		$this->load->view('template/footer');

    }

    function delete($id)
	{
		$rps_id = $id;

		echo "
        <script>
            var confirmation = confirm('Anda yakin ingin menghapus data RPS ini??');
            if (confirmation) {
                document.location.href = '" . site_url('file_rps/delete_confirm/' . $rps_id) . "';
            } else {
                history.go(-1);
            }
        </script>";
	}

    function delete_confirm($rps_id)
    {
        
        $this->Mrps->delete_by_id($rps_id);

        redirect('file_rps');
    }

}