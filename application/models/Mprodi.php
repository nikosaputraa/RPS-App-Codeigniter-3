<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mprodi extends CI_Model {

	function get_last_id_prodi() {
        $query = $this->db->query("SELECT MAX(id) as last_id FROM tb_prodi");
        $row = $query->row();
        return $row->last_id;
    }

    function prodi(){
        $query = $this->db->query("SELECT * FROM tb_prodi");
        return $query->result();
    }

	function add_prodi($id_prodi, $fakultas_id, $nama_prodi, $fakultas, $nama_kaprodi){
        $result = $this->db->query("INSERT INTO tb_prodi VALUES 
        ('$id_prodi', '$fakultas_id', '$nama_prodi', '$nama_kaprodi', '$fakultas')");
        
        return $result;
    }
    
    function delete_prodi($id_prodi){
        $query = $this->db->query(
            "DELETE FROM tb_prodi WHERE id = '$id_fakultas'");
        return $query;
    }
    
}
