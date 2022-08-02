<div class="sidebar">
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="{{ asset('/assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      <a href="#" class="d-block">{{Auth::user()->name}}</a>
    </div>
  </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        {{-- <li class="nav-item">
          <a href="{{route('dashboard.index')}}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li> --}}
        @if (Auth::user()->roles == 'admin' || Auth::user()->roles == 'kadiv')
        <li class="nav-item">
          <a href="{{route('karyawan.index')}}" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Daftar Karyawan Sales
            </p>
          </a>
        </li>
        @endif
        @if (Auth::user()->roles == 'admin')
        <li class="nav-item">
          <a href="{{route('kriteria.index')}}" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Kelola Data Kriteria
            </p>
          </a>
        </li>
        @endif
        @if (Auth::user()->roles == 'kadiv')
        <li class="nav-item">
          <a href="{{route('penilaian.index')}}" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Kelola Data Penilaian Kinerja
            </p>
          </a>
        </li>
        @endif
        @if (Auth::user()->roles == 'kadiv' || Auth::user()->roles == 'HRD')
        <li class="nav-item">
          <a href="{{route('laporan.index')}}" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Laporan Penilaian Kinerja
            </p>
          </a>
        </li>
        @endif
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>