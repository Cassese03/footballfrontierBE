<?php $utente = session('utente'); ?>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->

        <a href="/admin/index" class="brand-link">
            <img src="/logo_dhonko.png" alt="AdminLTE Logo" style="width:100%;height:auto;padding:0% 20% 0% 20%;">
        </a>


        <!-- Sidebar -->
        <div class="sidebar">


            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->


                    <li class="nav-item">
                        <a href="/admin/index" class="nav-link">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/admin/preferenze" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Preferenze
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/viaggi" class="nav-link">
                            <i class="nav-icon fas fa-plane"></i>
                            <p>
                                Viaggi
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/filtri_viaggio" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Filtri Viaggio
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/admin/consigli" class="nav-link">
                            <i class="nav-icon fas fa-lightbulb"></i>
                            <p>
                                Consigli RoadMap
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/admin/tutorial/1" class="nav-link">
                            <i class="nav-icon fas fa-cube"></i>
                            <p>
                                Tutorial
                            </p>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a href="/admin/logout" class="nav-link">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>
                                Logout
                            </p>
                        </a>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->