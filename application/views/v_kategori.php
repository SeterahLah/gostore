<div class="col-md-12">
    <div class="card card-warning shadow-none">
        <div class="card-header">
            <h3 class="card-title">Kategori</h3>

            <div class="card-tools">
                <button type="button" data-toggle="modal" data-target="#tambah" class="btn btn-warning btn-xs">
                    <i class="fas fa-plus">Tambah</i>
                </button>
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
                        <th>Nama Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($kategori as $value): ?>
                        <tr>
                            <td class="text-center">
                                <?= $no++; ?>
                            </td>
                            <td>
                                <?= $value->kategori ?>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-primary btn-sm" data-toggle="modal"
                                    data-target="#edit<?= $value->id_kategori ?>"><i
                                        class="fa-solid fa-pen-to-square"></i></button>
                                <button class="btn btn-danger btn-sm" data-toggle="modal"
                                    data-target="#delete<?= $value->id_kategori ?>"><i
                                        class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <!--modal = #edit -->
            <?php foreach ($kategori as $key => $value): ?>
                <div class="modal fade" id="edit<?= $value->id_kategori ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Edit Kategori</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <?php echo form_open('kategori/edit/' . $value->id_kategori); ?>
                                <div class="form-group">
                                    <label>nama kategori</label>
                                    <input type="text" name="kategori" value="<?= $value->kategori ?>" class="form-control"
                                        placeholder="masukan nama kategori baru" required>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">simpan</button>
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
            <?php endforeach; ?>
            <!--modal = #delete -->
            <?php
            foreach ($kategori as $value):
                ?>
                <div class="modal fade" id="delete<?= $value->id_kategori ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Hapus Kategori
                                    <?= $value->kategori ?>
                                </h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <h5>apakah anda yakin menghapus kategori
                                    <b>
                                        <?= $value->kategori ?>
                                    </b> dihapus secara permanen
                                </h5>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                <a href="<?= base_url('kategori/delete/' . $value->id_kategori) ?>"
                                    class="btn btn-danger">Dihapus</a>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->

                </div>
            <?php endforeach; ?>

        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

<!--modal = #tambah -->
<div class="modal fade" id="tambah">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah kategori</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open('kategori/tambah'); ?>
                <div class="form-group">
                    <label>Nama kategori</label>
                    <input type="text" name="kategori" class="form-control" placeholder="masukan nama katagori"
                        required>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">tambahkan</button>
            </div>
            <?php form_close(); ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>