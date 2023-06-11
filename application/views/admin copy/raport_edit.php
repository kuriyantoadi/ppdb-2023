<!-- <?php include 'admin-layouts/header.php'; ?> -->

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Edit Data Siswa</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Data</a></li>
                                <li class="breadcrumb-item active">Edit</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <?php foreach ($tampil as $row) { ?>

                        <div class="card-header">
                            <a href="<?= base_url() ?>index.php/Admin/raport_siswa" class="btn btn-dark waves-effect waves-light btn-sm">Kembali</a>
                            <a href="<?= site_url('index.php/Admin/raport_reset/'.$row->id_siswa) ?>" class="btn btn-danger waves-effect waves-light btn-sm"
                            onclick="return confirm('Anda yakin Reset data siswa yang menghapus sebagian data siswa <?= $row->nama_siswa ?> ?')">Reset</a>
                            <a href="<?= site_url('index.php/Admin/raport_detail/'.$row->id_siswa) ?>" class="btn btn-info waves-effect waves-light btn-sm">Lihat</a>
                        </div>
                        <div class="card-body p-4">

                            <div class="row">

                              <?= form_open('index.php/Admin/raport_edit_up') ?>

                                <form action="" method="post"> 
                                    
                                    <div class="col-lg-6">
                                        <div>
                                            <div class="mb-3">
                                                <label for="nisn" class="form-label">Kompetensi Keahlian</label>
                                                <select name="kompetensi_keahlian" id="" class="form-control" required>
                                                    <option value="<?= $row->kompetensi_keahlian ?>">Pilihan Awal - <?= $row->kompetensi_keahlian ?></option>
                                                
                                                    <?php foreach ($tampil_kompetensi as $row1) { ?>
                                                    <option value="<?= $row1->nama_kompetensi ?>"><?= $row1->nama_kompetensi ?></option>
                                                    <?php } ?>

                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="nisn" class="form-label">Kompetensi Keahlian 2</label>
                                                <select name="kompetensi_keahlian_2" id="" class="form-control" required>
                                                    <option value="<?= $row->kompetensi_keahlian ?>">Pilihan Awal - <?= $row->kompetensi_keahlian ?></option>
                                                
                                                    <?php foreach ($tampil_kompetensi as $row1) { ?>
                                                    <option value="<?= $row1->nama_kompetensi ?>"><?= $row1->nama_kompetensi ?></option>
                                                    <?php } ?>

                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="nisn" class="form-label">NISN</label>
                                                <input type="hidden" name="id_siswa" value="<?= $row->id_siswa ?>" required>
                                                <input class="form-control" type="number" name="nisn_siswa" value="<?= $row->nisn_siswa ?>" id="nisn" required>
                                            </div>       
                                            <div class="mb-3">
                                                <label for="nama" class="form-label">Nama Lengkap</label>
                                                <input class="form-control" type="text" name="nama_siswa" value="<?= $row->nama_siswa ?>" id="nama" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="nama" class="form-label">Nama Lengkap</label>
                                                <select name="jenis_kelamin" class="form-control" required>
                                                    <option value="<?= $row->jenis_kelamin ?>">Pilihan Awal - <?= $row->jenis_kelamin ?></option>
                                                    <option value="Laki-laki">Laki-laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="ttl" class="form-label">Tempat Lahir</label>
                                                <input class="form-control" type="text" name="tempat_lahir" value="<?= $row->tempat_lahir ?>" id="ttl" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="ttl" class="form-label">Tanggal Lahir</label>
                                                <input type="text" class="form-control" id="datepicker-basic" name="tgl_lahir" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="asalsekolah" class="form-label">Alamat</label>
                                                <input class="form-control" type="text" name="alamat" value="<?= $row->alamat ?>" id="asalsekolah" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="asalsekolah" class="form-label">Asal Sekolah</label>
                                                <input class="form-control" type="text" name="asal_sekolah" value="<?= $row->asal_sekolah ?>" id="asalsekolah" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="asalsekolah" class="form-label">Tahun Lulus</label>
                                                <select name="tahun_lulus" class="form-control" id="" required>
                                                    <option value="<?= $row->tahun_lulus ?>">Pilihan Awal - <?= $row->tahun_lulus ?></option>
                                                    <?php for ($x = 2015; $x <= 2023; $x++) { ?>
                                                    <option value="<?= $x ?>"><?= $x ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>

                                             <div class="mb-3">
                                                <label for="telepon" class="form-label">No Telepon</label>
                                                <input class="form-control" type="number" name="no_wa_siswa" value="<?= $row->no_wa_siswa ?>" id="telepon" required>
                                            </div> 
                                            <div class="mb-3">
                                                <label for="ortuwali" class="form-label">Orang Tua/Wali</label>
                                                <input class="form-control" type="text" name="nama_org_tua" value="<?= $row->nama_org_tua ?>" id="ortuwali" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="telepon" class="form-label">No Hp Orang Tua</label>
                                                <input class="form-control" type="number" name="no_wa_org_tua" value="<?= $row->no_wa_org_tua ?>" id="telepon" required>
                                            </div>           
                                            <div class="mt-4"><center>
                                                <button type="submit" class="btn btn-primary w-md">simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                </form>                          
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
