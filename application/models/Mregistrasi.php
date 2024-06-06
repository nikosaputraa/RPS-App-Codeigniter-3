<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mregistrasi extends CI_Model {

	function registrasi($nama, $email, $nik, $status, $password){
        $result = $this->db->query("INSERT INTO tb_user VALUES ('','$nama','$email', '$nik', SHA1('$password'), '$status', '$status')");
        return $result;
    }

}
