<?php

class M_admin extends CI_Model{

  // function dashboard($ses_id){
  //   $this->db->where('id_siswa', $ses_id);
  //   $hasil = $this->db->get('tb_siswa')->result();
  //   return $hasil;
  // }

  function raport_siswa(){
    $tampil = $this->db->get('tb_siswa')->result();
    return $tampil;
  }

  public function raport_hapus($id_siswa)
  {
    $this->db->where($id_siswa);
    $this->db->delete('tb_siswa');
  }

  public function raport_edit_up($data_edit, $id_siswa)
  {
    $this->db->where('id_siswa', $id_siswa);
    $this->db->update('tb_siswa', $data_edit);
  }

  

// kelas akhir


}

 ?>
