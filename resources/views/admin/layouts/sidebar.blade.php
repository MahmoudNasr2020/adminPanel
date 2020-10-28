  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ $style }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">{{ __('messages.Dashboard') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>
                {{ __('messages.dashboard') }}
              </p>
            </a>

          </li>

          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-store-alt"></i>
              <p>
                {{ __('messages.Shops') }}
              </p>
            </a>
          </li>

            <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-tags"></i>
              <p>
                {{ __('messages.Coupons') }}
              </p>
            </a>
          </li>

            <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fa fa-tasks"></i>
              <p>
                {{ __('messages.Governments Agencies') }}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-desktop"></i>
              <p>
               {{ __('messages.Settings') }}
              </p>
            </a>
          </li>

             <li class="nav-item">
                    <a href="pages/widgets.html" class="nav-link">
                    <i class="nav-icon fas fa-sliders-h"></i>
                    <p>
                   {{__('messages.Sliders')}}
                    </p>
                    </a>
            </li>

             <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-users"></i>
                    <p>
                        {{__('messages.Deliveries')}}
                    </p>
                    </a>
            </li>
               <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-sitemap"></i>
                    <p>
                        {{ __('messages.Categories') }}
                    </p>
                    </a>
                </li>
                  <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            {{ __('messages.Logout') }}
                        </p>
                        </a>
                 </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
