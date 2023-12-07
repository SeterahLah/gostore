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
                        aria-selected="true">Pesanan Masuk</a>
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
                        <?php foreach ($pesanan as $value) { ?>
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
                                        <?php if ($value->status_bayar == 1) { ?>
                                            <button class="badge badge-sm badge-primary" data-toggle="modal"
                                                data-target="#cek<?= $value->id_transaksi ?>">Cek Pembayaran</button>
                                            <a href="<?= base_url('admin/proses/' . $value->id_transaksi) ?>"
                                                class="badge badge-sm badge-warning">Proses</a>
                                        <?php } ?>
                                    </td>
                                </tr>
                            </tbody>
                        <?php } ?>
                    </table>
                </div>
                <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel"
                    aria-labelledby="custom-tabs-four-profile-tab">
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
                        <?php foreach ($pesanan_diproses as $value) { ?>
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

                                        <span class="badge badge-primary">Diproses/Dikemas</span>
                                    </td>

                                    <td>
                                        <?php if ($value->status_bayar == 1) { ?>
                                            <button class="badge badge-sm badge-primary" data-toggle="modal"
                                                data-target="#kirim<?= $value->id_transaksi ?>"><i
                                                    class="fa-solid fa-truck-fast"></i>
                                                dikirim</button>
                                        <?php } ?>
                                    </td>
                                </tr>
                            </tbody>
                        <?php } ?>
                    </table>
                    <!--modal-kirim -->
                    <?php foreach ($pesanan_diproses as $value) { ?>
                        <div class="modal fade" id="kirim<?= $value->id_transaksi ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">No. Order :
                                            <?= $value->no_order ?>
                                        </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <?php echo form_open('admin/kirim/' . $value->id_transaksi) ?>
                                        <table class="table">
                                            <tr>
                                                <th>Nama Penerima</th>
                                                <th>:</th>
                                                <th>
                                                    <?= $value->nama_penerima ?>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>No. Telepon/Handphone</th>
                                                <th>:</th>
                                                <th>
                                                    <?= $value->telepon ?>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>Jasa Kirim</th>
                                                <th>:</th>
                                                <th>
                                                    <?= $value->ekpedisi ?>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>Berat Produk</th>
                                                <th>:</th>
                                                <th>
                                                    <?= $value->berat ?> Gram
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>Ongkir</th>
                                                <th>:</th>
                                                <th>
                                                    Rp.
                                                    <?= number_format($value->ongkir, 0, ',', '.') ?>,-
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>Masukkan Resi</th>
                                                <th>:</th>
                                                <th>
                                                    <input name="no_resi" class="form-control" placeholder="No.  Resi"
                                                        required>
                                                </th>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">kirim</button>
                                    </div>
                                    <?php echo form_close() ?>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                    <?php } ?>
                </div>

                <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel"
                    aria-labelledby="custom-tabs-four-messages-tab">
                    <!-- dikirim -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No. Order</th>
                                <th>Tanggal Pesanan</th>
                                <th>Jasa Kirim</th>
                                <th>Total Bayar</th>
                                <th>No. Resi</th>
                            </tr>
                        </thead>
                        <?php foreach ($pesanan_dikirim as $value) { ?>
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

                                        <span class="badge badge-primary">Sedang Dikirim</span>
                                    </td>
                                    <td>
                                        <?= $value->no_resi ?>
                                    </td>
                                </tr>
                            </tbody>
                        <?php } ?>
                    </table>
                </div>
                <div class="tab-pane fade" id="custom-tabs-four-settings" role="tabpanel"
                    aria-labelledby="custom-tabs-four-settings-tab">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No. Order</th>
                                <th>Tanggal Pesanan</th>
                                <th>Jasa Kirim</th>
                                <th>Total Bayar</th>
                                <th>No. Resi</th>
                            </tr>
                        </thead>
                        <?php foreach ($pesanan_selesai as $value) { ?>
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

                                        <span class="badge badge-primary">Diterima</span>
                                    </td>
                                    <td>
                                        <?= $value->no_resi ?>
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

<!-- modal bukti pembayaran -->
<?php foreach ($pesanan as $key => $value) { ?>
    <div class="modal fade" id="cek<?= $value->id_transaksi ?>">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">No. Order :
                        <?= $value->no_order ?>
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <tr>
                            <td>Nama Bank</td>
                            <td>:</td>
                            <td>
                                <?= $value->nama_bank ?>
                            </td>
                        </tr>
                        <tr>
                            <td>No. Rekening</td>
                            <td>:</td>
                            <td>
                                <?= $value->no_rek ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Atas Nama</td>
                            <td>:</td>
                            <td>
                                <?= $value->atas_nama ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Total Bayar</td>
                            <td>:</td>
                            <td>
                                Rp.
                                <?= number_format($value->total_bayar, 0, ',', '.') ?>,-
                            </td>
                        </tr>
                    </table>
                    <img src="<?= base_url('assets/bukti_bayar/' . $value->bukti_bayar) ?>" class="img-fluid pad">
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>
<!-- /.modal -->