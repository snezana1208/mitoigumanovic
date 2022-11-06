<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags --> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
   
  <!-- base:css -->
  <link rel="stylesheet" href="/admin/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="/admin/vendors/feather/feather.css">
  <link rel="stylesheet" href="/admin/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="/admin/vendors/flag-icon-css/css/flag-icon.min.css"/>
  <link rel="stylesheet" href="/admin/vendors/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="/admin/vendors/jquery-bar-rating/fontawesome-stars-o.css">
  <link rel="stylesheet" href="/admin/vendors/jquery-bar-rating/fontawesome-stars.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="/admin/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="/admin/images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="/dashboard">Админ Панел</a>
        <a class="navbar-brand brand-logo-mini" href="/dashboard">Админ Панел</a>
      </div>

    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="/dashboard">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">Контролна табла</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin.letopis">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">Летопис</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin.vesti">
              <i class="icon-file menu-icon"></i>
              <span class="menu-title">Вести</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin.takmicenja">
              <i class="icon-pie-graph menu-icon"></i>
              <span class="menu-title">Такмичења</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin.upis_prvaka">
              <i class="icon-command menu-icon"></i>
              <span class="menu-title">Упис првака</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin.zavrsni_ispit">
              <i class="icon-help menu-icon"></i>
              <span class="menu-title">Завршни испит</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin.ucenici_generacija">
              <i class="icon-help menu-icon"></i>
              <span class="menu-title">Ученици генерација</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin.psiholog">
              <i class="icon-help menu-icon"></i>
              <span class="menu-title">Психолог</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin.pedagog">
              <i class="icon-help menu-icon"></i>
              <span class="menu-title">Педагог</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin.galerija">
              <i class="icon-help menu-icon"></i>
              <span class="menu-title">Галерија</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Корисник</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <!-- Authentication Links -->
                @guest
                  @if (Route::has('login'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                      </li>
                  @endif

                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif
                @else
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="icon-head menu-icon"></i>
                        <span class="menu-title">{{ Auth::user()->name }}</span>
                        <i class="menu-arrow"></i>
                      </a>
                      <div class="collapse" id="auth">
                        <ul class="nav flex-column sub-menu">
                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                            </a>
                          </li>
                        </ul>
                      </div>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                      
                    </li>
                @endguest
              </ul>
            </div>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <main class="container">
        @yield('content')
      </main> 
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  

  <script src="https://cdn.ckeditor.com/ckeditor5/35.2.1/classic/ckeditor.js"></script>
  <script>
    ClassicEditor
      .create( document.querySelector( '#editor' ), {
        ckfinder:{
          uploadUrl: '{{ route('upload'). '?_token='.csrf_token() }}'
        }
      } )
      .then( editor => {
              console.log( editor );
      } )
      .catch( error => {
              console.error( error );
      } );
  </script>
  
  <!-- base:js -->
  <script src="/admin/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="/admin/js/off-canvas.js"></script>
  <script src="/admin/js/hoverable-collapse.js"></script>
  <script src="/admin/js/template.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="/admin/vendors/chart.js/Chart.min.js"></script>
  <script src="/admin/vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="/admin/js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

