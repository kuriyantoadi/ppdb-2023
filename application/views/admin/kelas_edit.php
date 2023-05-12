  <div class="page-wrapper">
			<div class="page-content">

  
  <div class="container">

    <h3 style="margin-top: 50px; margin-bottom: 20px" align='center'>Edit Kelas</h3>

   
    <table class="table table-bordered">
      <?= form_open('C_admin/kelas_edit_up'); ?>
        <?php
        foreach ($tampil as $row) {
        ?>
      <tr>
        <td width="300px">Nama Kelas</td>
        <td >
             <input class="form-control" type="hidden" value="<?= $row->id_kelas ?>" name="id_kelas" required>
              <input class="form-control" type="text" value="<?= $row->nama_kelas ?>" name="nama_kelas" required>
        </td>
      </tr>
      <?php } ?>
    </table>

    <center>
    <input style="margin-bottom: 50px" type="submit" name="submit" value="simpan" class="btn btn-info btn-sm">
    <a style="margin-bottom: 50px" class="btn btn-warning btn-sm" href="<?= site_url('C_admin/kelas/') ?>" >Kembali</a>

    <?= form_close(); ?>

    </div>
</div>
</div>

