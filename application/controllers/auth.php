<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('level')=="admin") {
			redirect('admin/dashboard','refresh');
		}
		else if ($this->session->userdata('level')=="guru") {
			redirect('guru/dashboard','refresh');
		}
		else if ($this->session->userdata('level')=="siswa") {
			redirect('siswa/dashboard','refresh');
		}
		$this->load->view('login/v_login');
	}

	public function login()
	{
		$this->form_validation->set_rules('username', 'Username' , 'required');
		$this->form_validation->set_rules('password', 'Password' , 'required');
		if ($this->form_validation->run() )
		{
			$username = $this->input->post('username', TRUE);
			$password = $this->input->post('password', TRUE);
			$this->m_query->user_login($username, $password);
		}
		 else
		{
			$this->index();
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		$session = array('level','username','password');
		$this->session->unset_userdata($session);
		redirect('auth','refresh');
	}

	public function confirm()
	{
		$id = $this->input->post('id');
		$token = $this->input->post('token');
		$where = array('token' => $token);

		$cek = $this->m_query->confirm_token("tb_tes_ujian",$where)->num_rows();
			if($cek > 0){
				redirect('siswa/dashboard/tampil_ujian/');
			}
			else{
				redirect('siswa/dashboard/konfirmasi/'.$id);
				echo '<script> alert("TOKEN SALAH !!!"); </script>';
			}
	}

}
