<div class="container-fluid">
    <div class="col-sm-12">
        <!-- Main content -->
        <div class="invoice p-3 mb-3">
            <!-- title row -->
            <div class="row">
                <div class="col-12">
                    <h4>
                        <i class="fa-solid fa-chart-column"></i>
                        <?= $title ?>
                        <small class="float-right">
                            Tahun :
                            <?= $tahun ?>
                        </small>
                    </h4>
                </div>
                <!-- /.col -->
            </div>
            <!-- info row -->
            <!-- /.row -->

            <!-- Table row -->
            <div class="row">
                <div class="col-12 table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>No. Order</th>
                                <th>Tanggal Transaksi</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $grand_total = 0;
                            foreach ($laporan as $value) {
                                $grand_total = $grand_total + $value->grand_total; ?>
                                <tr>
                                    <td>
                                        <?= $no++ ?>
                                    </td>
                                    <td>
                                        <?= $value->no_order ?>
                                    </td>
                                    <td>
                                        <?= $value->tgl_order ?>
                                    </td>
                                    <td>
                                        Rp.
                                        <?= number_format($value->grand_total, 0, ',', '.') ?>,-
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                </div>
                <!-- /.col -->
                <div class="col-6"></div>
                <div class="col-3"></div>
                <hr>
                <div class="col-3"> <strong> Grand Total : </strong> Rp.
                    <?= number_format($grand_total, 0, ',', '.') ?>,-
                </div>
            </div>
            <!-- /.row -->
            <!-- /.row -->

            <!-- this row will not appear when printing -->
            <div class="row no-print">
                <div class="col-12">
                    <button rel="noopener" class="btn btn-default" onclick="window.print()"><i class="fas fa-print"></i>
                        Print</button>
                </div>
            </div>
        </div>
        <!-- /.invoice -->
    </div><!-- /.col -->

</div><!-- /.container-fluid -->