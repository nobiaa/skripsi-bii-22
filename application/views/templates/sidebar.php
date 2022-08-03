<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fa-solid fa-code"></i>
        </div>
        <div class="sidebar-brand-text mx-3">
            <?php
            if ($user['role_id'] == 1) {
                echo "ADMIN";
            } else if ($user['role_id']     == 2) {
                echo "GURU";
            }
            ?>
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <?php if ($user['role_id'] == 1) { ?>
        <!-- Heading -->
        <div class="sidebar-heading">
            Administrator
        </div>

        <!-- Nav Item - Dashboard -->
        <?php if ($tittle == "Halaman Admin") {
            echo "<li class='nav-item active'>";
        } else {
            echo "<li class='nav-item'>";
        } ?>
        <a class="nav-link" href="<?= base_url('admin/index'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>
        <?php if ($tittle == "Data Guru") {
            echo "<li class='nav-item active'>";
        } else {
            echo "<li class='nav-item'>";
        } ?>
        <a class="nav-link" href="<?= base_url('admin/dataguru'); ?>">
            <i class="fas fa-fw fa-database"></i>
            <span>Data Guru</span></a>
        </li>
        <?php if ($tittle == "Data Siswa") {
            echo "<li class='nav-item active'>";
        } else {
            echo "<li class='nav-item'>";
        } ?>
        <a class="nav-link" href="<?= base_url('admin/datasiswa'); ?>">
            <i class="fas fa-fw fa-database"></i>
            <span>Data Siswa</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            User
        </div>

        <?php if ($tittle == "My Profile") {
            echo "<li class='nav-item active'>";
        } else {
            echo "<li class='nav-item'>";
        } ?>
        <a class="nav-link" href="<?= base_url('admin/myprofile'); ?>">
            <i class="fas fa-fw  fa-user"></i>
            <span>My Profile</span></a>
        </li>

        <?php if ($tittle == "Registration") {
            echo "<li class='nav-item active'>";
        } else {
            echo "<li class='nav-item'>";
        } ?>
        <a class="nav-link" href="<?= base_url('auth/registration'); ?>">
            <i class="fas fa-fw  fa-id-card"></i>
            <span>Registration</span></a>
        </li>

    <?php } else if ($user['role_id'] == 2) { ?>
        <!-- Heading -->
        <div class="sidebar-heading">
            Administrator
        </div>

        <!-- Nav Item - Dashboard -->
        <?php if ($tittle == "Halaman Guru") {
            echo "<li class='nav-item active'>";
        } else {
            echo "<li class='nav-item'>";
        } ?>
        <a class="nav-link" href="<?= base_url('guru/index'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>
        <?php if ($tittle == "Data Siswa") {
            echo "<li class='nav-item active'>";
        } else {
            echo "<li class='nav-item'>";
        } ?>
        <a class="nav-link" href="<?= base_url('admin/datasiswa'); ?>">
            <i class="fas fa-fw fa-database"></i>
            <span>Data Siswa</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            User
        </div>
        <?php if ($tittle == "My Profile") {
            echo "<li class='nav-item active'>";
        } else {
            echo "<li class='nav-item'>";
        } ?>
        <a class="nav-link" href="<?= base_url('admin/myprofile'); ?>">
            <i class="fas fa-fw  fa-user"></i>
            <span>My Profile</span></a>
        </li>

        <?php if ($tittle == "Registration") {
            echo "<li class='nav-item active'>";
        } else {
            echo "<li class='nav-item'>";
        } ?>
        <a class="nav-link" href="<?= base_url('auth/registration'); ?>">
            <i class="fas fa-fw  fa-id-card"></i>
            <span>Registration</span></a>
        </li>
    <?php } ?>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->