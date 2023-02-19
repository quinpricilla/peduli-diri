<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Page Riwayat </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="focus-2/images/logo.png">
    <link href="focus-2/vendor/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <link href="focus-2/vendor/chartist/css/chartist.min.css" rel="stylesheet">
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
        <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Riwayat Perjalanan</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table student-data-table m-t-20">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tanggal</th>
                                                <th>Waktu</th>
                                                <th>Lokasi</th>
                                                <th>Suhu Tubuh</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $user =

                                            session('nik');
                                            $no = 1;

                                            foreach ($data as

                                            $value) {
                                            $pisah =
                                            explode("|", $value);
                                            $key =
                                            $pisah['0'];
                                            if ($user ==
                                            $key) {
                                            ?>
                                            <tr>
                                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <?= $no++;?></td>
                                                <td><?=$pisah['2']; ?></td>

                                            <td>
                                                <?=$pisah['3']; ?>
                                            </td>
                                            <td>
                                                <?=$pisah['4']; ?>
                                            </td>
                                                <td><?=$pisah['5']; ?></td>
                                            </tr>
                                            <?php }
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

    <script src="focus-2/vendor/chartist/js/chartist.min.js"></script>

    <script src="focus-2/vendor/moment/moment.min.js"></script>
    <script src="focus-2/vendor/pg-calendar/js/pignose.calendar.min.js"></script>


    <script src="focus-2/js/dashboard/dashboard-2.js"></script>
    <!-- Circle progress -->

</body>

</html>