<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function __construct()
	{
			parent::__construct();
			$this->load->model('M_admin');
      $this->load->model('M_daftar');

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
    $this->load->view('admin/raport_siswa_edit');
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

  public function raport_edit($id_siswa)
  {
      $id_siswa = array('id_siswa' => $id_siswa);
      $data['tampil'] = $this->M_admin->raport_siswa($id_siswa );
      $data['tampil_kompetensi'] = $this->M_daftar->kompetensi_keahlian();

      $this->load->view('template/header-admin');
      $this->load->view('admin/raport_edit', $data);
      $this->load->view('template/footer-admin');
  }

  public function raport_edit_up()
  {
    $id_siswa = $this->input->post('id_siswa');
    $this->form_validation->set_rules('kompetensi_keahlian','kompetensi_keahlian', 'trim','required','min_length[3]');
    $this->form_validation->set_rules('kompetensi_keahlian_2','kompetensi_keahlian_2', 'trim','required','min_length[3]');
    $this->form_validation->set_rules('nisn_siswa','Nisn_siswa', 'trim','required','min_length[3]');
    $this->form_validation->set_rules('asal_sekolah','Asal_sekolah', 'trim','required','min_length[3]');
   
    $this->form_validation->set_rules('nama_siswa','Nama_siswa', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('jenis_kelamin','jenis_kelamin', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('tempat_lahir','Tempat_lahir', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('tgl_lahir','Tgl_lahir', 'trim|required');
    $this->form_validation->set_rules('tahun_lulus','Tahun_lulus', 'trim|required|min_length[3]');

    $this->form_validation->set_rules('no_wa_siswa','No_wa_siswa', 'trim|required');
    $this->form_validation->set_rules('alamat','Alamat', 'trim|required|min_length[1]');
    $this->form_validation->set_rules('nama_org_tua','Nama_org_tua', 'trim|required|min_length[1]');
   
    if ($this->form_validation->run() == FALSE) {
      
      echo 'validasi error';  
      $test = $this->form_validation->error_array();
      var_dump($test);

    } else {

      $data_edit = array(

        'kompetensi_keahlian' => set_value('kompetensi_keahlian'),
        'kompetensi_keahlian_2' => set_value('kompetensi_keahlian_2'),
        'nisn_siswa'   => set_value('nisn_siswa'),
        'asal_sekolah'   => set_value('asal_sekolah'),
        'nama_siswa'   => set_value('nama_siswa'),
        'jenis_kelamin'   => set_value('jenis_kelamin'),
        'tempat_lahir'   => set_value('tempat_lahir'),
        'tgl_lahir'   => set_value('tgl_lahir'),
        'tahun_lulus'   => set_value('tahun_lulus'),
        'no_wa_siswa'   => set_value('no_wa_siswa'),
        'alamat'   => set_value('alamat'),
        'nama_org_tua'   => set_value('nama_org_tua'),
        'no_wa_org_tua' => set_value('no_wa_org_tua')

      );

      $this->M_admin->raport_edit_up($data_edit, $id_siswa);

      $this->session->set_flashdata('msg', '
          <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>Edit Data Siswa Berhasil</strong>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
          var_dump($id_siswa);
      // redirect('index.php/Admin/raport_edit'.$id_siswa);

    }

    
  }

  
}