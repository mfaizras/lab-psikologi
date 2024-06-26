<body class="hold-transition sidebar-mini">
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
            <a href="{{route('dashboard')}}" class="brand-link">
                {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8"> --}}
                <span class="brand-text font-weight-light">{{config('app.name')}}</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        @auth
                            <li class="nav-item">
                                <a href="{{route('participantList')}}" class="nav-link {{ (request()->is('admin/participant*')) ? 'active' : '' }}">
                                    <i class="fas fa-user"></i>
                                    <p>Data Pendaftar</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('location')}}" class="nav-link {{ (request()->is('admin/location*')) ? 'active' : '' }}">
                                    <i class="fas fa-location"></i>
                                    <p>Data Lokasi Kampus</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('major')}}" class="nav-link {{ (request()->is('admin/major*')) ? 'active' : '' }}">
                                    <i class="fas fa-book"></i>
                                    <p>Data Jurusan</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('position')}}" class="nav-link {{ (request()->is('admin/position*')) ? 'active' : '' }}">
                                    <i class="fas fa-user"></i>
                                    <p>Data Posisi Recruitment</p>
                                </a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="/panel/login" class="nav-link">
                                    <i class="nav-icon fas fa-sign-in-alt"></i>
                                    <p>
                                        Login
                                    </p>
                                </a>
                            </li>
                        @endauth
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
