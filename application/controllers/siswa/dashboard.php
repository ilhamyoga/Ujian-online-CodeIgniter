<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['user'] = $this->m_query->viewUser($this->session->userdata('username'));
		$data['data'] = $this->m_query->viewUjian();
		$this->load->view('siswa/v_dashboard', $data);
	}
	function ujian()
	{
		$this->load->view('siswa/v_ujian');
	}
	function konfirmasi($id)
	{
		$data['data'] = $this->m_query->ambilData($id);
		$this->load->view('siswa/konfirmasi_tes', $data);
	}
	function tampil_ujian()
	{
		$data['data'] = $this->m_query->viewTes();
		$this->load->view('siswa/v_tampil_ujian', $data);
	}

}
