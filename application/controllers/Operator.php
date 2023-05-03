<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Operator extends CI_Controller
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
		if($this->session->login['role'] == 'nasabah' || $this->session->login['role'] == 'operator') redirect('auth');
	}
	public function index()
	{	
		$data['title'] = 'Data Operator';
		$data['button'] = 'Tambah Operator';
		$data['page_name'] = 'operator';
		$data['arr_data'] = $this->m->Get_Where(['role' => 'operator'], 'tbl_admin');
		$this->load->view('admin/operator/index', $data);
	}
	public function add()
	{	
		if ($this->session->login['role'] != 'admin'){
			$this->session->unset_userdata('success');
			$this->session->set_tempdata('error', 'Tambah data hanya untuk admin!',5);
			redirect('dashboard');
		}
		$data['title'] = 'Data Operator';
		$data['button'] = 'Tambah Operator';
		$data['page_name'] = 'operator';
		$this->load->view('admin/operator/add', $data);
	}
	public function add_process()
	{	
		try {
			if ($this->session->login['role'] != 'admin'){
				$this->session->unset_userdata('success');
				$this->session->set_tempdata('error', 'Tambah data hanya untuk admin!',5);
				redirect('dashboard');
			}
			$get_admin = $this->m->Get_Where(['username' => $this->input->post('username')], 'tbl_admin');
			$get_nasabah = $this->m->Get_Where(['username' => $this->input->post('username')], 'tbl_nasabah');
			
			if(count($get_admin) > 0 || count($get_nasabah) > 0){
			if($get_admin[0]->username == $this->input->post('username') || $get_nasabah[0]->username == $this->input->post('username')){
				$this->session->unset_userdata('success');
				$this->session->set_tempdata('error', 'Username telah digunakan', 5);
				redirect('operator');
			}
			}
	
			$createdAt = Date('Y-m-d h:i:s');
			$updateAt = $createdAt;
	
			$kodeAdmin = 'OPT-'.Date('Y-his');
			
			$data = [
				'kode_admin' => $kodeAdmin,
				'nama' => $this->input->post('nama'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'no_telepon' => $this->input->post('no_telepon'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'role' => 'operator',
				'created_at' => $createdAt,
				'updated_at' => $updateAt
			];
	
			$this->m->Save($data, 'tbl_admin');
	
			redirect('operator');
		} catch (\Throwable $th) {
			$this->session->unset_userdata('success');
			$this->session->set_tempdata('error', $th->getMessage(), 5);
			redirect('operator');
		}
	}
	public function edit()
	{	
		$id = intval($this->uri->segment(3));
		if ($this->session->login['role'] != 'admin'){
			$this->session->unset_userdata('success');
			$this->session->set_tempdata('error', 'Tambah data hanya untuk admin!',5);
			redirect('dashboard');
		}

		if (!$this->m->Get_Where(['id_admin' => $id], 'tbl_admin')) {
			$this->session->unset_userdata('success');
			$this->session->set_tempdata('error', 'Data tidak ditemukan!',5);
			redirect('operator');
		}

		$data['data'] = $this->m->Get_Where(['id_admin' => $id], 'tbl_admin');

		$data['title'] = 'Data Operator';
		$data['button'] = 'Tambah Operator';
		$data['page_name'] = 'operator';
		$this->load->view('admin/operator/edit', $data);
	}
	public function edit_process()
	{	
		try {
			$id = intval($this->uri->segment(3));

			if ($this->session->login['role'] != 'admin'){
				$this->session->unset_userdata('success');
				$this->session->set_tempdata('error', 'Tambah data hanya untuk admin!', 5);
				redirect('dashboard');
			}

			if (!$this->m->Get_Where(['id_admin' => $id], 'tbl_admin')) {
				$this->session->unset_userdata('success');
				$this->session->set_tempdata('error', 'Data tidak ditemukan!', 5);
				redirect('operator');
			}

			$get_admin = $this->m->Get_Where(['username' => $this->input->post('username')], 'tbl_admin');
			$get_nasabah = $this->m->Get_Where(['username' => $this->input->post('username')], 'tbl_nasabah');

			if (count($get_admin) > 1 || count($get_nasabah) > 1){
			if($get_admin[0]->username == $this->input->post('username') || $get_nasabah[0]->username == $this->input->post('username')){
				$this->session->unset_userdata('success');
				$this->session->set_tempdata('error', 'Username telah digunakan', 5);
				redirect('operator');
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
	
			$this->m->Update(['id_admin' => $id], $data, 'tbl_admin');
			
			
			$this->session->unset_userdata('error');
			$this->session->set_tempdata('success', 'Data berhasil diubah!',5);
			redirect('operator');
		} catch (\Throwable $th) {
			$this->session->unset_userdata('success');
			$this->session->set_tempdata('error', $th->getMessage(), 5);
			redirect('operator');
		}
	}
	public function detail()
	{
		$id = intval($this->uri->segment(3));
		if ($this->session->login['role'] != 'admin'){
			$this->session->unset_userdata('success');
			$this->session->set_tempdata('error', 'Tambah data hanya untuk admin!',5);
			redirect('dashboard');
		}

		if (!$this->m->Get_Where(['id_admin' => $id], 'tbl_admin')) {
			$this->session->unset_userdata('success');
			$this->session->set_tempdata('error', 'Data tidak ditemukan!',5);
			redirect('operator');
		}

		$data['data'] = $this->m->Get_Where(['id_admin' => $id], 'tbl_admin');

		$data['title'] = 'Data Operator';
		$data['button'] = 'Tambah Operator';
		$data['page_name'] = 'operator';
		$this->load->view('admin/operator/detail', $data);
	}
	public function delete()
	{	
		$id = intval($this->uri->segment(3));
		if ($this->session->login['role'] != 'admin'){
			$this->session->unset_userdata('success');
			$this->session->set_tempdata('error', 'Tambah data hanya untuk admin!',5);
			redirect('dashboard');
		}

		if (!$this->m->Get_Where(['id_admin' => $id], 'tbl_admin')) {
			$this->session->unset_userdata('success');
			$this->session->set_tempdata('error', 'Data tidak ditemukan!',5);
			redirect('operator');
		}

		$data['data'] = $this->m->Delete(['id_admin' => $id], 'tbl_admin');

		$data['title'] = 'Data Operator';
		$data['button'] = 'Tambah Operator';
		$data['page_name'] = 'operator';

		$this->session->unset_userdata('success');
		$this->session->set_tempdata('success', 'Data berhasil dihapus!',5);

		redirect('operator');
	}
}

