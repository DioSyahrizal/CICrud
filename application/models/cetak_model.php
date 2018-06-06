<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak_model extends CI_Model {

    public function view(){
        $this->db->select("Id,Nama,Nip,DATE_FORMAT(Tanggal,'%d-%m-%Y')as Tanggal, alamat");
        $query=$this->db->get('pegawai');
            return $query->result();
    }

    public function view_row(){
        $this->db->select("Id,Nama,Nip,DATE_FORMAT(Tanggal,'%d-%m-%Y')as Tanggal, alamat");
        $query=$this->db->get('pegawai');
        return $query->result();
    }

}

/* End of file ModelName.php */

?>