<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
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
		if ($this->session->userdata('status_login') != 'login') {
			redirect('Admin');
		}
	}
	public function index()
	{	
		// $this->sidebar();
		// $data = array(
		// 	'master' => "open",
		// 	'master_status' => " active",
		// 	'dashboard' => " active"
		// );
		// $this->session->set_userdata($data);

		// $data['dari'] = date('Y-m-d');
		// $data['sampai'] = date('Y-m-d');

		$this->load->view('admin/index');
	}
}

