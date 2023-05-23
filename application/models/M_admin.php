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

  

// kelas akhir


}

 ?>
