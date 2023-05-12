<div class="page-wrapper">
	<div class="page-content">
<div class="container">

  <h3 style="margin-top: 50px; margin-bottom: 20px" align='center'>Edit Data Siswa</h3>

  <?php
  foreach ($tampil as $row) {
  ?>


  <?= form_open('C_admin/siswa_pass_up_bismen'); ?>


  <table class="table table-bordered">
    <tr>
      <td width="300px">Nama Peserta Didik</td>
      <td >
        <input type="hidden" name="id_siswa" value="<?= $row->id_siswa ?>">
        <input class="form-control" type="text" name="nama_siswa" value="<?= $row->nama_siswa ?>" disabled>
      </td>
    </tr>
    <tr>
      <td>Nomor Induk Siswa Nasional</td>
      <td>
        <input class="form-control" type="text" name="nisn_siswa" value="<?= $row->nisn_siswa ?>" disabled>
      </td>
    </tr>
    <tr>
      <td>Program Keahlian</td>
      <td>
        <input class="form-control" type="text" name="program_keahlian" value="<?= $row->program_keahlian ?>" disabled>
      </td>
    </tr>
    <tr>
      <td>Password Baru</td>
      <td>
        <input class="form-control" type="text" name="password" value="">
      </td>
    </tr>
  </table>
  <center>
  <input style="margin-bottom: 50px" type="submit" name="submit" value="simpan" class="btn btn-info btn-sm">
  <a style="margin-bottom: 50px;" type="button" class="btn btn-warning btn-sm" href="<?= site_url('C_admin/siswa_bismen') ?>" >Kembali</a>

<?php } ?>
<?= form_close(''); ?>

  </div>
</div>
</div>
