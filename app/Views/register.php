<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Page Register</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="focus-2/images/logo.png">
    <link href="focus-2/css/style.css" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                <img class="logo-abbr" src="focus-2/images/pdungu.png">
                                    <form action="proses_register" method="post">
                                        <div class="form-group">
                                            <label><strong>NIK</strong></label>
                                            <input type="text" class="form-control" placeholder="NIK" name="nik">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Nama</strong></label>
                                            <input type="text" class="form-control" placeholder="Nama" name="nama">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" class="form-control" placeholder="Password" name="password">
                                        </div>
                                        <div class="text-center mt-4">
                                            <input type="submit" class="btn btn-primary btn-block" value="Daftar"></input>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Sudah Punya Akun? <a class="text-primary" href="/">Login</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="focus-2/vendor/global/global.min.js"></script>
    <script src="focus-2/js/quixnav-init.js"></script>
    <!--endRemoveIf(production)-->
</body>

</html>