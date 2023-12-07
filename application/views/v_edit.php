<div class="container-fluid">
    <div class="card card-warning card-outline">
        <div class="card-header">
            <h5 class="card-title m-0">Edit User</h5>
        </div>
        <div class="card-body">
            <?php foreach ($user1 as $data): ?>
                <form action="<?php echo base_url() . 'user1/update' ?>" method="post">
                    <div class="for-group">
                        <label for="">nama</label>
                        <input type="hidden" name="id" value="<?= $data->id; ?>" class="form-control">
                        <input type="text" name="nama" class="form-control" value="<?php echo $data->nama ?>">
                    </div>
                    <div class="for-group">
                        <label for="">username</label>
                        <input type="text" name="username" class="form-control" value="<?php echo $data->username ?>">
                    </div>
                    <!-- <div class="for-group">
                        <label for="">password</label>
                        <input type="password" name="password" class="form-control" value="php echo $data->password ?>">
                    </div> -->
                    <div class="form-group">
                        <label>level User</label>
                        <select name="level_user" class="form-control">
                            <option value="1" <?php if ($data->level_user == 1) {
                                echo 'selected';
                            } ?>>Admin
                            </option>
                            <option value="2" <?php if ($data->level_user == 2) {
                                echo 'selected';
                            } ?>>User</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">simpan</button>
                <?php endforeach; ?>
            </form>
        </div>
    </div>
</div>




</div>