<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pegawai extends CI_Model {

	public function getpegawai(){
		$this->db->select('pegawai.*, posisi.nama_posisi');
		$this->db->from('pegawai');
		$this->db->join('posisi', 'posisi.id_posisi = pegawai.id_posisi', 'left');
		$data = $this->db->get();
		return $data->result();
	
		// $data = $this->db->get('pegawai');
	}


	public function act_tambah($param){

		$this->db->insert('pegawai', $param);

		return $this->db->affected_rows();
	}

	public function pilih_id($id)
	{
		$this->db->select('pegawai.*, posisi.nama_posisi');
		$this->db->from('pegawai');
		$this->db->where('id_pegawai', $id);
		$this->db->join('posisi', 'posisi.id_posisi = pegawai.id_posisi', 'left');
		$data = $this->db->get();
		return $data->row();
	}


	public function act_edit($param){
		$object= [
			'id_pegawai' => $param['id_pegawai'],
			'nama_pegawai' => $param['nama_pegawai'],
			'jk' => $param['jk'],
			'alamat' => $param['alamat'],
			'id_posisi' => $param['id_posisi'],

		];

		$this->db->where('id_pegawai', $param['id_pegawai']);
		$this->db->update('pegawai', $object);

		return $this->db->affected_rows();
	}

	public function act_hapus($id)
	{
		$this->db->where('id_pegawai', $id);
		$this->db->delete('pegawai');
		return $this->db->affected_rows();
		
	}

}

/* End of file M_pegawai.php */
/* Location: ./application/models/M_pegawai.php */