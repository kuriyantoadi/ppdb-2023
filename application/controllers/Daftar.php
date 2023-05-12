<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

  public function __construct()
	{
        parent::__construct();
        $this->load->model('M_login');
        $this->load->model('M_siswa');

	}

//Login User
  public function index()
  {
    $this->load->view('login_tekno');
  }

//Login Tekno
  public function form()
  {
    $this->load->view('template/header-daftar.php');
    $this->load->view('daftar/formulir');
    $this->load->view('template/footer-daftar.php');
  }

  public function cetak_tekno()
  {
    $ses_id = $this->session->userdata('ses_id');
    $data['tampil'] = $this->M_siswa->dashboard_tekno($ses_id);

    $this->load->view('siswa_tekno/print', $data);
    
  }

  public function logout_tekno()
  {
    $this->session->sess_destroy();
    $url = base_url();
    redirect('C_login/siswa_tekno');
  }
  //Login Tekno Akhir


  //Login Bismen awal
    public function dashboard_bismen()
    {
      $ses_id = $this->session->userdata('ses_id');
      $data['tampil'] = $this->M_siswa->dashboard_bismen($ses_id);

      $this->load->view('template/header-siswa.php');
      $this->load->view('siswa_bismen/dashboard', $data);
      $this->load->view('template/footer-siswa.php');

    }

    public function cetak_bismen()
    {
      $ses_id = $this->session->userdata('ses_id');
      $data['tampil'] = $this->M_siswa->dashboard_bismen($ses_id);

      $this->load->view('siswa_bismen/print', $data);
    }

    public function logout_bismen()
    {
      $this->session->sess_destroy();
      $url = base_url();
      redirect('C_login/siswa_bismen');
    }

}
