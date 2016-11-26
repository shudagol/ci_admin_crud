<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends Auth_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_pegawai');
		$this->load->model('M_posisi');

	}

	public function index()
	{
		$data['judul'] = 'Menu Pegawai';
		$data['pegawai'] = $this->M_pegawai->getpegawai();
		$data['posisi'] = $this->M_posisi->getposisi();

		$this->template->lihat('pegawai/home', $data);
		
	}

	

	public function act_save($value='')
	{

		$this->form_validation->set_rules('nama_pegawai', 'Nama', 'required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');

		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('id_posisi', 'Posisi', 'required');


		if ($this->form_validation->run()== FALSE) {
			$this->session->set_flashdata('alert_msg',err_msg(validation_errors()));
			// redirect('pegawai');

		}else{

		$param = $this->input->post();
		$proses = $this->M_pegawai->act_tambah($param);

		if ($proses>= 0) {
			$this->session->set_flashdata('alert_msg',succ_msg('Siswa Berhasil di Inputkan'));
			// redirect('pegawai');
		}else{
			$this->session->set_flashdata('alert_msg',err_msg('Siswa gagal di Inputkan'));
			// redirect('pegawai');

		}
	}
}

public function data_foreach()
{

	$data['pegawai'] = $this->M_pegawai->getpegawai();
	$this->load->view('pegawai/data-foreach', $data);
}

public function Edit($id)
{
	$data['data_pegawai'] = $this->M_pegawai->pilih_id($id);
	$data['posisi'] = $this->M_posisi->getposisi();
	$this->load->view('pegawai/modal_update', $data);
}


public function act_edit()
	{
		// $this->form_validation->set_rules('nama_guru', 'Nama', 'required');
		


		// if ($this->form_validation->run()== FALSE) {
		// 	$this->session->set_flashdata('alert_msg',err_msg(validation_errors()));
		// 	redirect('guru/add_guru');

		// }else{

		$param = $this->input->post();
		$proses = $this->M_pegawai->act_edit($param);


		// if (proses>= 0) {
		// 	$this->session->set_flashdata('alert_msg',succ_msg('Guru Berhasil di Edit'));
		// 	redirect('guru');
		// }else{
		// 	$this->session->set_flashdata('alert_msg',err_msg('Guru gagal di Edit'));
		// 	redirect('HTTP_REFERER');

		// }
	// }
}


public function hapus($id="")
	{
		$proses = $this->M_pegawai->act_hapus($id);

		
		// if (proses>= 0) {
		// 	$this->session->set_flashdata('alert_msg',succ_msg('Guru Berhasil di Hapus'));
			
		// }else{
		// 	$this->session->set_flashdata('alert_msg',err_msg('Guru gagal di Hapus'));

		// }
		// redirect('guru');
	}

	public function import()
	{
		$data['judul'] = 'Menu Import';

		$this->template->lihat('pegawai/import',$data);
	}

	public function act_import()
	{
		$validation = true;
	    if (empty($_FILES['file_excel']['name']))
	    {
	      $this->form_validation->set_rules('file_excel', 'File', 'required');
	      $validation = $this->form_validation->run();
	      echo validation_errors();
	    }
	    
	    if($validation == false){
	      $this->session->set_flashdata("alert", err_msg(validation_errors()));
	    } else { 
	      
	      $config['upload_path']          = './component/excel/';
	      // $config['allowed_types']        = 'xlsx|xls';
	      // $config['max_size']             = 100;

	      $this->load->library('upload', $config); 
	      echo "<pre>";
	      print_r ($_FILES);
	      echo "</pre>";
	      if (!$this->upload->do_upload('file_excel')) { }else{echo 'kek';}
	  }
	//         $this->session->set_flashdata("alert", err_msg($this->upload->display_errors()));
	//       } else {
	        
	//         error_reporting(E_ALL);
	//         include_once './component/phpexcel/Classes/PHPExcel/IOFactory.php';
	        
	//         $file = str_replace(' ', '_', $_FILES['file']['name']);
	//         $inputFileName = './component/excel/' . $file;
	//         $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
	        
	//         $sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
	        
	//         foreach($sheetData as $key => $value){
	          
	//           if($key == "1"){
	//               continue;
	//             }
	          
	//           foreach($value as $key => $value2){
	//               $temp[] = trim($value2);
	//           }
	  

	//           $data['nama_pegawai'] = $temp[0];
	//           $data['alamat'] = $temp[1];
	//           $data['jk'] = $temp[2];
	//           $data['id_posisi'] = $temp[3];


	//           $this->M_pegawai->act_tambah($data);
	//           unset($temp);
	//           $this->session->set_flashdata("alert", succ_msg("Import berhasil"));
	//         }
	        
	//         unlink('./component/excel/' . $file);        
	//       }
	// 	}
	}

}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */