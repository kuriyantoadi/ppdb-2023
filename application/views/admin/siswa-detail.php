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
                            <h4 class="mb-sm-0 font-size-18">Data Siswa</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Data</a></li>
                                    <li class="breadcrumb-item active">Detail</li>
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
                                <a href="#" class="btn btn-danger waves-effect waves-light">Reset</a>
                                <a href="admin-raport-siswa-edit.php" class="btn btn-primary waves-effect waves-light">Edit</a>
                            </div>
                            <div class="card-body p-4">

                                <div class="row">
                                    <div class="col-xl-8">
                                        <div class="table">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th colspan="2" class="text-center"><h5>Identitas Calon Peserta Didik</h5></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>Tanggal Upload</th>
                                                        <td><input type="text" class="form-control" value="" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Kompetensi Keahlian 1</th>
                                                        <td><input type="text" class="form-control" value="" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Kompetensi Keahlian 2</th>
                                                        <td><input type="text" class="form-control" value="" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <th>No. Pendaftaran</th>
                                                        <td><input type="text" class="form-control" value="" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <th>NISN</th>
                                                        <td><input type="text" class="form-control" value="" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Nama Calon Peserta</th>
                                                        <td><input type="text" class="form-control" value="" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Sekolah Asal</th>
                                                        <td><input type="text" class="form-control" value="" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tempat Lahir</th>
                                                        <td><input type="text" class="form-control" value="" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tanggal Lahir</th>
                                                        <td><input type="text" class="form-control" value="" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <th>No WA Siswa</th>
                                                        <td><input type="text" class="form-control" value="" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Alamat</th>
                                                        <td><input type="text" class="form-control" value="" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Nama Ortu/Wali</th>
                                                        <td><input type="text" class="form-control" value="" disabled></td>
                                                    </tr>
                                                    <tr>
                                                        <th>No WA Ortu/Wali</th>
                                                        <td><input type="text" class="form-control" value="" disabled></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>
                <!-- end row data siswa-->

                <div class="row">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <h4 class="card-title">Bukti Pendaftaran</h4>
                                <a href="#" type="button" class="btn btn-link waves-effect">(File PDF)</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row raport-->

                
                <!-- end row raport-->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <?php include 'admin-layouts/footer.php'; ?>
    </div>
    <!-- end main content-->
    <!-- <?php include 'admin-layouts/footer.php'; ?> -->
