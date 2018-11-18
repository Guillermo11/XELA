<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administrador Vume Quetzaltenango</title>
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



<script src="{!! asset('https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css') !!} "></script>
<script src="{!! asset('https://cdn.datatables.net/buttons/1.5.2/css/buttons.bootstrap.min.css') !!} "></script>

  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="{!! asset('asset/dist/css/skins/skin-blue.min.css'  ) !!}  ">


</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a  class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->

      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>Vume</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <li class="dropdown user user-menu">

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              @if(Auth::user()->Photo)
                <img src="{!! asset( Storage::url(Auth::user()->Photo) ) !!}" class="user-image" alt="User Image">
                  @else

                  <td ><img src="{!! asset('img/avatar7.png') !!}" class="user-image" alt="User Image">
                    @endif
                <span class="hidden-xs">{{ Auth::user()->name}}</span>
            </a>

            <ul class="dropdown-menu">
              @guest
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                  <li class="nav-item">
                      @if (Route::has('register'))
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                      @endif
                  </li>
            @else
              <li class="user-header">
                @if(Auth::user()->Photo)
                <img src="{!! asset( Storage::url(Auth::user()->Photo) ) !!}" class="img-circle" alt="User Image">
                @else
                  <img src="{!! asset('img/avatar7.png') !!}" class="img-circle" alt="User Image">

                    @endif
                <p>
                  {{ Auth::user()->name }}
                  <small> {{ Auth::user()->name }}</small>
                </p>
              </li>

              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Salir') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>

                </div>
              </li>
              @endguest
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->

        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar --------------------------------------------------------->
  <!-- Left side column. contains the logo and sidebar ------------------------------>
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          @if(Auth::user()->Photo)
            <img src="{!! asset( Storage::url(Auth::user()->Photo) ) !!}" class="img-circle" alt="User Image">

              @else
            <td ><img src="{!! asset('img/avatar7.png') !!}" class="img-circle" alt="User Image">
                @endif

        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a ><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
  <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////77-->
      <!-- sidebar menu: : style can be found in sidebar.less -->  <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
          <span>Usuarios</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{!! route('Usuario.create') !!}"><i class="fa fa-user-plus"></i>Agregar Usuario</a></li>
            <li><a href="{!! route('Usuario.index') !!}"><i class="fa fa-list"></i>Listar Usuario</a></li>
              </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Publicaciones</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{!! route('evento.create') !!}"><i class="fa fa-user-plus"></i>Crear eventos</a></li>
            <li><a href="{!! route('evento.index') !!}"><i class="fa fa-list"></i>Listar eventos</a></li>
      </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-server"></i>
            <span>Estadistica de entadas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{!! route('listado_graficas') !!}"><i class="fa fa-user-plus"></i>Estadistica Uusario</a></li>

      </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-database"></i>
            <span>Reporte</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{!! route('reportes') !!}"><i class="fa fa-list"></i>Reporte Usuario</a></li>
            </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
          <span>Adminstrador</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{!! route('Admin.create') !!}"><i class="fa fa-user-plus"></i>Agregar Usuario</a></li>
            <li><a href="{!! route('Admin.index') !!}"><i class="fa fa-list"></i>Listar Usuario</a></li>

          </ul>
        </li>



          <!-- /.sidebar -->


      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////77-->


  <!-- Content Wrapper. Contains page content ------------------------------------------------------------------>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      <!-- aqui el contenido -->

        <!-- left column -->

@yield('content')




    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Ventanilla Única Municipal de Empleo en Quetzaltenango</a>.</strong>
  </footer>


  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<script src=" {!! asset('asset/jquery/dist/jquery.min.js') !!} "></script>
<!-- Bootstrap 3.3.7 -->
<script src=" {!! asset('asset/bootstrap/dist/js/bootstrap.min.js') !!} "></script>
<!-- AdminLTE App -->
<script src="{!! asset('asset/select2/dist/js/select2.full.min.js') !!} "></script>
<script src=" {!! asset('asset/dist/js/adminlte.min.js') !!} "></script>
<script src="{!! asset('asset/datatables.net/js/jquery.dataTables.min.js') !!} "></script>
<script src="{!! asset('asset/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}"></script>

<script src=" {!! asset('asset/datatables-plugins/dataTables.bootstrap.min.js') !!} "></script>
    <script src=" {!! asset('asset/datatables-responsive/dataTables.responsive.js') !!} "></script>
<script src="{!! asset('js/sistemalaravel.js') !!} "></script>
<script src="{!! asset('js/highcharts.js') !!} "></script>
<script src="{!! asset('js/graficas.js') !!} "></script>
<script src="{!! asset('https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js') !!} "></script>
<script src="{!! asset('https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js') !!} "></script>
<script src="{!! asset('https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js') !!} "></script>
<script src="{!! asset('https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js') !!} "></script>
<script src="{!! asset('https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js') !!} "></script>
<script src="{!! asset('https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js') !!} "></script>

<script src="{!! asset('https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js') !!} "></script>











</body>
</html>
