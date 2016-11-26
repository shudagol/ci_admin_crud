<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Auth_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_dashboard');
	}

	public function index()
	{
		$data['data'] = $this->M_dashboard->get_data();
		$this->template->lihat('dashboard/home' , $data);
	}


}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */