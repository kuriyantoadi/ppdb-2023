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

  public function val_semua()
  {
    $data['tampil'] = $this->M_pendaftar->validasi_data();

    $this->load->view('template/header-admin');
    $this->load->view('admin/op_val', $data);
    $this->load->view('template/footer-admin');
  }

  public function val_pplg()
  {
    $data['tampil'] = $this->M_pendaftar->val_pplg();

    $this->load->view('template/header-admin');
    $this->load->view('admin/op_val', $data);
    $this->load->view('template/footer-admin');
  }

  public function val_tjkt()
  {
    $data['tampil'] = $this->M_pendaftar->val_tjkt();

    $this->load->view('template/header-admin');
    $this->load->view('admin/op_val', $data);
    $this->load->view('template/footer-admin');
  }

  public function val_akl()
  {
    $data['tampil'] = $this->M_pendaftar->val_akl();

    $this->load->view('template/header-admin');
    $this->load->view('admin/op_val', $data);
    $this->load->view('template/footer-admin');
  }

  public function val_mplb()
  {
    $data['tampil'] = $this->M_pendaftar->val_mplb();

    $this->load->view('template/header-admin');
    $this->load->view('admin/op_val', $data);
    $this->load->view('template/footer-admin');
  }
  
  public function val_tm()
  {
    $data['tampil'] = $this->M_pendaftar->val_tm();

    $this->load->view('template/header-admin');
    $this->load->view('admin/op_val', $data);
    $this->load->view('template/footer-admin');
  }

  public function val_to()
  {
    $data['tampil'] = $this->M_pendaftar->val_to();

    $this->load->view('template/header-admin');
    $this->load->view('admin/op_val', $data);
    $this->load->view('template/footer-admin');
  }

  // public function val_to()
  // {
  //   $data['tampil'] = $this->M_pendaftar->val_to();

  //   $this->load->view('template/header-admin');
  //   $this->load->view('admin/siswa_tambah', $data);
  //   $this->load->view('template/footer-admin');
  // }
  
  
 
}