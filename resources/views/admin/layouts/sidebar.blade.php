<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="/img/logo2.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">KMS Banyumas</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="/admin/dashboard" class="nav-link {{ Request::is('admin/dashboard*') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>



          <li class="nav-item">
            <a href="/admin/bannerjob" class="nav-link {{ Request::is('admin/bannerjob*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-building"></i>
                <p>Job Order</p>
            </a>
        </li>


          <li class="nav-item">
            <a href="/admin/cpmi" class="nav-link {{ Request::is('admin/cpmi*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Peserta Masuk
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="/admin/pesan" class="nav-link {{ Request::is('admin/pesan*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
                Pesan
              </p>
            </a>
          </li>
          

          <li class="nav-item">
            <a href="/admin/user" class="nav-link {{ Request::is('admin/user*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-users"></i>
              <p>
                User
              </p>
            </a>
          </li>

        



        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>