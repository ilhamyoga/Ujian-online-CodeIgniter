<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('guru/v_dashboard');
	}
	function ujian()
	{
		$data['data'] = $this->m_query->viewUjian();
		$data['mapel'] = $this->m_query->viewMapel();
		$this->load->view('guru/v_ujian', $data);
	}
	function soal()
	{
		$this->load->view('guru/v_soal');
	}
	function hasil()
	{
		$this->load->view('guru/v_hasil');
	}
	function input()
	{
		$this->load->view('guru/v_input');
	}

}
