@extends('layouts.nav_admin')
  @section('content')

    <div class="row">

                        <!-- /.panel-heading -->
    <div class="col-md-12">
        <!-- Box Comment -->
        <div class="box box-widget">
          <div class="box-header with-border">
            <div class="user-block">

              <img class="img-circle" src="{!! asset('img/icon.jpg') !!}" alt="User Image">
              <span class="username"><a href="#">{{ $evento->name }}<br></a></span>
              <span class="description"> {{ $evento->created_at }}<br></span>
            </div>
            <!-- /.user-block -->

            <!-- /.box-tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body">
                    <!-- Attachment -->
            <div class="attachment-block clearfix">
                @if($evento->ruta_Photo)
              <img class="attachment-img"  width="200 px" src="{!! asset(Storage::url($evento->ruta_Photo)) !!}" alt="Attachment Image">
              @endif
              <div class="attachment-pushed">

                <h4 class="attachment-heading"><a >Descripcion</a></h4>

                <div class="attachment-text">
                {{ $evento->description }}
                </div>
                <!-- /.attachment-text -->
              </div>
              <!-- /.attachment-pushed -->
            </div>
            <!-- /.attachment-block -->

            <!-- Social sharing buttons -->
              <span class="pull-right text-muted">  {{ $evento->date }}</span>
          </div>
          <!-- /.box-body -->

          <!-- /.box-footer -->
          <div class="box-footer">
            <div class="form-group col-sm-2">
              <a type="button"  href="{!! route('evento.index') !!}" class="btn btn-success" name="button">salir</a>
                </div>
                <div class="form-group col-sm-2">
                  <a href="{{ route('destroy', $evento->id) }} " onclick="return confirm('seguro que desea eliminar')" class="btn btn-primary">Eliminar</a>
            </div>
          </div>

          <!-- /.box-footer -->
        </div>
        <!-- /.box -->
      </div>
                        <!-- /.panel-body -->

            </div>


@endsection
