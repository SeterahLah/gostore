<div class="container-fluid">
    <!-- general form elements disabled -->
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Edit barang</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?php
            echo validation_errors('<div class="alert alert-warning alert-dismissible">
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
             <h5><i class="icon fas fa-info"></i>', '</h5></div>');
            if (isset($error_upload)) {
                echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-info"></i>' . $error_upload . '</h5></div>';
            }
            echo form_open_multipart('barang/edit/' . $barang->id_brg) ?>

            <form>
                <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" name="nama_brg" class="form-control" value="<?= $barang->nama_brg ?>"
                            placeholder="masukan nama Barang " required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Kategori</label>
                            <select name="id_kategori" class="form-control" required>
                                <option value="<?= $barang->id_kategori ?>">
                                    <?= $barang->kategori ?>
                                </option>
                                <?php foreach ($kategori as $value): ?>
                                    <option value="<?= $value->id_kategori ?>">
                                        <?= $value->kategori ?>
                                    </option>
                                <?php endforeach; ?>

                            </select>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" name="harga" class="form-control" value="<?= $barang->harga ?>"
                                placeholder="masukan harga barang" required>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Berat produk (Gram)</label>
                            <input type="number" min="0" name="berat" class="form-control" value="<?= $barang->berat ?>"
                                placeholder="masukan harga barang" required>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Stok Produk</label>
                            <input type="number" min="1" name="stok" class="form-control" value="<?= $barang->stok ?>"
                                placeholder="masukan harga barang" required>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Katerangan</label>
                        <textarea name="keterangan" class="form-control" placeholder="masukan keterangan barang"
                            rows="5" required><?= $barang->keterangan ?></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Ganti Gambar</label>
                            <input type="file" name="gambar" class="form-control" id="review_gambar">
                            <Small>
                                <?= $barang->gambar ?>
                            </Small>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <img src="<?= base_url('assets/gambar/' . $barang->gambar) ?>" id="gambar_load"
                                width="300px">
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">simpan</button>
                        <a href="<?= base_url('barang') ?>" class="btn btn-success btn-sm">kembali</a>
                    </div>
                </div>
            </form>
            <?php echo form_close() ?>
        </div>
    </div>
</div>

<script>
    function bacaGambar(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#gambar_load').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $('#review_gambar').change(function () {
        bacaGambar(this);
    });
</script>