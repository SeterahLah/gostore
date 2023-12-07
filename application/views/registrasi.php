<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Go Store |
        <?= $title ?>
    </title>
    <link rel="website icon" type="png" href="<?= base_url('assets/logo/logo8.png') ?>">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>templates/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url() ?>templates/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>templates/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="../../index2.html"><b>Go</b>Store</a>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Registrasi GO STORE</p>

                <?php
                echo validation_errors('<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                ', '</div>');
                if ($this->session->flashdata('pesan')) {
                    echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                    echo $this->session->flashdata('pesan');
                    echo '</div>';

                }
                echo form_open('registrasi') ?>
                <div class="input-group mb-3">
                    <input type="text" name="nama_pelanggan" class="form-control"
                        value="<?= set_value('nama_pelanggan') ?>" placeholder="Masukan Nama Lengkap">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" value="<?= set_value('email') ?>"
                        placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control"
                                value="<?= set_value('password') ?>" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="input-group mb-3">
                            <input type="password" name="ulangi_password" value="<?= set_value('ulangi_password') ?>"
                                class="form-control" placeholder="ulangi password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="telepon" name="telepon" class="form-control" value="<?= set_value('telepon') ?>"
                        placeholder="0812XXXXXXX">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <i class="fa-solid fa-address-book"></i>
                        </div>
                    </div>
                </div>
                <textarea name="alamat" class="form-control" rows="5" placeholder="Alamat Lengkap"><?= set_value('alamat') ?></textarea hidden>
                <hr>
                <button type="submit" class="btn btn-warning btn-block">Register</button>
                <?php echo form_close() ?>
                <br>
                <a href="<?= base_url('registrasi/login') ?>" class="text-center">Sudah Mepunyai Akun? Login Disini</a>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>

    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="<?= base_url() ?>templates/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>templates/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>templates/dist/js/adminlte.min.js"></script>
    <script>
        window.setTimeout(function () {
            $('.alert').fadeTo(500, 0).slideUp(500, function () {
                $(this).remove();
            });
        }, 3000)
    </script>
</body>


</html>