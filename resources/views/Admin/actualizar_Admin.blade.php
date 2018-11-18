@extends('layouts.nav_admin')

@section('content')

    <div class="box box-default">
         <div class="box-header with-border">
           <h3 class="box-title">Formulario de Usuario</h3>
          </div>
                 <!-- /.box-header -->
         <div class="box-body">
           {!! Form::model($admin,['action' => ['Admin\AdminController@update', $admin->id],'files' => true,'method' => 'put','class'=>'popup-form','data-toggle'=>'validator']) !!}


                   {!! Form::token() !!}
                   @if($admin->Photo)
                     <td >  <img width="50 px"src=" {!! asset(Storage::url($admin->Photo)) !!} "  class="img-circle" alt="User Image"></td>
                     @else
                       <td ><img width="50 px" src="{!! asset('img/avatar7.png') !!}" class="user-image" alt="User Image">
                       @endif

                   <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                                 <label  for="exampleSelect1">Nombres</label>
                                 {!! Form::text("name",null, ['id' => 'name','class'=>'form-control','placeholder'=>'Nombres*','autofocus','required']) !!}
                                 @if ($errors->has('name'))
                                 <span class="invalid-feedback" role="alert">
                                 <strong>{{ $errors->first('name') }}</strong>
                                 </span>
                                 @endif
                            </div>
                            <!-- /.form-group -->
                        </div>
                      <!-- /.col -->
                      <div class="col-md-6">
                        <div class="form-group">
                               <label  for="exampleSelect1">Apellidos</label>
                               {!! Form::text("surname",null, ['placeholder'=>'Apellidos*','class'=>'form-control','autofocus','required']) !!}
                               @if ($errors->has('surname'))
                               <span class="invalid-feedback" role="alert">
                               <strong>{{ $errors->first('surname') }}</strong>
                               </span>
                               @endif
                          </div>
                          <!-- /.form-group -->
                      </div>

                    </div>
                 <!-- /.row ---------------------------------------->
                    <div class="row">
                         <div class="col-md-6">
                             <div class="form-group">
                                    <label  for="exampleSelect1">Direccion</label>
                                    {!! Form::text("address",null, ['id' => 'direccion','class'=>'form-control','placeholder'=>'Direccion*','autofocus','required']) !!}
                                    @if ($errors->has('direccion'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('direccion') }}</strong>
                                    </span>
                                    @endif
                               </div>
                               <!-- /.form-group -->
                           </div>
                         <!-- /.col -->
                         <div class="col-md-6">
                           <div class="form-group">
                                  <label  for="exampleSelect1">Telefonos</label>
                                  {!! Form::text("telephone",null, ['placeholder'=>'Telefonos*','class'=>'form-control','autofocus','required']) !!}
                                  @if ($errors->has('telephone'))
                                  <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('telephone') }}</strong>
                                  </span>
                                  @endif
                             </div>
                             <!-- /.form-group -->
                         </div>

                       </div>
                       <!-- /.row ---------------------------------------->
                       <div class="row">

                               <!-- /.col -->
                               <div class="col-md-6">
                                 <div class="form-group">
                                        <label  for="exampleSelect1">Email</label>
                                        {!! Form::email("email",null, ['class'=>'form-control','placeholder'=>'Email*','autofocus','required']) !!}
                                        @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                   </div>
                                   <!-- /.form-group -->
                               </div>

                       </div>
                       <!-- /.row ---------------------------------------->
                        <div class="row">

                                     <!-- /.col -->
                                     <div class="col-md-6">
                                     <div class="form-group">
                                       <label for="exampleInputFile">Subir Fotografia *Opcional</label>
                                       <input name="Imagen"type="file" id="Imagen">

                                       <p class="help-block">Example block-level help text here.</p>

                                           @if ($errors->has('Imagen'))
                                           <span class="invalid-feedback" role="alert">
                                           <strong>{{ $errors->first('Imagen') }}</strong>
                                             </span>
                                           @endif
                                      </div>
                                   </div>
                        </div>
                        <!-- /.row ---------------------------------------->


  <div class="box-footer">
    <div class="form-group col-sm-2">
    <button type="submit" class="btn btn-primary btn-block btn-flat">Actualizar</button>
    </div>
    <div class="form-group col-sm-2">
        <a type="button"  href="{!! route('Admin.index') !!}" class="btn btn-danger btn-block btn-flat" name="button">Cancelar</a>
      </div>

          {!! Form::close() !!}
          <div class="form-group col-sm-2">
            <a href="{{ route('destroy', $admin->id) }} " onclick="return confirm('seguro que desea eliminar')" class="btn btn-primary">Eliminar</a>
      </div>

          </div>
      </div> <!-- /.box-body -->
  </div> <!-- /.box -->


@endsection
