<div class="container-fluid">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?= base_url() ?>assets/slider/sliders1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?= base_url() ?>assets/slider/sliders2.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?= base_url() ?>assets/slider/sliders3.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?= base_url() ?>assets/slider/sliders4.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?= base_url() ?>assets/slider/sliders5.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <marquee behavior="scroll" direction="left" class="btn btn-warning mt-2">selamat datang di Halaman Admin
    <b>
      <?= $this->session->userdata('nama') ?>
    </b>
    silakan
    berkerja yah
  </marquee>
  <div class="row mt-2">
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3>
            <?= $total_pesanan ?>
          </h3>

          <p>Transaksi/Pesanan Masuk</p>
        </div>
        <div class="icon">
          <i class="fas fa-envelope"></i>
        </div>
        <a href="<?= base_url('admin/pesanan_masuk') ?>" class="small-box-footer">More info <i
            class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3>
            <?= $total_barang ?>
          </h3>

          <p>Barang</p>
        </div>
        <div class="icon">
          <i class="nav-icon fa-solid fa-briefcase"></i>
        </div>
        <a href="<?= base_url('barang/index') ?>" class="small-box-footer">More info <i
            class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>
            <?= $total_user ?>
          </h3>

          <p>Pelanggan</p>
        </div>
        <div class="icon">
          <i class="nav-icon fa-solid fa-users"></i>
        </div>
        <a href="<?= base_url('pelanggan') ?>" class="small-box-footer">More info <i
            class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-danger">
        <div class="inner">
          <h3>
            <?= $total_kategori ?>
          </h3>

          <p>Kategori</p>
        </div>
        <div class="icon">
          <i class="nav-icon fa-solid fa-list"></i>
        </div>
        <a href="<?= base_url('kategori') ?>" class="small-box-footer">More info <i
            class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>
  <!-- /.row -->
</div>