<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image my-auto">
            <img src="../assets/<?php echo $_SESSION['image']; ?>" class="brand-image img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a class="d-block text-capitalize font-weight-bold"><?php echo $_SESSION['nama']; ?></a>
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
                        <a href="?page=datatable" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p name="datatable">
                                Datatable
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="?page=bookform" class="nav-link">
                            <i class="far fa-check-square nav-icon"></i>
                            <p>Bookform</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="nav-icon fas fa-sliders-h"></i>
                    <p>
                        Carousel
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="?page=add carousel" class="nav-link">
                            <i class="nav-icon fas fa-plus"></i>
                            <p name="carousel">
                                Tambahkan
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="?page=data carousel" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p name="promo">
                                Data
                            </p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="nav-icon fas fa-tags"></i>
                    <p>
                        Promo
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="?page=add promo" class="nav-link">
                            <i class="nav-icon fas fa-plus"></i>
                            <p name="carousel">
                                Tambahkan
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="?page=data promo" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p name="promo">
                                Data
                            </p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="nav-icon fas fa-hand-holding-heart"></i>
                    <p>
                        Servis
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="?page=add servis" class="nav-link">
                            <i class="nav-icon fas fa-plus"></i>
                            <p name="carousel">
                                Tambahkan
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="?page=data servis" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p name="promo">
                                Data
                            </p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="nav-icon fas fa-info-circle"></i>
                    <p>
                        Informasi
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="?page=add informasi" class="nav-link">
                            <i class="nav-icon fas fa-plus"></i>
                            <p name="carousel">
                                Tambahkan
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="?page=data informasi" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p name="promo">
                                Data
                            </p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="nav-icon fas fa-cog"></i>
                    <p>
                        Operation
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <!-- <li class="nav-item">
                        <a href="?page=edit profil" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p name="profil">
                                Profil
                            </p>
                        </a>
                    </li> -->
                    <li class="nav-item">
                        <a href="?page=add user" class="nav-link">
                            <i class="nav-icon fas fa-user-plus"></i>
                            <p name="adduser">
                                Add User
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="?page=data user" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p name="member">
                                Member of LaundryKu
                            </p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="../assets/db/signout.php" class="nav-link text-danger">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p name="signout"><b>
                        Sign out</b>
                    </p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->