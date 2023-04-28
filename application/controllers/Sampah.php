<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Sampah extends CI_Controller
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
		$data['title'] = 'Data Sampah';
		$data['button'] = 'Tambah Sampah';
		$data['page_name'] = 'sampah';

		$this->db->select('tbl_sampah.id_sampah, tbl_sampah.id_jenis, tbl_sampah.id_admin, tbl_sampah.nama_sampah, tbl_sampah.harga, tbl_sampah.created_at, tbl_sampah.updated_at, tbl_jenis_sampah.nama_jenis_sampah, tbl_admin.kode_admin, tbl_admin.nama, tbl_admin.jenis_kelamin, tbl_admin.tgl_lahir, tbl_admin.no_telepon, tbl_admin.username, tbl_admin.password, tbl_admin.role, tbl_admin.created_at, tbl_admin.updated_at');
		$this->db->from('tbl_sampah');
		$this->db->join('tbl_jenis_sampah', 'tbl_sampah.id_jenis = tbl_jenis_sampah.id_jenis', 'left');
		$this->db->join('tbl_admin', 'tbl_sampah.id_admin = tbl_admin.id_admin', 'left');
		$data['arr_data'] = $this->db->get()->result();

		$this->load->view('admin/sampah/index', $data);
	}
	public function add()
	{	
		if ($this->session->login['role'] == 'nasabah'){
			$this->session->unset_userdata('success');
			$this->session->set_flashdata('error', 'Tambah data hanya untuk admin!');
			redirect('dashboard');
		}
		$data['title'] = 'Data Sampah';
		$data['button'] = 'Tambah Sampah';
		$data['page_name'] = 'sampah';

		$data['jenis_sampah'] = $this->m->Get_All('tbl_jenis_sampah', '*');

		$this->load->view('admin/sampah/add', $data);
	}
	public function add_process()
	{	
		try {
			if ($this->session->login['role'] == 'nasabah'){
				$this->session->unset_userdata('success');
				$this->session->set_flashdata('error', 'Tambah data hanya untuk admin!');
				redirect('dashboard');
			}
		
	
			$createdAt = Date('Y-m-d h:i:s');
			$updateAt = $createdAt;
	
			
			$data = [
				'id_admin' => $this->session->login['id_user'],
				'id_jenis' => $this->input->post('id_jenis'),
				'nama_sampah' => $this->input->post('nama_sampah'),
				'harga' => $this->input->post('harga'),
				'created_at' => $createdAt,
				'updated_at' => $updateAt
			];
	
			$this->m->Save($data, 'tbl_sampah');
	
			redirect('sampah');
		} catch (\Throwable $th) {
			$this->session->unset_userdata('success');
			$this->session->set_flashdata('error', $th->getMessage(), 5);
			redirect('sampah');
		}
	}
	public function edit()
	{	
		$id = intval($this->uri->segment(3));
		if ($this->session->login['role'] == 'nasabah'){
			$this->session->unset_userdata('success');
			$this->session->set_flashdata('error', 'Edit data hanya untuk admin!');
			redirect('dashboard');
		}

		if (!$this->m->Get_Where(['id_sampah' => $id], 'tbl_sampah')) {
			$this->session->unset_userdata('success');
			$this->session->set_flashdata('error', 'Data tidak ditemukan!');
			redirect('sampah');
		}

		$data['jenis_sampah'] = $this->m->Get_All('tbl_jenis_sampah', '*');

		$this->db->select('tbl_sampah.id_sampah, tbl_sampah.id_jenis, tbl_sampah.id_admin, tbl_sampah.nama_sampah, tbl_sampah.harga, tbl_sampah.created_at, tbl_sampah.updated_at, tbl_jenis_sampah.nama_jenis_sampah, tbl_admin.kode_admin, tbl_admin.nama, tbl_admin.jenis_kelamin, tbl_admin.tgl_lahir, tbl_admin.no_telepon, tbl_admin.username, tbl_admin.password, tbl_admin.role, tbl_admin.created_at, tbl_admin.updated_at');
		$this->db->from('tbl_sampah');
		$this->db->join('tbl_jenis_sampah', 'tbl_sampah.id_jenis = tbl_jenis_sampah.id_jenis', 'left');
		$this->db->join('tbl_admin', 'tbl_sampah.id_admin = tbl_admin.id_admin', 'left');
		$this->db->where('tbl_sampah.id_sampah', $id);
		$data['data'] = $this->db->get()->result();

		$data['title'] = 'Data Sampah';
		$data['button'] = 'Tambah Sampah';
		$data['page_name'] = 'sampah';
		$this->load->view('admin/sampah/edit', $data);
	}
	public function edit_process()
	{	
		try {
			$id = intval($this->uri->segment(3));

			if ($this->session->login['role'] == 'nasabah'){
				$this->session->unset_userdata('success');
				$this->session->set_flashdata('error', 'Edit data hanya untuk admin!', 5);
				redirect('dashboard');
			}

			if (!$this->m->Get_Where(['id_sampah' => $id], 'tbl_sampah')) {
				$this->session->unset_userdata('success');
				$this->session->set_flashdata('error', 'Data tidak ditemukan!', 5);
				redirect('sampah');
			}
	
			$updatedAt = Date('Y-m-d h:i:s');
			
			$data = [
				'id_jenis' => $this->input->post('id_jenis'),
				'nama_sampah' => $this->input->post('nama_sampah'),
				'harga' => $this->input->post('harga'),
				'updated_at' => $updatedAt
			];
	
			$this->m->Update(['id_sampah' => $id], $data, 'tbl_sampah');
			
			
			$this->session->unset_userdata('error');
			$this->session->set_flashdata('success', 'Data berhasil diubah!');
			redirect('sampah');
		} catch (\Throwable $th) {
			$this->session->unset_userdata('success');
			$this->session->set_flashdata('error', $th->getMessage(), 5);
			redirect('sampah');
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

		if (!$this->m->Get_Where(['id_sampah' => $id], 'tbl_sampah')) {
			$this->session->unset_userdata('success');
			$this->session->set_flashdata('error', 'Data tidak ditemukan!');
			redirect('sampah');
		}

		$this->db->select('tbl_sampah.id_sampah, tbl_sampah.id_jenis, tbl_sampah.id_admin, tbl_sampah.nama_sampah, tbl_sampah.harga, tbl_sampah.created_at, tbl_sampah.updated_at, tbl_jenis_sampah.nama_jenis_sampah, tbl_admin.kode_admin, tbl_admin.nama, tbl_admin.jenis_kelamin, tbl_admin.tgl_lahir, tbl_admin.no_telepon, tbl_admin.username, tbl_admin.password, tbl_admin.role, tbl_admin.created_at, tbl_admin.updated_at');
		$this->db->from('tbl_sampah');
		$this->db->join('tbl_jenis_sampah', 'tbl_sampah.id_jenis = tbl_jenis_sampah.id_jenis', 'left');
		$this->db->join('tbl_admin', 'tbl_sampah.id_admin = tbl_admin.id_admin', 'left');
		$this->db->where('tbl_sampah.id_sampah', $id);
		$data['data'] = $this->db->get()->result();

		$data['title'] = 'Data Sampah';
		$data['button'] = 'Tambah Sampah';
		$data['page_name'] = 'sampah';
		$this->load->view('admin/sampah/detail', $data);
	}
	public function delete()
	{	
		$id = intval($this->uri->segment(3));
		if ($this->session->login['role'] == 'nasabah'){
			$this->session->unset_userdata('success');
			$this->session->set_flashdata('error', 'Tambah data hanya untuk admin!');
			redirect('dashboard');
		}

		if (!$this->m->Get_Where(['id_sampah' => $id], 'tbl_sampah')) {
			$this->session->unset_userdata('success');
			$this->session->set_flashdata('error', 'Data tidak ditemukan!');
			redirect('sampah');
		}

		$data['data'] = $this->m->Delete(['id_sampah' => $id], 'tbl_sampah');

		$data['title'] = 'Data Sampah';
		$data['button'] = 'Tambah Sampah';
		$data['page_name'] = 'sampah';

		$this->session->unset_userdata('success');
		$this->session->set_flashdata('success', 'Data berhasil dihapus!');

		redirect('sampah');
	}
}

