<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar extends CI_Controller
{

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
    $this->load->view('siswa/siswa-daftar');
    $this->load->view('template/footer-daftar.php');
  }

  public function daftar_up()
  {
    // $this->form_validation->set_rules('tgl_pendaftaran','Tgl_pendaftaran', 'trim', 'required');

    $this->form_validation->set_rules('tgl_pendaftaran','Tgl_pendaftaran', 'trim','required','min_length[3]');
    $this->form_validation->set_rules('kompentesi_keahlian','Kompentesi_keahlian', 'trim','required','min_length[3]');
    $this->form_validation->set_rules('kompentesi_keahlian_2','Kompentesi_keahlian_2', 'trim','required','min_length[3]');
    $this->form_validation->set_rules('nisn_siswa','Nisn_siswa', 'trim','required','min_length[3]');
    $this->form_validation->set_rules('asal_sekolah','Asal_sekolah', 'trim','required','min_length[3]');
   
    $this->form_validation->set_rules('nama_siswa','Nama_siswa', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('jenis_kelamin','jenis_kelamin', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('tempat_lahir','Tempat_lahir', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('tgl_lahir','Tgl_lahir', 'trim|required');
    $this->form_validation->set_rules('bln_lahir','Bln_lahir', 'trim|required');
    $this->form_validation->set_rules('thn_lahir','Thn_lahir', 'trim|required');
    $this->form_validation->set_rules('tahun_lulus','Tahun_lulus', 'trim|required|min_length[3]');

    $this->form_validation->set_rules('no_wa_siswa','No_wa_siswa', 'trim|required');
    $this->form_validation->set_rules('alamat','Alamat', 'trim|required|min_length[1]');
    $this->form_validation->set_rules('nama_org_tua','Nama_org_tua', 'trim|required|min_length[1]');
   
    $this->form_validation->set_rules('no_wa_org_tua','No_wa_org_tua', 'trim|required|min_length[1]');
    $this->form_validation->set_rules('sm_1_agama','Sm_1_agama', 'trim|required');
    $this->form_validation->set_rules('sm_1_bindo','Sm_1_bindo','trim|required');
    $this->form_validation->set_rules('sm_1_mtk','Sm_1_mtk', 'trim|required');
    $this->form_validation->set_rules('sm_1_ipa','Sm_1_ipa', 'trim|required');
    $this->form_validation->set_rules('sm_1_bing','Sm_1_bing', 'trim|required');

    $this->form_validation->set_rules('sm_2_agama','Sm_2_agama', 'trim|required');
    $this->form_validation->set_rules('sm_2_bindo','Sm_2_bindo', 'trim|required');
    $this->form_validation->set_rules('sm_2_mtk','Sm_3_bindo', 'trim|required');
    $this->form_validation->set_rules('sm_2_ipa','Sm_2_ipa', 'trim|required');
    $this->form_validation->set_rules('sm_2_bing','Sm_2_bing', 'trim|required');
    $this->form_validation->set_rules('sm_3_agama','Sm_3_agama', 'trim|required');
    $this->form_validation->set_rules('sm_3_bindo','Sm_3_bindo', 'trim|required');
    $this->form_validation->set_rules('sm_3_mtk','Sm_3_mtk', 'trim|required');
    $this->form_validation->set_rules('sm_3_ipa','Sm_3_ipa', 'trim|required');
    $this->form_validation->set_rules('sm_3_bing','Sm_3_bing', 'trim|required');

    $this->form_validation->set_rules('sm_4_agama','Sm_4_agama', 'trim|required');
    $this->form_validation->set_rules('sm_4_bindo','Sm_4_bindo', 'trim|required');
    $this->form_validation->set_rules('sm_4_mtk','Sm_4_mtk', 'trim|required');
    $this->form_validation->set_rules('sm_4_ipa','Sm_4_ipa', 'trim|required');
    $this->form_validation->set_rules('sm_4_bing','Sm_4_bing', 'trim|required');

    $this->form_validation->set_rules('sm_5_agama','Sm_5_agama', 'trim|required');
    $this->form_validation->set_rules('sm_5_bindo','Sm_5_bindo', 'trim|required');
    $this->form_validation->set_rules('sm_5_mtk','Sm_5_mtk', 'trim|required');
    $this->form_validation->set_rules('sm_5_ipa','Sm_5_ipa', 'trim|required');
    $this->form_validation->set_rules('sm_5_bing','Sm_5_bing', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
      // $url = site_url('Daftar/index');
      // echo $this->session->set_flashdata('msg', '

      //   <div class="alert alert-danger alert-dismissible fade show" role="alert">
      //    Proses Pendaftaran gagal, silahkan dicoba kembali.
      //   </div>
      //   ');
      // redirect($url);

    echo 'test';    


    } else {

    // awal cek dan upload file skl
      $config['upload_path'] = './asstes/upload_file';
      $config['allowed_types'] = 'pdf';
      $config['max_size'] = '400'; //MB
      $config['encrypt_name']     = TRUE;

      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('file_skl')) {
        //file gagal diupload -> kembali ke form tambah
       $url = site_url('Daftar/index');
       echo $this->session->set_flashdata('msg', '

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
         Proses Pendaftaran gagal, file SKL terlalu besar/SKL tidak PDF.
        </div>
        ');
      redirect($url);

      } else {
        $upload_skl = $this->upload->data();
      }
    // akhir cek dan upload file skl

    // awal cek dan upload file raport 1
      $config['upload_path'] = './asstes/upload_file';
      $config['allowed_types'] = 'pdf';
      $config['max_size'] = '400'; //MB
      $config['encrypt_name']     = TRUE;

      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('file_raport_1')) {
        //file gagal diupload -> kembali ke form tambah
       $url = site_url('Daftar/index');
       echo $this->session->set_flashdata('msg', '

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
         Proses Pendaftaran gagal, file Raport Semester 1 terlalu besar/Raport Semester 1 tidak PDF.
        </div>
        ');
      redirect($url);

      } else {
        $upload_raport1 = $this->upload->data();
      }
    // akhir cek dan upload file raport 1


    // awal cek dan upload file raport 2
      $config['upload_path'] = './asstes/upload_file';
      $config['allowed_types'] = 'pdf';
      $config['max_size'] = '400'; //MB
      $config['encrypt_name']     = TRUE;

      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('file_raport_2')) {
        //file gagal diupload -> kembali ke form tambah
       $url = site_url('Daftar/index');
       echo $this->session->set_flashdata('msg', '

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
         Proses Pendaftaran gagal, file Raport Semester 2 terlalu besar/Raport Semester 2 tidak PDF.
        </div>
        ');
      redirect($url);

      } else {
        $upload_raport2 = $this->upload->data();
      }
    // akhir cek dan upload file raport 2


    // awal cek dan upload file raport 3
      $config['upload_path'] = './asstes/upload_file';
      $config['allowed_types'] = 'pdf';
      $config['max_size'] = '400'; //MB
      $config['encrypt_name']     = TRUE;

      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('file_raport_3')) {
        //file gagal diupload -> kembali ke form tambah
       $url = site_url('Daftar/index');
       echo $this->session->set_flashdata('msg', '

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
         Proses Pendaftaran gagal, file Raport Semester 3 terlalu besar/Raport Semester 3 tidak PDF.
        </div>
        ');
      redirect($url);

      } else {
        $upload_raport3 = $this->upload->data();
      }
    // akhir cek dan upload file raport 3


    // awal cek dan upload file raport 4
      $config['upload_path'] = './asstes/upload_file';
      $config['allowed_types'] = 'pdf';
      $config['max_size'] = '400'; //MB
      $config['encrypt_name']     = TRUE;

      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('file_raport_4')) {
        //file gagal diupload -> kembali ke form tambah
       $url = site_url('Daftar/index');
       echo $this->session->set_flashdata('msg', '

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
         Proses Pendaftaran gagal, file Raport Semester 4 terlalu besar/Raport Semester 4 tidak PDF.
        </div>
        ');
      redirect($url);

      } else {
        $upload_raport4 = $this->upload->data();
      }
    // akhir cek dan upload file raport 4


    // awal cek dan upload file raport 5
      $config['upload_path'] = './asstes/upload_file';
      $config['allowed_types'] = 'pdf';
      $config['max_size'] = '400'; //MB
      $config['encrypt_name']     = TRUE;

      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('file_raport_5')) {
        //file gagal diupload -> kembali ke form tambah
       $url = site_url('Daftar/index');
       echo $this->session->set_flashdata('msg', '

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
         Proses Pendaftaran gagal, file Raport Semester 5 terlalu besar/Raport Semester 5 tidak PDF.
        </div>
        ');
      redirect($url);

      } else {
        $upload_raport5 = $this->upload->data();
      }
    // akhir cek dan upload file raport 5
    
      $config['upload_path'] = './uploads/';
      $config['allowed_types'] = 'jpg|png';
      $config['max_size'] = '400'; //MB
 

      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('gambar1')) {
        //file gagal diupload -> kembali ke form tambah
        $this->load->view('backend/form_tambah_product');
      } else {
        $upload_data2 = $this->upload->data();
      }
      //file berhasil diupload -> lanjutkan ke query INSERT

      // eksekusi query INSERT
      $data_tambah = array(

        'tgl_pendaftaran'   => set_value('tgl_pendaftaran'),
        'kompentesi_keahlian' => set_value('kompentesi_keahlian'),
        'kompentesi_keahlian_2' => set_value('kompentesi_keahlian_2'),
        'nisn_siswa'   => set_value('nisn_siswa'),
        'asal_sekolah'   => set_value('asal_sekolah'),
        'nama_siswa'   => set_value('nama_siswa'),
        'jenis_kelaimin'   => set_value('jenis_kelaimin'),
        'tempat_lahir'   => set_value('tempat_lahir'),
        'tgl_lahir'   => set_value('tgl_lahir'),
        'tahun_lulus'   => set_value('tahun_lulus'),
        'no_swa_siswa'   => set_value('no_swa_siswa'),
        'alamat'   => set_value('alamat'),
        'nama_org_tua'   => set_value('nama_org_tua'),
        'no_wa_org_tua'   => set_value('no_wa_org_tua'),
        'sm_1_agama'   => set_value('sm_1_agama'),
        'sm_1_bindo'   => set_value('sm_1_bindo'),
        'sm_1_mtk'   => set_value('sm_1_mtk'),
        'sm_1_ipa'   => set_value('sm_1_ipa'),
        'sm_1_bing'   => set_value('sm_1_bing'),
        'sm_2_agama'   => set_value('sm_2_agama'),
        'sm_2_bindo'   => set_value('sm_2_bindo'),
        'sm_2_mtk'   => set_value('sm_2_mtk'),
        'sm_2_ipa'   => set_value('sm_2_ipa'),
        'sm_2_bing'   => set_value('sm_2_bing'),
        'sm_3_agama'   => set_value('sm_3_agama'),
        'sm_3_bindo'   => set_value('sm_3_bindo'),
        'sm_3_mtk'   => set_value('sm_3_mtk'),
        'sm_3_ipa'   => set_value('sm_3_ipa'),
        'sm_3_bing'   => set_value('sm_3_bing'),
        'sm_4_agama'   => set_value('sm_4_agama'),
        'sm_4_bindo'   => set_value('sm_4_bindo'),
        'sm_4_mtk'   => set_value('sm_4_mtk'),
        'sm_4_ipa'   => set_value('sm_4_ipa'),
        'sm_4_bing'   => set_value('sm_4_bing'),
        'sm_5_agama'   => set_value('sm_5_agama'),
        'sm_5_bindo'   => set_value('sm_5_bindo'),
        'sm_5_mtk'   => set_value('sm_5_mtk'),
        'sm_5_ipa'   => set_value('sm_5_ipa'),
        'sm_5_bing'   => set_value('sm_5_bing'),
        
        'file_skl' => $upload_skl['file_skl'],
        'file_raport_1' => $upload_raport1['file_raport_1'],
        'file_raport_2' => $upload_raport1['file_raport_2'],
        'file_raport_3' => $upload_raport1['file_raport_3'],
        'file_raport_4' => $upload_raport1['file_raport_4'],
        'file_raport_5' => $upload_raport1['file_raport_5'],


      );
      $this->M_daftar->siswa_daftar_up($data_tambah);
    }
    
  }

  // awal contoh
  


  // akhir contoh

  public function prestasi_tambah_up()
  {
    $config['upload_path']      = 'assets/photo_prestasi/';
    $config['allowed_types']    = 'gif|jpg|png';
    $config['max_size']         = 4000;
    $config['encrypt_name']     = TRUE;
    // $id_lapangan = $this->input->post('id_lapangan');


    $this->load->library('upload', $config);
    if (!$this->upload->do_upload('photo_prestasi')) {
      $error = array('error' => $this->upload->display_errors());
      echo var_dump($error);
      // $this->load->view('upload', $error);
    } else {
      $_data = array('upload_data' => $this->upload->data());

      $id_siswa = $this->input->post('id_siswa');
      $tanggal_pelaksanaan = $this->input->post('tanggal_pelaksanaan');
      $nama_kegiatan = $this->input->post('nama_kegiatan');
      $juara_ke = $this->input->post('juara_ke');
      $tingkat = $this->input->post('tingkat');
      $tempat_lomba = $this->input->post('tempat_lomba');
      $tim_individu = $this->input->post('tim_individu');
      $penyelenggara_acara = $this->input->post('penyelenggara_acara');

      $data_tambah = array(
        'photo_prestasi' => $_data['upload_data']['file_name'],
        'id_siswa' => $id_siswa,
        'tanggal_pelaksanaan' => $tanggal_pelaksanaan,
        'nama_kegiatan' => $nama_kegiatan,
        'juara_ke' => $juara_ke,
        'tingkat' => $tingkat,
        'tempat_lomba' => $tempat_lomba,
        'tim_individu' => $tim_individu,
        'penyelenggara_acara' => $penyelenggara_acara
      );

      $this->M_admin->prestasi_tambah_up($data_tambah);

      $this->session->set_flashdata('msg', '
						<div class="alert alert-primary alert-dismissible fade show" role="alert">
							<strong>Tambah Prestasi Berhasil</strong>

							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>');
      redirect('Guru_bk/siswa_detail/' . $id_siswa);
    }
  }
}
