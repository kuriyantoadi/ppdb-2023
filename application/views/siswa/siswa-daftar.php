<div class="my-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class=" mb-5">
                    <!-- <h4 class="text-uppercase text-center">SMKN 1 Kragilan</h4> -->
                    <div class="row">
                        <div class="col-md-3">
                            <center><img style="margin-top: 25px;" src="<?= base_url() ?>assets/images/logo-banten.png" />
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
                            <h5><b>Tahun Ajaran 2023/2024</b></h4>
                            </center>
                            <br>
                            <!-- font ganti jenis -->
                        </div>
                        <div class="col-md-3">
                            <center><img style="margin-bottom:  80px; margin-top:  25px;" class="img-fluid" src="<?= base_url() ?>assets/images/logo-smkn1.png" />
                        </div>
                    </div>

                    <?= form_open_multipart('index.php/Daftar/daftar_up') ?>
                    <form>
                        <div class="row justify-content-center mt-5">
                            <div class="col-md-8">
                                <h4 class="text-uppercase">A. identitas calon peserta didik</h4>
                                <div class="form-group">
                                    <label for="tgl_pendaftaran" class="form-label">Tanggal Pendaftaran</label>
                                    <input class="form-control " type="text" name="tgl_pendaftaran" value="<?= date('Y-m-d') ?>" id="tgl_pendaftaran" required readonly>
                                </div>
                                <div class="form-group mt-3">
                                    <label class="control-label" for="email">Kompetensi Keahlian :</label>
                                    <select class="form-select" name="kompetensi_keahlian" required>
                                        <option value="">Pilih</option>
                                        <option value="Akuntansi dan Keuangan Lembaga">Akuntansi dan Keuangan Lembaga</option>
                                        <option value="Otomatisasi dan Tata Kelola Perkantoran">Otomatisasi dan Tata Kelola Perkantoran</option>
                                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                        <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif</option>
                                        <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                                        <option value="Teknik Pemesinan">Teknik Pemesinan</option>
                                    </select>
                                </div>
                                <div class="form-group mt-3">
                                    <label class="control-label" for="email">Kompetensi Keahlian Ke-2 :</label>
                                    <select class="form-select" name="kompetensi_keahlian_2" required>
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
                                <div class="form-group mt-3">
                                    <label class="control-label" for="email">NISN :</label>
                                    <input type="number" class="form-control" placeholder="NISN" name="nisn" required>
                                </div>
    
                                <div class="form-group mt-3">
                                    <label class="control-label" for="email">Nama Sekolah Asal :</label>
                                    <input type="text" class="form-control" placeholder="Nama Sekolah Asal" name="asal_sekolah" id="asal_sekolah" required>
                                </div>
    
                                <div class="form-group mt-3">
                                    <label class="control-label" for="email">Nama Calon Peserta Didik :</label>
                                    <input type="text" class="form-control" placeholder="Nama" name="nama_siswa" required>
                                </div>
    
                                <div class="form-group mt-3">
                                    <label class="control-label" for="email">Jenis Kelamin :</label>
                                    <select name="jenis_kelamin" class="form-select" required>
                                        <option value="">Pilih</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label" for="email">Tempat Lahir :</label>
                                            <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" required>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                                            <input class="form-control" type="date" name="tgl_lahir" value="2008-08-19" id="tgl_lahir">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <label class="control-label" for="email">Tahun lulus :</label>
                                    <input type="number" class="form-control" placeholder="Tahun lulus" name="tahun_lulus" required>
                                </div>
    
                                <div class="form-group mt-3">
                                    <label class="control-label" for="email">Nomor WhatsApp :</label>
                                    <input type="number" class="form-control" name="no_wa_siswa" placeholder="Nomor WhatsApp" required>
                                </div>
    
                                <div class="form-group mt-3">
                                    <label class="control-label" for="email">Alamat :</label>
                                    <input type="text" class="form-control" placeholder="Alamat" name="alamat" required>
                                </div>
    
                                <div class="form-group mt-3">
                                    <label class="control-label" for="email">Nama Orang Tua/Wali :</label>
                                    <input type="text" class="form-control" placeholder="Nama Orang Tua" name="nama_org_tua" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label class="control-label" for="email">Nomor Hp Orang Tua/Wali :</label>
                                    <input type="text" class="form-control" placeholder="Nomor Hp Orang Tua/Wali" name="no_wa_org_tua" required>
                                </div>
    
                                
                                
                                
                                
                            </div>
                        </div>
                        <div class="row justify-content-center mt-5">
                            <div class="col-md-8 ">
                            <h4 class="text-uppercase">B. Upload Berkas Calon Peserta Didik</h4>
                            <div class="form-group">
                                <b class="control-label mt-3">SKHUN atau Surat Keterangan Lulus</b>
                                <div class="col-sm-6">
                                <input type="file" name="file_skl" accept="application/pdf" class="form-control" id="cek_skhu" required>
                                <p>Tidak Boleh Kosong, ukuran maksimal 300 Kb, format pdf</p>
                                </div>
                            </div>
    
                            <div class="form-group">
                                <b class="control-label mt-3">Rapor Semester 1</b>
                                <div class="col-sm-6">
                                <input type="file" name="file_raport_1" accept="application/pdf" class="form-control" required>
                                <p>Tidak Boleh Kosong, ukuran maksimal 300 Kb, format pdf</p>
                                </div>
                            </div>
    
                            <div class="form-group">
                                <b class="control-label mt-3">Rapor Semester 2 </b>
                                <div class="col-sm-6">
                                <input type="file" name="file_raport_2" accept="application/pdf" class="form-control" required>
                                <p>Tidak Boleh Kosong, ukuran maksimal 300 Kb, format pdf</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <b class="control-label mt-3">Rapor Semester 3 </b>
                                <div class="col-sm-6">
                                <input type="file" name="file_raport_3" accept="application/pdf" class="form-control" required>
                                <p>Tidak Boleh Kosong, ukuran maksimal 300 Kb, format pdf</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <b class="control-label mt-3">Rapor Semester 4 </b>
                                <div class="col-sm-6">
                                <input type="file" name="file_raport_4" accept="application/pdf" class="form-control" required>
                                <p>Tidak Boleh Kosong, ukuran maksimal 300 Kb, format pdf</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <b class="control-label mt-3">Rapor Semester 5 </b>
                                <div class="col-sm-6">
                                <input type="file" name="file_raport_5" accept="application/pdf" class="form-control" required>
                                <p>Tidak Boleh Kosong, ukuran maksimal 300 Kb, format pdf</p>
                                </div>
                            </div>
    
                            </div>
                        </div>
                        <div class="row justify-content-center mt-5">
                            <center class="col-md-8 ">
                                <div class="form-group align-text-bottom mt-lg-4" style="margin-bottom: 60px;">
                                    <b class="control-label mt-6">Data dan Berkas Sudah Sesuai?</b>
                                    <div class="col-sm-6 mt-lg-2 md-lg-2">
                                        <select class="form-control" name="cek_submit" id="" require>
                                        <option value="">Belum Sesuai</option>
                                        <option value="Sesuai">Sesuai</option>
                                        </select>
                                    </div>
    
                                    <input type="submit" class="btn btn-primary mt-4"></input>
                                </div>
                            </center>
                        </div>
                    </form>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end content -->