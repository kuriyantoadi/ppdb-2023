<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftar extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_pendaftar');
    $this->load->model('M_kompetensi');

    // $this->load->model('M_');
  }

  //Login User
  public function index()
  {
    $data['tampil'] = $this->M_pendaftar->val_semua();

    $this->load->view('template/header-pendaftar.php');
    $this->load->view('pendaftar/verifikasi', $data);
    $this->load->view('template/footer-pendaftar.php');
  }

  public function tjkt()
  {
    $data['tampil'] = $this->M_pendaftar->val_tjkt();

    $this->load->view('template/header-pendaftar.php');
    $this->load->view('pendaftar/verifikasi', $data);
    $this->load->view('template/footer-pendaftar.php');
  }

  public function pplg()
  {
    $data['tampil'] = $this->M_pendaftar->val_pplg();

    $this->load->view('template/header-pendaftar.php');
    $this->load->view('pendaftar/verifikasi', $data);
    $this->load->view('template/footer-pendaftar.php');
  }

  public function mplb()
  {
    $data['tampil'] = $this->M_pendaftar->val_mplb();

    $this->load->view('template/header-pendaftar.php');
    $this->load->view('pendaftar/verifikasi', $data);
    $this->load->view('template/footer-pendaftar.php');
  }

  public function akl()
  {
    $data['tampil'] = $this->M_pendaftar->val_akl();

    $this->load->view('template/header-pendaftar.php');
    $this->load->view('pendaftar/verifikasi', $data);
    $this->load->view('template/footer-pendaftar.php');
  }

  public function tm()
  {
    $data['tampil'] = $this->M_pendaftar->val_tm();

    $this->load->view('template/header-pendaftar.php');
    $this->load->view('pendaftar/verifikasi', $data);
    $this->load->view('template/footer-pendaftar.php');
  }

  public function to()
  {
    $data['tampil'] = $this->M_pendaftar->val_to();

    $this->load->view('template/header-pendaftar.php');
    $this->load->view('pendaftar/verifikasi', $data);
    $this->load->view('template/footer-pendaftar.php');
  }

  public function upload_pengajuan()
  {
    $data['tampil_1'] = $this->M_pendaftar->tampil_kompetensi_1();
    $data['tampil_2'] = $this->M_pendaftar->tampil_kompetensi_2();

    $this->load->view('template/header-pendaftar.php');
    $this->load->view('pendaftar/upload_pengajuan', $data);
    $this->load->view('template/footer-pendaftar.php');
  }

  function upload_pengajuan_up(){
	
    $this->form_validation->set_rules('tgl_pendaftaran','Tgl_pendaftaran', 'trim','required','min_length[3]');
    $this->form_validation->set_rules('no_pendaftaran','No_pendaftaran', 'trim','required','min_length[3]'); 
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
    $this->form_validation->set_rules('no_wa_org_tua','No_wa_org_tua', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
      echo 'upload error';    
      echo validation_errors();
      exit ();

      // $url = site_url('Daftar/index');
      // echo $this->session->set_flashdata('msg', '

      //   <div class="alert alert-danger alert-dismissible fade show" role="alert">
      //    Proses Pendaftaran gagal, silahkan dicoba kembali.
      //   </div>
      //   ');
      // redirect($url);

    } else {

    // awal cek dan upload file skl
      $config['upload_path'] = 'assets/upload_file';
      $config['allowed_types'] = 'pdf';
      $config['max_size'] = '1200'; //MB
      $config['encrypt_name']     = TRUE;

      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('pdf_pengajuan_pendaftaran')) {

       $error = array('error' => $this->upload->display_errors());
            echo var_dump($error);
            // exit();
      } else {
        $upload_pengajuan_pendaftaran = $this->upload->data();
      }
    // akhir cek dan upload file skl

      // eksekusi query INSERT
      $data_tambah = array(

        'tgl_pendaftaran'   => set_value('tgl_pendaftaran'),
        'no_pendaftaran'   => set_value('no_pendaftaran'),
        'id_kompetensi_1' => set_value('id_kompetensi_1'),
        'id_kompetensi_2' => set_value('id_kompetensi_2'),
        'nisn_siswa'   => set_value('nisn_siswa'),
        'password'   => md5(set_value('nisn_siswa')),
        'asal_sekolah'   => set_value('asal_sekolah'),
        'nama_siswa'   => set_value('nama_siswa'),
        'tempat_lahir'   => set_value('tempat_lahir'),
        'tgl_lahir'   => set_value('tgl_lahir'),
        'no_wa_siswa'   => set_value('no_wa_siswa'),
        'alamat'   => set_value('alamat'),
        'nama_org_tua'   => set_value('nama_org_tua'),
        'no_wa_org_tua'   => set_value('no_wa_org_tua'),

        'status_siswa'   => 'siswa',
        'pdf_pengajuan_pendaftaran' => $upload_pengajuan_pendaftaran['file_name'],
        
      );

      $this->M_pendaftar->upload_pengajuan_up($data_tambah);

      $url = site_url('index.php/Pendaftar');
      echo $this->session->set_flashdata('msg', '

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Upload Pengajuan Pendaftaran Berhasil
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
      redirect($url);

    }
    
  }
				
	
  
}
