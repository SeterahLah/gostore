<div class="container-fluid">
    <div class="card card-warning card-outline">
        <div class="card-header">
            <h5 class="card-title m-0">Edit User</h5>
        </div>
        <div class="card-body">
            <?php foreach ($pelanggan as $value): ?>
                <?php echo form_open_multipart('pelanggan/update/') ?>
                <form action="">
                    <div class="form-group">
                        <label for="">nama</label>
                        <input type="hidden" name="id_pelanggan" value="<?php echo $value->id_pelanggan ?>">

                        <input type="text" name="nama_pelanggan" class="form-control"
                            value="<?php echo $value->nama_pelanggan ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" value="<?php echo $value->email ?>">
                    </div>
                    <!-- <div class="form-group">
                        <label for="">password</label>
                        <input type="password" name="password" class="form-control" value=" php echo $value->password ?>">
                    </div> -->
                    <div class="form-group">
                        <label for="">Telepon</label>
                        <input type="number" name="telepon" class="form-control" value="<?php echo $value->telepon ?>">
                    </div>
                    <div class="form-group">
                        <label for="">alamat</label>
                        <input type="text" name="alamat" class="form-control" value="<?php echo $value->alamat ?>">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm mt-3">simpan</button>
                </form>
            <?php endforeach; ?>
            <?php echo form_close() ?>
        </div>
    </div>
</div>




</div>
<script>
    function bacaGambar(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#gambar_load').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $('#review_gambar').change(function () {
        bacaGambar(this);
    });
</script>