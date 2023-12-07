<div class="col-md-4">
    <div class="card card-warning card-outline">
        <div class="card-header">
            <h5 class="card-title m-0">Laporan Harian</h5>
        </div>
        <div class="card-body">
            <?php echo form_open('laporan/lap_harian') ?>
            <div class="row">
                <div class="col-sm-4">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Tanggal</label>
                        <select name="tanggal" class="form-control">
                            <?php
                            $mulai = 1;
                            for ($i = $mulai; $i < $mulai + 31; $i++) {
                                echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
                            } ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Bulan</label>
                        <select name="bulan" class="form-control">
                            <?php
                            $mulai = 1;
                            for ($i = $mulai; $i < $mulai + 12; $i++) {
                                echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
                            } ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Tahun</label>
                        <select name="tahunan" class="form-control">
                            <?php
                            $mulai = date('Y') - 1;
                            for ($i = $mulai; $i < $mulai + 6; $i++) {
                                echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
                            } ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-warning btn-block">Cetak</button>
                    </div>
                </div>
            </div>
            <?php echo form_close() ?>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card card-warning card-outline">
        <div class="card-header">
            <h5 class="card-title m-0">Laporan Bulanan</h5>
        </div>
        <div class="card-body">
            <?php echo form_open('laporan/lap_bulanan') ?>
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Bulan</label>
                        <select name="bulan" class="form-control">
                            <?php
                            $mulai = 1;
                            for ($i = $mulai; $i < $mulai + 12; $i++) {
                                echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
                            } ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Tahun</label>
                        <select name="tahun" class="form-control">
                            <?php
                            $mulai = date('Y') - 1;
                            for ($i = $mulai; $i < $mulai + 6; $i++) {
                                echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
                            } ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-warning btn-block">Cetak</button>
                    </div>
                </div>
            </div>
            <?php echo form_close() ?>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card card-warning card-outline">
        <div class="card-header">
            <h5 class="card-title m-0">Laporan Tahunan</h5>
        </div>
        <div class="card-body">
            <?php echo form_open('laporan/lap_tahunan') ?>
            <div class="row">
                <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Tahun</label>
                        <select name="tahun" class="form-control">
                            <?php
                            $mulai = date('Y') - 1;
                            for ($i = $mulai; $i < $mulai + 6; $i++) {
                                echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
                            } ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-warning btn-block">Cetak</button>
                    </div>
                </div>
            </div>
            <?php echo form_close() ?>
        </div>
    </div>
</div>