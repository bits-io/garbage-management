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
		$this->load->view('auth/login');
	}

	public function login()
	{
		$get_admin = $this->m->Get_Where(['username' => $this->input->post('username')], 'tbl_admin');
		$get_nasabah = $this->m->Get_Where(['username' => $this->input->post('username')], 'tbl_nasabah');

		if(count($get_admin) > 0){
			if($get_admin[0]->password == $this->input->post('password')){
				$session = [
					'id_user' => $get_admin[0]->id_admin,
					'kode' => $get_admin[0]->kode_admin,
					'nama' => $get_admin[0]->nama,
					'username' => $get_admin[0]->username,
					'role' => $get_admin[0]->role,
					'jam_masuk' => date('H:i:s')
				];

				$this->session->set_userdata('login', $session);
				$this->session->set_flashdata('success', '<strong>Login</strong> Berhasil!', 5);
				redirect('dashboard');
			} else {
				redirect('auth?msg=gagal');
			}
		} 

		
		if(count($get_nasabah) > 0){
			if($get_nasabah[0]->password == $this->input->post('password')){
				$session = [
					'id_user' => $get_nasabah[0]->id_nasabah,
					'kode' => $get_nasabah[0]->kode_nasabah,
					'nama' => $get_nasabah[0]->nama,
					'username' => $get_nasabah[0]->username,
					'role' => 'nasabah',
					'jam_masuk' => date('H:i:s')
				];

				$this->session->set_userdata('login', $session);
				$this->session->set_flashdata('success', '<strong>Login</strong> Berhasil!', 5);
				redirect('dashboard/nasabah');
			} else {
				redirect('auth?msg=gagal');
			}
		} else {
			redirect('auth?msg=gagal');
		}

	}

	public function logout()
	{
		session_destroy();
		redirect('auth?msg=logout');
	}
}
