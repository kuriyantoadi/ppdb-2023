  <div class="container">

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <center><img style="margin-top: 25px;" src="../../assets/images/logo-banten.png" />
        </div>
        <div class="col-md-6">
          <center>
            <h2 style="margin-top:  25px;"><b>SMK Negeri 1 Kragilan</b></h2>
          </center>
          <center>
            <h4><b>Formulir Pendaftaran</b></h4>
          </center>
          <center>
            <h4><b>Calon Peserta Didik Baru</b></h4>
          </center>
          <center>
            <h5><b>Tahun Ajaran 2022/2023</b></h4>
          </center>
          <center>
            <h4><b>Program Studi Teknik Komputer dan Jaringan</b></h4>
          </center><br>
          <!-- font ganti jenis -->
        </div>
        <div class="col-md-3">
          <center><img style="margin-bottom:  80px; margin-top:  25px;" class="img-fluid" src="../../assets/images/logo-smkn1.png" />
        </div>
      </div>
    </div>

    <!-- <form class="form-horizontal" action="update-siswa.php" name="input" method="POST" enctype="multipart/form-data" onSubmit="return validasi()"> -->
      <!-- <form class="form-horizontal" action="../daftar_up.php" name="input" method="POST" enctype="multipart/form-data" onSubmit="return validasi()"> -->

      
     
<div class="container">
  <div class="row">
    <div class="col">
      1 of 2

<h4>A. IDENTITAS CALON PESERTA DIDIK</h4>
    <div class="form-group">
        <label class="control-label mt-3" for="email">Tanggal Pendaftaran :</label>
        <input type="text" class="form-control" name="tgl_pendfataran" value="<?php echo date('d-m-Y'); ?>" required readonly>
    </div>
      <div class="form-group">
        <label class="control-label mt-3" for="email">Kompetensi Keahlian :</label>
        <select class="form-control" name="kompetensi_keahlian" required>
            <option value="">Pilih</option>
            <option value="Akuntansi dan Keuangan Lembaga">Akuntansi dan Keuangan Lembaga</option>
            <option value="Otomatisasi dan Tata Kelola Perkantoran">Otomatisasi dan Tata Kelola Perkantoran</option>
            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
            <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif</option>
            <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
            <option value="Teknik Pemesinan">Teknik Pemesinan</option>
          </select>      </div>
      <div class="form-group">
        <label class="control-label mt-3" for="email">Kompetensi Keahlian Ke-2 :</label>
          <select class="form-control" name="kompetensi_keahlian_2" required>
            <option value="">Pilih</option>
            <option value="tidak memilih">Hanya 1 Kompetensi Keahlian</option>
            <option value="Akuntansi dan Keuangan Lembaga">Akuntansi dan Keuangan Lembaga</option>
            <option value="Otomatisasi dan Tata Kelola Perkantoran">Otomatisasi dan Tata Kelola Perkantoran</option>
            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
            <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif</option>
            <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
            <option value="Teknik Pemesinan">Teknik Pemesinan</option>
          </select>
      </div>


<div class="form-group">
  <label class="control-label mt-3" for="email">NISN :</label>
  <input type="number" class="form-control" placeholder="NISN" name="nisn" required>
</div>

<div class="form-group">
  <label class="control-label mt-3" for="email">Nama Sekolah Asal :</label>
  <input type="text" class="form-control" placeholder="Nama Sekolah Asal" name="asal_sekolah" id="asal_sekolah" required>
</div>

<div class="form-group">
  <label class="control-label mt-3" for="email">Nama Calon Peserta Didik :</label>
  <input type="text" class="form-control" placeholder="Nama" name="nama_siswa" required>
</div>

<div class="form-group">
  <label class="control-label mt-3" for="email">Jenis Kelamin :</label>
    <select name="jenis_kelamin" class="form-control" required>
      <option value="">Pilih</option>
      <option value="Laki-laki">Laki-laki</option>
      <option value="Perempuan">Perempuan</option>
    </select>
</div>

<div class="form-group">
  <label class="control-label mt-3" for="email">Tempat Lahir :</label>
  <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir"  required>
</div>

<div class="form-group">
  <label class="control-label mt-3" for="email">Tanggal Lahir :</label>
  <input type="text" name="tgl_lahir" class="form-control datepicker" required/>
  (Tanggal/Bulan/Tahun)
</div>

<div class="form-group">
  <label class="control-label mt-3" for="email">Tahun lulus :</label>
  <input type="number" class="form-control" placeholder="Tahun lulus" name="tahun_lulus" required>
</div>

<div class="form-group">
  <label class="control-label mt-3" for="email">Nomor WhatsApp :</label>
  <input type="number" class="form-control" name="no_hp" placeholder="Nomor WhatsApp"  required>
</div>

<div class="form-group">
  <label class="control-label mt-3" for="email">Alamat :</label>
  <input type="text" class="form-control" placeholder="Alamat" name="alamat"  required>
</div>

<div class="form-group">
  <label class="control-label mt-3" for="email">Nama Orang Tua/Wali :</label>
  <input type="text" class="form-control" placeholder="Nama Orang Tua" name="nama_org_tua" required>
</div>
<div class="form-group">
  <label class="control-label mt-3" for="email">Nomor Hp Orang Tua/Wali :</label>
  <input type="text" class="form-control" placeholder="Nomor Hp Orang Tua/Wali" name="no_hp_org_tua" required>
</div>

<br>
    </div>
    <div class="col">
      2 of 2

      <h4>D. INPUT SCAN BERKAS CALON PESERTA DIDIK</h4>
        <div class="form-group">
            <label class="control-label mt-3" for="email">SKHUN atau Surat Keterangan Lulus</label>
            <input type="file" name="pdf_skhun" accept="application/pdf" class="form-control-file" id="cek_skhu" required>
            <h6>Tidak Boleh Kosong, ukuran maksimal 500 Kb, format pdf</h6>
        </div>

<div class="form-group">
  <label class="control-label mt-3">Rapor Semester 1</label>
  <div class="col-sm-6">
    <input type="file" name="pdf_rapor1" accept="application/pdf" class="form-control-file" required>
    <h6>Tidak Boleh Kosong, ukuran maksimal 300 Kb, format pdf</h6>
  </div>
</div>
<div class="form-group">
  <label class="control-label mt-3">Rapor Semester 2 </label>
  <div class="col-sm-6">
    <input type="file" name="pdf_rapor2" accept="application/pdf" class="form-control-file" required>
    <h6>Tidak Boleh Kosong, ukuran maksimal 300 Kb, format pdf</h6>
  </div>
</div>
<div class="form-group">
  <label class="control-label mt-3">Rapor Semester 3 </label>
  <div class="col-sm-6">
    <input type="file" name="pdf_rapor3" accept="application/pdf" class="form-control-file" required>
    <h6>Tidak Boleh Kosong, ukuran maksimal 300 Kb, format pdf</h6>
  </div>
</div>
<div class="form-group">
  <label class="control-label mt-3">Rapor Semester 4 </label>
  <div class="col-sm-6">
    <input type="file" name="pdf_rapor4" accept="application/pdf" class="form-control-file" required>
    <h6>Tidak Boleh Kosong, ukuran maksimal 300 Kb, format pdf</h6>
  </div>
</div>
<div class="form-group">
  <label class="control-label mt-3">Rapor Semester 5 </label>
  <div class="col-sm-6">
    <input type="file" name="pdf_rapor5" accept="application/pdf" class="form-control-file" required>
    <h6>Tidak Boleh Kosong, ukuran maksimal 300 Kb, format pdf</h6>
  </div>
</div>

<div class="form-group">
  <label class="control-label mt-3">PKH/KKS/KIP/Jamsosda </label>
  <div class="col-sm-6">
    <input type="file" name="pdf_kip" accept="application/pdf" class="form-control-file">
    <h6>Ukuran maksimal 500 Kb, format pdf</h6>
  </div>
</div>
<div class="form-group">
  <label class="control-label mt-3">Piagam/Sertifikat 1 </label>
  <div class="col-sm-6">
    <input type="file" name="pdf_piagam1" accept="application/pdf" class="form-control-file" id="cek_piagam1">
    <h6>Ukuran maksimal 500 Kb, format pdf</h6>
  </div>
</div>
<div class="form-group">
  <label class="control-label mt-3">Piagam/Sertifikat 2</label>
  <div class="col-sm-6">
    <input type="file" name="pdf_piagam2" accept="application/pdf" class="form-control-file" id="cek_piagam2">
    <h6>Ukuran maksimal 500 Kb, format pdf</h6>
  </div>
</div>
<div class="form-group">
  <label class="control-label mt-3">Piagam/Sertifikat 3 </label>
  <div class="col-sm-6">
    <input type="file" name="pdf_piagam3" accept="application/pdf" class="form-control-file" id="cek_piagam3">
    <h6>Ukuran maksimal 500 Kb, format pdf</h6>
  </div>
</div>
<h6><b>Informasi :</h6>
<h6>1. File harus dengan format <b>.pdf</b> dengan ukuran maksimal <b>500 kb</b></h6>
<h6>2. Dokumen yang di <b>Scan Harus Asli (bukan Photo Copy)</b></h6>
<h6>3. Piagam/Sertifikat dan PKH/KKS/KIP/Jamsosda boleh dikosongkan</h6>
<h6>4. Piagam/Sertifikat hasil perlombaan dan/atau penghargaan di bidang akademik maupun non akademik</h6>
<h6>5. Piagam/Sertifikat boleh di isi bukti hafiz alquran atau bukti hafal kitab sesuai agama yang dianut</h6>
<h6>6. Surat sehat harus ditandatangani oleh dokter pemerintah.</h6>
<h6>7. Proses daftar tergatung jaringan internet, karena file yang diupload cukup banyak</h6>

<br>
<h4>E. INPUT NILAI RAPOR SMP/MTS/Sederajat</h4>
<h5>E.1. Nilai Rapor Semester 1</h5>

<div class="form-group">
  <label class="control-label mt-3">Agama</label>
  <div class="col-sm-3">
    <input type="number" class="form-control" placeholder="Semester 1 Agama" name="sem1_agama" required>
    <h6>Jika nilai Agama lebih 1, maka nilai agama di rata-rata terlebih dahulu baru di inputkan</h6>
    <h6>Nilai Rata-Rata (Pengetahuan + Keterampilan)</h6>
  </div>
</div>
<div class="form-group">
  <label class="control-label mt-3">Bahasa Indonesia</label>
  <div class="col-sm-3">
    <input type="number" class="form-control" placeholder="Semester 1 Bahasa Indonesia" name="sem1_b_indo" required>
    <h6>Nilai Rata-Rata (Pengetahuan + Keterampilan)</h6>
  </div>
</div>
<div class="form-group">
  <label class="control-label mt-3">Matematika</label>
  <div class="col-sm-3">
    <input type="number" class="form-control" placeholder="Semester 1 Matematik" name="sem1_mtk" required>
    <h6>Nilai Rata-Rata (Pengetahuan + Keterampilan)</h6>
  </div>
</div>
<div class="form-group">
  <label class="control-label mt-3">IPA</label>
  <div class="col-sm-3">
    <input type="number" class="form-control" placeholder="Semester 1 IPA" name="sem1_ipa" required>
    <h6>Nilai Rata-Rata (Pengetahuan + Keterampilan)</h6>
  </div>
</div>
<div class="form-group">
  <label class="control-label mt-3">Bahasa Inggris</label>
  <div class="col-sm-3">
    <input type="number" class="form-control" placeholder="Semester 1 Bahasa Inggris" name="sem1_b_ing" required>
    <h6>Nilai Rata-Rata (Pengetahuan + Keterampilan)</h6>
  </div>
</div>

<br>
<h5>E.2. Nilai Rapor Semester 2</h5>
<div class="form-group">
  <label class="control-label mt-3">Agama</label>
  <div class="col-sm-3">
    <input type="number" class="form-control" placeholder="Semester 2 Agama" name="sem2_agama" required>
    <h6>Jika nilai Agama lebih 1, maka nilai agama di rata-rata terlebih dahulu baru di inputkan</h6>
    <h6>Nilai Rata-Rata (Pengetahuan + Keterampilan)</h6>
  </div>
</div>
<div class="form-group">
  <label class="control-label mt-3">Bahasa Indonesia</label>
  <div class="col-sm-3">
    <input type="number" class="form-control" placeholder="Semester 2 Bahasa Indonesia" name="sem2_b_indo" required>
    <h6>Nilai Rata-Rata (Pengetahuan + Keterampilan)</h6>
  </div>
</div>
<div class="form-group">
  <label class="control-label mt-3">Matematika</label>
  <div class="col-sm-3">
    <input type="number" class="form-control" placeholder="Semester 2 Matematik" name="sem2_mtk" required>
    <h6>Nilai Rata-Rata (Pengetahuan + Keterampilan)</h6>
  </div>
</div>
<div class="form-group">
  <label class="control-label mt-3">IPA</label>
  <div class="col-sm-3">
    <input type="number" class="form-control" placeholder="Semester 2 IPA" name="sem2_ipa" required>
    <h6>Nilai Rata-Rata (Pengetahuan + Keterampilan)</h6>
  </div>
</div>
<div class="form-group">
  <label class="control-label mt-3">Bahasa Inggris</label>
  <div class="col-sm-3">
    <input type="number" class="form-control" placeholder="Semester 2 Bahasa Inggris" name="sem2_b_ing" required>
    <h6>Nilai Rata-Rata (Pengetahuan + Keterampilan)</h6>
  </div>
</div>

<br>
<h5>E.3. Nilai Rapor Semester 3</h5>

<div class="form-group">
  <label class="control-label mt-3">Agama</label>
  <div class="col-sm-3">
    <input type="number" class="form-control" placeholder="Semester 3 Agama" name="sem3_agama" required>
    <h6>Jika nilai Agama lebih 1, maka nilai agama di rata-rata terlebih dahulu baru di inputkan</h6>
    <h6>Nilai Rata-Rata (Pengetahuan + Keterampilan)</h6>
  </div>
</div>
<div class="form-group">
  <label class="control-label mt-3">Bahasa Indonesia</label>
  <div class="col-sm-3">
    <input type="number" class="form-control" placeholder="Semester 3 Bahasa Indonesia" name="sem3_b_indo" required>
    <h6>Nilai Rata-Rata (Pengetahuan + Keterampilan)</h6>
  </div>
</div>
<div class="form-group">
  <label class="control-label mt-3">Matematika</label>
  <div class="col-sm-3">
    <input type="number" class="form-control" placeholder="Semester 3 Matematik" name="sem3_mtk" required>
    <h6>Nilai Rata-Rata (Pengetahuan + Keterampilan)</h6>
  </div>
</div>
<div class="form-group">
  <label class="control-label mt-3">IPA</label>
  <div class="col-sm-3">
    <input type="number" class="form-control" placeholder="Semester 3 IPA" name="sem3_ipa" required>
    <h6>Nilai Rata-Rata (Pengetahuan + Keterampilan)</h6>
  </div>
</div>
<div class="form-group">
  <label class="control-label mt-3">Bahasa Inggris</label>
  <div class="col-sm-3">
    <input type="number" class="form-control" placeholder="Semester 3 Bahasa Inggris" name="sem3_b_ing" required>
    <h6>Nilai Rata-Rata (Pengetahuan + Keterampilan)</h6>
  </div>
</div>

<br>
<h5>E.4. Nilai Rapor Semester 4</h5>

<div class="form-group">
  <label class="control-label mt-3">Agama</label>
  <div class="col-sm-3">
    <input type="number" class="form-control" placeholder="Semester 4 Agama" name="sem4_agama" required>
    <h6>Jika nilai Agama lebih 1, maka nilai agama di rata-rata terlebih dahulu baru di inputkan</h6>
    <h6>Nilai Rata-Rata (Pengetahuan + Keterampilan)</h6>
  </div>
</div>
<div class="form-group">
  <label class="control-label mt-3">Bahasa Indonesia</label>
  <div class="col-sm-3">
    <input type="number" class="form-control" placeholder="Semester 4 Bahasa Indonesia" name="sem4_b_indo" required>
    <h6>Nilai Rata-Rata (Pengetahuan + Keterampilan)</h6>
  </div>
</div>
<div class="form-group">
  <label class="control-label mt-3">Matematika</label>
  <div class="col-sm-3">
    <input type="number" class="form-control" placeholder="Semester 4 Matematik" name="sem4_mtk" required>
    <h6>Nilai Rata-Rata (Pengetahuan + Keterampilan)</h6>
  </div>
</div>
<div class="form-group">
  <label class="control-label mt-3">IPA</label>
  <div class="col-sm-3">
    <input type="number" class="form-control" placeholder="Semester 4 IPA" name="sem4_ipa" required>
    <h6>Nilai Rata-Rata (Pengetahuan + Keterampilan)</h6>
  </div>
</div>
<div class="form-group">
  <label class="control-label mt-3">Bahasa Inggris</label>
  <div class="col-sm-3">
    <input type="number" class="form-control" placeholder="Semester 4 Bahasa Inggris" name="sem4_b_ing" required>
    <h6>Nilai Rata-Rata (Pengetahuan + Keterampilan)</h6>
  </div>
</div>

<br>
<h5>E.5. Nilai Rapor Semester 5</h5>

<div class="form-group">
  <label class="control-label mt-3">Agama</label>
  <div class="col-sm-3">
    <input type="number" class="form-control" placeholder="Semester 5 Agama" name="sem5_agama" required>
    <h6>Jika nilai Agama lebih 1, maka nilai agama di rata-rata terlebih dahulu baru di inputkan</h6>
    <h6>Nilai Rata-Rata (Pengetahuan + Keterampilan)</h6>
  </div>
</div>
<div class="form-group">
  <label class="control-label mt-3">Bahasa Indonesia</label>
  <div class="col-sm-3">
    <input type="number" class="form-control" placeholder="Semester 5 Bahasa Indonesia" name="sem5_b_indo" required>
    <h6>Nilai Rata-Rata (Pengetahuan + Keterampilan)</h6>
  </div>
</div>
<div class="form-group">
  <label class="control-label mt-3">Matematika</label>
  <div class="col-sm-3">
    <input type="number" class="form-control" placeholder="Semester 5 Matematik" name="sem5_mtk" required>
    <h6>Nilai Rata-Rata (Pengetahuan + Keterampilan)</h6>
  </div>
</div>
<div class="form-group">
  <label class="control-label mt-3">IPA</label>
  <div class="col-sm-3">
    <input type="number" class="form-control" placeholder="Semester 5 IPA" name="sem5_ipa" required>
    <h6>Nilai Rata-Rata (Pengetahuan + Keterampilan)</h6>
  </div>
</div>
<div class="form-group">
  <label class="control-label mt-3">Bahasa Inggris</label>
  <div class="col-sm-3">
    <input type="number" class="form-control" placeholder="Semester 5 Bahasa Inggris" name="sem5_b_ing" required>
    <h6>Nilai Rata-Rata (Pengetahuan + Keterampilan)</h6>
  </div>
</div>
    </div>
  </div>

</div>

<br>





<br>

  <input type="hidden" class="form-control" value="Bukan Jurusan Teknik Pemesinan" name="tinggi_badan" required>

</div>
<br>

 <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" name="upload" value="upload" class="btn btn-default">Submit</button>
        </div>
      </div>
    </form>
  </div>