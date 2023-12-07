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
<marquee behavior="scroll" direction="left" class="btn btn-warning mt-2">selamat datang ditoko <b>GO STORE</b>
    silakan
    berbelanja, dijamin barang original dan berkualitas yah....
</marquee>
<div class="card card-solid mt-2 bg-warning">
    <div class="card-body pb-0">
        <div class="row d-flex align-items-strtch">
            <?php foreach ($barang as $value): ?>
                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                    <?php echo form_open('belanja/tambah');
                    echo form_hidden('id', $value->id_brg);
                    echo form_hidden('qty', 1);
                    echo form_hidden('price', $value->harga);
                    echo form_hidden('name', $value->nama_brg);
                    echo form_hidden('redirect_page', str_replace('index.php/', '', current_url())); ?>
                    <div class="card bg-light d-flex flex-fill">
                        <div class="card-header text-muted border-bottom-0">
                            <h2 class="lead"><b>
                                    <?= $value->nama_brg ?>
                                </b></h2>
                            <p class="text-muted text-sm"><b>Kategori : </b>
                                <?= $value->kategori ?>
                            </p>
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-12  text-center">

                                    <img src="<?= base_url('assets/gambar/' . $value->gambar) ?>" alt="user-avatar"
                                        class="img-fluid img-circle" width="180px" height="150px">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="text-left">
                                        <span class="btn btn-primary btn-sm">Rp.
                                            <?= number_format($value->harga, 0, ',', '.') ?>,-
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="text-right">
                                        <a href="<?= base_url('home/detail_brg/' . $value->id_brg) ?>"
                                            class="btn btn-sm bg-teal">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                        <button type="submit" class="btn btn-sm btn-primary">
                                            <i class="fas fa-cart-plus fa-lg mr-2"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>