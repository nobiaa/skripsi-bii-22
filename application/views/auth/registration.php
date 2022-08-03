<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">
                                <?php if ($user['role_id'] == 1) {
                                    echo "Create a teacher account";
                                } elseif ($user['role_id'] == 2) {
                                    echo "Create a student account";
                                }
                                ?>
                            </h1>
                        </div>
                        <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Full name" value="<?= set_value('nama'); ?>">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small'); ?>
                            </div>
                            <?php if ($user['role_id'] == 1) { ?>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="no_induk" name="no_induk" placeholder="Nomor Induk" value="<?= set_value('no_induk'); ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="no_hp" name="no_hp" placeholder="Nomor HP" value="<?= set_value('no_hp'); ?>">
                                </div>
                                <div class="form-group" hidden>
                                    <input type="text" class="form-control form-control-user" id="role_id" name="role_id" placeholder="Guru" value="2">
                                </div>
                            <?php } else if ($user['role_id'] == 2) { ?>
                                <div class="form-group" hidden>
                                    <input type="text" class="form-control form-control-user" id="no_induk" name="no_induk" placeholder="Nomor Induk" value="<?= set_value('no_induk'); ?>">
                                </div>
                                <div class="form-group" hidden>
                                    <input type="text" class="form-control form-control-user" id="no_hp" name="no_hp" placeholder="Nomor HP" value="<?= set_value('no_hp'); ?>">
                                </div>
                                <div class="form-group" hidden>
                                    <input type="text" class="form-control form-control-user" id="role_id" name="role_id" placeholder="Siswa" value="3">
                                </div>
                            <?php } ?>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small'); ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Register Account
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <?php $url = isset($_SERVER['HTTP_REFERER']) ? htmlspecialchars($_SERVER['HTTP_REFERER']) : ''; ?>
                            <a class="small" href="<?= $url ?>">back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>