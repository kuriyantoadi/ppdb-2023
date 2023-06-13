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
                        <h4 class="mb-sm-0 font-size-18">Data Validasi</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">  
                        <div class="card-body">

                        <div class="row g-4 mb-2">
                            <div class="col-md-6 ">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="<?= site_url('index.php/Admin/val_semua') ?>" type="button" class="btn btn-primary">Semua Jurusan</a>
                                    <a href="<?= site_url('index.php/Admin/val_akl') ?>" type="button" class="btn btn-primary">AKL</a>
                                    <a href="<?= site_url('index.php/Admin/val_mplb') ?>" type="button" class="btn btn-primary">MPLB</a>
                                    <a href="<?= site_url('index.php/Admin/val_tjkt') ?>" type="button" class="btn btn-primary">TJKT</a>
                                    <a href="<?= site_url('index.php/Admin/val_pplg') ?>" type="button" class="btn btn-primary">PPLG</a>
                                    <a href="<?= site_url('index.php/Admin/val_to') ?>" type="button" class="btn btn-primary">TO</a>
                                    <a href="<?= site_url('index.php/Admin/val_tm') ?>" type="button" class="btn btn-primary">TM</a>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                            <thead>
                                <tr>
                                    <th><center>No</th>
                                    <th><center>Nama Lengkap</th>
                                    <th><center>Kompetensi Keahlian</th>
                                    <th><center>Asal Sekolah</th>
                                    <th><center>Validasi</th>
                                    <th><center>Opsi</th>
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
                                    <td><center><?= $row->kompetensi_keahlian_short ?></td>
                                    <td><center><?= $row->asal_sekolah ?></td>
                                    <td><center>
                                    <?php if($row->status_validasi == 'Sesuai' ){ ?>
                                        <a class="btn-success waves-effect waves-light btn-sm">Sesuai</a>
                                        <?php }elseif($row->status_validasi == 'Data Tidak Sesuai'){ ?>
                                        <a class="btn-danger waves-effect waves-light btn-sm">Tidak Sesuai</a>
                                        <?php }else{ ?>
                                        <a class="btn-secondary waves-effect waves-light btn-sm">Not Found</a>
                                        <?php } ?>
                                    </td>
                                    <td><center>
                                    <?php if($row->status_seleksi_administrasi == 'Lolos Seleksi Administrasi' ){ ?>
                                        <a class="btn-success waves-effect waves-light btn-sm">Lolos</a>
                                        <?php }elseif($row->status_seleksi_administrasi == 'Belum Seleksi Administrasi'){ ?>
                                        <a class="btn-warning waves-effect waves-light btn-sm">Belum</a>
                                        <?php }elseif($row->status_seleksi_administrasi == 'Gagal Seleksi Administrasi'){ ?>
                                        <a class="btn-danger waves-effect waves-light btn-sm">Gagal</a>
                                        <?php }else{ ?>
                                        <a class="btn-secondary waves-effect waves-light btn-sm">Not Found</a>
                                        <?php } ?>
                                    </td>
                                    <td><center>
                                        <a href="<?= site_url('index.php/Admin/raport_hapus/'. $row->id_siswa) ?>" class="btn btn-danger waves-effect waves-light btn-sm"
                                        onclick="return confirm('Anda yakin menghapus data siswa <?= $row->nama_siswa ?> ?')"><i class="dripicons-cross" title="Hapus"></i></a>
                                        <a href="<?= site_url('index.php/Admin/raport_edit/'. $row->id_siswa) ?>" class="btn btn-primary waves-effect waves-light btn-sm" title="Edit"><i class="dripicons-pencil"></i></a>
                                        <a href="<?= site_url('index.php/Admin/raport_detail/'. $row->id_siswa) ?>" class="btn btn-info btn-sm waves-effect waves-light" title="Lihat"><i class="dripicons-preview"></i></a>
                                    </td>
                                </tr>
                                
                                <?php } ?>
                            </tbody>
                            
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


    <!-- <?php include 'admin-layouts/footer.php'; ?> -->
