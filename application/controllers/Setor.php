<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Setor extends CI_Controller
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
		if($this->session->login['role'] == 'nasabah') redirect('auth');
	}
	public function index()
	{	
		$data['title'] = 'Data Setor';
		$data['button'] = 'Tambah Setor';
		$data['page_name'] = 'setor';

		$this->db->select('tbl_transaksi.id_transaksi, tbl_transaksi.id_nasabah, tbl_transaksi.tgl_transaksi, tbl_transaksi.total, tbl_transaksi.created_at, tbl_transaksi.updated_at, tbl_nasabah.kode_nasabah, tbl_nasabah.nama, tbl_nasabah.jenis_kelamin, tbl_nasabah.tgl_lahir, tbl_nasabah.no_telepon, tbl_nasabah.username, tbl_nasabah.password, tbl_nasabah.status_pengguna');
		$this->db->from('tbl_transaksi');
		$this->db->join('tbl_nasabah', 'tbl_transaksi.id_nasabah = tbl_nasabah.id_nasabah');
		$data['arr_data'] = $this->db->get()->result();

		$this->load->view('setor/index', $data);
	}
	public function add()
	{	
		if ($this->session->login['role'] == 'nasabah'){
			$this->session->unset_userdata('success');
			$this->session->set_flashdata('error', 'Tambah data hanya untuk admin!');
			redirect('dashboard');
		}
		$data['title'] = 'Data Setor';
		$data['button'] = 'Tambah Setor';
		$data['page_name'] = 'setor';
		$data['dateNow'] = Date('Y-m-d');

		$data['sampah'] = $this->m->Get_All('tbl_sampah', '*');
		$data['nasabah'] = $this->m->Get_All('tbl_nasabah', '*');

		$this->load->view('setor/add', $data);
	}
	public function add_process()
	{	
		try {
			if ($this->session->login['role'] == 'nasabah'){
				$this->session->unset_userdata('success');
				$this->session->set_flashdata('error', 'Tambah data hanya untuk admin!');
				redirect('dashboard');
			}
			$id_nasabah = $this->input->post('id_nasabah');
			$keranjang = $this->input->post('keranjang');
	
			$createdAt = Date('Y-m-d h:i:s');
			$updatedAt = $createdAt;
			
			$total = 0;
			foreach ($keranjang as $item) {
				$total += $item['jumlah_harga'];
			}

			if (count($this->m->Get_Where(['id_nasabah' => $id], 'tbl_tabungan')) > 0) {
				$data_tabungan = array(
					'id_nasabah' => $id_nasabah,
					'jumlah_tabungan' => 0,
					'created_at' => $createdAt,
					'updated_at' => $updatedAt
				);
				$this->m->Save($data_tabungan, 'tbl_tabungan');
			}	
			$tabungan = $this->m->Get_Where(['id_nasabah' => $id_nasabah], 'tbl_tabungan');

			$data_detail_tabungan = array(
				'id_tabungan' => $tabungan[0]->id_tabungan,
				'tgl_transaksi'	=> $createdAt,
				'sisa_tabungan'	=> $tabungan[0]->jumlah_tabungan,
				'nominal'	=> $total,
				'created_at' => $createdAt,
				'updated_at' => $updatedAt
			);
			$this->m->Save($data_detail_tabungan, 'tbl_detail_tabungan');

			
			// Insert data ke tabel transaksi
			$data_transaksi = array(
				'id_nasabah' => $id_nasabah,
				'tgl_transaksi' => $createdAt,
				'total' => $total,
				'created_at' => $createdAt,
				'updated_at' => $updatedAt
			);
			$this->m->Save($data_transaksi, 'tbl_transaksi');
			$id_transaksi = $this->db->insert_id(); // Ambil ID transaksi yang baru saja diinsert
	
			// Looping untuk insert data ke tabel detail_transaksi
			foreach ($keranjang as $item) {
				$data_detail_transaksi = array(
					'id_sampah' => intval($item['id_sampah']),
					'id_transaksi' => intval($id_transaksi),
					'berat_sampah' => intval($item['berat_sampah']),
					'harga' => intval($item['jumlah_harga']),
					'created_at' => $createdAt,
					'updated_at' => $updatedAt
				);
				$this->m->Save($data_detail_transaksi, 'tbl_jual');
			}
			$jumlah_tabungan = intval($tabungan[0]->jumlah_tabungan + $total);
			$this->m->Update(['id_nasabah' => $id_nasabah], ['jumlah_tabungan' => $jumlah_tabungan], 'tbl_tabungan');


			$this->session->unset_userdata('error');
			$this->session->set_flashdata('success', 'Data berhasil ditambah!');
	
			redirect('setor');
		} catch (\Throwable $th) {
			$this->session->unset_userdata('success');
			$this->session->set_flashdata('error', $th->getMessage(), 5);
			redirect('setor');
		}
	}
	
	public function detail()
	{
		$id = intval($this->uri->segment(3));
		if ($this->session->login['role'] == 'nasabah'){
			$this->session->unset_userdata('success');
			$this->session->set_flashdata('error', 'Tambah data hanya untuk admin!');
			redirect('dashboard');
		}

		if (!$this->m->Get_Where(['id_transaksi' => $id], 'tbl_transaksi')) {
			$this->session->unset_userdata('success');
			$this->session->set_flashdata('error', 'Data tidak ditemukan!');
			redirect('setor');
		}

		$tr = $this->db;
		$tr->select('*');
		$tr->from('tbl_transaksi');
		$tr->join('tbl_nasabah', 'tbl_transaksi.id_nasabah = tbl_nasabah.id_nasabah');
		$tr->where('tbl_transaksi.id_transaksi', $id);
		$data['tr'] = $tr->get()->result();
		
		$detail = $this->db;
		$detail->select('*');
		$detail->from('tbl_jual');
		$detail->join('tbl_sampah', 'tbl_jual.id_sampah = tbl_sampah.id_sampah');
		$detail->join('tbl_transaksi', 'tbl_jual.id_transaksi = tbl_transaksi.id_transaksi');
		$detail->join('tbl_nasabah', 'tbl_transaksi.id_nasabah = tbl_nasabah.id_nasabah');
		$detail->where('tbl_transaksi.id_transaksi', $id);
		$data['detail'] = $detail->get()->result();

		$data['title'] = 'Data Setor';
		$data['button'] = 'Tambah Setor';
		$data['page_name'] = 'setor';

		$this->load->view('setor/detail', $data);
	}
	public function delete()
	{	
		$id = intval($this->uri->segment(3));
		if ($this->session->login['role'] == 'nasabah'){
			$this->session->unset_userdata('success');
			$this->session->set_flashdata('error', 'Tambah data hanya untuk admin!');
			redirect('dashboard');
		}

		if (!$this->m->Get_Where(['id_transaksi' => $id], 'tbl_transaksi')) {
			$this->session->unset_userdata('success');
			$this->session->set_flashdata('error', 'Data tidak ditemukan!');
			redirect('setor');
		}
		$tr = $this->m->Get_Where(['id_transaksi' => $id], 'tbl_transaksi');
		$tb = $this->m->Get_Where(['id_nasabah' => $tr[0]->id_nasabah], 'tbl_tabungan');
		
		$jumlah_tabungan = $tb[0]->jumlah_tabungan - $tr[0]->total;
		$updatedAt = Date('Y-m-d h:i:s');

		$data['detail_tb'] = $this->m->Delete(['id_tabungan' => $tb[0]->id_tabungan], 'tbl_detail_tabungan');

		$this->m->Update(['id_nasabah' => $tr[0]->id_nasabah], ['jumlah_tabungan' => $jumlah_tabungan, 'updated_at' => $updatedAt], 'tbl_tabungan');

		$data['tr'] = $this->m->Delete(['id_transaksi' => $id], 'tbl_transaksi');
		$data['detail'] = $this->m->Delete(['id_transaksi' => $id], 'tbl_jual');
		

		$data['title'] = 'Data Setor';
		$data['button'] = 'Tambah Setor';
		$data['page_name'] = 'setor';

		$this->session->unset_userdata('success');
		$this->session->set_flashdata('success', 'Data berhasil dihapus!');

		redirect('setor');
	}
}

