<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function insertPegawai(){
		$object = array('nama'=>$this->input->post('nama'),
			'nip'=>$this->input->post('nip'),
			'tanggal'=>$this->input->post('tanggal'),
			'alamat'=>$this->input->post('alamat'),
			'foto'=>$this->upload->data('file_name')
			);
		$this->db->insert('pegawai',$object);
	}
	
	public function getPegawaiQueryObject(){
		$query = $this->db->query("SELECT * from pegawai");
		return $query->result();
	}

	public function getPegawai($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('pegawai');
		return $query->result();
	}

	public function UpdateById($id)
	{
		$data = array(
				'nama' =>$this->input->post('nama'),
				'nip' =>$this->input->post('nip'),
				'tanggal' =>$this->input->post('tanggal'),
				'alamat'=>$this->input->post('alamat'),
				'foto'=>$this->upload->data('file_name')
			);
		$this->db->where('id',$id);
		$this->db->update('pegawai',$data);
	}

	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('pegawai');
	}

}

/* End of file Pegawai_model.php */
/* Location: ./application/controllers/Pegawai_model.php */
?>