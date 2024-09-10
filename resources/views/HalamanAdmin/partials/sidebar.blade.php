 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="#" class="brand-link">
         <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">AdminLTE 3</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
             </div>
             <div class="info">
                 {{-- <a href="#" class="d-block">Alexander Pierce</a> --}}
                 <a href="#" class="d-block">{{ Auth::user()->name }}</a>
             </div>
         </div>

         <!-- SidebarSearch Form -->

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                  <li class="nav-item">
                     <a href="/Admin/dashboard" class="nav-link">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>Dashboard</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="/Admin/Product/Show" class="nav-link">
                         <i class="nav-icon fas fa-laptop"></i>
                         <p>Product</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="/Admin/Category/Show" class="nav-link">
                         <i class="nav-icon fas fa-bars"></i>
                         <p>Category</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="/Admin/Link/Show" class="nav-link">
                         <i class="nav-icon fas fa-link"></i>
                         <p>Link Footer</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="/Admin/Footer/Show" class="nav-link">
                         <i class="nav-icon fas fa-bars"></i>
                         <p>Footer</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="/" class="nav-link">
                         <i class="nav-icon fas fa-shopping-bag"></i>
                         <p>Back To Shop</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>{{ __('Logout') }}</p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                 </li>
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>
