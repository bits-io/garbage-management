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
			$this->session->set_flashdata('error', 'Tambah data hanya untuk admin!');
			redirect('dashboard');
		}
		$data['ns'] = $this->m->Get_All('tbl_nasabah', '*');

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
				$this->session->set_flashdata('error', 'Tambah data hanya untuk admin!');
				redirect('dashboard');
			}
			$get_admin = $this->m->Get_Where(['username' => $this->input->post('username')], 'tbl_admin');
			$get_nasabah = $this->m->Get_Where(['username' => $this->input->post('username')], 'tbl_nasabah');
			if($get_admin[0]->username == $this->input->post('username') || $get_nasabah[0]->username == $this->input->post('username')){
				$this->session->unset_userdata('success');
				$this->session->set_flashdata('error', 'Username telah digunakan', 5);
				redirect('tabungan');
			}
	
			$createdAt = Date('Y-m-d h:i:s');
			$updateAt = $createdAt;
	
			$kodeNasabah = 'NSB-'.Date('Y-his');
			
			$data = [
				'kode_nasabah' => $kodeNasabah,
				'nama' => $this->input->post('nama'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'no_telepon' => $this->input->post('no_telepon'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'status_pengguna' => 'nasabah',
				'created_at' => $createdAt,
				'updated_at' => $updateAt
			];
	
			$this->m->Save($data, 'tbl_nasabah');
	
			redirect('tabungan');
		} catch (\Throwable $th) {
			$this->session->unset_userdata('success');
			$this->session->set_flashdata('error', $th->getMessage(), 5);
			redirect('tabungan');
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

		if (!$this->m->Get_Where(['id_nasabah' => $id], 'tbl_nasabah')) {
			$this->session->unset_userdata('success');
			$this->session->set_flashdata('error', 'Data tidak ditemukan!');
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
		$this->db->select('tbl_nasabah.*, tbl_tabungan.jumlah_tabungan, tbl_tabungan.created_at AS dibuat');
		$this->db->from('tbl_nasabah');
		$this->db->join('tbl_tabungan', 'tbl_nasabah.id_nasabah = tbl_tabungan.id_nasabah');
		$data['arr_data'] = $this->db->get()->result();

		$this->load->view('nasabah/tabungan/index', $data);
	}
}
