<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Login Vume Admin</title>
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="{!! asset('assets/css/bootstrap.min.css') !!} " />
		<link rel="stylesheet" href="{!! asset('assets/font-awesome/4.5.0/css/font-awesome.min.css') !!} " />

		<!-- text fonts -->
		<link rel="stylesheet" href="{!! asset('assets/css/fonts.googleapis.com.css') !!} " />

		<!-- ace styles -->
		<link rel="stylesheet" href="{!! asset('assets/css/ace.min.css') !!} " />

		<link rel="stylesheet" href="{!! asset('assets/css/ace-rtl.min.css') !!} " />

	</head>

	<body class="login-layout">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="ace-icon fa fa-leaf  blue"></i>
									<span class="red">Vume</span>
									<span class="white" id="id-text2">Aplicacion</span>
								</h1>
								<h4 class="blue" id="id-company-text">&copy;Ventanilla Unica de empleo Vume Quetzaltenango</h4>
							</div>

							<div class="space-6"></div>

      @yield('content')

						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="{!! asset('assets/js/jquery-2.1.4.min.js') !!} "></script>


		<script type="text/javascript">
	jQuery(function($) {
	$(document).on('click', '.toolbar a[data-target]', function(e) {
	e.preventDefault();
	var target = $(this).data('target');
	$('.widget-box.visible').removeClass('visible');//hide others
	$(target).addClass('visible');//show target
	});
	});



	//you don't need this, just used for changing background
	jQuery(function($) {
	$('#btn-login-dark').on('click', function(e) {
	$('body').attr('class', 'login-layout');
	$('#id-text2').attr('class', 'white');
	$('#id-company-text').attr('class', 'blue');

	e.preventDefault();
	});
	$('#btn-login-light').on('click', function(e) {
	$('body').attr('class', 'login-layout light-login');
	$('#id-text2').attr('class', 'grey');
	$('#id-company-text').attr('class', 'blue');

	e.preventDefault();
	});
	$('#btn-login-blur').on('click', function(e) {
	$('body').attr('class', 'login-layout blur-login');
	$('#id-text2').attr('class', 'white');
	$('#id-company-text').attr('class', 'light-blue');

	e.preventDefault();
	});

	});
	</script>

	</body>
</html>
