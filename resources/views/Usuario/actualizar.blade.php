@extends('layouts.nav_admin')
@section('content')
  <div class="box box-default">
       <div class="box-header with-border">
         <h3 class="box-title">Formulario de Usuario</h3>
        </div>
               <!-- /.box-header -->
       <div class="box-body">
         {!! Form::model($usuario,['action' => ['Admin\UsuarioController@update', $usuario->id],'files' => true,'method' => 'put','class'=>'popup-form','data-toggle'=>'validator']) !!}
          {!! Form::token() !!}

          <div class="row">
            <div class="col-md-2">
              <div class="form-group">
                     <label  for="exampleSelect1">Fecha</label>
                    {!! Form::date('fercha_hoy', \Illuminate\Support\Carbon::now(), ['required','id' => 'nombres','class'=>'form-control','autofocus']) !!}
                       @if ($errors->has('fercha_hoy'))
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $errors->first('fercha_hoy') }}</strong>
                     </span>
                     @endif
                </div>
                <!-- /.form-group -->
            </div>
                 <div class="col-md-3">
                   <div class="form-group">
                          <label  for="exampleSelect1">Nombres</label>
                          {!! Form::text("nombres",null, ['required','id' => 'nombres','class'=>'form-control','placeholder'=>'Nombres*','autofocus']) !!}
                          @if ($errors->has('nombres'))
                          <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('nombres') }}</strong>
                          </span>
                          @endif
                     </div>
                     <!-- /.form-group -->
                 </div>
               <!-- /.col -->
               <div class="col-md-3">
                 <div class="form-group">
                        <label  for="exampleSelect1">Apellidos</label>
                        {!! Form::text("apellidos",null, ['required','id' => 'apellidos','class'=>'form-control','placeholder'=>'Nombres*','autofocus']) !!}
                        @if ($errors->has('apellidos'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('apellidos') }}</strong>
                        </span>
                        @endif
                   </div>
                   <!-- /.form-group -->
               </div>
             <!-- /.col -->
             <div class="col-md-2">
               <div class="form-group">
                 <label  for="exampleSelect1">Dpi</label>
                    {!! Form::text('dpi', null,['required','id' => 'dpi','class'=>'form-control','autofocus','placeholder'=>'DPI*','value'=>'"/^[0-9]+$/"'] ) !!}
                     @if ($errors->has('dpi'))
                       <span class="invalid-feedback" role="alert">
                       <strong>{{ $errors->first('dpi') }}</strong>
                       </span>
                     @endif
                 </div>
                 <!-- /.form-group -->
             </div>
             <!-- /.col -->
             <div class="col-md-2">
               <div class="form-group">
                      <label  for="exampleSelect1">Edad</label>
                      {!! Form::text("edad",null, ['required','id' => 'edad','class'=>'form-control','placeholder'=>'Edad*','autofocus']) !!}
                      @if ($errors->has('edad'))
                      <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('edad') }}</strong>
                      </span>
                      @endif
                 </div>
                 <!-- /.form-group -->
             </div>
           </div>
         <!-- /.row ---------------------------------------->
         <div class="row">

            <div class="col-md-2">
              <div class="form-group">
                <label  for="exampleSelect1">Fecha de Nacimiento</label>
                <input type="date" name="fecha_nacimiento" required class="form-control" value="{{ old('fecha_nacimiento') }}" placeholder="Fecha de Nacimiento*">
                  @if ($errors->has('fecha_nacimiento'))
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('fecha_nacimiento') }}</strong>
                  </span>
                  @endif
               </div>
                <!-- /.form-group -->
            </div>

            <div class="col-md-2">
              <div class="form-group">
                <label  for="exampleSelect1">Genero</label>
                 {!! Form::select('genero',['Hombre' => 'Hombre', 'Mujer' => 'Mujer'], null, ['required','class'=>'form-control','placeholder' => 'seleccionar'])!!}
                 @if ($errors->has('genero'))
                 <span class="invalid-feedback" role="alert">
                 <strong>{{ $errors->first('genero') }}</strong>
                 </span>
                 @endif
                </div>
                <!-- /.form-group -->
            </div>
          <!-- /.col -->
          <div class="col-md-2">
            <div class="form-group">
              <label  for="exampleSelect1">Estado civil</label>
               {!! Form::select('estado_civil',['Soltero' => 'Soltero', 'Casado' => 'Casado', 'Unido' => 'Unido'], null, ['class'=>'form-control','placeholder' => 'seleccionar'])!!}
               @if ($errors->has('estado_civil'))
               <span class="invalid-feedback" role="alert">
               <strong>{{ $errors->first('estado_civil') }}</strong>
               </span>
               @endif
              </div>
              <!-- /.form-group -->
          </div>
         <!-- /.col -->
         <div class="col-md-3">
          <div class="form-group">
            <label  for="exampleSelect1">Direccion</label>
            {!! Form::text('direccion',null, ['class'=>'form-control','placeholder'=>'Direccion']) !!}
            @if ($errors->has('direccion'))
            <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('direccion') }}</strong>
            </span>
            @endif
            </div>
            <!-- /.form-group -->
         </div>
         <!-- /.col -->
         <div class="col-md-3">
          <div class="form-group">
            <label  for="exampleSelect1">Nunicipio</label>
            {!! Form::text("nunicipio",null, ['class'=>'form-control','placeholder'=>'Municipio']) !!}
            @if ($errors->has('nunicipio'))
            <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('nunicipio') }}</strong>
            </span>
            @endif
            </div>
            <!-- /.form-group -->
         </div>
         </div>
         <!-- /.row ---------------------------------------->

         <div class="row">
              <div class="col-md-2">
                <div class="form-group">
                  <label  for="exampleSelect1">Telefono</label>
                  {!! Form::text('telefono',null, ['class'=>'form-control','placeholder'=>'Telefono','autofocus']) !!}
                  @if ($errors->has('telefono'))
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('telefono') }}</strong>
                  </span>
                  @endif
                 </div>
                  <!-- /.form-group -->
              </div>

              <div class="col-md-2">
              <div class="form-group">
                <label  for="exampleSelect1">Nivel Educativo</label>
                  {!! Form::select('educacion',['Primaria' => 'Primaria', 'Basico' => 'Basico', 'Diversificado' => 'Diversificado', 'Universitario' => 'Universitario'], null, ['required','class'=>'form-control','placeholder' => 'seleccionar'])!!}
                  @if ($errors->has('educacion'))
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('educacion') }}</strong>
                  </span>
                  @endif
                </div>
                <!-- /.form-group -->
            </div>
                <!-- /.col -->
                <div class="col-md-3">
            <div class="form-group">
              <label  for="exampleSelect1">Carrera,Titulo o Especialidad</label>
              @include('Usuario.formulario.carrera')
                @if ($errors->has('carrera_titulo'))
              <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('carrera_titulo') }}</strong>
              </span>
              @endif
              </div>
              <!-- /.form-group -->
                </div>
              <!-- /.col -->
                <div class="col-md-3">
          <div class="form-group">
            <label  for="exampleSelect1">Cuenta con Experiencia laboral</label>
            {!! Form::select('expe_laboral',['Si' => 'Si', 'No' => 'No'], null, ['class'=>'form-control','placeholder' => 'seleccionar'])!!}
            @if ($errors->has('expe_laboral'))
            <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('expe_laboral') }}</strong>
            </span>
            @endif
            </div>
            <!-- /.form-group -->
         </div>
              <!-- /.col -->
                <div class="col-md-2">
          <div class="form-group">
            <label  for="exampleSelect1">Años de Experiencia</label>
            {!! Form::text("tiempo_laborado",null, ['class'=>'form-control','placeholder'=>'Años de Experiencia']) !!}
            @if ($errors->has('tiempo_laborado'))
            <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('tiempo_laborado') }}</strong>
            </span>
            @endif
            </div>
            <!-- /.form-group -->
         </div>
         </div>

         <!-- /.row ---------------------------------------->

         <div class="row">
          <div class="col-md-3">
          <div class="form-group">
            <label  for="exampleSelect1">Lugar de ultimo Empleo</label>
              {!! Form::text("empresa_laborado",null, ['class'=>'form-control','placeholder'=>'Nombre de la Empresa']) !!}
              @if ($errors->has('empresa_laborado'))
              <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('empresa_laborado') }}</strong>
              </span>
              @endif
           </div>
            <!-- /.form-group -->
         </div>

          <div class="col-md-2">
          <div class="form-group">
            <label  for="exampleSelect1">Puesto que laboro</label>
            {!! Form::text("puesto_laboral",null, ['class'=>'form-control','placeholder'=>'Puesto']) !!}
            @if ($errors->has('puesto_laboral'))
            <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('puesto_laboral') }}</strong>
            </span>
            @endif
            </div>
            <!-- /.form-group -->
         </div>
          <!-- /.col -->
          <div class="col-md-3">
         <div class="form-group">
          <label  for="exampleSelect1">Usted ha vivido fuera del pais</label>
          {!! Form::text("laboro_fuera",null, ['class'=>'form-control','placeholder'=>'Usted ha vivido fuera del pais','autofocus']) !!}
          @if ($errors->has('laboro_fuera'))
          <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('laboro_fuera') }}</strong>
          </span>
          @endif
          </div>
          <!-- /.form-group -->
         </div>
         <!-- /.col -->
          <div class="col-md-4">
            <div class="form-group">
            <label  for="exampleSelect1">Cuanto tiempo ha vivido fuera del pais</label>
             {!! Form::text('tiempofuera',null, ['class'=>'form-control','placeholder'=>'Cuanto tiempo ha vivido fuera del pais']) !!}
             @if ($errors->has('tiempofuera'))
             <span class="invalid-feedback" role="alert">
             <strong>{{ $errors->first('tiempofuera') }}</strong>
               </span>
             @endif
              </div>
          </div>
         <!-- /.col -->
         </div><!-- /.row ---------------------------------------->

             <div class="row">
               <div class="col-md-12">
               <div class="form-group">
                 <label  for="exampleSelect1">Añadir hoja de vida</label>
                     <input type="file" value="{{ old('ruta_file') }}" name="ruta_file" id="ruta_file">

                     @if ($errors->has('ruta_file'))
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $errors->first('ruta_file') }}</strong>
                       </span>
                     @endif
                </div>

             </div>
             <!-- /.col -->
             </div><!-- /.row ---------------------------------------->
<div class="form-group col-sm-2">
<button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
</div>
<div class="form-group col-sm-2">
    <a type="button"  href="{!! url('Usuario') !!}" class="btn btn-danger btn-block btn-flat" name="button">salir</a>

</div>
        {!! Form::close() !!}
    </div> <!-- /.box-body -->
</div> <!-- /.box -->

@endsection
