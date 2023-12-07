<div class="col-md-12">
    <div class="card card-warning shadow-none">
        <div class="card-header">
            <h3 class="card-title">Data Pelanggan</h3>


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
                        <th>Nama Pelanggan</th>
                        <th>Email</th>
                        <th>telepon</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($pelanggan as $value): ?>
                        <tr>
                            <td class="text-center">
                                <?= $no++; ?>
                            </td>
                            <td>
                                <?= $value->nama_pelanggan ?>
                            </td>
                            <td>
                                <?= $value->email ?>
                            </td>
                            <td>
                                <?= $value->telepon ?>
                            </td>
                            <td>
                                <?= $value->alamat ?>
                            </td>
                            <td>
                                <!-- <a href="<= base_url('pelanggan/edit/' . $value->id_pelanggan) ?>"
                                    class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></a> -->
                                <button class="btn btn-danger btn-sm" data-toggle="modal"
                                    data-target="#delete<?= $value->id_pelanggan ?>"><i
                                        class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
        <?php
        foreach ($pelanggan as $value):
            ?>
            <div class="modal fade" id="delete<?= $value->id_pelanggan ?>">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Hapus Pelanggan</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <h5>apakah anda yakin menghapus user bernama
                                <b>
                                    <?= $value->nama_pelanggan ?>
                                </b> dihapus secara permanen
                            </h5>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                            <a href="<?= base_url('pelanggan/delete/' . $value->id_pelanggan) ?>"
                                class="btn btn-danger">Ya</a>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->

            </div>
        <?php endforeach; ?>

        <!-- /.modal -->
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

<div class="modal fade" id="tambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open('pelanggan/tambah'); ?>
                <div class="form-group">
                    <label>Nama Pelanggan</label>
                    <input type="text" name="nama_pelanggan" class="form-control" placeholder="Masukan Nama Pelanggan"
                        required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" placeholder="masukan email" required>
                </div>
                <div class="form-group">
                    <label>password</label>
                    <input type="password" name="password" class="form-control" placeholder="masukan password" required>
                </div>
                <div class="form-group">
                    <label>telepon</label>
                    <input type="text" name="telepon" class="form-control" placeholder="masukan telepon" required>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder="masukan alamat" required>
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
<!-- /.modal -->