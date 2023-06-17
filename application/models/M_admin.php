<?php

class M_admin extends CI_Model{


  //awal siswa
  public function siswa_hapus($id_siswa)
  {
    $this->db->where($id_siswa);
    $this->db->delete('tb_pendaftar');
  }

  public function siswa_edit($id_siswa)
  {
    $this->db->select('*');
    $this->db->from('tb_pendaftar');
    $this->db->join('tb_kompetensi_1', 'tb_pendaftar.id_kompetensi_1 = tb_kompetensi_1.id_kompetensi_1');
    $this->db->join('tb_kompetensi_2', 'tb_pendaftar.id_kompetensi_2 = tb_kompetensi_2.id_kompetensi_2');
    $this->db->where('id_siswa', $id_siswa);
    $query = $this->db->get()->result();
    return $query;
  }

  function siswa_edit_up($data_edit, $id_siswa)
  {
    $this->db->where('id_siswa', $id_siswa);
    $this->db->update('tb_pendaftar', $data_edit);
  }
  // akhir siswa


  // dashboard awal
  function count_siswa($ses_kompetensi)
  {
    $this->db->select('*');
    $this->db->from('tb_pendaftar');
    $this->db->join('tb_kompetensi_1', 'tb_pendaftar.id_kompetensi_1 = tb_kompetensi_1.id_kompetensi_1');
    $this->db->where('short_kompetensi_1', $ses_kompetensi);
    $query = $this->db->count_all_results();
    return $query;
  }

  function count_terverifikasi($ses_kompetensi)
  {
    $this->db->select('*');
    $this->db->from('tb_pendaftar');
    $this->db->join('tb_kompetensi_1', 'tb_pendaftar.id_kompetensi_1 = tb_kompetensi_1.id_kompetensi_1');
    $this->db->where('short_kompetensi_1', $ses_kompetensi);
    $this->db->where('status_verifikasi', 'Data Sesuai');
    $query = $this->db->count_all_results();
    return $query;
  }

  // function count_belum_terverifikasi($ses_kompetensi)
  // {
  //   $this->db->select('*');
  //   $this->db->from('tb_pendaftar');
  //   $this->db->join('tb_kompetensi_1', 'tb_pendaftar.id_kompetensi_1 = tb_kompetensi_1.id_kompetensi_1');
  //   $this->db->where('short_kompetensi_1', $ses_kompetensi);
  //   $this->db->where('short_kompetensi_1', $ses_kompetensi);
  //   $query = $this->db->count_all_results();
  //   return $query;
  // }

  // dashboard akhir



}

 ?>
