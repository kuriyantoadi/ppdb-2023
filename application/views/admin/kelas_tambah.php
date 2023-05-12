  <div class="page-wrapper">
			<div class="page-content">

  
  <div class="container">

    <h3 style="margin-top: 50px; margin-bottom: 20px" align='center'>Tambah Kelas</h3>

   
    <table class="table table-bordered">
      <?= form_open('C_admin/kelas_tambah_up'); ?>

      <tr>
        <td width="300px">Nama Kelas</td>
        <td >
          <input class="form-control" type="text" name="nama_kelas" required>
        </td>
      </tr>
      
    </table>

    <center>
    <input style="margin-bottom: 50px" type="submit" name="submit" value="simpan" class="btn btn-info btn-sm">
    <a style="margin-bottom: 50px" class="btn btn-warning btn-sm" href="<?= site_url('C_admin/kelas/') ?>" >Kembali</a>

    <?= form_close(); ?>

    </div>
</div>
</div>

