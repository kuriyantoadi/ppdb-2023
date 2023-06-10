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
        <center><img style="margin-bottom:  80px; margin-top:  25px;" class="img-fluid" src="<?= base_url() ?>assets/images/logo-smkn1.png" />
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col">
      <!-- kosong -->
    </div>
    <div class="col-12">

      
      <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
      <thead>
          <tr>
              <th><center>No</th>
              <th><center>NISN</th>
              <th><center>Nama Lengkap</th>
              <th><center>Asal Sekolah</th>
              <th><center>Pendaftaran</th>
              <th><center>Validasi</th>

          </tr>
      </thead>

      <tbody>
          <?php
          $no = 1;
          foreach ($tampil as $row) {
          ?>
          <tr>
              <td><center><?= $no++ ?></td>
              <td><center><?= $row->nisn_siswa ?></td>
              <td><center><?= $row->nama_siswa ?></td>
              <td><center><?= $row->asal_sekolah ?></td>
              <td><center><?= $row->s_pendaftaran ?></td>
              <td><center><?= $row->s_validasi ?></td>
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