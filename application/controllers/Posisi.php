<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posisi extends Auth_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_posisi');
	}

	public function index()
	{
		$data['judul'] = 'Menu Posisi';
		$data['posisi'] = $this->M_posisi->getposisi();
		$this->template->lihat('posisi/home', $data);
		
	}

	

	public function act_save()
	{

		// $this->form_validation->set_rules('nama_pegawai', 'Nama', 'required');
		// $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');

		// $this->form_validation->set_rules('alamat', 'Alamat', 'required');
		// $this->form_validation->set_rules('id_posisi', 'Posisi', 'required');


		// if ($this->form_validation->run()== FALSE) {
		// 	$this->session->set_flashdata('alert_msg',err_msg(validation_errors()));
		// 	// redirect('pegawai');

		// }else{

		$param = $this->input->post();
		$proses = $this->M_posisi->act_tambah($param);

// 		if (proses>= 0) {
// 			$this->session->set_flashdata('alert_msg',succ_msg('Siswa Berhasil di Inputkan'));
// 			// redirect('pegawai');
// 		}else{
// 			$this->session->set_flashdata('alert_msg',err_msg('Siswa gagal di Inputkan'));
// 			// redirect('pegawai');

// 		}
// 	}
}

public function data_foreach()
{

	$data['posisi'] = $this->M_posisi->getposisi();
	$this->load->view('posisi/data-foreach', $data);
}

public function edit($id)
{
	$data['posisi'] = $this->M_posisi->pilih_id($id);
	$this->load->view('posisi/modal_update', $data);
}


public function act_edit()
	{
		
		$param = $this->input->post();
		$proses = $this->M_posisi->act_edit($param);
}


public function hapus($id="")
	{
		$proses = $this->M_posisi->act_hapus($id);

		
		// if (proses>= 0) {
		// 	$this->session->set_flashdata('alert_msg',succ_msg('Guru Berhasil di Hapus'));
			
		// }else{
		// 	$this->session->set_flashdata('alert_msg',err_msg('Guru gagal di Hapus'));

		// }
		// redirect('guru');
	}


}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */