<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function __construct()
	{
			parent::__construct();
			$this->load->model('M_admin');
      // $this->load->model('M_siswa');

      // session login
			if ($this->session->userdata('xeimaiPh9ahs4ie') != true) {
				// $url = base_url('Login/fa');
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

  public function raport_siswa()
  {
    $data['tampil'] = $this->M_admin->raport_siswa();

    $this->load->view('template/header-admin');
    $this->load->view('admin/raport_siswa', $data);
    $this->load->view('template/footer-admin');
  }

  public function raport_detail($id_siswa)
  {
    $id_siswa = array('id_siswa' => $id_siswa);
    $data['tampil'] = $this->M_admin->raport_siswa($id_siswa );

    $this->load->view('template/header-admin');
    $this->load->view('admin/raport_detail', $data);
    $this->load->view('template/footer-admin');
  }

  public function admin_raport_siswa_edit()
  {
    $this->load->view('template/header-admin');
    $this->load->view('admin/admin_raport_siswa_edit');
    $this->load->view('template/footer-admin');
  }

  public function raport_hapus($id_siswa)
  {
    $id_siswa = array('id_siswa' => $id_siswa);

    $success = $this->M_admin->raport_hapus($id_siswa);
    $this->session->set_flashdata('msg', '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Hapus Siswa Berhasil</strong>

          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');
    redirect('index.php/Admin/raport_siswa');

  }
}