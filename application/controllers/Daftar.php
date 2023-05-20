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
    $this->load->view('template/header-daftar.php');
    $this->load->view('daftar/formulir');
    $this->load->view('template/footer-daftar.php');
  }

  public function daftar_up()
  {
    	$this->form_validation->set_rules('tgl_pendaftaran', 'trim|required|min_length[3]');
      $this->form_validation->set_rules('tgl_pendaftaran', 'trim|required|min_length[3]');

    }

}
