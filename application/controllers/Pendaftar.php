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

  public function tjkt()
  {
    $data['tampil'] = $this->M_pendaftar->val_tjkt();

    $this->load->view('template/header-pendaftar.php');
    $this->load->view('pendaftar/pendaftaran', $data);
    $this->load->view('template/footer-pendaftar.php');
  }

  public function pplg()
  {
    $data['tampil'] = $this->M_pendaftar->val_pplg();

    $this->load->view('template/header-pendaftar.php');
    $this->load->view('pendaftar/pendaftaran', $data);
    $this->load->view('template/footer-pendaftar.php');
  }

  public function mplb()
  {
    $data['tampil'] = $this->M_pendaftar->val_mplb();

    $this->load->view('template/header-pendaftar.php');
    $this->load->view('pendaftar/pendaftaran', $data);
    $this->load->view('template/footer-pendaftar.php');
  }

  public function akl()
  {
    $data['tampil'] = $this->M_pendaftar->val_akl();

    $this->load->view('template/header-pendaftar.php');
    $this->load->view('pendaftar/pendaftaran', $data);
    $this->load->view('template/footer-pendaftar.php');
  }

  public function tm()
  {
    $data['tampil'] = $this->M_pendaftar->val_tm();

    $this->load->view('template/header-pendaftar.php');
    $this->load->view('pendaftar/pendaftaran', $data);
    $this->load->view('template/footer-pendaftar.php');
  }

  public function to()
  {
    $data['tampil'] = $this->M_pendaftar->val_to();

    $this->load->view('template/header-pendaftar.php');
    $this->load->view('pendaftar/pendaftaran', $data);
    $this->load->view('template/footer-pendaftar.php');
  }

  
}
