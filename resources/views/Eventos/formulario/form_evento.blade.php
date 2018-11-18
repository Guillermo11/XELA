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
