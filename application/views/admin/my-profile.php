<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="card">
        <div class="card-body">
            <h3><b>Profile
                    <?php if ($user['role_id'] == 1) {
                        echo "Admin";
                    } else if ($user['role_id'] == 2) {
                        echo "Guru";
                    } ?></b></h3>
            <hr>
            <div class="row">
                <div class="col-4 text-center">
                    <img src="" style="width: 200px;height: 200px"></img>
                </div>
                <div class="col">
                    <h3><b><?= $user['nama']; ?></b></h3>
                    <h6><?= $user['no_induk']; ?></h6>
                    <h5><?= $user['email']; ?></h5>
                    <hr>
                    <h5>
                        <?php if ($user['role_id'] == 1) {
                            echo "Admin";
                        } else if ($user['role_id'] == 2) {
                            echo "Guru";
                        } ?></h5>
                    <p class="card-text"><small class="text-muted">Member since <?= date('d F Y', $user['data_created']); ?></small></p>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->