<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>{{ config('app.name', 'Packfacture - Simplify Packaging') }}</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('public/plugins/font-awesome/css/font-awesome.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('public/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('public/css/toastr.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <i class="nav-icon fa fa-sign-out"></i>
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            </form>
          <div class="dropdown-divider"></div>
        </div>
      </li>
      <!-- Notifications Dropdown Menu --> 
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('public/logo/logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Packfacture</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               @if(Auth::user()->role_id==2)
               <li class="nav-item has-treeview">
                
                  @if(strcmp(url()->current(),route('products'))==0)
                    <a href="{{route('products')}}" class="nav-link">
                  @else
                  <a href="{{route('products')}}" class="nav-link">
                  @endif
                  <i class="nav-icon fa fa-user"></i>
                  <p>
                    Profile
                  </p>
                </a>
              </li>
              @endif
            <li class="nav-item has-treeview">
            @if(Auth::user()->role_id==2)
              @if(strcmp(url()->current(),route('products'))==0)
                <a href="{{route('products')}}" class="nav-link active">
              @else
              <a href="{{route('products')}}" class="nav-link">
              @endif
            @else
              @if(strcmp(url()->current(),route('productsAdminVendor'))==0)
                <a href="{{route('productsAdminVendor')}}" class="nav-link active">
              @else
                <a href="{{route('productsAdminVendor')}}" class="nav-link">
              @endif
            @endif
              <i class="nav-icon fa fa-shopping-cart"></i>
              <p>
                Products
              </p>
            </a>
          </li>
          @if(Auth::user()->role_id==2)
               <li class="nav-item has-treeview">
                
                  @if(strcmp(url()->current(),route('products'))==0)
                    <a href="{{route('products')}}" class="nav-link">
                  @else
                  <a href="{{route('products')}}" class="nav-link">
                  @endif
                  <i class="nav-icon fa fa-shopping-basket"></i>
                  <p>
                    Orders
                  </p>
                </a>
              </li>
              @endif
          @if(Auth::user()->role_id==2)
               <li class="nav-item has-treeview">
                
                  @if(strcmp(url()->current(),route('products'))==0)
                    <a href="{{route('products')}}" class="nav-link">
                  @else
                  <a href="{{route('products')}}" class="nav-link">
                  @endif
                  <i class="nav-icon fa fa-phone"></i>
                  <p>
                    Enquiries
                  </p>
                </a>
              </li>
              @endif
          @if(Auth::user()->role_id==2)
               <li class="nav-item has-treeview">
                
                  @if(strcmp(url()->current(),route('products'))==0)
                    <a href="{{route('products')}}" class="nav-link">
                  @else
                  <a href="{{route('products')}}" class="nav-link">
                  @endif
                  <i class="nav-icon fa fa-bank"></i>
                  <p>
                    Settlements
                  </p>
                </a>
              </li>
              @endif
          @if(Auth::user()->role_id==1)
          <li class="nav-item">
            @if(strcmp(url()->current(),route('productsAdmin'))==0)
              <a href="{{route('productsAdmin')}}" class="nav-link active">
            @else  
              <a href="{{route('productsAdmin')}}" class="nav-link">  
            @endif
              <i class="nav-icon fa fa fa-shopping-cart"></i>
              <p>
                Ecom Products
              </p>
            </a>
          </li>
          @endif
          @if(Auth::user()->role_id==1)
          <li class="nav-item">
            @if(strcmp(url()->current(),route('enquiryAdmin'))==0)
              <a href="{{route('enquiryAdmin')}}" class="nav-link active">
            @else
              <a href="{{route('enquiryAdmin')}}" class="nav-link">
            @endif
              <i class="nav-icon fa fa fa-shopping-basket"></i>
              <p>
                Enquiries
              </p>
            </a>
          </li>
          @endif
          @if(Auth::user()->role_id==1)
          <li class="nav-item">
            @if(strcmp(url()->current(),route('categoriesAdmin'))==0)
              <a href="{{route('categoriesAdmin')}}" class="nav-link active">
            @else
              <a href="{{route('categoriesAdmin')}}" class="nav-link">
            @endif
              <i class="nav-icon fa fa-th"></i>
              <p>
                Categories
              </p>
            </a>
          </li>
          @endif
          @if(Auth::user()->role_id==1)
          <li class="nav-item">
            @if(strcmp(url()->current(),route('utilitiesAdmin'))==0)
              <a href="{{route('utilitiesAdmin')}}" class="nav-link active">
            @else
              <a href="{{route('utilitiesAdmin')}}" class="nav-link">
            @endif
              <i class="nav-icon fa fa-truck"></i>
              <p>
                Product Utilities
              </p>
            </a>
          </li>
          @endif
          @if(Auth::user()->role_id==1)
          <li class="nav-item">
            @if(strcmp(url()->current(),route('vendorsAdmin'))==0)
              <a href="{{route('vendorsAdmin')}}" class="nav-link active">
            @else
              <a href="{{route('vendorsAdmin')}}" class="nav-link">
            @endif
              <i class="nav-icon fa fa-users"></i>
              <p>
                Vendors
              </p>
            </a>
          </li>
          @endif
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">@yield('header')</h1>
          </div><!-- /.col --><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="container-fluid">@yield('content')</div><!--/. container-fluid -->
    </section>
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <!-- <aside class="control-sidebar control-sidebar-dark"> -->
    <!-- Control sidebar content goes here -->
  <!--       -->
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-sm-none d-md-block">
      {{ config('app.name', 'Infinity Bottles') }}
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2018 <a href="https://adminlte.io">{{ config('app.name', 'Infinity Bottles') }}</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset('public/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('public/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('public/js/adminlte.js')}}"></script>
<script src="{{asset('public/js/toastr.min.js')}}"></script>

<!-- OPTIONAL SCRIPTS -->
<!-- <script src="{{asset('public/js/demo.js')}}"></script> -->

<!-- PAGE PLUGINS -->
<!-- SparkLine -->
<script src="{{asset('public/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<!-- jVectorMap -->
<script src="{{asset('public/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('public/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- SlimScroll 1.3.0 -->
<script src="{{asset('public/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- ChartJS 1.0.2 -->
<script src="{{asset('public/plugins/chartjs-old/Chart.min.js')}}"></script>

<!-- PAGE SCRIPTS -->
<!-- <script src="{{asset('public/js/pages/dashboard2.js')}}"></script> -->
@yield('js')
</body>
</html>
