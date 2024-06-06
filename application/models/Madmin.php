<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Madmin extends CI_Model {

	function data_dosen(){
        $this->db->where('user_akses', '2' );
        $query = $this->db->get('tb_user');

        return $query->result();
    }

	function data_mahasiswa(){
        $this->db->where('user_akses', '3' );
        $query = $this->db->get('tb_user');

        return $query->result();
    }

}
