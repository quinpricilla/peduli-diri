<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Page Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="focus-2/images/logo.png">
    <link rel="stylesheet" href="focus-2/vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="focus-2/vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="focus-2/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="focus-2/css/style.css" rel="stylesheet">



</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="focus-2/images/logo.png" alt="">
                <img class="logo-compact" src="focus-2/images/pedulidiri.png" alt="">
                <img class="brand-title" src="focus-2/images/pedulidiri.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>

                
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="logout" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    
                    <li><a href="dashboard" aria-expanded="false"><i class="icon icon-globe-2"></i><span
                                class="nav-text">Dashboard</span></a>
                    </li>
                    <li><a href="catatan" aria-expanded="false"><i class="icon icon-form"></i><span
                                class="nav-text">Catatan Perjalanan</span></a>
                    </li>
                    <li><a href="riwayat" aria-expanded="false"><i class="icon icon-layout-25"></i><span
                                class="nav-text">Riwayat Perjalanan</span></a>
                    </li>
                </ul>
            </div>


        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
          
                        <div class="card">
                            <div class="card-header">
        <div class="content-body">
            <!-- row -->
            <div class="container--xxl flex-grow-1 container-p-y">
                <div class="row">
                    <div class="col-lg-12 col-sm-3">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                               
<h5 class="card-titletext-primary">Selamat Datang <span class="fw-bold"><?=session('nama'); ?></span>!</h5>
<p class="mb-4">Ayo kita sadar sejak dini terhadap kesehatan untuk masa depan yang lebih baik.</p>
<a href="catatan"class="btn btn-sm btn-outline-primary">Mulai Aplikasi</a>
</div>
</div>

<div class="col-sm-5 text-center text-sm-left">
<div class="card-body pb-0 px-0 px-md-4">

</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12 mb-4 order-0">
<h5 class="pb-1 mb-5">INFORMASI KESEHATAN</h5>
<div class="row mb-5">
<div class="col-md">
<div class="card mb-3">
<div class="row g-0">
<div class="col-md-4">

<img class="card-img card-img-left" src="\tema\assets\img\illustrations\mental.jpg" alt="Card image" />
</div>
<div class="col-md-8">
<div class="card-body">

<h5 class="card-title">PENYAKIT MENTAL PADA ANAK</h5>
<p class="card-text"> Gangguan mental pada anak-anak yang paling umum adalah gangguan kecemasa, depresi, dan attention deficit hyperactivity disorder
<p class="card-text"><small class="text-muted">29 Januari 2023</small></p>
</div>
</div>
</div>
</div>
</div>

<div class="col-md">
<div class="card mb-3">
<div class="row g-0">
<div class="col-md-8">
<div class="card-body">

<h5 class="card-title">PENDERITA JANTUNG TIDAK BOLEH MINUM BANYAK AIR</h5>
<p class="card-text"> Penderita sakit jantung tidak boleh minum banyak air karena dapat menambah beban jantung mereka. disarankan hanya 1-1,5 liter saja dalam sehari
</p>
<p class="card-text"><small class="text-muted">30 Januari 2023</small></p>
</div>
</div>
<div class="col-md-4">

<img class="card-img card-img-right" src="tema/assets/img/illustrations/jantung.jpg" alt="Card image" />
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- / Content -->
<!-- Footer -->

<footer class="content-footer footer bg-footer-theme">

<div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
<div class="mb-2 mb-md-0">
©

<script>document.write(newDate().getFullYear());
</script>

</div>
</div>
</footer>
<!-- / Footer -->
<div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>
<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>© Developed by <a href="#" target="_blank">Pricilla Chiquita</a> 2023</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="focus-2/vendor/global/global.min.js"></script>
    <script src="focus-2/js/quixnav-init.js"></script>
    <script src="focus-2/js/custom.min.js"></script>


    <!-- Vectormap -->
    <script src="focus-2/vendor/raphael/raphael.min.js"></script>
    <script src="focus-2/vendor/morris/morris.min.js"></script>


    <script src="focus-2/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="focus-2/vendor/chart.js/Chart.bundle.min.js"></script>

    <script src="focus-2/vendor/gaugeJS/dist/gauge.min.js"></script>

    <!--  flot-chart js -->
    <script src="focus-2/vendor/flot/jquery.flot.js"></script>
    <script src="focus-2/vendor/flot/jquery.flot.resize.js"></script>

    <!-- Owl Carousel -->
    <script src="focus-2/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <!-- Counter Up -->
    <script src="focus-2/vendor/jqvmap/js/jquery.vmap.min.js"></script>
    <script src="focus-2/vendor/jqvmap/js/jquery.vmap.usa.js"></script>
    <script src="focus-2/vendor/jquery.counterup/jquery.counterup.min.js"></script>


    <script src="focus-2/js/dashboard/dashboard-1.js"></script>

</body>

</html>