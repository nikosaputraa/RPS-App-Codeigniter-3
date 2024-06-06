<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmatkul extends CI_Model {

    function get_last_id_matkul() {
        $query = $this->db->query("SELECT MAX(id_matkul) as last_id FROM tb_matkul");
        $row = $query->row();
        return $row->last_id;
    }

	function add_matkul($id_matkul, $nm_matkul, $kode_matkul, $prodi_matkul, $dos_pengampu, $bobot_sks, $tipe_matkul, $sem_matkul, $des_matkul){
        $result = $this->db->query("INSERT INTO tb_matkul VALUES 
        ('$id_matkul', '$nm_matkul', '$kode_matkul', '$prodi_matkul', '$dos_pengampu', '$bobot_sks', '$tipe_matkul', '$sem_matkul', '$des_matkul')");
        
        return $result;
    }

	function data_matkul(){
        $query = $this->db->query("SELECT * FROM tb_matkul");
        return $query->result();
    }

    function detail_matkul($id_matkul){
        $query = $this->db->query("SELECT * FROM tb_matkul WHERE id_matkul='$id_matkul'");
        return $query->result();
    }

    function edit_data_matkul($id_matkul){
        $query = $this->db->query("SELECT * FROM tb_matkul WHERE id_matkul='$id_matkul'");
        return $query->result();
    }

    function update_matkul($id_matkul, $nm_matkul, $kode_matkul, $prodi_matkul, $dos_pengampu, $bobot_sks, $tipe_matkul, $sem_matkul, $des_matkul)
    {
        $result = $this->db->query("UPDATE tb_matkul SET
        nm_matkul = '$nm_matkul', kode_matkul = '$kode_matkul', prodi_matkul = '$prodi_matkul',
        dos_pengampu = '$dos_pengampu', bobot_sks = '$bobot_sks' , tipe_matkul = '$tipe_matkul', sem_matkul = '$sem_matkul',
        des_matkul = '$des_matkul' 
        WHERE id_matkul = '$id_matkul'");
        
        return $result;
    }
    
    function delete_matkul($id_matkul, $kode_matkul){
        $query = $this->db->query(
            "DELETE tb_matkul, tb_materi FROM tb_matkul
            LEFT JOIN tb_materi ON tb_matkul.kode_matkul = tb_materi.kode_matkul
            WHERE tb_matkul.kode_matkul = '$kode_matkul'");
        return $query;
    }
    
}
