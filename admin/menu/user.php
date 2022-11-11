<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image my-auto">
            <img src="../assets/<?php echo $_SESSION['image']; ?>" class="brand-image img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a class="d-block text-capitalize"><?php echo $_SESSION['nama']; ?></a>
            <a class="d-block text-capitalize"><?php echo $_SESSION['level']; ?></a>
        </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div>
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="nav-icon fas fa-address-book"></i>
                    <p>
                        Kustomer
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="index.php?page=datatable" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p name="datatable">
                                Datatable
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?page=bookform" class="nav-link">
                            <i class="far fa-check-square nav-icon"></i>
                            <p>Bookform</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="../assets/db/signout.php" class="nav-link text-danger">
                    <i class="nav-icon fas fa-sign-out-alt "></i>
                    <p name="signout">
                        Sign out
                    </p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->