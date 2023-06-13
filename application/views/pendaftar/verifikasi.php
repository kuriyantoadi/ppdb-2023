<div class="container">

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <center><img style="margin-top: 25px;" src="<?= base_url() ?>assets/images/logo-banten.png" />
      </div>
      <div class="col-md-6">
        <center>
          <h2 style="margin-top:  25px;"><b>SMK Negeri 1 Kragilan</b></h2>
        </center>
       
        <center>
          <h4><b>Calon Peserta Didik Baru</b></h4>
        </center>
        <center>
          <h5><b>Tahun Ajaran 2023/2024</b></h4>
        </center>
        <br>
        <!-- font ganti jenis -->
      </div>
      <div class="col-md-3">
        <center><img style="margin-top:  25px;" class="img-fluid" src="<?= base_url() ?>assets/images/logo-smkn1.png" />
      </div>
    </div>
  </div>


  <div class="row">
    

    <div class="row g-4 mb-3">
      <div class="col-md-6 ">
          <?= $this->session->flashdata('msg') ?>
          <a href="<?= site_url('index.php/pendaftar/upload_pengajuan') ?>" type="button" class="btn btn-info btn-sm mb-2">Upload Pengajuan Pendaftaran</a>
          <div class="btn-group" role="group" aria-label="Basic example">
              <a href="<?= site_url('index.php/pendaftar/') ?>" type="button" class="btn btn-primary">Semua Jurusan</a>
              <a href="<?= site_url('index.php/pendaftar/akl') ?>" type="button" class="btn btn-primary">AKL</a>
              <a href="<?= site_url('index.php/pendaftar/mplb') ?>" type="button" class="btn btn-primary">MPLB</a>
              <a href="<?= site_url('index.php/pendaftar/tjkt') ?>" type="button" class="btn btn-primary">TJKT</a>
              <a href="<?= site_url('index.php/pendaftar/pplg') ?>" type="button" class="btn btn-primary">PPLG</a>
              <a href="<?= site_url('index.php/pendaftar/to') ?>" type="button" class="btn btn-primary">TO</a>
              <a href="<?= site_url('index.php/pendaftar/tm') ?>" type="button" class="btn btn-primary">TM</a>
          </div>
      </div><!-- end col -->
    </div><!-- end row -->
  
    <div class="col-12">
      <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
      <thead>
          <tr>
              <th><center>No</th>
              <th><center>Nama Lengkap</th>
              <th><center>Kompetensi Keahlian</th>
              <th><center>Asal Sekolah</th>
              <th><center>Verifikasi</th>
              <th><center>Seleksi Administrasi</th>

          </tr>
      </thead>

      <tbody>
          <?php
          $no = 1;
          foreach ($tampil as $row) {
          ?>
          <tr>
              <td><center><?= $no++ ?></td>
              <td><?= $row->nama_siswa ?></td>
              <td><center><?= $row->nama_kompetensi_1 ?></td>
              <td><center><?= $row->asal_sekolah ?></td>
              <td><center>
              <?php if($row->status_verifikasi == 'Sesuai' ){ ?>
                  <a class="btn-success waves-effect waves-light btn-sm">Sesuai</a>
                <?php }elseif($row->status_verifikasi == 'Data Tidak Sesuai'){ ?>
                  <a class="btn-danger waves-effect waves-light btn-sm">Data Tidak Sesuai</a>
                <?php }else{ ?>
                  <a class="btn-secondary waves-effect waves-light btn-sm">Belum Ada Keterangan</a>
                <?php } ?>
              </td>
              <td><center>
              <?php if($row->status_seleksi_administrasi == 'Lolos Seleksi Administrasi' ){ ?>
                  <a class="btn-success waves-effect waves-light btn-sm">Lolos Seleksi Administrasi</a>
                <?php }elseif($row->status_seleksi_administrasi == 'Belum Seleksi Administrasi'){ ?>
                  <a class="btn-warning waves-effect waves-light btn-sm">Belum Seleksi Administrasi</a>
                <?php }elseif($row->status_seleksi_administrasi == 'Gagal Seleksi Administrasi'){ ?>
                  <a class="btn-danger waves-effect waves-light btn-sm">Gagal Seleksi Administrasi</a>
                <?php }else{ ?>
                  <a class="btn-secondary waves-effect waves-light btn-sm">Belum Ada Keterangan</a>
                <?php } ?>
              </td>
            </td>
          </tr>
          <?php } ?>
      </tbody>
      
      </table>

    </div>

    <div class="col">
      <!-- kosong -->
    </div>

  </div>

</div> <!-- container -->