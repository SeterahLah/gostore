<div class="card card-solid mt-2 bg-light">
    <div class="card-body pb-0">
        <div class="row">
            <div class="col-sm-12">
                <?php
                if ($this->session->flashdata('pesan')) {
                    echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                    echo $this->session->flashdata('pesan');
                    echo '</div>';

                } ?>

            </div>
            <div class="col-sm-12">
                <?php echo form_open('belanja/update'); ?>

                <table class="table " cellpadding="6" cellspacing="1" style="width:100%">

                    <tr>
                        <th>Gambar Produk</th>
                        <!-- <th width="100px">Gambar</th> -->
                        <th>Nama Produk</th>
                        <th width="100px">QTY</th>
                        <th style="text-align:right">harga</th>
                        <th style="text-align:right">Sub-Total</th>
                        <th style="text-align:right">Berat</th>
                        <th class="text-center">Aksi</th>
                    </tr>

                    <?php $i = 1; ?>

                    <?php
                    $tot_berat = 0;
                    foreach ($this->cart->contents() as $items) {
                        $barang = $this->m_home->detail_brg($items['id']);
                        $berat = $items['qty'] * $barang->berat;
                        $tot_berat = $tot_berat + $berat; ?>

                        <tr>
                            <td>
                                <img src="<?= base_url('assets/gambar/' . $barang->gambar) ?>" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle">
                            </td>
                            <td>
                                <?php echo $items['name']; ?>
                            </td>
                            <td>
                                <?php echo form_input(array('name' => $i . '[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5', 'type' => 'number', 'class' => 'form-control', 'min' => '0')); ?>
                            </td>
                            <td style="text-align:right">
                                Rp.
                                <?php echo number_format($items['price'], 0, ',', '.'); ?>,-
                            </td>
                            <td style="text-align:right">Rp.
                                <?php echo number_format($items['subtotal'], 0, ',', '.'); ?>,-
                            </td>
                            <td style="text-align:right">
                                <?= $berat ?> Gram
                            </td>
                            <td class="text-center">
                                <a href="<?= base_url('belanja/delete/' . $items['rowid']) ?>" class="btn btn-danger"><i
                                        class="fa fa-trash"></i></a>
                            </td>
                        </tr>

                        <?php $i++; ?>

                    <?php } ?>

                    <tr>
                        <td class="text-left">
                            <b>Total |</b>
                        </td>
                        <td class="text-left">
                            <b>
                                Rp.
                                <?php echo number_format($this->cart->total(), 0, ',', '.'); ?>,-

                            </b>
                        </td>
                        <th>Total Berat :

                        </th>
                        <td><b>
                                <?= $tot_berat ?> Gram
                            </b></td>
                        <td></td>
                        <td></td>
                    </tr>

                </table>

                <button type="submit" class="btn btn-primary btn-flat"><i class="fa-solid fa-up-long"></i>
                    update</button>
                <a href="<?= base_url('belanja/kosongkan') ?>" class="btn btn-danger btn-flat"><i
                        class="fa-solid fa-arrows-rotate"></i></i>
                    Kosongkan Keranjang</a>
                <a href="<?= base_url('belanja/checkout') ?>" class="btn btn-success btn-flat"><i
                        class="fa-solid fa-check-to-slot"></i>
                    Check Out</a>

                <?php echo form_close() ?>
                <br>
            </div>
        </div>
    </div>
</div>
</div>