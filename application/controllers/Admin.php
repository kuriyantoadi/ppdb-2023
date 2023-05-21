<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function __construct()
	{
			parent::__construct();
			$this->load->model('M_login');
             $this->load->model('M_siswa');

      // session login
			// if ($this->session->userdata('siswa') != true) {
			// 	$url = base_url('C_login');
			// 	redirect($url);
			// }
	}

//Login User
  public function admin_raport_siswa()
  {
    $this->load->view('template/header-admin');
    $this->load->view('admin/admin_raport_siswa');
    $this->load->view('template/footer-admin');
  }

  public function admin_raport_detail()
  {
    $this->load->view('template/header-admin');
    $this->load->view('admin/admin_raport_detail');
    $this->load->view('template/footer-admin');
  }

  public function admin_raport_siswa_edit()
  {
    $this->load->view('template/header-admin');
    $this->load->view('admin/admin_raport_siswa_edit');
    $this->load->view('template/footer-admin');
  }



}
