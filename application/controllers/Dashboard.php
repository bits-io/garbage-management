<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Models','m');
		if(!$this->session->login) redirect('auth');
    }

	public function index()
	{
		$data['title'] = 'Dashboard';
		$this->load->view('dashboard/index', $data);
	}
	public function nasabah()
	{
		$data['title'] = 'Dashboard';
		$this->load->view('dashboard/nasabah', $data);
	}
}
