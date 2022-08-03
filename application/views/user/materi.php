<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col text-center" style="margin-top:10px;margin-bottom 10px;">
            <div class="card">
                <img src="<?php echo base_url(); ?>assets/img/profil/default.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><b>Rumah Adat</b></h5>
                    <a href="#" class="btn btn-primary">Buka Materi</a>
                </div>
            </div>
        </div>
        <div class="col text-center" style="margin-top:10px;margin-bottom 10px;">
            <div class="card">
                <img src="<?php echo base_url(); ?>assets/img/profil/default.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><b>Pakaian Adat</b></h5>
                    <a href="#" class="btn btn-primary">Buka Materi</a>
                </div>
            </div>
        </div>
        <div class="col text-center" style="margin-top:10px;margin-bottom 10px;">
            <div class="card">
                <img src="<?php echo base_url(); ?>assets/img/profil/default.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><b>Lagu Daerah</b></h5>
                    <a href="#" class="btn btn-primary">Buka Materi</a>
                </div>
            </div>
        </div>
        <div class="col text-center" style="margin-top:10px;margin-bottom 10px;">
            <div class="card">
                <img src="<?php echo base_url(); ?>assets/img/profil/default.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><b>Tarian Daerah</b></h5>
                    <a href="#" class="btn btn-primary">Buka Materi</a>
                </div>
            </div>
        </div>
        <div class="col text-center" style="margin-top:10px;margin-bottom 10px;">
            <div class="card">
                <img src="<?php echo base_url(); ?>assets/img/profil/default.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><b>Alat Musik Daerah</b></h5>
                    <a href="#" class="btn btn-primary">Buka Materi</a>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center" style="margin-top: 20px;">
        <?php $url = isset($_SERVER['HTTP_REFERER']) ? htmlspecialchars($_SERVER['HTTP_REFERER']) : ''; ?>
        <a href="<?= $url ?>" class="btn btn-secondary">kembali</a>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->