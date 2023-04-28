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
		$this->load->view('admin/dashboard/index', $data);
	}
	public function nasabah()
	{
		$data['title'] = 'Dashboard';
		
		$id_nasabah = $this->session->login['id_user'];
		$data['tabungan'] = $this->m->Get_Where(['id_nasabah' => $id_nasabah],'tbl_tabungan');
		$data['total_transaksi'] = count($this->m->Get_Where(['id_nasabah' => $id_nasabah],'tbl_transaksi'));

		$this->db->select_sum('berat_sampah');
		$this->db->from('tbl_transaksi');
		$this->db->join('tbl_jual', 'tbl_transaksi.id_transaksi = tbl_jual.id_transaksi');
		$this->db->where('tbl_transaksi.id_nasabah', $id_nasabah);
		$data['total_sampah'] = $this->db->get()->result();

		$this->load->view('nasabah/dashboard/index', $data);
	}
}
