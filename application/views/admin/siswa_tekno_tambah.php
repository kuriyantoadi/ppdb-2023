  <div class="page-wrapper">
			<div class="page-content">

  
  <div class="container">

    <h3 style="margin-top: 50px; margin-bottom: 20px" align='center'>Tambah Data Siswa</h3>

   
    <table class="table table-bordered">
      <?= form_open('C_admin/siswa_tekno_tambah_up'); ?>

      <tr>
        <td width="300px">Nama Peserta Didik</td>
        <td >
          <input class="form-control" type="text" name="nama_siswa" value="" required>
        </td>
      </tr>
      <tr>
        <td>Tempat Lahir, Tanggal Lahir</td>
        <td>
          <input class="form-control" type="text" name="tempat_tgl_lahir" value="" required>
        </td>
      </tr>
      
      <tr>
        <td>Nama Orang Tua / Wali</td>
        <td>
          <input class="form-control" type="text" name="nama_org_tua" value="" required>
        </td>
      </tr>
      <tr>
        <td>Nomor Induk Siswa</td>
        <td>
          <input class="form-control" type="text" name="nis_siswa" value="" required>
        </td>
      </tr>
      <tr>
        <td>Nomor Induk Siswa Nasional</td>
        <td>
          <input class="form-control" type="text" name="nisn_siswa" value=""required>
        </td>
      </tr>
      <tr>
        <td>Program Keahlian</td>
        <td>
          <select class="form-control" name="program_keahlian" required>
            <option value="">Pilihan</option>
            
            <?php foreach ($tampil_komptensi as $row_komptensi) {  ?>

            <option value="<?= $row_komptensi->nama_kompetensi_keahlian ?>"> <?= $row_komptensi->nama_kompetensi_keahlian ?></option>
           
            <?php } ?>

        </td>
      </tr>

      <tr>
        <td>Kelas</td>
        <td>
          <select class="form-control" name="nama_kelas" required>
            <option value="">Pilihan</option>
            
            <?php foreach ($tampil_kelas as $row_kelas) { ?>

            <option value="<?= $row_kelas->nama_kelas ?>"> <?= $row_kelas->nama_kelas ?></option>
           
            <?php } ?>

        </td>
      </tr>
      <tr>
        <td>Dinyatakan</td>
        <td>
          <select class="form-control" name="status_kelulusan" required>
            <option value="LULUS">LULUS</option>
            <option value="DITUNDA">DITUNDA</option>
          </select>
        </td>
      </tr>
    </table>


    <h3 align='center' style="margin-top: 30px; margin-bottom: 20px">Nilai Siswa</h3>

    <table class="table table-bordered">
      <tr>
        <th width="40px"><center>NO.</th>
        <th width="400px"><center>MATA PELAJARAN</th>
        <th width="200px"><center>NILAI UJIAN SEKOLAH</th>
      </tr>
      <tr>
        <th class="pd_col" colspan="3">A. Mata Pelajaran Muatan Nasional</th>
      </tr>
      <tr>
        <td align='center'>1</td>
        <td class="pd_col">Pendidikan Agama dan Budi Pekerti</td>
        <td>
          <input class="form-control" type="text" name="pai" value="" required>
        </td>
      </tr>
      <tr>
        <td align='center'>2</td>
        <td class="pd_col">Pendidikan Pancasila dan Kewarganegaraan</td>
        <td>
          <input class="form-control" type="text" name="pkn" value="" required>
        </td>
      </tr>
      <tr>
        <td align='center'>3</td>
        <td class="pd_col">Bahasa Indonesia</td>
        <td>
          <input class="form-control" type="text" name="b_ind" value="" required>
        </td>
      </tr>
      <tr>
        <td align='center'>4</td>
        <td class="pd_col">Matematika</td>
        <td>
          <input class="form-control" type="text" name="mtk" value="" required>
        </td>
      </tr>
      <tr>
        <td align='center'>5</td>
        <td class="pd_col">Sejarah Indonesia</td>
        <td>
          <input class="form-control" type="text" name="sejindo" value="" required>
        </td>
      </tr>
      <tr>
        <td align='center'>6</td>
        <td class="pd_col">Bahasa Inggris</td>
        <td>
          <input class="form-control" type="text" name="b_ing" value="" required>
        </td>
      </tr>
      <tr>
        <th class="pd_col" colspan="3">B. Mata Pelajaran Muatan Kewilayahan</th>
      </tr>
      <tr>
        <td align='center'>1</td>
        <td class="pd_col">Seni Budaya</td>
        <td>
          <input class="form-control" type="text" name="senbud" value=""required>
        </td>
      </tr>
      <tr>
        <td align='center'>2</td>
        <td class="pd_col">Pendidikan Jasmani, Olah Raga, dan Kesehatan</td>
        <td>
          <input class="form-control" type="text" name="pjok" value="" required>
        </td>
      </tr>
      <td align='center'>3</td>
        <td class="pd_col" colspan='2'>Muatan Lokal </td>
        
      </tr>
      <tr>
        <td align='center'></td>
        <td class="pd_col">A. Batik</td>
        <td>
          <input class="form-control" type="text" name="mulok" value="" required>
        </td>
      </tr>
      <tr>
      <tr>
        <th class="pd_col" colspan="3">C. Mata Pelajaran Muatan Peminatan Kejuruan</th>
      </tr>
      <tr>
        <td align='center'>1</td>
        <td class="pd_col">Simulasi dan Komunikasi Digital</td>
        <td>
          <input class="form-control" type="text" name="simdig" value="" required>
        </td>
      </tr>
      <tr>
        <td align='center'>2</td>
        <td class="pd_col">Fisika</td>
        <td>
          <input class="form-control" type="text" name="fisika" value="" required>
        </td>
      </tr>
      <tr>
        <td align='center'>3</td>
        <td class="pd_col">Kimia</td>
        <td>
          <input class="form-control" type="text" name="kimia" value="" required>
        </td>
      </tr>
      <tr>
        <td align='center'>4</td>
        <td class="pd_col">Kompetensi Keahlian</td>
        <td>
          <input class="form-control" type="text" name="kompetensi_keahlian" value="" required>
        </td>
      </tr>
      <tr>
        <td align='center'>5</td>
        <td class="pd_col">Produk Kreatif dan Kewirausahaan</td>
        <td>
          <input class="form-control" type="text" name="pkwu" value="" required>
        </td>
      </tr>
      
      <tr>
        <td class="pd_col" align='left' colspan="2">Rata-rata</td>
        <td>
          <input class="form-control" type="text" name="rata_rata" value="" required>
        </td>
      </tr>

    </table>

 
  <center>
<input style="margin-bottom: 50px" type="submit" name="submit" value="simpan" class="btn btn-info">

    <?= form_close(); ?>

    </div>
</div>
</div>

