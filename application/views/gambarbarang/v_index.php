<div class="col-md-12">
    <div class="card card-warning shadow-none">
        <div class="card-header">
            <h3 class="card-title">Data Gambar</h3>

            <div class="card-tools">

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
                        <th>Cover</th>
                        <th>Jumlah Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($gambarbarang as $value): ?>
                        <tr>
                            <td class="text-center">
                                <?= $no++; ?>
                            </td>
                            <td>
                                <?= $value->nama_brg ?>
                            </td>
                            <td class="text-center"><img src="<?= base_url('assets/gambar/' . $value->gambar) ?>"
                                    width="100px"></td>
                            <td class="text-center">
                                <h4><span class="badge bg-primary">
                                        <?= $value->total_gambar ?>
                                    </span></h4>
                            </td>
                            <td class="text-center">
                                <a href="<?= base_url('gambarbarang/tambah/' . $value->id_brg) ?>"
                                    class="btn btn-success btn-sm"><i class="fas fa-plus"></i> Gambar</a>
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