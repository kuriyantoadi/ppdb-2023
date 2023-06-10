<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftar extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_pendaftar');
    // $this->load->model('M_');
  }

  //Login User
  public function index()
  {
    $data['tampil'] = $this->M_pendaftar->validasi_data();

    $this->load->view('template/header-pendaftar.php');
    $this->load->view('pendaftar/pendaftaran', $data);
    $this->load->view('template/footer-pendaftar.php');
  }

  
}
