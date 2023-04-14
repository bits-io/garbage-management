<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Models', 'm');
	}

	public function index()
	{
		$this->load->view('admin/login');
	}

	public function login()
	{
		$get_admin = $this->m->Get_Where($this->input->post('username'), 'tbl_admin');
		$get_nasabah = $this->m->Get_Where($this->input->post('username'), 'tbl_nasabah');

		if(count($get_admin) > 0){
			if($get_admin->password == $this->input->post('password')){
				$session = [
					'kode' => $get_admin->kode_admin,
					'nama' => $get_admin->nama,
					'username' => $get_admin->username,
					'role' => $get_admin->role,
					'jam_masuk' => date('H:i:s')
				];

				$this->session->set_userdata('login', $session);
				$this->session->set_flashdata('success', '<strong>Login</strong> Berhasil!');
				redirect('dashboard');
			} else {
				redirect('auth?msg=gagal');
			}
		} 

		
		if(count($get_nasabah) > 0){
			if($get_nasabah->password == $this->input->post('password')){
				$session = [
					'kode' => $get_nasabah->kode_nasabah,
					'nama' => $get_nasabah->nama,
					'username' => $get_nasabah->username,
					'role' => $get_nasabah->status_pengguna,
					'jam_masuk' => date('H:i:s')
				];

				$this->session->set_userdata('login', $session);
				$this->session->set_flashdata('success', '<strong>Login</strong> Berhasil!');
				redirect('dashboard');
			} else {
				redirect('auth?msg=gagal');
			}
		} else {
			redirect('auth?msg=gagal');
		}


		// $select = $this->db->select('*');
		// $select = $this->db->where('username', $this->input->post('username'));
		// $select = $this->db->where('password', $this->input->post('password'));
		// $read = $this->m->Get_All('tbl_nasabah', $select);
		// print_r($read);
		// $username = "";
		// $nama = "";
		// $akses = "";
		// $status_login = "";
		// foreach ($read as $d) {
		// 	$username = $d->username;
		// 	$nama = $d->nama;
		// 	$akses = $d->akses;
		// 	$status_login = "login";
		// }
		// if ($status_login == "") {
		// 	redirect('auth?msg=gagal');
		// } else {
		// 	$data = array(
		// 		'username' => $username,
		// 		'nama' => $nama,
		// 		'akses' => $akses,
		// 		'status_login' => $status_login,
		// 	);
		// 	$this->session->set_userdata($data);

		// 	if ($akses == 'admin') {
		// 		redirect('Admin');
		// 	} else {
		// 		redirect('Kasir');
		// 	}
		// }
	}

	public function logout()
	{
		session_destroy();
		redirect('auth?msg=logout');
	}
}
