<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Nasabah extends CI_Controller
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
		$data['title'] = 'Data Nasabah';
		$data['button'] = 'Tambah Nasabah';
		$data['page_name'] = 'nasabah';
		$data['arr_data'] = $this->m->Get_All('tbl_nasabah', '*');
		$this->load->view('admin/nasabah/index', $data);
	}
	public function add()
	{	
		if ($this->session->login['role'] == 'nasabah'){
			$this->session->unset_userdata('success');
			$this->session->set_flashdata('error', 'Tambah data hanya untuk admin!');
			redirect('dashboard');
		}
		$data['title'] = 'Data Nasabah';
		$data['button'] = 'Tambah Nasabah';
		$data['page_name'] = 'nasabah';
		$this->load->view('admin/nasabah/add', $data);
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
				redirect('nasabah');
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
	
			redirect('nasabah');
		} catch (\Throwable $th) {
			$this->session->unset_userdata('success');
			$this->session->set_flashdata('error', $th->getMessage(), 5);
			redirect('nasabah');
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

		if (!$this->m->Get_Where(['id_nasabah' => $id], 'tbl_nasabah')) {
			$this->session->unset_userdata('success');
			$this->session->set_flashdata('error', 'Data tidak ditemukan!');
			redirect('nasabah');
		}

		$data['data'] = $this->m->Get_Where(['id_nasabah' => $id], 'tbl_nasabah');

		$data['title'] = 'Data Nasabah';
		$data['button'] = 'Tambah Nasabah';
		$data['page_name'] = 'nasabah';
		$this->load->view('admin/nasabah/edit', $data);
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

			if (!$this->m->Get_Where(['id_nasabah' => $id], 'tbl_nasabah')) {
				$this->session->unset_userdata('success');
				$this->session->set_flashdata('error', 'Data tidak ditemukan!', 5);
				redirect('nasabah');
			}

			$get_admin = $this->m->Get_Where(['username' => $this->input->post('username')], 'tbl_admin');
			$get_nasabah = $this->m->Get_Where(['username' => $this->input->post('username')], 'tbl_nasabah');

			if (count($get_admin) > 1 || count($get_nasabah) > 1){
			if($get_admin[0]->username == $this->input->post('username') || $get_nasabah[0]->username == $this->input->post('username')){
				$this->session->unset_userdata('success');
				$this->session->set_flashdata('error', 'Username telah digunakan', 5);
				redirect('nasabah');
			}
			}
	
			$updatedAt = Date('Y-m-d h:i:s');
			
			$data = [
				'nama' => $this->input->post('nama'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'no_telepon' => $this->input->post('no_telepon'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'updated_at' => $updatedAt
			];
	
			$this->m->Update(['id_nasabah' => $id], $data, 'tbl_nasabah');
			
			
			$this->session->unset_userdata('error');
			$this->session->set_flashdata('success', 'Data berhasil diubah!');
			redirect('nasabah');
		} catch (\Throwable $th) {
			$this->session->unset_userdata('success');
			$this->session->set_flashdata('error', $th->getMessage(), 5);
			redirect('nasabah');
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
			redirect('nasabah');
		}

		$data['data'] = $this->m->Get_Where(['id_nasabah' => $id], 'tbl_nasabah');

		$data['title'] = 'Data Nasabah';
		$data['button'] = 'Tambah Nasabah';
		$data['page_name'] = 'nasabah';
		$this->load->view('admin/nasabah/detail', $data);
	}
	public function delete()
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
			redirect('nasabah');
		}

		$data['data'] = $this->m->Delete(['id_nasabah' => $id], 'tbl_nasabah');

		$data['title'] = 'Data Nasabah';
		$data['button'] = 'Tambah nasabah';
		$data['page_name'] = 'nasabah';

		$this->session->unset_userdata('success');
		$this->session->set_flashdata('success', 'Data berhasil dihapus!');

		redirect('nasabah');
	}

}
