<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

//---------------------------------------- SISWA -----------------------------------------//
  public function addSiswa(){
    $sql = $this->db->query("SELECT*FROM tb_siswa ORDER BY nis DESC LIMIT 1");
      foreach ($sql->result_array() as $row) {
        $row['nis'];
      }
    $ni = $row['nis'] + 1;
    $nis = str_pad($ni,6,"0",STR_PAD_LEFT);
    $nama = $this->input->post('nama');
    $jurusan = $this->input->post('jurusan');
    $level = "siswa";

    $this->load->model('m_hashed');
		$password = $this->m_hashed->hash_string($nis);
    $user = array('username' => $nis, 'password' => $password, 'level' => $level);
    $data = array('nis' => $nis, 'nama_siswa' => $nama, 'id_jurusan' => $jurusan);
	  $proses = $this->m_query->tambahSiswa($data);
    $proses = $this->m_query->tambahUser($user);
	  if (!$proses) {
		  redirect('admin/dashboard/siswa');
	  }
    else {
		  echo "Data Gagal Disimpan";
		  echo "<br>";
		  echo "<a href='".base_url('admin/dashboard/siswa')."'>Kembali ke form</a>";
	  }
  }

  public function editSiswa(){
     $id = $this->input->post('id');
	   $nis = $this->input->post('nis');
     $nama = $this->input->post('nama');
     $jurusan = $this->input->post('jurusan');
     $data = array('nis' => $nis, 'nama_siswa' => $nama, 'id_jurusan' => $jurusan);
     $proses = $this->m_query->ubahSiswa($id,$data);
 	   if (!$proses) {
 		    redirect('admin/dashboard/siswa');
 	   }
     else {
 		    echo "Data Gagal Diubah";
 		    echo "<br>";
 		    echo "<a href='".base_url('admin/dashboard/siswa')."'>Kembali ke form</a>";
 	   }
  }

  public function deleteSiswa($id){
    $this->m_query->hapusSiswa($id);
    redirect('admin/dashboard/siswa');
  }
//----------------------------------------------------------------------------------------//

//---------------------------------------- GURU ------------------------------------------//
  public function addGuru(){
    $sql = $this->db->query("SELECT*FROM tb_guru ORDER BY nip DESC LIMIT 1");
      foreach ($sql->result_array() as $row) {
        $row['nip'];
      }
    $ni = $row['nip'] + 1;
    $nip = str_pad($ni,4,"0",STR_PAD_LEFT);
    $nama = $this->input->post('nama');
    $level = "guru";

    $this->load->model('m_hashed');
  	$password = $this->m_hashed->hash_string($nip);
    $user = array('username' => $nip, 'password' => $password, 'level' => $level);
    $data = array('nip' => $nip, 'nama_guru' => $nama);
  	$proses = $this->m_query->tambahGuru($data);
    $proses = $this->m_query->tambahUser($user);
    if (!$proses) {
  		redirect('admin/dashboard/guru');
  	}
    else {
  		echo "Data Gagal Disimpan";
  		echo "<br>";
  		echo "<a href='".base_url('admin/dashboard/guru')."'>Kembali ke form</a>";
  	}
  }

  public function editGuru(){
     $id = $this->input->post('id');
	   $nip = $this->input->post('nip');
     $nama = $this->input->post('nama');
     $data = array('nip' => $nip, 'nama_guru' => $nama);
     $proses = $this->m_query->ubahGuru($id,$data);
 	   if (!$proses) {
 		    redirect('admin/dashboard/guru');
 	   }
     else {
 		    echo "Data Gagal Diubah";
 		    echo "<br>";
 		    echo "<a href='".base_url('admin/dashboard/guru')."'>Kembali ke form</a>";
 	   }
  }

  public function deleteGuru($id){
    $this->m_query->hapusGuru($id);
    redirect('admin/dashboard/guru');
  }

  public function diampu(){
    $nm = $this->input->post('mapel');
    $id = $this->input->post('id');
    $result = array();
    foreach ($nm as $key => $val) {
      $result[] = array(
        'id_guru' => $id,
        'id_mapel' => $_POST['mapel'][$key]
      );
    }
  	$proses = $this->m_query->tambahDiampu($result);
    if (!$proses) {
  		redirect('admin/dashboard/guru');
  	}
    else {
  		echo "Data Gagal Disimpan";
  		echo "<br>";
  		echo "<a href='".base_url('admin/dashboard/guru')."'>Kembali ke form</a>";
  	}
  }
//----------------------------------------------------------------------------------------//

//--------------------------------------- JURUSAN ----------------------------------------//
  public function addJurusan(){
    $nama = $this->input->post('nama');

    $data = array('nama_jurusan' => $nama);
  	$proses = $this->m_query->tambahJurusan($data);
    if (!$proses) {
  		redirect('admin/dashboard/jurusan');
  	}
    else {
  		echo "Data Gagal Disimpan";
  		echo "<br>";
  		echo "<a href='".base_url('admin/dashboard/jurusan')."'>Kembali ke form</a>";
  	}
  }

  public function editJurusan(){
     $id = $this->input->post('id');
     $nama = $this->input->post('nama');
     $data = array('nama_jurusan' => $nama);
     $proses = $this->m_query->ubahJurusan($id,$data);
 	   if (!$proses) {
 		    redirect('admin/dashboard/jurusan');
 	   }
     else {
 		    echo "Data Gagal Diubah";
 		    echo "<br>";
 		    echo "<a href='".base_url('admin/dashboard/jurusan')."'>Kembali ke form</a>";
 	   }
  }

  public function deleteJurusan($id){
    $this->m_query->hapusJurusan($id);
    redirect('admin/dashboard/jurusan');
  }
//----------------------------------------------------------------------------------------//

//---------------------------------------- MAPEL -----------------------------------------//
  public function addMapel(){
    $nama = $this->input->post('nama');

    $data = array('nama_mapel' => $nama);
  	$proses = $this->m_query->tambahMapel($data);
    if (!$proses) {
  		redirect('admin/dashboard/mapel');
  	}
    else {
  		echo "Data Gagal Disimpan";
  		echo "<br>";
  		echo "<a href='".base_url('admin/dashboard/mapel')."'>Kembali ke form</a>";
  	}
  }

  public function editMapel(){
     $id = $this->input->post('id');
     $nama = $this->input->post('nama');
     $data = array('nama_mapel' => $nama);
     $proses = $this->m_query->ubahMapel($id,$data);
 	   if (!$proses) {
 		    redirect('admin/dashboard/mapel');
 	   }
     else {
 		    echo "Data Gagal Diubah";
 		    echo "<br>";
 		    echo "<a href='".base_url('admin/dashboard/mapel')."'>Kembali ke form</a>";
 	   }
  }

  public function deleteMapel($id){
    $this->m_query->hapusMapel($id);
    redirect('admin/dashboard/mapel');
  }
//----------------------------------------------------------------------------------------//

//----------------------------------------- SOAL -----------------------------------------//
  public function addSoal(){
    $mapel = $this->input->post('mapel');
    $guru = $this->input->post('guru');
    $soal = $this->input->post('soal');
    $jwb_a = $this->input->post('jawabanA');
    $jwb_b = $this->input->post('jawabanB');
    $jwb_c = $this->input->post('jawabanC');
    $jwb_d = $this->input->post('jawabanD');
    $kunci = $this->input->post('Kjawaban');


    $data = array('id_mapel'=>$mapel, 'id_guru'=>$guru, 'soal'=>$soal, 'opsi_a'=>$jwb_a, 'opsi_b'=>$jwb_b, 'opsi_c'=>$jwb_c, 'opsi_d'=>$jwb_d,
                  'jawaban'=>$kunci);
  	$proses = $this->m_query->tambahSoal($data);
    if (!$proses) {
  		redirect('admin/dashboard/soal');
  	}
    else {
  		echo "Data Gagal Disimpan";
  		echo "<br>";
  		echo "<a href='".base_url('admin/dashboard/soal')."'>Kembali ke form</a>";
  	}
  }

  public function editSoal(){

  }

  public function deleteSoal($id){
    $this->m_query->hapusSoal($id);
    redirect('admin/dashboard/soal');
  }
//----------------------------------------------------------------------------------------//

}
