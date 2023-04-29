<?php
defined('BASEPATH') or exit('No direct script access allowed');
class RiwayatTransaksi extends CI_Controller
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
		if(!$this->session->login) redirect('auth');
	}
	public function index()
	{	
		$data['title'] = 'Data Riwayat Transaksi';
		$data['button'] = 'Tambah Riwayat Transaksi';
		$data['page_name'] = 'riwayat-transaksi';

		$this->db->select('tbl_nasabah.*, SUM(tbl_transaksi.total) as total_transaksi');
        $this->db->from('tbl_nasabah');
        $this->db->join('tbl_transaksi', 'tbl_nasabah.id_nasabah = tbl_transaksi.id_nasabah');
        $this->db->group_by('tbl_nasabah.id_nasabah');
		$data['arr_data'] = $this->db->get()->result();

		$this->load->view('admin/riwayat-transaksi/index', $data);
	}
	public function detail()
	{
		$id = intval($this->uri->segment(3));
		if ($this->session->login['role'] == 'nasabah'){
			$this->session->unset_userdata('success');
			$this->session->set_flashdata('error', 'Tambah data hanya untuk admin!');
			redirect('dashboard');
		}

		if (!$this->m->Get_Where(['id_nasabah' => $id], 'tbl_transaksi')) {
			$this->session->unset_userdata('success');
			$this->session->set_flashdata('error', 'Data tidak ditemukan!');
			redirect('riwayat-transaksi');
		}

		$data['ns'] = $this->m->Get_Where(['id_nasabah' => $id], 'tbl_nasabah');
		
		$tr = $this->db;
		$tr->select('tbl_transaksi.id_transaksi, tbl_transaksi.id_nasabah, tbl_transaksi.tgl_transaksi, tbl_transaksi.total, tbl_transaksi.created_at, tbl_transaksi.updated_at, tbl_nasabah.kode_nasabah, tbl_nasabah.nama, tbl_nasabah.jenis_kelamin, tbl_nasabah.tgl_lahir, tbl_nasabah.no_telepon, tbl_nasabah.username, tbl_nasabah.password, tbl_nasabah.status_pengguna');
		$tr->from('tbl_transaksi');
		$tr->join('tbl_nasabah', 'tbl_transaksi.id_nasabah = tbl_nasabah.id_nasabah');
		$tr->where('tbl_transaksi.id_nasabah', $id);
		$data['arr_data'] = $tr->get()->result();

		$data['title'] = 'Data Riwayat Transaksi';
		$data['button'] = 'Tambah Riwayat Transaksi';
		$data['page_name'] = 'riwayat-transaksi';

		$this->load->view('admin/riwayat-transaksi/detail', $data);
	}
	public function index_nasabah()
	{	
		$id_user = $this->session->login['id_user'];

		$data['title'] = 'Data Riwayat Transaksi';
		$data['button'] = 'Tambah Riwayat Transaksi';
		$data['page_name'] = 'riwayat-transaksi';

		
		$data['arr_data'] = $this->m->Get_Where(['id_nasabah' => $id_user], 'tbl_transaksi');

		$this->load->view('nasabah/riwayat-transaksi/index', $data);
	}

	public function detail_nasabah($id)
	{

		$id_user = $this->session->login['id_user'];

		if (!$this->m->Get_Where(['id_nasabah' => $id_user], 'tbl_transaksi')) {
			$this->session->unset_userdata('success');
			$this->session->set_flashdata('error', 'Data tidak ditemukan!');
			redirect('nasabah/riwayat-transaksi');
		}

		$data['ns'] = $this->m->Get_Where(['id_nasabah' => $id_user], 'tbl_nasabah');
		
		$tr = $this->db;
		$tr->select('*');
		$tr->from('tbl_jual');
		$tr->join('tbl_transaksi', 'tbl_jual.id_transaksi = tbl_transaksi.id_transaksi');
		$tr->join('tbl_sampah', 'tbl_jual.id_sampah = tbl_sampah.id_sampah'); // tambahan join
		$tr->where('tbl_transaksi.id_transaksi', $id);
		$data['arr_data'] = $tr->get()->result();

		$data['title'] = 'Data Riwayat Transaksi';
		$data['button'] = 'Tambah Riwayat Transaksi';
		$data['page_name'] = 'riwayat-transaksi';

		$this->load->view('nasabah/riwayat-transaksi/detail', $data);
	}
}

