<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_ulang extends CI_Controller {

  public function __construct()
    {
      parent::__construct();
      $this->load->model('M_admin');
      $this->load->model('M_pendaftar');
      $this->load->model('M_daftar_ulang');

      if ($this->session->userdata('pfqqe2266c') != true) {
				$url = base_url('index.php/Pendaftar/login');
				redirect($url);
			}
			
    }

  //Login User
  public function index()
  {
    $this->load->view('template/header-daftar-ulang.php');
    $this->load->view('pendaftar/dashboard');
    $this->load->view('template/footer-admin.php');
  }

  public function cetak_pakta_integritas()
  {
    $id_siswa_diterima = $this->session->userdata('id_siswa_diterima');
    $data['tampil'] = $this->M_daftar_ulang->cetak_pakta_integritas($id_siswa_diterima);

    $this->load->view('pendaftar/pakta-integritas', $data);
  }

  public function cetak_bukti_diterima()
  {
    $id_siswa_diterima = $this->session->userdata('id_siswa_diterima');
    $data['tampil'] = $this->M_daftar_ulang->cetak_pakta_integritas($id_siswa_diterima);

    $this->load->view('pendaftar/bukti-diterima', $data);
  }
  
  
  
  
}