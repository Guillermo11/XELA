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
        <!-- /.col -->

        <div class="col-md-6">
            <div class="form-group">
                   <label  for="exampleSelect1">Password</label>
                   {!! Form::password("password", ['id' => 'password','class'=>'form-control','placeholder'=>'Password*','autofocus','required']) !!}
                   @if ($errors->has('password'))
                   <span class="invalid-feedback" role="alert">
                   <strong>{{ $errors->first('password') }}</strong>
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

         <!-- /.col -->
                    <div class="col-md-6">
                        <div class="form-group">
                               <label  for="exampleSelect1">Confirm Password</label>
                               {!! Form::password("password_confirmation", ['id' => 'password-confirm','class'=>'form-control','placeholder'=>'Confirme Password*','autofocus','required']) !!}
                               @if ($errors->has('password_confirmation'))
                               <span class="invalid-feedback" role="alert">
                               <strong>{{ $errors->first('password_confirmation') }}</strong>
                               </span>
                               @endif
                          </div>
                          <!-- /.form-group -->
                      </div>

       </div>
       <!-- /.row ---------------------------------------->
