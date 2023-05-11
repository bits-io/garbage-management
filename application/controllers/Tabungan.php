<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Tabungan extends CI_Controller
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
		$data['title'] = 'Data Tabungan';
		$data['button'] = 'Ambil Tabungan';
		$data['page_name'] = 'tabungan';
		$this->db->select('tbl_nasabah.*, tbl_tabungan.jumlah_tabungan, tbl_tabungan.created_at AS dibuat');
		$this->db->from('tbl_nasabah');
		$this->db->join('tbl_tabungan', 'tbl_nasabah.id_nasabah = tbl_tabungan.id_nasabah');
		$data['arr_data'] = $this->db->get()->result();

		$this->load->view('admin/tabungan/index', $data);
	}
	public function add()
	{	
		if ($this->session->login['role'] == 'nasabah'){
			$this->session->unset_userdata('success');
			$this->session->set_tempdata('error', 'Tambah data hanya untuk admin!',5);
			redirect('dashboard');
		}
		$this->db->select('tbl_tabungan.*, tbl_nasabah.nama, tbl_nasabah.kode_nasabah, tbl_nasabah.id_nasabah');
		$this->db->from('tbl_nasabah');
		$this->db->join('tbl_tabungan', 'tbl_nasabah.id_nasabah = tbl_tabungan.id_nasabah', 'left');
		$data['ns'] = $this->db->get()->result();

		$data['title'] = 'Data Tabungan';
		$data['button'] = 'Ambil Tabungan';
		$data['page_name'] = 'tabungan';
		$this->load->view('admin/tabungan/add', $data);
	}
	public function add_process()
	{	
		try {
			if ($this->session->login['role'] == 'nasabah'){
				$this->session->unset_userdata('success');
				$this->session->set_tempdata('error', 'Tambah data hanya untuk admin!',5);
				redirect('dashboard');
			}
	
			$createdAt = Date('Y-m-d h:i:s');
			$updateAt = $createdAt;

			$id_nasabah = $this->input->post('id_nasabah');
			$nominal_ditarik = $this->input->post('nominal_ditarik');
			$jumlah_tabungan_sekarang = $this->input->post('jumlah_tabungan_sekarang');
			$jumlah_tabungan_ditarik = $this->input->post('jumlah_tabungan_ditarik');
	
			$tabungan = $this->m->Get_Where(['id_nasabah'=>$id_nasabah], 'tbl_tabungan');

			if ($jumlah_tabungan_sekarang < $nominal_ditarik) {
				$this->session->unset_userdata('success');
				$this->session->set_tempdata('error', 'Nominal terlalu besar dibanding jumlah tabungan!',5);
			}

			$data_tabungan = [
				'jumlah_tabungan' => $jumlah_tabungan_sekarang - $nominal_ditarik,
				'updated_at' => $updateAt
			];

			$data_detail_tabungan = [
				'id_tabungan' => $tabungan[0]->id_tabungan,
				'sisa_tabungan' => $tabungan[0]->jumlah_tabungan,
				'nominal' => - $nominal_ditarik,
				'tgl_transaksi' => $createdAt,
				'created_at' => $createdAt,
				'updated_at' => $updateAt,
			];
			
			$this->m->Update(['id_tabungan' => $tabungan[0]->id_tabungan], $data_tabungan, 'tbl_tabungan');
			$this->m->Save($data_detail_tabungan, 'tbl_detail_tabungan');
			$this->session->set_tempdata('success', 'Tambah data berhasil!',5);

			redirect('tabungan');
		} catch (\Throwable $th) {
			$this->session->unset_userdata('success');
			$this->session->set_tempdata('error', $th->getMessage(), 5);
			redirect('tabungan');
		}
	}
	public function detail()
	{
		$id = intval($this->uri->segment(3));
		if ($this->session->login['role'] == 'nasabah'){
			$this->session->unset_userdata('success');
			$this->session->set_tempdata('error', 'Tambah data hanya untuk admin!',5);
			redirect('dashboard');
		}

		if (!$this->m->Get_Where(['id_nasabah' => $id], 'tbl_nasabah')) {
			$this->session->unset_userdata('success');
			$this->session->set_tempdata('error', 'Data tidak ditemukan!',5);
			redirect('tabungan');
		}

		$data['ns'] = $this->m->Get_Where(['id_nasabah' => $id], 'tbl_nasabah');

		$tabungan = $this->db;
		$tabungan->select('tbl_tabungan.id_tabungan, tbl_tabungan.jumlah_tabungan, tbl_detail_tabungan.*');
		$tabungan->from('tbl_tabungan');
		$tabungan->join('tbl_detail_tabungan', 'tbl_tabungan.id_tabungan = tbl_detail_tabungan.id_tabungan', 'left');
		$tabungan->where('tbl_tabungan.id_nasabah', $id);
		$data['arr_data'] = $tabungan->get()->result();

		$data['title'] = 'Data Tabungan';
		$data['button'] = 'Ambil Tabungan';
		$data['page_name'] = 'tabungan';
		$this->load->view('admin/tabungan/detail', $data);
	}
	public function index_nasabah()
	{	
		$data['title'] = 'Data Tabungan';
		$data['button'] = 'Ambil Tabungan';
		$data['page_name'] = 'tabungan';
		$id_nasabah = $this->session->login['id_user'];

		$tabungan = $this->db;
		$tabungan->select('tbl_nasabah.*, tbl_tabungan.jumlah_tabungan, tbl_tabungan.created_at AS dibuat');
		$tabungan->from('tbl_nasabah');
		$tabungan->join('tbl_tabungan', 'tbl_nasabah.id_nasabah = tbl_tabungan.id_nasabah');
		$tabungan->where('tbl_tabungan.id_nasabah', $id_nasabah);
		$data['arr_data'] = $tabungan->get()->result();

		$detail = $this->db;
		$detail->select('tbl_detail_tabungan.*, tbl_tabungan.*');
		$detail->from('tbl_detail_tabungan');
		$detail->join('tbl_tabungan', 'tbl_detail_tabungan.id_tabungan = tbl_tabungan.id_tabungan');
		$detail->where('tbl_tabungan.id_nasabah', $id_nasabah);
		$query = $detail->get();
		$data['detail'] = $query->result();

		$this->load->view('nasabah/tabungan/index', $data);
	}

	public function laporanTabungan()
	{
		$data['title'] = 'Data Tabungan';
		$data['button'] = 'Ambil Tabungan';
		$data['page_name'] = 'laporan/tabungan';

		$data['dari'] = date('Y-m-01');
		$data['sampai'] = date('Y-m-d', strtotime($data['dari'] . ' + 1 months'));

		$data['ns'] = $this->m->Get_All('tbl_nasabah', '*');

		$this->load->view('admin/laporan/laporan-tabungan', $data);
	}
	public function cetakLaporanTabungan()
	{
		$id_nasabah = $this->input->get('id_nasabah');
		$data['ns'] = $this->m->Get_Where(['id_nasabah' => $id_nasabah], 'tbl_nasabah');

		$data['ns'] = $this->m->Get_All('tbl_nasabah', '*');

		$this->db->select('t.id_tabungan, t.id_nasabah, t.jumlah_tabungan, t.created_at as tabungan_created, t.updated_at as tabungan_updated, d.id_detail_tabungan, d.id_tabungan, d.tgl_transaksi, d.sisa_tabungan, d.nominal, d.created_at as detail_created, d.updated_at as detail_updated');
		$this->db->from('tbl_tabungan t');
		$this->db->join('tbl_detail_tabungan d', 't.id_tabungan = d.id_tabungan');
		$this->db->where('tgl_transaksi >= "' . $_GET['dari'] . '"');
		$this->db->where('tgl_transaksi <= "' . $_GET['sampai'] . '"');
		$this->db->where('t.id_nasabah', $id_nasabah);
		$query = $this->db->get();
		$data['arr_data'] = $query->result();

		$data['dari'] = $_GET['dari'];
		$data['sampai'] = $_GET['sampai'];

		$this->load->view('admin/laporan/cetakTabungan', $data);
	}
}
