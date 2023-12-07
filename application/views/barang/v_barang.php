<div class="col-md-12">
    <div class="card card-warning shadow-none">
        <div class="card-header">
            <h3 class="card-title">Produk</h3>

            <div class="card-tools">
                <a href="<?= base_url('barang/tambah') ?>" type="text" class="btn btn-warning btn-xs">
                    <i class="fas fa-plus">Tambah </i>
                </a>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?php if (
                $this->session->flashdata('pesan')
            ) {
                echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i>';
                echo $this->session->flashdata('pesan');
                echo '</h5></div>';
            }
            ?>
            <table class="table table-bordered table-striped" id="example1">
                <thead class="text-center">
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($barang as $value): ?>
                        <tr>
                            <td class="text-center">
                                <?= $no++; ?>
                            </td>
                            <td>
                                <?= $value->nama_brg ?>
                            </td>
                            <td>
                                <?= $value->kategori ?>
                            </td>
                            <td>
                                Rp.
                                <?= number_format($value->harga, 0, ',', '.') ?>,-
                            </td>
                            <td>
                                <img src="<?= base_url('assets/gambar/') . $value->gambar ?>" alt="" width="150px">
                            </td>
                            <td class="text-center">
                                <a href="<?= base_url('barang/edit/' . $value->id_brg) ?>" class="btn btn-primary btn-sm"><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <button class="btn btn-danger btn-sm" data-toggle="modal"
                                    data-target="#delete<?= $value->id_brg ?>"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!--modal = #delete -->
<?php
foreach ($barang as $value):
    ?>
    <div class="modal fade" id="delete<?= $value->id_brg ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Hapus Produk
                        <?= $value->nama_brg ?>
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <h5>apakah anda yakin menghapus Produk
                        <b>
                            <?= $value->nama_brg ?>
                        </b> dihapus secara permanen
                    </h5>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <a href="<?= base_url('barang/delete/' . $value->id_brg) ?>" class="btn btn-danger">Dihapus</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->

    </div>
<?php endforeach; ?>