<div class="row">
    <div class=" col-sm-12">
        <?php
        if ($this->session->flashdata('pesan')) {
            echo '<div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
            echo $this->session->flashdata('pesan');
            echo '</div>';

        } ?>
        <div class="card card-primary card-outline card-outline-tabs">
            <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill"
                            href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home"
                            aria-selected="true">Status Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill"
                            href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile"
                            aria-selected="false">Diproses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill"
                            href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages"
                            aria-selected="false">Dikirim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-four-settings-tab" data-toggle="pill"
                            href="#custom-tabs-four-settings" role="tab" aria-controls="custom-tabs-four-settings"
                            aria-selected="false">Selesai</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="custom-tabs-four-tabContent">
                    <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel"
                        aria-labelledby="custom-tabs-four-home-tab">
                        <!-- bagian Status order-->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No. Order</th>
                                    <th>Tanggal Pesanan</th>
                                    <th>Jasa Kirim</th>
                                    <th>Total Bayar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <?php foreach ($belum_bayar as $value) { ?>
                                <tbody>
                                    <tr>
                                        <td>
                                            <?= $value->no_order ?>
                                        </td>
                                        <td>
                                            <?= $value->tgl_order ?>
                                        </td>
                                        <td>
                                            <b>
                                                Ekpedisi :
                                                <?= $value->ekpedisi ?><br>
                                            </b>
                                            Paket :
                                            <?= $value->paket ?><br>
                                            Ongkir : Rp.
                                            <?= number_format($value->ongkir, 0, ',', '.') ?>,-
                                        </td>
                                        <td>
                                            Rp.
                                            <?= number_format($value->total_bayar, 0, ',', '.') ?>,<br>
                                            <?php if ($value->status_bayar == 0) { ?>
                                                <span class="badge badge-warning">Belum Bayar</span>
                                            <?php } else { ?>
                                                <span class="badge badge-success">Sudah Bayar</span><br>
                                                <span class="badge badge-primary">Menunggu Verifikasi</span>
                                            <?php } ?>
                                        </td>

                                        <td>
                                            <?php if ($value->status_bayar == 0) { ?>
                                                <a href="<?= base_url('pesanan_saya/bayar/' . $value->id_transaksi) ?>"
                                                    class="badge badge-sm badge-primary">Bayar</a>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                </tbody>
                            <?php } ?>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel"
                        aria-labelledby="custom-tabs-four-profile-tab">
                        <!-- bagian diproses-->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No. Order</th>
                                    <th>Tanggal Pesanan</th>
                                    <th>Jasa Kirim</th>
                                    <th>Total Bayar</th>

                                </tr>
                            </thead>
                            <?php foreach ($diproses as $value) { ?>
                                <tbody>
                                    <tr>
                                        <td>
                                            <?= $value->no_order ?>
                                        </td>
                                        <td>
                                            <?= $value->tgl_order ?>
                                        </td>
                                        <td>
                                            <b>
                                                Ekpedisi :
                                                <?= $value->ekpedisi ?><br>
                                            </b>
                                            Paket :
                                            <?= $value->paket ?><br>
                                            Ongkir : Rp.
                                            <?= number_format($value->ongkir, 0, ',', '.') ?>,-
                                        </td>
                                        <td>
                                            Rp.
                                            <?= number_format($value->total_bayar, 0, ',', '.') ?>,<br>
                                            <span class="badge badge-success">Terverifikasi</span><br>
                                            <span class="badge badge-primary">Diproses/dikemas</span>
                                        </td>
                                    </tr>
                                </tbody>
                            <?php } ?>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel"
                        aria-labelledby="custom-tabs-four-messages-tab">
                        <!-- bagian dikirim-->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No. Order</th>
                                    <th>Tanggal Pesanan</th>
                                    <th>Jasa Kirim</th>
                                    <th>Total Harga</th>
                                    <th>No. Resi</th>
                                    <td>Aksi</td>
                                </tr>
                            </thead>
                            <?php foreach ($dikirim as $value) { ?>
                                <tbody>
                                    <tr>
                                        <td>
                                            <?= $value->no_order ?>
                                        </td>
                                        <td>
                                            <?= $value->tgl_order ?>
                                        </td>
                                        <td>
                                            <b>
                                                Ekpedisi :
                                                <?= $value->ekpedisi ?><br>
                                            </b>
                                            Paket :
                                            <?= $value->paket ?><br>
                                            Ongkir : Rp.
                                            <?= number_format($value->ongkir, 0, ',', '.') ?>,-
                                        </td>
                                        <td>
                                            Rp.
                                            <?= number_format($value->total_bayar, 0, ',', '.') ?>,<br>
                                        </td>
                                        <td><b>
                                                <?= $value->no_resi ?><br>
                                            </b><span class="badge badge-success">sedang Dikirim</span><br>
                                        </td>
                                        <td><button class="btn btn-sm btn-primary" data-toggle="modal"
                                                data-target="#terima<?= $value->id_transaksi ?>">Pesanan Diterima</button>
                                        </td>

                                    </tr>
                                </tbody>
                            <?php } ?>
                        </table>
                        <!-- diterima -->

                    </div>
                    <div class="tab-pane fade" id="custom-tabs-four-settings" role="tabpanel"
                        aria-labelledby="custom-tabs-four-settings-tab">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No. Order</th>
                                    <th>Tanggal Pesanan</th>
                                    <th>Jasa Kirim</th>
                                    <th>Total Harga</th>
                                    <th>No. Resi</th>
                                </tr>
                            </thead>
                            <?php foreach ($selesai as $value) { ?>
                                <tbody>
                                    <tr>
                                        <td>
                                            <?= $value->no_order ?>
                                        </td>
                                        <td>
                                            <?= $value->tgl_order ?>
                                        </td>
                                        <td>
                                            <b>
                                                Ekpedisi :
                                                <?= $value->ekpedisi ?><br>
                                            </b>
                                            Paket :
                                            <?= $value->paket ?><br>
                                            Ongkir : Rp.
                                            <?= number_format($value->ongkir, 0, ',', '.') ?>,-
                                        </td>
                                        <td>
                                            Rp.
                                            <?= number_format($value->total_bayar, 0, ',', '.') ?>,<br>
                                        </td>
                                        <td><b>
                                                <?= $value->no_resi ?><br>
                                            </b><span class="badge badge-success">Diterima</span><br>
                                        </td>
                                    </tr>
                                </tbody>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>
</div>
<?php foreach ($dikirim as $value) { ?>
    <div class="modal fade" id="terima<?= $value->id_transaksi ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Pesanan Diterima</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah Yakin Pesanan Sudah Diterima</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                    <a href="<?= base_url('pesanan_saya/diterima/' . $value->id_transaksi) ?>"
                        class="btn btn-primary">Ya</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>
<!-- /.modal -->