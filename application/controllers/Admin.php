<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function __construct()
	{
			parent::__construct();
			$this->load->model('M_admin');
      $this->load->model('M_pendaftar');

      // session login
			if ($this->session->userdata('xeimaiPh9ahs4ie') != true) {
				$url = base_url('Login/fa');
				redirect($url);
			}
	}

  //Login User
  public function index()
  {
    $this->load->view('template/header-admin');
    $this->load->view('admin/dashboard');
    $this->load->view('template/footer-admin');
  }

  public function op_val()
  {
    $data['tampil'] = $this->M_pendaftar->validasi_data();

    $this->load->view('template/header-admin');
    $this->load->view('admin/op_val', $data);
    $this->load->view('template/footer-admin');
  }

 
}