<div class="row">
    <div class="col-7">
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Rekening <b>Go Store</b></h3>
            </div>
            <div class="card-body">
                <b>
                    <p>Silakan Tranfer Uang Sesuai Pembelian yah :</p>
                    <h4>Rp.
                        <?= number_format($pesanan->total_bayar, 0, ',', '.') ?>,-
                </b></h4><br>
                <table class="table">
                    <tr>
                        <th>Nama Bank</th>
                        <th>Nomor Rekening</th>
                        <th>Atas Nama</th>
                    </tr>
                    <?php foreach ($rekening as $key => $value) { ?>
                        <tr>
                            <td>
                                <?= $value->nama_bank ?>
                            </td>
                            <td>
                                <?= $value->no_rek ?>
                            </td>
                            <td>
                                <?= $value->ats_nama ?>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
                <table class="table">
                    <tr>
                        <td width="200px">Alfamart/Indomaret</td>
                        <td>
                            <?= $pesanan->no_order ?>
                        </td>
                        <td>GO STORE</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-5">
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Upload Bukti Pembayaran</h3>
            </div>
            <?php echo form_open_multipart('pesanan_saya/bayar/' . $pesanan->id_transaksi); ?>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Atas nama </label>
                    <input name="atas_nama" class="form-control" id="exampleInputEmail1"
                        placeholder="Masukan Atas Nama Rekening" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Bank </label>
                    <input name="nama_bank" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Bank"
                        required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nomor Rekening</label>
                    <input name="no_rek" class="form-control" id="exampleInputEmail1" placeholder="Nomor Rekening"
                        required>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Upload Bukti Pembayaran</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="bukti_bayar" class="form-control" id="exampleInputFile" required>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <a href="<?= base_url('pesanan_saya') ?>" class="btn btn-primary">Kembali</a>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
            <?php echo form_close() ?>
        </div>
        <!-- /.card -->
    </div>
</div>

</div>