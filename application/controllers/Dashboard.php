<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Models','m');
    }

	public function index()
	{
		$where = array(
			'role' => 'admin'
		);
		$data['arr_data'] = $this->m->Get_Where($where, 'tbl_admin');
		$this->load->view('admin/index', $data);
	}
}
