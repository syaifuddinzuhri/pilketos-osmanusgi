        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin.dashboard')}}">
                <div class="sidebar-brand-icon">
                    <img src="{{asset('img/logo.png')}}" width="40" alt="">
                </div>
                <div class="sidebar-brand-text mx-3">PILKETOS <br> OSMANUSGI</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.dashboard')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                DATA USER
            </div>

            {{-- <li class="nav-item">
                <a class="nav-link" href="{{route('admin.master.index')}}">
            <i class="fas fa-fw fa-users"></i>
            <span>Data Admin</span></a>
            </li> --}}

            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.teacher.index')}}">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Data Guru</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Data Siswa</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('admin.student.create')}}">Tambah Siswa</a>
                        <a class="collapse-item" href="{{route('admin.student.index', ['class' => 'x'])}}">Kelas X</a>
                        <a class="collapse-item" href="{{route('admin.student.index', ['class' => 'xi'])}}">Kelas XI</a>
                        <a class="collapse-item" href="{{route('admin.student.index', ['class' => 'xii'])}}">Kelas XII</a>
                    </div>
                </div>
            </li>

            <div class="sidebar-heading">
                DATA KANDIDAT KETUA
            </div>

            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Data Kandidat</span></a>
            </li>

            <div class="sidebar-heading">
                LAPORAN
            </div>

            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Data Pemillih</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Grafik Voting</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
