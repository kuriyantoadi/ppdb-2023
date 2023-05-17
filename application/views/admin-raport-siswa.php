<?php include 'admin-layouts/head-main.php'; ?>

<head>

    <title>PPDB SMKN 1 Kragilan</title>
    <?php include 'admin-layouts/head.php'; ?>

    <!-- DataTables -->
    <link href="<?= base_url() ?>assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="<?= base_url() ?>assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <?php include 'admin-layouts/head-style.php'; ?>

</head>

<?php include 'admin-layouts/body.php'; ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php include 'admin-layouts/menu.php'; ?>

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
                            <h4 class="mb-sm-0 font-size-18">Data Siswa Baru</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Jurusan</a></li>
                                    <li class="breadcrumb-item active">TKJ</li>
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
                                <h4 class="card-title">Jurusan Teknik Komputer Jaringan</h4>
                            </div>
                            <div class="card-body">
                                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NISN</th>
                                            <th>NAMA LENGKAP</th>
                                            <th>ASAL SEKOLAH</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>928384523</td>
                                            <td>Edinburgh</td>
                                            <td>SMP UNGGUL SERANG</td>
                                            <td>
                                                <a href="#" class="btn btn-warning waves-effect waves-light">Reset</a>
                                                <a href="admin-raport-siswa-edit.php" class="btn btn-primary waves-effect waves-light">Edit</a>
                                                <a href="#" class="btn btn-danger waves-effect waves-light">Hapus</a>
                                                <a href="admin-raport-siswa-detail.php" class="btn btn-info waves-effect waves-light">Lihat</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    
                                </table>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <?php include 'admin-layouts/footer.php'; ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->


<!-- Right Sidebar -->
<?php include 'admin-layouts/right-sidebar.php'; ?>
<!-- /Right-bar -->

<!-- JAVASCRIPT -->

<?php include 'admin-layouts/vendor-scripts.php'; ?>

<!-- Required datatable js -->
<script src="<?= base_url() ?>assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="<?= base_url() ?>assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/libs/jszip/jszip.min.js"></script>
<script src="<?= base_url() ?>assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="<?= base_url() ?>assets/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="<?= base_url() ?>assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url() ?>assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

<!-- Responsive examples -->
<script src="<?= base_url() ?>assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="<?= base_url() ?>assets/js/pages/datatables.init.js"></script>

<script src="<?= base_url() ?>assets/js/app.js"></script>

</body>

</html>