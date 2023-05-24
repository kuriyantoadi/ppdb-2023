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
                        <div class="card-header">
                            <a href="admin-raport-siswa.php" class="btn btn-dark waves-effect waves-light">Kembali</a>
                            <a href="admin-raport-siswa-edit.php" class="btn btn-danger waves-effect waves-light">Reset</a>
                            <a href="admin-raport-siswa-detail.php" class="btn btn-info waves-effect waves-light">Lihat</a>
                        </div>
                        <div class="card-body p-4">

                            <div class="row">

                            <?php foreach ($tampil as $row) { ?>
                              <?= form_open('Admin/raport_edit_up') ?>

                                <form action="" method="post"> 
                                    
                                    <div class="col-lg-6">
                                        <div>
                                            <div class="mb-3">
                                                <label for="nisn" class="form-label">Kompetensi Keahlian</label>
                                                <input type="hidden" name="id_siswa" value>
                                                <select name="kompetensi_keahlian" id="" class="form-control">
                                                    <option value="<?= $row->kompetensi_keahlian ?>">Pilihan Awal - <?= $row->kompetensi_keahlian ?></option>
                                                
                                                    <?php foreach ($tampil_kompetensi as $row1) { ?>
                                                    <option value="<?= $row1->nama_kompetensi ?>"><?= $row1->nama_kompetensi ?></option>
                                                    <?php } ?>

                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="nisn" class="form-label">Kompetensi Keahlian 2</label>
                                                <select name="kompetensi_keahlian_2" id="" class="form-control">
                                                    <option value="<?= $row->kompetensi_keahlian ?>">Pilihan Awal - <?= $row->kompetensi_keahlian ?></option>
                                                
                                                    <?php foreach ($tampil_kompetensi as $row1) { ?>
                                                    <option value="<?= $row1->nama_kompetensi ?>"><?= $row1->nama_kompetensi ?></option>
                                                    <?php } ?>

                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="nisn" class="form-label">NISN</label>
                                                <input type="hidden" name="id_siswa" value>
                                                <input class="form-control" type="number" name="nisn_siswa" value="<?= $row->nisn_siswa ?>" id="nisn">
                                            </div>
                                            <div class="mb-3">
                                                <label for="nama" class="form-label">Nama Lengkap</label>
                                                <input class="form-control" type="text" name="nama_siswa" value="<?= $row->nama_siswa ?>" id="nama">
                                            </div>
                                            <div class="mb-3">
                                                <label for="ttl" class="form-label">Tempat Lahir</label>
                                                <input class="form-control" type="text" name="tempat_lahir" value="<?= $row->tempat_lahir ?>" id="ttl">
                                            </div>
                                            <div class="mb-3">
                                                <label for="ttl" class="form-label">Tanggal Lahir</label>
                                                <input class="form-control" type="text" name="tgl_lahir" value="Artisanal kale" id="ttl">
                                            </div>
                                            <div class="mb-3">
                                                <label for="asalsekolah" class="form-label">Asal Sekolah</label>
                                                <input class="form-control" type="text" name="asal_sekolah" value="Artisanal kale" id="asalsekolah">
                                            </div>
                                            <div class="mb-3">
                                                <label for="ortuwali" class="form-label">Orangtua/Wali</label>
                                                <input class="form-control" type="text" name="" value="Artisanal kale" id="ortuwali">
                                            </div>
                                            <div class="mb-3">
                                                <label for="telepon" class="form-label">No Telepon</label>
                                                <input class="form-control" type="number" name="telepon" value="" id="telepon">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Jurusan</label>
                                                <select class="form-select">
                                                    <option value="">Select</option>
                                                    <option value="">Large select</option>
                                                    <option value="">Small select</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input class="form-control" type="password" value="hunter2" id="password">
                                            </div>
                                            <div class="mt-4">
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


    <!-- <?php include 'admin-layouts/footer.php'; ?> -->