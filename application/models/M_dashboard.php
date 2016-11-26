<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model {

	public function get_data()
	{
		$this->db->select('posisi.nama_posisi,count(pegawai.id_posisi) as jumlah_pegawai');
		$this->db->from('pegawai');		
		$this->db->group_by('pegawai.id_posisi');
		$this->db->join('posisi', 'posisi.id_posisi = pegawai.id_posisi', 'left');
		$data = $this->db->get();
		return $data->result();
	}
	

}

/* End of file M_dashboard.php */
/* Location: ./application/models/M_dashboard.php */