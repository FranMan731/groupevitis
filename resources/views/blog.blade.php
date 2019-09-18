@extends('main')

@section('body')

	@if(count($articulos) < 3)
		<div class="encabezado" align="center" style="height: 750px;">
	@else
		<div class="encabezado" align="center">
	@endif
		<h3 style="margin-top: 0px; padding-top: 50px;">
			{{trans('idiomaLang.tituloBlog')}}
		</h3>
		<p>
			{{trans('idiomaLang.textoBlog')}}
		</p>
		@if(count($articulos) == 0)
			<h3 style="margin-top: 100px;">
				{{trans('idiomaLang.textoNoArticulos')}}
			</h3>
		@elseif(count($articulos) > 0)
			<table class="sombra" style="border-collapse: separate; border-spacing: 0px 0px; margin: 50px;">
				@for($i = 0; $i < count($articulos); $i++)
					<tr>
						<td style="color: white">
							<div class="grid" style="padding: 1em 0 1em;">
								<a href="#-{{$i}}" class="whatever">
									<span style="display: inline-grid; padding: 30px;">
										<img style="width: 200px; height: 130px;" src="{{ asset($articulos[$i]['img'])}}"/>
										<h5 style="color: white;">{{$articulos[$i]['titulo']}}</h5>
									</span>
								</a>
								<div id="-{{$i}}" class="modalDialog">
									<div class="sombra" align="center" style="background: black !important">
										<a href="#close" title="Close" class="close">X</a>
										<h2 style="margin: 20px 10px;">{{$articulos[$i]['titulo']}}</h2>
										<img style="width: 50%;" src="{{ asset($articulos[$i]['img'])}}"/>
										<p style="margin: 30px 10px; width: 50%">
											{{$articulos[$i++]['descripcion']}}
										</p>
									</div>
								</div>
								@if(count($articulos) > $i)
								<a href="#-{{$i}}" class="whatever">
									<span style="display: inline-grid; padding: 30px;">
										<img style="width: 200px; height: 130px;" src="{{ asset($articulos[$i]['img'])}}"/>
										<h5 style="color: white;">{{$articulos[$i]['titulo']}}</h5>
									</span>
								</a>
								<div id="-{{$i}}" class="modalDialog">
									<div class="sombra" align="center" style="background: black !important">
										<a href="#close" title="Close" class="close">X</a>
										<h2 style="margin: 20px 10px;">{{$articulos[$i]['titulo']}}</h2>
										<img style="width: 50%;" src="{{ asset($articulos[$i]['img'])}}"/>
										<p style="margin: 30px 10px; width: 50%">
											{{$articulos[$i]['descripcion']}}
										</p>
									</div>
								</div>
								@endif
							</div>
						</td>
					</tr>
				@endfor
			</table>
		@endif
@endsection