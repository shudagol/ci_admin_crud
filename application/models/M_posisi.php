<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_posisi extends CI_Model {

	public function getposisi()
	{
		$data = $this->db->get('posisi');
		return $data->result();
	}

	public function act_tambah($param){

		$this->db->insert('posisi', $param);

		return $this->db->affected_rows();
	}

		public function pilih_id($id)
	{
		$data = $this->db->get_where('posisi', array('id_posisi'=> $id));
		return $data->row();
	}

	public function act_edit($param){
		$object= [
			'id_posisi' => $param['id_posisi'],
			'nama_posisi' => $param['nama_posisi'],
		];

		$this->db->where('id_posisi', $param['id_posisi']);
		$this->db->update('posisi', $object);

		return $this->db->affected_rows();
	}

	public function act_hapus($id)
	{
		$this->db->where('id_posisi', $id);
		$this->db->delete('posisi');
		return $this->db->affected_rows();
		
	}

}

/* End of file M_posisi.php */
/* Location: ./application/models/M_posisi.php */