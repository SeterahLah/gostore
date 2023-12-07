<!-- Main content -->
<div class="invoice p-3 mb-3">
    <!-- title row -->
    <div class="row">

        <div class="col-12">
            <h4>
                <img width="50px" src="<?= base_url('assets/logo/logo8.png') ?>" alt="Go Store"><b> Go Store Shop</b>
                <small class="float-right">Date:
                    <?= date('d-m-Y') ?>
                </small>
            </h4>
        </div>
        <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
        <!-- /.col -->
    </div>
    <div class="row">
        <div class="col-12 table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nama Produk</th>
                        <th>Harga Satuan</th>
                        <th width="150px">Jumlah Pesan</th>
                        <th>Total Harga</th>
                        <th>Berat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    $tot_berat = 0;
                    foreach ($this->cart->contents() as $items) {
                        $barang = $this->m_home->detail_brg($items['id']);
                        $berat = $items['qty'] * $barang->berat;
                        $tot_berat = $tot_berat + $berat; ?>
                        <tr>
                            <td>
                                <?php echo $items['name']; ?>
                            </td>
                            <td style="text-align:left">
                                Rp.
                                <?php echo number_format($items['price'], 0, ',', '.'); ?>,-
                            </td>
                            <td>
                                <?php echo $items['qty']; ?>
                            </td>
                            <td style="text-align:left">Rp.
                                <?php echo number_format($items['subtotal'], 0, ',', '.'); ?>,-
                            </td>
                            <td style="text-align:left">
                                <?= $berat ?> Gram
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    <?php
    echo validation_errors('<div class="alert alert-warning alert-dismissible">
     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
     <h5><i class="icon fas fa-info"></i>', '</h5></div>');
    echo form_open('belanja/checkout');
    $no_order = date('Ymd') . strtoupper(random_string('alnum', 8));

    ?>
    <div class="row">
        <div class="col-sm-3">
            <div class="form-group">
                <label>Provinsi</label>
                <select name="provinsi" class="form-control"></select>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label>Kota/Kabupaten</label>
                <select name="kota" class="form-control"></select>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label>Jasa Kirim</label>
                <select name="ekpedisi" class="form-control">
                </select>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label>Paket</label>
                <select name="paket" class="form-control">
                </select>
            </div>
        </div>
        <div class="col-sm-5">
            <div class="form-group">
                <label>Nama Penerima</label>
                <input name="nama_penerima" class="form-control" required>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label>Telepon/No Handphone</label>
                <input name="telepon" class="form-control" required>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label>Kode Pos</label>
                <input name="kode_pos" class="form-control" required>
            </div>
        </div>
        <div class="col-sm-12 row-3">
            <div class="form-group">
                <label>Alamat</label>
                <input name="alamat" class="form-control" required>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="table-responsive">
                <b>
                    <p>keterangan Pembayaran : </p>
                </b>
                <table class="table">
                    <tr>
                        <th style="">Grand Total:</th>
                        <td>
                            <label for="">
                                Rp.
                                <?php echo number_format($this->cart->total(), 0, ',', '.'); ?>,-
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <th>Berat :</th>
                        <td>
                            <label for="">
                                <?= $tot_berat ?> Gram
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <th>Ongkir :</th>
                        <td><label id="ongkir"></label></td>
                    </tr>
                    <tr>
                        <th>Total Bayar:</th>
                        <td><label id="total_bayar"></label></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-6">
            <p class="lead">Metode Pembayaran:</p>
            <img src="<?= base_url() ?>templates/dist/img/credit/Logo_BRI.png" alt="bri" width="100px">
            <img src="<?= base_url() ?>templates/dist/img/credit/logo_bni.png" alt="bni" width="100px">
            <img src="<?= base_url() ?>templates/dist/img/credit/logo_bca.png" alt="logo_bca" width="100px">
            <img src="<?= base_url() ?>templates/dist/img/credit/logo_mandiri.png" alt="logo_mandiri" width="100px">
            <img src="<?= base_url() ?>templates/dist/img/credit/logo_dana.png" alt="logo_dana" width="100px">
            <img src="<?= base_url() ?>templates/dist/img/credit/logo_alfamart.png" alt="logo_alfamart" width="100px">
            <img src="<?= base_url() ?>templates/dist/img/credit/Logo_Indomaret.png" alt="Logo_Indomaret" width="100px">
            <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                <b>GO STORE</b> menyediakan berbagai pembayaran , seperti BRI, BNI, BCA, MANDIRI, DANA, Alfarmart, dan
                Indomaret. supaya proses pembayaran anda dengan mudah tanpa kendala. terimah kasih sudah berbelanja
                ditoko kami yah....., semoga berikan rezeki yang banyak dari Tuhan yang Maha Esa Aamiin....

            </p>
        </div>
    </div>
    <!-- Simpan Transaksi-->
    <input type="hidden" name="no_order" value="<?= $no_order ?>">
    <input type="hidden" name="estimasi">
    <input type="hidden" name="ongkir">
    <input type="hidden" name="berat" value="<?= $tot_berat ?>">
    <input type="hidden" name="grand_total" value="<?= $this->cart->total() ?>">
    <input type="hidden" name="total_bayar">
    <!-- /Simpan Transaksi-->
    <!-- Simpan rincian-->
    <?php
    $i = 1;
    foreach ($this->cart->contents() as $items) {
        echo form_hidden('qty' . $i++, $items['qty']);
    }
    ?>
    <!-- /Simpan rincian-->


    <div class="row no-print">
        <div class="col-1">
            <a href="<?= base_url('belanja') ?>" rel="noopener" class="btn btn-default">kembali</a><br><br>

        </div>
        <div class="col-4"><button type="submit" class="btn btn-success float-right"><i
                    class="far fa-credit-card"></i>Proses
                Pembayaran
            </button></div>
        <div class="col-7">
        </div>
    </div>
    <?php echo form_close() ?>
</div>


<script>
    $(document).ready(function () {
        //utk provinsi
        $.ajax({
            type: "POST",
            url: "<?= base_url('rajaongkir/provinsi'); ?>",
            success: function (hasil_provinsi) {
                //console.log(hasil_provinsi);
                $("select[name='provinsi']").html(hasil_provinsi);
            }
        });
        //utk kota
        $("select[name='provinsi']").on("change", function () {
            var id_provinsi_terpilih = $("option:selected", this).attr("id_provinsi");
            $.ajax({
                type: "POST",
                url: "<?= base_url('rajaongkir/kota'); ?>",
                data: 'id_provinsi=' + id_provinsi_terpilih,
                success: function (hasil_kota) {
                    //console.log(hasil_kota);
                    $("select[name='kota']").html(hasil_kota);
                }
            });
        });
        $("select[name='kota']").on("change", function () {
            $.ajax({
                type: "POST",
                url: "<?= base_url('rajaongkir/ekpedisi'); ?>",
                success: function (hasil_ekpedisi) {
                    //console.log(hasil_kota);
                    $("select[name='ekpedisi']").html(hasil_ekpedisi);
                }
            });
        });
        //mendapatakan data paket
        $("select[name='ekpedisi']").on("change", function () {
            //mendapatkan ekpedisi terpilih
            var id_ekpedisi_terpilih = $("select[name='ekpedisi']").val()
            //id_kota_tujuan_terpilih
            var id_kota_tujuan_terpilih = $("option:selected", "select[name='kota']").attr("id_kota");
            //total_berat
            var total_berat = <?= $tot_berat ?>;
            //alert(total_berat);

            $.ajax({
                type: "POST",
                url: "<?= base_url('rajaongkir/paket'); ?>",
                data: 'ekpedisi=' + id_ekpedisi_terpilih + '&id_kota=' + id_kota_tujuan_terpilih + '&berat=' + total_berat,
                success: function (hasil_paket) {
                    //console.log(hasil_paket);
                    $("select[name='paket']").html(hasil_paket);
                }
            });
        });

        $("select[name='paket']").on("change", function () {
            //mendapatkan/menampilkan biaya ongkir
            var data_ongkir = $("option:selected", this).attr("ongkir");
            //alert(data_ongkir);
            //$("#ongkir").html("Rp. " + data_ongkir);
            $("#ongkir").html("Rp. " + new Intl.NumberFormat('de-DE').format(data_ongkir));
            // utk mendapatkan total bayar
            //var harga_produk = <php echo number_format($this->cart->total(), 0, ",", ".") ?>;
            //var harga_produk = <= $tot_bayar ?>;
            //var tot_biayaaa = parseInt($("#ongkir").text().replace(/[^0-9]/gi, '')) +
            //parseInt($(".sub_total").text().replace(/[^0-9]/gi, ''));
            //$("#total_bayar").html("<span class='btn btn-sm btn-success'>Total Bayar : Rp."+
            //tot_biayaaa+"</span>");
            //untuk menampilkan sub total
            //var hargaa = $(".sub_total").text();
            //var hasil = hargaa.replace(/[^0-9]/g, '')
            //var hasil2 = hasil * 1;
            var data_total_bayar = parseInt(data_ongkir) + parseInt(<?= $this->cart->total() ?>)
            //$("#total_bayar").html("Rp. " + data_total_bayar);
            $("#total_bayar").html("Rp. " + new Intl.NumberFormat('de-DE').format(data_total_bayar));
            //estimasi dan ongkir
            var estimasi = $("option:selected", this).attr("estimasi");
            $("input[name='estimasi']").val(estimasi);
            $("input[name='ongkir']").val(data_ongkir);
            $("input[name='total_bayar']").val(data_total_bayar);

        });

    });
</script>