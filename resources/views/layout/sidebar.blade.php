<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="../../index3.html" class="brand-link">
        <span class="brand-text font-weight-light">SMK Antartika 1 Sidoarjo</span>
    </a>

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">{{Auth()->user()->name}}L</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-header">DASHBOARD</li>
                <li class="nav-item">
                    <a href="{{ route('dashboard.index') }}" class="nav-link {{ request()->is('dashboard*') ? 'active' : ''}}">
                    <i class="fas fa-compass"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>


                <li class="nav-header">MASTER</li>
                <li class="nav-item">
                    <a href="{{ route('guru.index') }}" class="nav-link {{ request()->is('guru*') ? 'active' : ''}}">
                        <i class="fas fa-user-tie"></i>
                        <p>
                             Guru
                        </p>
                    </a>


                <li class="nav-item">
                    <a href="{{ route('kelas.index') }}" class="nav-link {{ request()->is('kelas*') ? 'active' : ''}}">
                        <i class="fab fa-odnoklassniki-square"></i>
                        <p>
                             Kelas
                        </p>
                    </a>

                <li class="nav-item">
                    <a href="{{ route('mapel.index') }}" class="nav-link {{ request()->is('mapel*') ? 'active' : ''}}">
                        <i class="fas fa-book-dead"></i>
                        <p>
                            Mapel
                        </p>
                    </a>

                <li class="nav-item">
                    <a href="{{ route('siswa.index') }}" class="nav-link {{ request()->is('siswa*') ? 'active' : ''}}">
                        <i class="fas fa-users"></i>
                        <p>
                             Siswa
                        </p>
                    </a>

        </nav>

    </div>

</aside>