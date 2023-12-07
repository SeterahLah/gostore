<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-warning navbar-light">
    <div class="container">
        <a href="<?= base_url('home') ?>" class="navbar-brand">
            <img src="<?= base_url() ?>assets/logo/logo8.png" alt="go store" class="brand-image  elevation-3"
                style="opacity: .8">
            <span class="brand-text font-weight-light"><strong><b>Go Store</b></strong></span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="<?= base_url('home') ?>" class="nav-link">Home</a>
                </li>
                <?php $kategori = $this->m_home->get_user_data_kategori(); ?>
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        class="nav-link dropdown-toggle">Kategori</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <?php foreach ($kategori as $value): ?>
                            <li><a href="<?= base_url('home/kategori/' . $value->id_kategori) ?>" class="dropdown-item">
                                    <?= $value->kategori ?>
                                </a></li>
                        <?php endforeach; ?>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="https://api.whatsapp.com/send?phone=+6289516757110&text=Hai Admin Saya ingin bertanya...."
                        class="nav-link">Hubungi Admin</a>
                </li>
            </ul>
        </div>

        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            <!-- keranjang Menu -->
            <?php
            $keranjang = $this->cart->contents();
            $jml_item = 0;
            foreach ($keranjang as $value) {
                $jml_item += $value['qty'];
            }
            ?>
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span class="badge badge-danger navbar-badge">
                        <b>
                            <?= $jml_item ?>
                        </b>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right ">
                    <!--  Start keranjang -->
                    <?php if (empty($keranjang)) { ?>
                        <a href="#" class="dropdown-item">
                            <p style="text-align:center;">Tidak ada produk di Keranjang!</p>
                        </a>
                    <?php } else {
                        foreach ($keranjang as $value) {
                            $barang = $this->m_home->detail_brg($value['id']) ?>
                            <a href="#" class="dropdown-item">
                                <div class="media">
                                    <img src="<?= base_url('assets/gambar/' . $barang->gambar) ?>" alt="User Avatar"
                                        class="img-size-50 mr-3 img-circle">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            <?= $value['name'] ?>
                                        </h3>
                                        <p class="text-sm">
                                            <?= $value['qty'] ?> X
                                            <?= number_format($value['price'], 0, ',', '.') ?>,-
                                        </p>
                                        <p class="text-sm text-muted"><i class="fa fa-calculator"></i>Rp.
                                            <?= $this->cart->format_number($value['subtotal'], 0, ',', '.'); ?>,-
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                        <?php } ?>
                        <a href="#" class="dropdown-item">
                            <div class="media">
                                <div class="media-body">
                                    <strong>Total :</strong></td>
                                    Rp.
                                    <?= $this->cart->format_number($this->cart->total()); ?>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="<?= base_url('belanja') ?>" class="dropdown-item dropdown-footer">Lihat Semua Keranjang</a>
                        <a href="<?= base_url('belanja/checkout') ?>" class="dropdown-item dropdown-footer">Check Out</a>
                    <?php } ?>
                    <!-- end keranjang -->
                    <div class="dropdown-divider"></div>
                </div>
            </li>
            <li class="nav-item">
                <?php if ($this->session->userdata('email') == "") { ?>
                    <a class="nav-link" data-toggle="dropdown" href="<?= base_url('login_user') ?>">
                        <img src="<?= base_url() ?>templates/dist/img/profile-user.png" alt="AdminLTE Logo"
                            class="brand-image img-circle elevation-3" style="opacity: .8">
                        <span class="brand-text font-weight-light"><b>login/registrasi</b></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <div class="dropdown-divider"></div>
                        <a href="<?= base_url('registrasi/login') ?>" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> Login
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="<?= base_url('registrasi') ?>" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> Registrasi
                        </a>

                    <?php } else { ?>
                        <a class="nav-link" data-toggle="dropdown" href="<?= base_url('login_user') ?>">
                            <img src="<?= base_url() ?>templates/dist/img/user.png"
                                class="brand-image img-circle elevation-3" style="opacity: .8">
                            <span class="brand-text font-weight-light"><b>
                                    <?= $this->session->userdata('nama_pelanggan') ?>
                                </b></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <div class="dropdown-divider"></div>
                            <a href="<?= base_url('pelanggan/akun') ?>" class="dropdown-item" hidden>
                                <i class="fa-solid fa-user"></i> Akun Saya
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="<?= base_url('pesanan_saya') ?>" class="dropdown-item">
                                <i class="fa-solid fa-bag-shopping"></i> Pesanan Saya
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="<?= base_url('registrasi/logout') ?>" class="dropdown-item">
                                <i class="fa-solid fa-right-from-bracket"></i> log out
                            </a>
                        <?php } ?>
            </li>
        </ul>
    </div>
</nav>
<!-- /.navbar -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">
                        <?= $title ?>
                    </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Go Store</a></li>
                        <li class="breadcrumb-item"><a href="#">
                                <?= $title ?>
                            </a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container">