<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mrps extends CI_Model {

    public function all($table){
        return $this->db->get($table)->result();
    }

    function data_dosen(){
        $query = $this->db->query("SELECT * FROM tb_user WHERE user_akses = 2");
        return $query->result();
    }

    function insert($table1, $data1, $table2, $data2, $table3, $data3, $table4, $data4)
    {
        $this->db->insert($table1, $data1);
        $this->db->insert($table2, $data2);
        $this->db->insert($table3, $data3);
        $this->db->insert($table4, $data4);
    }

    function get_last_id() {
        $query = $this->db->query("SELECT MAX(id) as last_id FROM tb_rps");
        $row = $query->row();
        return $row->last_id;
    }

    public function detail($table, $id)
    {
        return $this->db->where('id', $id)->get($table)->row();
    }

    function detail_rps($id)
    {
        $this->db->select('r.*,
                            m.nm_matkul as nama_matakuliah,
                            m.kode_matkul,m.sem_matkul,
                            m.bobot_sks, m.prodi_matkul,
                            p.nama as nama_prodi,
                            p.kaprodi as nama_kaprodi,
                            f.nama as nama_fakultas,
                            f.dekan as nama_dekan,
                            d.nik as nik,
                            d.user_name as dosen_penyusun');
        $this->db->from('tb_rps as r');
        $this->db->where('r.id', $id);
        $this->db->join('tb_matkul as m', 'm.id_matkul=r.id_matkul');
        $this->db->join('tb_prodi as p', 'p.id=m.prodi_id');
        $this->db->join('tb_fakultas as f', 'f.id=p.fakultas_id');
        $this->db->join('tb_user as d', 'd.user_id=r.dosen_penyusun_id');
        return $this->db->get()->row();
    }

    function update($table, $data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update($table, $data);

    }

    function get_data_rps()
    {
        $this->db->select('r.*,m.nm_matkul as nama_matakuliah,m.kode_matkul,m.sem_matkul, m.prodi_matkul,p.nama as nama_prodi');
        $this->db->from('tb_rps as r');
        $this->db->join('tb_matkul as m', 'm.id_matkul=r.id_matkul');
        $this->db->join('tb_prodi as p', 'p.id=m.prodi_id');
        return $this->db->get()->result();
    }
    
    function get_last_id_materi() {
        $query = $this->db->query("SELECT MAX(id_materi) as last_id FROM tb_materi");
        $row = $query->row();
        return $row->last_id;
    }

    function add_materi($id_matkul, $id_materi, $kode_matkul, $pertemuan, $judul_materi, $cp_pembelajaran, $des_materi, $tgl_dibuat){
        $result = $this->db->query("INSERT INTO tb_materi VALUES 
        ('$id_materi', '$kode_matkul', '$pertemuan', '$judul_materi', '$cp_pembelajaran', '$des_materi', '$tgl_dibuat')");
        
        return $result;
    }

    function edit_data_materi($id_materi, $kode_matkul){
        $query = $this->db->query("SELECT * FROM tb_materi WHERE id_materi='$id_materi' AND kode_matkul='$kode_matkul'");
        return $query->result();
    }

    function update_materi($id_materi, $kode_matkul, $pertemuan, $judul_materi, $cp_pembelajaran, $des_materi, $tgl_dibuat)
    {
        $result = $this->db->query("UPDATE tb_materi SET
        id_materi = '$id_materi', kode_matkul= '$kode_matkul',
        pertemuan = '$pertemuan', judul_materi = '$judul_materi', cp_pembelajaran = '$cp_pembelajaran', des_materi = '$des_materi', tgl_dibuat = '$tgl_dibuat'
        WHERE id_materi = '$id_materi' AND kode_matkul='$kode_matkul'");
        
        return $result;
    }

    function delete_materi($id_materi, $kode_matkul){
        $query = $this->db->query("DELETE FROM tb_materi WHERE id_materi = '$id_materi' AND kode_matkul = '$kode_matkul'");
        return $query;
    }

    function cetak_rps($id)
    {
        $this->db->select('r.*,
                            m.nm_matkul as nama_matakuliah,
                            m.kode_matkul,m.sem_matkul,
                            m.bobot_sks,m.prodi_matkul as nama_prodi,
                            p.nama as nm_prodi,
                            p.kaprodi as nama_kaprodi,
                            f.nama as nama_fakultas,
                            f.dekan as nama_dekan,
                            d.nik as nik,
                            d.user_name as dosen_penyusun');
        $this->db->from('tb_rps as r');
        $this->db->where('r.id', $id);
        $this->db->join('tb_matkul as m', 'm.id_matkul=r.id_matkul');
        $this->db->join('tb_prodi as p', 'p.id=m.prodi_id');
        $this->db->join('tb_fakultas as f', 'f.id=p.fakultas_id');
        $this->db->join('tb_user as d', 'd.user_id=r.dosen_penyusun_id');
        return $this->db->get()->row();
    }

    function get_data_all_rps($id, $table)
    {
        return $this->db->where('rps_id', $id)->get($table)->result();
    }

    function delete_by_id ($rps_id) {
        $this->db->delete('tb_rps', array('id' =>$rps_id)); 
        $this->db->delete('tb_rps_unit_pembelajaran', array('rps_id' =>$rps_id)); 
        $this->db->delete('tb_rps_rencana_pelaksanaan', array('rps_id' =>$rps_id));
        $this->db->delete('tb_rps_unit_tugas', array('rps_id' =>$rps_id));
    }
}