@extends('layouts.nav_admin')
@section('content')
  <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <td ><img width="50 px" src="{!! asset('img/icon.jpg') !!}" class="user-image" alt="User Image">

            <small class="pull-right">Fecha del formulario:{{ $usuario->fercha_hoy }}</small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
            <address>
            <b>Dpi: {{ $usuario->dpi }}</b><br>
            <b>Nombres:</b> {{ $usuario->nombres }}<br>
            <b>Apellidos:</b> {{ $usuario->nombres }}<br>
            <b>Direccion:</b> {{ $usuario->direccion }}<br>
            <b>telefono:</b> {{ $usuario->telefono }}<br>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
            <address>
            <b>Sstado civil: {{ $usuario->estado_civil }}</b><br>
            <b>Edad:</b> {{ $usuario->edad }}<br>
            <b>Fecha de Nacimiento:</b> {{ $usuario->fecha_nacimiento }}<br>
            <b>Genero:</b> {{ $usuario->genero }}<br>
            <b>Enivel Escolar:</b> {{ $usuario->educacion }}<br>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">

          <b>Experiencia laboral: {{ $usuario->expe_laboral }}</b><br>
          <b>Tiempo de experiencia:</b> {{ $usuario->tiempo_laborado }}<br>
          <b>Empresa:</b> {{ $usuario->empresa_laborado }}<br>
          <b>Puesto:</b> {{ $usuario->puesto_laboral }}<br>
          <b>Trabajo Fuera del Pais:</b> {{ $usuario->laboro_fuera }}<br>
          <b>Tiempo que trabajo fuera del pais:</b> {{ $usuario->tiempofuera }}<br>
        </div>
        <!-- /.col -->
      </div>
<hr>

      <div class="row no-print">
        <div class="col-xs-12">
          <a type="button"  href="{!! url('Usuario') !!}" class="btn btn-success pull-right">Salir</a>
          @if($usuario->ruta_file)

           <a href="{{ route('Descargar', $usuario->id) }}"  type="button" class="btn btn-primary pull-right"  style="margin-right: 5px;"> <i class="fa fa-download"></i> Descargar Curriculum</a>
            @endif

        </div>
      </div>
    </section>
@endsection
