@extends('layouts.nav_login')

@section('content')
  <div class="position-relative">
    <div id="login-box" class="login-box visible widget-box no-border">
      <div class="widget-body">
        <div class="widget-main">
          <h4 class="header blue lighter bigger">
            <i class="ace-icon fa fa-users  blue"></i>

            Ingrese informacion
          </h4>

          <div class="space-6"></div>

          <form method="POST" action="{{ route('login') }}">
              @csrf

            <fieldset>
              <label class="block clearfix">
                <span class="block input-icon input-icon-right">
                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus />
                  <i class="ace-icon fa fa-user"></i>
                    @if ($errors->has('email'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                </span>
              </label>

              <label class="block clearfix">
                <span class="block input-icon input-icon-right">
                  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required/>
                  <i class="ace-icon fa fa-lock"></i>
                  @if ($errors->has('password'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                </span>
              </label>

              <div class="space"></div>

              <div class="clearfix">
                <label class="inline">
                  <input type="checkbox" class="ace" />
                  <span class="lbl"> Remember Me</span>
                </label>

                <button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
                    <i class="ace-icon fa fa-key"></i>
                    <span class="bigger-110">  {{ __('Login') }}</span>
                </button>
                </div>

              <div class="space-4"></div>
            </fieldset>
          </form>



          <div class="space-6"></div>


        </div><!-- /.widget-main -->
        <div class="toolbar clearfix">
    											<div>
    												<a href="{{ url('/') }}"  class="forgot-password-link">
    													<i class="ace-icon fa fa-arrow-left"></i>
    													Salir
    												</a>
    											</div>

    											<div>
    												<a href="#" data-target="#forgot-box" class="forgot-password-link">
                              Recuperar accesos
    													<i class="ace-icon fa fa-arrow-right"></i>
    												</a>
    											</div>
    										</div>



      </div><!-- /.widget-body -->
    </div><!-- /.login-box -->



  </div>

  <!-- /.position-relative -->


  <div id="forgot-box" class="forgot-box widget-box no-border">
                <div class="widget-body">
                  <div class="widget-main">
                    <h4 class="header red lighter bigger">
                      <i class="ace-icon fa fa-key"></i>
                      Recuperar Contraseña

                    </h4>

                    <div class="space-6"></div>
                    <p>
                    Introduce tu email y recibe instrucciones.
                    </p>

                    <form>
                      <fieldset>
                        <label class="block clearfix">
                          <span class="block input-icon input-icon-right">
                            <input type="email" class="form-control" placeholder="Email" />
                            <i class="ace-icon fa fa-envelope"></i>
                          </span>
                        </label>

                        <div class="clearfix">
                          <button type="button" class="width-35 pull-right btn btn-sm btn-danger">
                            <i class="ace-icon fa fa-lightbulb-o"></i>
                            <span class="bigger-110">Enviame!</span>
                          </button>
                        </div>
                      </fieldset>
                    </form>
                  </div><!-- /.widget-main -->

                  <div class="toolbar center ">
                    <a href="#" data-target="#login-box" class="back-to-login-link">
                      Iniciar Sesión
                    
                    </a>
                  </div>
                </div><!-- /.widget-body -->
              </div><!-- /.forgot-box -->

@endsection
