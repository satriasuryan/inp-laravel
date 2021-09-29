<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="{{ asset('DSIM.ico')}}" type="image/x-icon">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('middle-assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('middle-assets/dist/css/adminlte.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('middle-assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('middle-assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('middle-assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  @yield('style')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
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

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="{{asset('back-assets/assets/images/users/1.jpg')}}" alt="user" class="rounded-circle" width="31">
                <span class="ml-2 user-text font-medium">{{Auth::user()->name}}</span><span class="ml-2 user-text"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                <div class="d-flex no-block align-items-center p-3 mb-2 border-bottom">
                    <div class=""><img src="{{asset('back-assets/assets/images/users/1.jpg')}}" alt="user" class="rounded" width="80"></div>
                    <div class="ml-2">
                        <h4 class="mb-0">{{Auth::user()->name}}</h4>
                        <p class=" mb-0 text-muted">{{{Auth::user()->email}}}</p>
                        <a href="javascript:void(0)" class="btn btn-sm btn-danger text-white mt-2 btn-rounded">View Profile</a> 
                    </div>
                </div>
                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user mr-1 ml-1"></i> Edit Profile</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    <i class="fa fa-power-off mr-1 ml-1"></i><span>Log out</span></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin/middle" class="brand-link">
      <img src="{{asset('middle-assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle" style="opacity: .8">
      <span class="brand-text font-weight-light"><strong>Divisi Sosial</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/admin/middle" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('program.create')}}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Buat Program
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('program.index')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Daftar Program
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/categories" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Daftar Kategori
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

<br>
<!-- Main content -->
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    Copyright &copy; <script>document.write(new Date().getFullYear());</script> <strong>Annawawi Media</strong>
    All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('middle-assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('middle-assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('middle-assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('middle-assets/dist/js/adminlte.js')}}"></script>
@yield('script')
@include('sweetalert::alert')
<!-- DataTables  & Plugins -->
<script src="{{asset('middle-assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('middle-assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('middle-assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('middle-assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('middle-assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('middle-assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('middle-assets/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('middle-assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('middle-assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('middle-assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('middle-assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('middle-assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false
    }).container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@yield('script')
</body>
</html>
