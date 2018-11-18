<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Vume_Quetzaltenango</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{!! asset('asset/bootstrap/dist/css/bootstrap.min.css') !!}  ">

  <script src="{!! asset('asset/jquery/dist/jquery.min.js') !!} "></script>
  <!-- Font Awesome -->
    <link rel="stylesheet" href="{!! asset('asset/select2/dist/css/select2.min.css') !!} ">
  <link rel="stylesheet" href="{!! asset('asset/font-awesome/css/font-awesome.min.css ') !!} ">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{!! asset('asset/bower_components/Ionicons/css/ionicons.min.css') !!}  ">
  <link rel="stylesheet" href="{!! asset('asset/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}">

  <!-- Theme style -->
  <link rel="stylesheet" href="{!! asset('asset/dist/css/AdminLTE.min.css'  ) !!}  ">
  <!-- DataTables CSS -->
<link href="{!! asset('asset/datatables-plugins/dataTables.bootstrap.css') !!} " rel="stylesheet">

<!-- DataTables Responsive CSS -->
<link href="{!! asset('asset/datatables-responsive/dataTables.responsive.css') !!} " rel="stylesheet">


  <link rel="stylesheet" href="{!! asset('asset/dist/css/skins/skin-blue.min.css'  ) !!}  ">

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a  class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Vu</b>me</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Vume Quetzaltenango</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->

          <!-- /.messages-menu -->

          <!-- Notifications Menu -->

          <!-- Tasks Menu -->
          <li class="nav-item">
              <a class="nav-link" href="{!! route('menu.create') !!}">{{ __('Formulario') }}</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a  class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="{!! asset('img/icon.jpg') !!}" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Ventanilla Única Municipal de Empleo en Quetzaltenango</span>
            </a>

          </li>
          <!-- Control Sidebar Toggle Button -->

        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{!! asset('img/icon.jpg') !!}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Vume Xela</p>

        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <span class="input-group-btn">
              </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="{!! route('menu.create') !!}"><i class="fa  fa-building-o"></i> <span>Formulario</span></a></li>
        <li class="active"><a href="{!! route('menu.index') !!}"><i class="fa  fa-building-o"></i> <span>Empleos</span></a></li>
        <li><a href="https://es-la.facebook.com/vumexela/"><i class="fa fa-facebook-official"></i> <span>facebook</span></a></li>

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
@yield('content')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">

    </div>
    <!-- Default to the left -->
    <strong>Ventanilla Única Municipal de Empleo en Quetzaltenango</strong>
  </footer>

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src=" {!! asset('asset/jquery/dist/jquery.min.js') !!} "></script>
<!-- Bootstrap 3.3.7 -->
<script src=" {!! asset('asset/bootstrap/dist/js/bootstrap.min.js') !!} "></script>
<script src="{!! asset('asset/select2/dist/js/select2.full.min.js') !!} "></script>
<!-- AdminLTE App -->
<script src=" {!! asset('asset/dist/js/adminlte.min.js') !!} "></script>


<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>
