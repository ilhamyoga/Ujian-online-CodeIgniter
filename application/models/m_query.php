<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_query extends CI_Model {

//-------------------------------------- USER LOGIN --------------------------------------//
	public function user_login($username, $password)
	{
		$this->db->select('*');
		$this->db->from('tb_user');
		$this->db->where(['username'=>$username]);
		$return = $this->db->get();

		if ($return->num_rows() > 0)
		{
			foreach ($return->result() as $row)
			{
				$this->load->model('m_hashed');
				if (!$this->m_hashed->hash_verify($password, $row->password)) {
					$this->session->set_flashdata('pesan', 'Username Dan password tidak valid');
					redirect('auth','refresh');
				}
				else
				{

					if ($row->level=="admin")
					{
						$dataUsers = $this->db->get_where('tb_user', ['username'=>$username]);
						foreach ($dataUsers->result() as $data)
						{
							$session = array('level' =>'admin',
											'username'=>$data->username);
									$this->session->set_userdata( $session);
						}
						redirect('admin/dashboard','refresh');
					}
					elseif ($row->level=="guru")
					{
						$dataUsers = $this->db->get_where('tb_user', ['username'=>$username]);
						foreach ($dataUsers->result() as $data)
						{
							$session = array('level' =>'guru',
											'username'=>$data->username);
									$this->session->set_userdata( $session);
						}
						redirect('guru/dashboard','refresh');
					}
					elseif ($row->level=="siswa")
					{
						$dataUsers = $this->db->get_where('tb_user', ['username'=>$username]);
						foreach ($dataUsers->result() as $data)
						{
							$session = array('level' =>'siswa',
											'username'=>$data->username);
									$this->session->set_userdata( $session);
						}
						redirect('siswa/dashboard','refresh');
					}

				}
			}
		}
		// jika gagal
		else
		{
			$this->session->set_flashdata('error', 'Username Dan password tidak valid');
			redirect('auth','refresh');
		}
	}

	public function viewUser($data)
	{
		$this->db->where('nis', $data);
		$this->db->select('tb_siswa.*, tb_jurusan.nama_jurusan');
		$this->db->from('tb_siswa');
		$this->db->join('tb_jurusan', 'tb_jurusan.id_jurusan = tb_siswa.id_jurusan', 'left');
		return $this->db->get();
	}
//----------------------------------------------------------------------------------------//

//---------------------------------------- SISWA -----------------------------------------//
	public function viewSiswa()
	{
		$this->db->select('tb_siswa.*, tb_jurusan.nama_jurusan');
		$this->db->from('tb_siswa');
		$this->db->join('tb_jurusan', 'tb_jurusan.id_jurusan = tb_siswa.id_jurusan', 'left');
		return $this->db->get();
	}

	public function tambahSiswa($data)
	{
    $this->db->insert('tb_siswa', $data);
  }

	public function ubahSiswa($id, $data){
		$this->db->where('id_siswa', $id);
		$this->db->update('tb_siswa', $data);
	}

	public function hapusSiswa($id)
	{
    $this->db->where('id_siswa', $id);
    $this->db->delete('tb_siswa');
	}
//----------------------------------------------------------------------------------------//

//---------------------------------------- GURU ------------------------------------------//
	public function viewGuru()
	{
		return $this->db->get('tb_guru');
	}

	public function tambahGuru($data)
	{
		$this->db->insert('tb_guru', $data);
	}

	public function ubahGuru($id, $data){
		$this->db->where('id_guru', $id);
		$this->db->update('tb_guru', $data);
	}

	public function hapusGuru($id)
	{
    $this->db->where('id_guru', $id);
    $this->db->delete('tb_guru');
	}

	public function diampu()
	{
		return $this->db->get('tb_mapel');
	}

	public function tambahDiampu($data)
	{
    $this->db->insert_batch('tb_guru_mapel', $data);
  }

//----------------------------------------------------------------------------------------//

//--------------------------------------- JURUSAN ----------------------------------------//
	public function viewJurusan()
	{
		return $this->db->get('tb_jurusan');
	}

	public function tambahJurusan($data)
	{
		$this->db->insert('tb_jurusan', $data);
	}

	public function ubahJurusan($id, $data){
		$this->db->where('id_jurusan', $id);
		$this->db->update('tb_jurusan', $data);
	}

	public function hapusJurusan($id)
	{
    $this->db->where('id_jurusan', $id);
    $this->db->delete('tb_jurusan');
	}
//----------------------------------------------------------------------------------------//

//------------------------------------ MATA PELAJARAN ------------------------------------//
	public function viewMapel()
	{
		return $this->db->get('tb_mapel');
	}

	public function tambahMapel($data)
	{
		$this->db->insert('tb_mapel', $data);
	}

	public function ubahMapel($id, $data){
		$this->db->where('id_mapel', $id);
		$this->db->update('tb_mapel', $data);
	}

	public function hapusMapel($id)
	{
		$this->db->where('id_mapel', $id);
		$this->db->delete('tb_mapel');
	}
//----------------------------------------------------------------------------------------//

//----------------------------------------- SOAL -----------------------------------------//
	public function viewSoal()
	{
		$this->db->select('tb_soal.*, tb_guru.nama_guru, tb_mapel.nama_mapel');
		$this->db->from('tb_soal');
		$this->db->join('tb_guru', 'tb_guru.id_guru = tb_soal.id_guru', 'left');
		$this->db->join('tb_mapel', 'tb_mapel.id_mapel = tb_soal.id_mapel', 'left');
		return $this->db->get();
	}

	public function tambahSoal($data)
	{
    $this->db->insert('tb_soal', $data);
  }

	public function ubahSoal($id, $data){
		$this->db->where('id_soal', $id);
		$this->db->update('tb_soal', $data);
	}

	public function ambilSoal($id){
		$data = $this->db->where(['id_soal'=>$id])
				 		 ->get("tb_soal");
		if ($data->num_rows() > 0) {
			return $data->row();
		}
	}

	public function hapusSoal($id)
	{
    $this->db->where('id_soal', $id);
    $this->db->delete('tb_soal');
	}
//----------------------------------------------------------------------------------------//

//----------------------------------------- UJIAN ----------------------------------------//
	public function viewUjian()
	{
		$this->db->select('tb_tes_ujian.*, tb_mapel.nama_mapel, tb_guru.nama_guru');
		$this->db->from('tb_tes_ujian');
		$this->db->join('tb_guru', 'tb_guru.id_guru = tb_tes_ujian.id_guru', 'left');
		$this->db->join('tb_mapel', 'tb_mapel.id_mapel = tb_tes_ujian.id_mapel', 'left');
		return $this->db->get();
	}

	public function tambahUjian($data)
	{
    $this->db->insert('tb_tes_ujian', $data);
  }

	public function ubahUjian($id, $data){
		$this->db->where('id_tes_ujian', $id);
		$this->db->update('tb__tes_ujian', $data);
	}

	public function hapusUjian($id)
	{
    $this->db->where('id_tes_ujian', $id);
    $this->db->delete('tb_tes_ujian');
	}
//----------------------------------------------------------------------------------------//

//----------------------------------------- TES ------------------------------------------//
	public function viewTes()
	{
		return $this->db->get('tb_soal');
	}

	public function ambilData($id){
		return $this->db->get_where('tb_tes_ujian', array('id_tes_ujian' => $id));
	}

//----------------------------------------------------------------------------------------//

	public function tambahUser($data)
	{
		$this->db->insert('tb_user', $data);
	}

	function get_token($panjang){
    $token = array(
      range(1,9),
      range('A','Z'),
    );

    $karakter = array();
    foreach ($token as $key => $val) {
      foreach ($val as $k => $v) {
        $karakter[] = $v;
      }
    }

    $token = null;
    for($i=1; $i<=$panjang; $i++){
      $token .= $karakter[rand($i, count($karakter)- 1)];
    }
    return $token;
  }

	function confirm_token($table,$where){
		return $this->db->get_where($table, $where);
	}

}
