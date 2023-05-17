<?php include 'admin-layouts/head-main.php'; ?>

<head>

    <title>PPDB SMKN 1 Kragilan</title>
    <?php include 'admin-layouts/head.php'; ?>
    <?php include 'admin-layouts/head-style.php'; ?>

</head>

<?php include 'admin-layouts/body.php'; ?>

<div class="my-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class=" mb-5">
                    <h1 class="display-1 fw-semibold text-center">LOGO</h1>
                    <h4 class="text-uppercase text-center">Sistem PPDB</h4>
                    <h4 class="text-uppercase text-center">SMKN 1 Kragilan</h4>
                    <div class="row justify-content-center mt-5">
                        <div class="col-md-4">
                            <label for="username" class="form-label">Username</label>
                            <input class="form-control " type="text" name="username" placeholder="username" id="username">
                        </div>
                    </div>
                    <div class="row justify-content-center mt-2">
                        <div class="col-md-4">
                            <label for="password" class="form-label">password</label>
                            <input class="form-control " type="password" name="password" placeholder="password" id="password">
                        </div>
                    </div>
                    <div class="mt-3 text-center">
                        <a class="btn btn-primary waves-effect waves-light" href="index.php">LOGIN</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end content -->

<!-- JAVASCRIPT -->

<?php include 'admin-layouts/vendor-scripts.php'; ?>

<script src="assets/js/app.js"></script>

</body>

</html>