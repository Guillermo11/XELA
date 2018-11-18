@extends('layouts.nav_admin')

@section('content')
  <div class="row">
          <!-- left column -->
          <div class="col-md-5">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Nueva Publicacion</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              {!! Form::model($evento,['action' => ['Admin\EventoController@update', $evento->id],'files' => true,'method' => 'put','class'=>'popup-form','data-toggle'=>'validator']) !!}

                {!! Form::token() !!}
                <div class="box-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Oportunidad Para</label>
                    {!! Form::text("name",null, ['id' => 'name','class'=>'form-control','placeholder'=>'Titulo del Evento*','autofocus','required']) !!}
                    @if ($errors->has('name'))
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('name') }}</strong>
                  </span>
                  @endif
                   </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Requisistos</label>
                    {!! Form::textarea("description",null, [ 'style'=> 'width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;','id' => 'descripcion','class'=>'form-control','autofocus','required']) !!}
                    @if ($errors->has('description'))
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('description') }}</strong>
                  </span>
                  @endif
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Fecha liminte</label>
                 {!! Form::date('fercha_hoy', \Illuminate\Support\Carbon::now(), ['required','id' => 'nombres','class'=>'form-control','autofocus']) !!}
                  @if ($errors->has('fercha_hoy'))
                <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('fercha_hoy') }}</strong>
                </span>
                @endif
                </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Surbir Imagen</label>
                    <input type="file" name="ruta_Photo" id="exampleInputFile">
                    @if ($errors->has('ruta_Photo'))
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('ruta_Photo') }}</strong>
                  </span>
                  @endif
                    </div>
                  <div class="checkbox">
                  </div>
                </div>
                <!-- /.box-body -->


                    <div class="box-footer">
                  <div class="form-group col-sm-3">
                    <button type="submit" class="btn btn-primary">Publicar</button>
                      </div>
                  <div class="form-group col-sm-3">
                    <a type="button"  href="{!! route('evento.index') !!}" class="btn btn-danger" name="button">salir</a>

                  </div>
                  <div class="form-group col-sm-3">
                    <a type="button"  href="{!! route('evento.create') !!}" class="btn btn-success" name="button">Nuevo</a>
                    </div>
                </div>

        {!! Form::close() !!}
            </div>

          </div>
          <!--/.col (left) -->
          <!-- right column -->

          <div class="col-md-7">
            <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                  Listado de Eventos Publicados
                                  </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>

                                                <th>Nombres</th>
                                                <th>Fecha</th>
                                                <th>Descripcion</th>
                                                <th  width="15%">&nbsp;</th>


                                            </tr>
                                        </thead>
                                        <tbody>




                                        </tbody>
                                    </table>

                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>


                    <script>
                    $(document).ready(function() {
                        $('#dataTables-example').DataTable({
                          'serverSide':true,
                          'responsive': true,
                          language: {
                           "url": '{!! asset('/plugins/latino.json') !!}'
                            } ,
                          'ajax':'{{ url('api/evento') }}',
                          'columns':[
                            {data:'name'},
                            {data:'date'},
                            {data:'description'},
                          {data:'btn'},





                          ]



                        });
                    });
                    </script>

          </div>
          <!--/.col (right) -->
        </div>
@endsection
