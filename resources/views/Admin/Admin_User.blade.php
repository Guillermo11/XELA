@extends('layouts.nav_admin')

@section('content')

    <div class="box box-default">
         <div class="box-header with-border">
           <h3 class="box-title">Formulario de Usuario</h3>
          </div>

                 <!-- /.box-header -->
         <div class="box-body">
            
           {!! Form::open(array('route' => 'Admin.store','method' => 'POST', 'files' => true,'class'=>'popup-form','data-toggle'=>'validator'))!!}

             @includeif('Admin.formulario.for_user')
           {!! Form::token() !!}


  <div class="box-footer">
    <div class="form-group col-sm-2">
    <button type="submit" class="btn btn-primary btn-block btn-flat">Guardar</button>
    </div>
    <div class="form-group col-sm-2">
        <a type="button"  href="{!! route('Admin.index') !!}" class="btn btn-danger btn-block btn-flat" name="button">salir</a>

    </div>
  </div>

          {!! Form::close() !!}
      </div> <!-- /.box-body -->
  </div> <!-- /.box -->


@endsection
