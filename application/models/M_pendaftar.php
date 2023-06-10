<?php

class M_pendaftar extends CI_Model{

  public function siswa_daftar_up($data_tambah)
  {
    $this->db->insert('tb_siswa', $data_tambah);
  }

  public function validasi_data()
  {
    $tampil = $this->db->get('tb_pendaftar')->result();
    return $tampil;
  }


}

 ?>
