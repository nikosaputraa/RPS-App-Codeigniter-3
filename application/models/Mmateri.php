<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmateri extends CI_Model {

    function data_materi($kode_matkul){
        $query = $this->db->query("SELECT * FROM tb_materi WHERE kode_matkul='$kode_matkul'");
        return $query->result();
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

}
