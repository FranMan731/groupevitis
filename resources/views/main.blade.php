<!DOCTYPE html>
<html>
<head>
	<title>{{trans('idiomaLang.tituloMain')}}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	
	<link rel="shortcut icon" href="{{ asset('imagenes/favicon.ico') }}" type="image/x-icon">
	<link rel="icon" href="{{ asset('imagenes/favicon.ico') }}" type="image/x-icon">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<!--<link rel="stylesheet" type="text/css" href="{{ url('/css/main.css')}}"> -->
	<!--<link rel="stylesheet" type="text/css" href="{{ url('/css/set2.css') }}" />-->
	<link rel="stylesheet" type="text/css" href="{{ url('/css/main-f.css')}}">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script>
		$(function(){
			$('a[href*=\\#]').click(function() {
				if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')&& location.hostname == this.hostname) {

					var $target = $(this.hash);
					$target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
					if ($target.length) {
						var targetOffset = $target.offset().top;
						$('html,body').animate({scrollTop: targetOffset}, 800);
						return false;
					}
				}
			});
		});
	</script>
	@yield('script')
</head>
<body>
	<!-- NAVBAR -->
	
	<header>
		<nav class="navbar navbar-light fixed-top navbar-expand-md navbar-custom">
			<div class="container">
				<a class="navbar-brand" href="{{ url('inicio')}}">
					<img src="{{ asset('imagenes/logo.png') }}" style="width: 110px;">
				</a>
				<button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarLinks" aria-controls="navbarLinks" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarLinks">
					<ul class="navbar-nav ml-auto custom-navbar-collapse">
						<li class="nav-item">
							<a class="nav-link" href="{{ url('nosotros')}}">{{trans('idiomaLang.nosotrosMain')}}</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ url('mundo')}}">{{trans('idiomaLang.mundoMain')}}</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ url('actividades')}}">{{trans('idiomaLang.actividadesMain')}}</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ url('trabajo')}}">{{trans('idiomaLang.trabajoMain')}}</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ url('blog')}}">{{trans('idiomaLang.blogMain')}}</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ url('contacto')}}">{{trans('idiomaLang.contactoMain')}}</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<main role="main" id="main" style="background: url({{ asset('imagenes/fondoMain.jpeg') }}) no-repeat center center fixed;">
		<div class="container">
		@yield('body')
		</div>
	</main>
		
	<footer class="footer">
		<div class="row text-center py-3">
			<div class="col-sm-12 col-md-3 py-2">
				<span>
					© 2018
				</span>
			</div>
			<div class="col-sm-12 col-md-6 py-2">
				<span class="color-dorado">
					Lieu Dit Ivon section AM 41-33370 Salleboeuf (Bordeaux, France)<br>
					+54 92612488819
				</span>
			</div>
			<div class="col-sm-12 col-md-3 py-2 redes">
				<a href="https://www.facebook.com/Gruope-Vitis-1971967176435554/?ref=bookmarks" target="_blank">
					<i class="fab fa-facebook-f fa-2x"></i>
				</a>
				<a href="https://www.twitter.com" target="_blank">
					<i class="fab fa-twitter fa-2x"></i>
				</a>
				<a href="https://www.youtube.com" target="_blank">
					<i class="fab fa-youtube fa-2x"></i>
				</a>
			</div>
		</div>
	</footer>
	</body>
</html>