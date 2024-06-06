<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdosen extends CI_Model {

	function data_mahasiswa(){
        $this->db->where('user_akses', '3' );
        $query = $this->db->get('tb_user');

        return $query->result();
    }

}
