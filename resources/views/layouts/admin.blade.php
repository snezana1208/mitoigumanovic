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
        <a class="navbar-brand brand-logo" href="index.html"><img src="/admin/images/logo.svg" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="/admin/images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Search Projects.." aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            {{-- <li class="nav-item dropdown d-lg-flex d-none">
                <button type="button" class="btn btn-info font-weight-bold">+ Create New</button>
            </li> --}}
          <li class="nav-item dropdown d-flex">
            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
              <i class="icon-air-play mx-0"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-normal">David Grey
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    New product launch
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-normal"> Johnson
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown d-flex mr-4 ">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-cog"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Settings</p>
              <a class="dropdown-item preview-item">               
                  <i class="icon-head"></i> Profile
              </a>
              <a class="dropdown-item preview-item">
                  <i class="icon-inbox"></i> Logout
              </a>
            </div>
          </li>
          <li class="nav-item dropdown mr-4 d-lg-flex d-none">
            <a class="nav-link count-indicatord-flex align-item s-center justify-content-center" href="#">
              <i class="icon-grid"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
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
              <span class="menu-title">User Pages</span>
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

