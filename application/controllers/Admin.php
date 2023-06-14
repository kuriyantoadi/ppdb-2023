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

  // awal data siswa

  public function siswa_tampil()
  {
    $data['tampil'] = $this->M_pendaftar->siswa_tampil();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/siswa_tampil', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function siswa_tjkt()
  {
    $data['tampil'] = $this->M_pendaftar->val_tjkt();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/siswa_tampil', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function siswa_pplg()
  {
    $data['tampil'] = $this->M_pendaftar->val_pplg();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/siswa_tampil', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function siswa_mplb()
  {
    $data['tampil'] = $this->M_pendaftar->val_mplb();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/siswa_tampil', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function siswa_akl()
  {
    $data['tampil'] = $this->M_pendaftar->val_akl();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/siswa_tampil', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function siswa_tm()
  {
    $data['tampil'] = $this->M_pendaftar->val_tm();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/siswa_tampil', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function siswa_to()
  {
    $data['tampil'] = $this->M_pendaftar->val_to();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/siswa_tampil', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function siswa_hapus($id_siswa){
    $id_siswa = array('id_siswa' => $id_siswa);

    $success = $this->M_admin->siswa_hapus($id_siswa);
    $this->session->set_flashdata('msg', '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Hapus Data Siswa Berhasil
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    ');
    redirect('index.php/Admin/siswa_tampil');
  }

  public function siswa_edit($id_siswa)
  {
    $data['tampil'] = $this->M_admin->siswa_edit($id_siswa);
    $data['tampil_1'] = $this->M_pendaftar->tampil_kompetensi_1();
    $data['tampil_2'] = $this->M_pendaftar->tampil_kompetensi_2();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/siswa_edit', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function siswa_edit_up()
  {
    $id_siswa = $this->input->post('id_siswa');
    $this->form_validation->set_rules('id_kompetensi_1','Id_kompetensi_1', 'trim','required','min_length[1]');
    $this->form_validation->set_rules('id_kompetensi_2','Id_kompetensi_2', 'trim','required','min_length[1]');

    $this->form_validation->set_rules('nisn_siswa','Nisn_siswa', 'trim','required','min_length[3]');
    $this->form_validation->set_rules('asal_sekolah','Asal_sekolah', 'trim','required','min_length[3]');
   
    $this->form_validation->set_rules('nama_siswa','Nama_siswa', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('tempat_lahir','Tempat_lahir', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('tgl_lahir','Tgl_lahir', 'trim|required');

    $this->form_validation->set_rules('no_wa_siswa','No_wa_siswa', 'trim|required');
    $this->form_validation->set_rules('alamat','Alamat', 'trim|required|min_length[1]');
    $this->form_validation->set_rules('nama_org_tua','Nama_org_tua', 'trim|required|min_length[1]');
   
    if ($this->form_validation->run() == FALSE) {
      
      echo 'validasi error';  
      $test = $this->form_validation->error_array();
      var_dump($test);

    } else {

      $data_edit = array(

        'id_kompetensi_1' => set_value('id_kompetensi_1'),
        'id_kompetensi_1' => set_value('id_kompetensi_2'),
        'nisn_siswa'   => set_value('nisn_siswa'),
        'asal_sekolah'   => set_value('asal_sekolah'),
        'nama_siswa'   => set_value('nama_siswa'),
        'tempat_lahir'   => set_value('tempat_lahir'),
        'tgl_lahir'   => set_value('tgl_lahir'),
        'no_wa_siswa'   => set_value('no_wa_siswa'),
        'alamat'   => set_value('alamat'),
        'nama_org_tua'   => set_value('nama_org_tua'),
        'no_wa_org_tua' => set_value('no_wa_org_tua')

      );

      $this->M_admin->siswa_edit_up($data_edit, $id_siswa);

      $this->session->set_flashdata('msg', '
          <div class="alert alert-info alert-dismissible fade show" role="alert">
            Edit Data Siswa Berhasil
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
           </div>');
          // var_dump($id_siswa);
      redirect('index.php/Admin/siswa_detail/'.$id_siswa);

    }

    
  }
  // akhir data siswa


  // awal val
  public function val_semua()
  {
    $data['tampil'] = $this->M_pendaftar->val_semua();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/op_verifikasi', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function val_tjkt()
  {
    $data['tampil'] = $this->M_pendaftar->val_tjkt();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/op_verifikasi', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function val_pplg()
  {
    $data['tampil'] = $this->M_pendaftar->val_pplg();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/op_verifikasi', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function val_mplb()
  {
    $data['tampil'] = $this->M_pendaftar->val_mplb();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/op_verifikasi', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function val_akl()
  {
    $data['tampil'] = $this->M_pendaftar->val_akl();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/op_verifikasi', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function val_tm()
  {
    $data['tampil'] = $this->M_pendaftar->val_tm();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/op_verifikasi', $data);
    $this->load->view('template/footer-admin.php');
  }

  public function val_to()
  {
    $data['tampil'] = $this->M_pendaftar->val_to();

    $this->load->view('template/header-admin.php');
    $this->load->view('admin/op_verifikasi', $data);
    $this->load->view('template/footer-admin.php');
  }

  // public function val_to()
  // {
  //   $data['tampil'] = $this->M_pendaftar->val_to();

  //   $this->load->view('template/header-admin');
  //   $this->load->view('admin/siswa_tambah', $data);
  //   $this->load->view('template/footer-admin');
  // }
  
  
 
}