@extends('main')

@section('body')

	<div class="encabezado" align="center">
		<h3 style="margin-top: 0px; padding-top: 50px;">
			{{trans('idiomaLang.tituloActividades')}}
		</h3>
		<p>
			{{trans('idiomaLang.textoActividades')}}
		</p>
	</div>

	@if(count($actividades) == 0)
		<h3 style="margin-top: 100px;">
			{{trans('idiomaLang.textoNoActividades')}}
		</h3>
	@else
		<div align="center" class="actividades">
			<table>
				<tr>
					@if($actividades[0])
						<td align="center" colspan="4">
							<div class="sombra">
								<img src="{{ asset($actividades[0]['img'])}}"/>
								<h5>
									{{$actividades[0]['titulo']}}
								</h5>
								<p>
									{{$actividades[0]['fecha']}}
								</p>
							</div>
						</td>
					@endif
				</tr>
				<tr class="actividades-mini" style="text-align: center;">
					@for($i=1; $i < count($actividades); $i++)
						@if($actividades[$i]['titulo'] != '')
							<td>
								<div>
									<h5>
										{{$actividades[$i]['titulo']}}
									</h5>
									<p>
										{{$actividades[$i]['fecha']}}
									</p>
								</div>
							</td>
						@endif
					@endfor
				</tr>
				@for($i=1; $i < count($actividades); $i++)
					<tr class="actividades-mini-480" style="text-align: center; display: none;">
						@if($actividades[$i]['titulo'] != '')
							<td>
								<div>
									<h5>
										{{$actividades[$i]['titulo']}}
									</h5>
									<p>
										{{$actividades[$i]['fecha']}}
									</p>
								</div>
							</td>
						@endif
					</tr>
				@endfor
			</table>
		</div>
	@endif
@endsection