<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{url('/')}}/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>


          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar main-sidebar-custom sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="{{url('/')}}/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Car Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tags"></i>
              <p>
                {{ translate('ماركات السيارات') }}
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="{{route('makes-index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> {{ translate('جميع الماركات') }} </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('makes-create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> {{ translate('إضافة ماركة جديدة') }} </p>
                </a>
              </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tags"></i>
              <p>
                {{ translate('موديلات السيارات') }}
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="{{route('models-index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> {{ translate('جميع الموديلات') }} </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('models-create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> {{ translate('إضافة موديل جديد') }} </p>
                </a>
              </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Cars
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="{{route('car-index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Cars</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('car-excel')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Excel Ctrl</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('car-create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create a New Car</p>
                </a>
              </li>
            </ul>
          </li>






        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->

    <div class="sidebar-custom">
      <a href="#" class="btn btn-link"><i class="fas fa-cogs"></i></a>
      <a href="#" class="btn btn-secondary hide-on-collapse pos-right">Help</a>
    </div>
    <!-- /.sidebar-custom -->
  </aside>
