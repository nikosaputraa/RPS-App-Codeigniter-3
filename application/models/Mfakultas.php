<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mfakultas extends CI_Model {

	function get_last_id_fakultas() {
        $query = $this->db->query("SELECT MAX(id) as last_id FROM tb_fakultas");
        $row = $query->row();
        return $row->last_id;
    }

    function fakultas(){
        $query = $this->db->query("SELECT * FROM tb_fakultas");
        return $query->result();
    }

	function add_fakultas($id_fakultas, $nama_fakultas, $nama_dekan){
        $result = $this->db->query("INSERT INTO tb_fakultas VALUES 
        ('$id_fakultas', '$nama_fakultas', '$nama_dekan', '')");
        
        return $result;
    }
    
    function delete_fakultas($id_fakultas){
        $query = $this->db->query(
            "DELETE FROM tb_fakultas WHERE id = '$id_fakultas'");
        return $query;
    }
    
}
