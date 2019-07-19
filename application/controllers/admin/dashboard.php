<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/v_dashboard');
	}
	function siswa()
	{
		$data['data'] = $this->m_query->viewSiswa();
		$data['jurusan'] = $this->m_query->viewJurusan();
		$this->load->view('admin/v_siswa', $data);
	}
	function guru()
	{
		$data['data'] = $this->m_query->viewGuru();
		$data['mapel'] = $this->m_query->viewMapel();
		$this->load->view('admin/v_guru', $data);
	}
	function jurusan()
	{
		$data = $this->m_query->viewJurusan();
		$this->load->view('admin/v_jurusan', ['data'=>$data]);
	}
	function mapel()
	{
		$data = $this->m_query->viewMapel();
		$this->load->view('admin/v_mapel', ['data'=>$data]);
	}
	function soal()
	{
		$data = $this->m_query->viewSoal();
		$this->load->view('admin/v_soal', ['data'=>$data]);
	}
	function hasil()
	{
		$this->load->view('admin/v_hasil');
	}
	function input()
	{
		$data['mapel'] = $this->m_query->viewMapel();
		$data['guru'] = $this->m_query->viewGuru();
		$this->load->view('admin/input_soal', $data);
	}
  function edit($id)
  {
    $data['data'] = $this->m_query->ambilSoal($id);
		$this->load->view('admin/edit_soal', $data);
  }

}
