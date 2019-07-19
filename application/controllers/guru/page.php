<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

  public function addUjian()
  {
    $nama_tes = $this->input->post('nama_tes');
    $mapel = $this->input->post('mapel');
    $jumlah_soal = $this->input->post('jumlah_soal');
    $tgl_mulai = $this->input->post('tgl_mulai');
    $wkt_mulai = $this->input->post('wkt_mulai');
    $tgl_selesai = $this->input->post('tgl_selesai');
    $wkt_selesai = $this->input->post('wkt_selesai');
    $waktu = $this->input->post('waktu');
    $acak = $this->input->post('acak');
    $guru = 05;
    $panjang = 5;
    $token = $this->m_query->get_token($panjang);

    $data = array('nama_ujian'=>$nama_tes, 'id_guru'=>$guru, 'id_mapel'=>$mapel, 'jumlah_soal'=>$jumlah_soal,
                  'tgl_mulai'=>$tgl_mulai." ".$wkt_mulai, 'tgl_selesai'=>$tgl_selesai." ".$wkt_selesai,
                  'waktu'=>$waktu, 'jenis'=>$acak, 'token'=>$token);
  	$proses = $this->m_query->tambahUjian($data);
    if (!$proses) {
  		redirect('guru/dashboard/ujian');
  	}
    else {
  		echo "Data Gagal Disimpan";
  		echo "<br>";
  		echo "<a href='".base_url('guru/dashboard/ujian')."'>Kembali ke form</a>";
  	}
  }

}
