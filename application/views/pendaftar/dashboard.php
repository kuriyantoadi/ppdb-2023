<!-- <?php include 'admin-layouts/header.php'; ?> -->

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">  
                        
                        <div class="card-header">
                            <h3 class="card-title">Halaman Dashboard</h3>
                            <p>
                                Selamat Datang di System PPDB SMKN 1 Kragilan, anda sedang login pada akun siswa diterima. 
                                <ul>
                                    <li>Lakukan Pengisian Data Sesuai Form</li>
                                    <li>Cetak/Print Berkas Formulir Dapodik</li>
                                    <li>Cetak/Print Berkas Pakta Integritas</li>
                                    <li>Cetak/Print Berkas Bukti Diterima</li>
                                </ul>
                            </p>
                            <div style="margin: 10px">
                                <a style="margin: 5px" href="<?= base_url() ?>assets/file/F-PESERTA_DIDIK.pdf" class="btn btn-sm btn-success">Download Form Dapodik</a>
                                <a style="margin: 5px" href="<?= site_url('index.php/Daftar_ulang/cetak_pakta_integritas') ?>" class="btn btn-sm btn-success">Download Pakta Integritas</a>
                                <a style="margin: 5px" href="<?= site_url('index.php/Daftar_ulang/cetak_bukti_diterima') ?>" class="btn btn-sm btn-success">Download Bukti Diterima</a>
                            </div>

                            
                        </div>
                            
                        
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


    <!-- <?php include 'admin-layouts/footer.php'; ?> -->
