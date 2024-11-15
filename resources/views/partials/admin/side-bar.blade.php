<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin-Computer </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
    @auth
        <a href="#" class="d-block">{{ Auth::user()->fullname }}</a>
    @else
        <a href="#" class="d-block"></a> <!-- Hoặc có thể để trống hoặc hiển thị một thông điệp khác -->
    @endauth
</div>
      </div>

      <!-- SidebarSearch Form -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-item">
            <a href="/products" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Products
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/orders" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Orders
              </p>
            </a>
          
          </li>
          <li class="nav-item">
            <a href="/sales" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Sales
              </p>
            </a>
          </li>
         
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>