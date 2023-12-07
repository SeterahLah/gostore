<div class="col-md-12">
    <div class="card card-warning shadow-none">
        <div class="card-header">
            <h3 class="card-title">Data Users</h3>

            <div class="card-tools">
                <button type="button" data-toggle="modal" data-target="#tambah" class="btn btn-light rounded btn-xs">
                    <i class="fas fa-plus"> Tambah</i>
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
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Level</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($user as $value): ?>
                        <tr>
                            <td class="text-center">
                                <?= $no++; ?>
                            </td>
                            <td>
                                <?= $value->nama ?>
                            </td>
                            <td>
                                <?= $value->username ?>
                            </td>

                            <td>
                                <?php if ($value->level_user == 1) {
                                    echo '<span class="badge bg-primary">Admin</span>';
                                } else {
                                    echo '<span class="badge bg-success">User</span>';
                                } ?>
                            </td>

                            </td>
                            <td class="text-center">
                                <?php echo anchor('user1/edit/' . $value->id, '<button class="btn btn-primary btn-sm" data-toggle="modal"
                                    data-target="#edit<?php echo $value->id ?>"><i
                                        class="fa-solid fa-pen-to-square"></i></button>') ?>
                                <button class="btn btn-danger btn-sm" data-toggle="modal"
                                    data-target="#delete<?= $value->id ?>"><i class="fa-solid fa-trash"></i></button>
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

<!-- /.col -->
<!--modal = #edit -->
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
                <?php echo form_open('user/tambah'); ?>
                <div class="form-group">
                    <label>Nama User</label>
                    <input type="text" name="nama" class="form-control" placeholder="masukan nama" required>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="masukan nama username"
                        required>
                </div>
                <div class="form-group">
                    <label>password</label>
                    <input type="password" name="password" class="form-control" placeholder="masukan password" required>
                </div>
                <div class="form-group">
                    <label>level User</label>
                    <select name="level_user" class="form-control">
                        <option value="1" selected="">Admin</option>
                        <option value="2">User</option>
                    </select>
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
<!--modal = #delete -->
<?php
foreach ($user as $value):
    ?>
    <div class="modal fade" id="delete<?= $value->id ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <h5>apakah anda yakin menghapus user bernama
                        <b>
                            <?= $value->nama ?>
                        </b> dihapus secara permanen
                    </h5>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <a href="<?= base_url('user/delete/' . $value->id) ?>" class="btn btn-danger">Ya</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->

    </div>
<?php endforeach; ?>

<!-- /.modal -->