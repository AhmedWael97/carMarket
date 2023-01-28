<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->


      <!-- Messages Dropdown Menu -->
      <li class="nav-item">
        <a href="{{ route('logout-custom') }}" class="nav-link">
          {{ translate("خروج") }}
        </a>

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
                  <i class="nav-icon fas fa-lock"></i>
                  <p>
                    {{ translate('الوظائف و الاوذنات') }}
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                @can('Role View')
                <li class="nav-item">
                    <a href="{{route('role-index')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p> {{ translate('جميع الوظائف') }} </p>
                    </a>
                  </li>
                  @endcan
                  @can('Role Create')
                  <li class="nav-item">
                    <a href="{{route('role-create')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p> {{ translate('إضافة وظئفة جديدة') }} </p>
                    </a>
                  </li>
                  @endcan
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    {{ translate('المستخدمين') }}
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                @can('Users View')
                <li class="nav-item">
                    <a href="{{route('user-index')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p> {{ translate('جميع المستخدمين') }} </p>
                    </a>
                  </li>
                  @endcan
                  @can('Users Create')
                  <li class="nav-item">
                    <a href="{{route('user-create')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p> {{ translate('إضافة مستخدم جديد ') }} </p>
                    </a>
                  </li>
                  @endcan
                </ul>
            </li>
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
            <a href="{{ route('settings') }}" class="nav-link">
              <i class="nav-icon fas fa-gear"></i>
              <p>
                {{ translate('اعدادات الموقع') }}

              </p>
            </a>

        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                {{translate('قسم السيارات')}}
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="{{route('car-index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{translate('جميع السيارات')}}</p>
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
                  <p>{{translate('إضافة سيارة جديدة')}}</p>
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
