
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <!-- <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div> -->
        <div class="sidebar-brand-text mx-3"><i class="fas fa-fw fa-home"></i>PPDB <sup>ONLINE</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>

    <!-- Nav Item - Charts
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin') ?>">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span></a>
    </li> -->

    <?php if(in_groups('admin')) : ?>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/listPendaftar') ?>">
                <i class="fas fa-fw fa-users"></i>
                <span>List Pendaftar</span></a>
        </li>
    <?php endif; ?>

    <?php if(!in_groups('admin')) : ?>

        <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user') ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>Biodata</span></a>
    </li>
    <?php endif; ?>

    <!-- Nav Item - Tables -->
    

    <?php if((user()->fullname) != null && !in_groups('admin')) : ?>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('user/status') ?>">
                <i class="fas fa-fw fa-users"></i>
                <span>Status Pendaftaran</span></a>
        </li>
    <?php endif; ?>
    
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>