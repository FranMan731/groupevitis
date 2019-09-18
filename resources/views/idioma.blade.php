<!DOCTYPE html>
<html>
<head>
	<title>Grupo Vitis</title>
	<link rel="shortcut icon" href="{{ asset('imagenes/favicon.ico') }}" type="image/x-icon">
	<link rel="icon" href="{{ asset('imagenes/favicon.ico') }}" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="{{ url('/css/main.css')}}">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="idioma-fondo">
		<div class="idioma">
			<img src="{{ asset('imagenes/logo.png') }}">

			<div>
				<a href="{{ url('inicio')}}" class="btn btn-primary">{{trans('idiomaLang.entrar')}}</a>
			</div>

			<div class="dropdown">
				<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">{{trans('idiomaLang.tituloIdioma')}}
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu">
					<li><a href="{{ url('lang', ['es']) }}">{{trans('idiomaLang.es')}}</a></li>
					<li><a href="{{ url('lang', ['en']) }}">{{trans('idiomaLang.en')}}</a></li>
					<li><a href="{{ url('lang', ['fr']) }}">{{trans('idiomaLang.fr')}}</a></li>
					<li><a href="{{ url('lang', ['it']) }}">{{trans('idiomaLang.it')}}</a></li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>