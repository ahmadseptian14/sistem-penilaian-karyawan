<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
       <h3>Sistem Informasi Penilaian Kinerja Sales</h3>
      </li>
    </ul>

    <div class="dropdown ml-auto">
      <button class="btn btn-primay dropdown-toggle mr-1 mb-1"
          type="button" data-toggle="dropdown">
          {{ Auth::user()->name }}
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
         {{ __('Logout') }}
     </a>

     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
         @csrf
     </form>
      </div>
  </div>

  </nav>