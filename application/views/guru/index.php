<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row">
        <!-- card data siswa -->
        <div class="col-xl-6 col-md-6 mb-6">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                DATA SISWA</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">(jumlah data siswa)</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <a href="<?= base_url('admin/datasiswa'); ?>">lihat detail</a>
                    <i class="fa fa-arrow-circle-right"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800"><?= $tittle; ?></h1>

    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="<?= base_url('assets/img/profil/') . $user['image']; ?>" class="img-fluid rounded-start">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $user['nama']; ?></h5>
                    <p class="card-text"><?= $user['email']; ?></p>
                    <p class="card-text"><small class="text-muted">Member since <?= date('d F Y', $user['data_created']); ?></small></p>
                </div>
            </div>
        </div>
    </div> -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->