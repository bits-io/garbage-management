<?php
defined('BASEPATH') or exit('No direct script access allowed');
class SampahKeluar extends CI_Controller
{
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Models', 'm');
		if($this->session->login['role'] == 'nasabah') redirect('auth');
	}
	public function index()
	{	
		$data['title'] = 'Data Sampah Keluar';
		$data['button'] = 'Tambah Sampah Keluar';
		$data['arr_data'] = $this->m->Get_Where(['role' => 'admin'], 'tbl_admin');
		$this->load->view('sampah_keluar/index', $data);
	}
}

