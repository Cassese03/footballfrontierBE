@include("admin.common.header")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dhonko.it | Pannello di Accesso</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="shortcut icon" href="<?php echo URL::asset('icona_dhokno.png') ?>">

</head>



<div class="content-wrapper">

<body class="hold-transition login-page" style="background: url('/sfondo_login.png')">
<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary" style="background: transparent;border: none;box-shadow: none;">
        <div class="card-header text-center" style="border-bottom:none;">
            <img src="/logo_dhonko.png" style="width:50%;margin:0 auto;display:block;">
        </div>

        <div class="card-body">

            <form method="post">
                <div class="input-group mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block" style="border:none;background-color:#00C1B3;" name="login" value="Login">LOGIN</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

        </div>
        <!-- /.social-auth-links -->

    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
</div>
</div>
<!-- /.login-box -->

<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>

@include("admin.common.footer")