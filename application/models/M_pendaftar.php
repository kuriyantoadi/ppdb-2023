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

  public function val_tjkt()
  {
    $this->db->where('kompetensi_keahlian', 'Teknik Jaringan Komputer dan Telekomunikasi');
    $hasil = $this->db->get('tb_pendaftar')->result();
    return $hasil;
  }

  public function val_pplg()
  {
    $this->db->where('kompetensi_keahlian', 'Pengembangan Perangkat Lunak dan Gim');
    $hasil = $this->db->get('tb_pendaftar')->result();
    return $hasil;
  }

  public function val_tm()
  {
    $this->db->where('kompetensi_keahlian', 'Teknik Pemesinan');
    $hasil = $this->db->get('tb_pendaftar')->result();
    return $hasil;
  }

  public function val_to()
  {
    $this->db->where('kompetensi_keahlian', 'Teknik Otomotif');
    $hasil = $this->db->get('tb_pendaftar')->result();
    return $hasil;
  }

  public function val_akl()
  {
    $this->db->where('kompetensi_keahlian', 'Akuntansi dan Keuangan Lembaga');
    $hasil = $this->db->get('tb_pendaftar')->result();
    return $hasil;
  }

  public function val_mplb()
  {
    $this->db->where('kompetensi_keahlian', 'Managemen Perkantoran dan Layanan Bisnis');
    $hasil = $this->db->get('tb_pendaftar')->result();
    return $hasil;
  }

}

 ?>
