@extends('main')

@section('body')
	<form name="index" method="post" action="{{ route('mail.store')}}" id="-Contacto">
		{!! csrf_field() !!}
		<div class="contacto encabezado" align="center">
			@if(Session::has('flash_message'))
				<div class="alert alert-success" style="width: 50%;">
					{{Session::get('flash_message')}}
				</div>
			@endif
			<h3 style="margin-top: 0px; padding-top: 50px;">
				{{trans('idiomaLang.tituloContacto')}}
			</h3>
			<p>
				{{trans('idiomaLang.textoContacto')}}
			</p>
			<table>
				<tbody>
					<tr align="center">
						<td>
							<ul>
								<li>
									<i class="fas fa-phone-square fa-2x"></i>
									<p>
										+54 92612488819
									</p>
								</li>
								<li style="margin: 30px 0px;">
									<i class="fas fa-envelope-square fa-2x"></i>
									<p>
										info@gruopevitis.com
									</p>
								</li>
								<li>
									<i class="fas fa-map-marker-alt fa-2x"></i>
									<p>
										Bordeaux
									</p>
								</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="nombre" maxlength="20" placeholder="{{trans('idiomaLang.nombreContacto')}}" required="{{trans('idiomaLang.completarContacto')}}" pattern="[a-zA-Z\s]+{4}">
						</td>
					</tr>
					<tr>
						<td>
							<input type="email" name="email" maxlength="50" placeholder="{{trans('idiomaLang.emailContacto')}}" required="{{trans('idiomaLang.completarContacto')}}">
						</td>
					</tr>
					<tr>
						<td>
							<textarea style="height: 200px; color: white;" name="mensaje" maxlength="100" cols="25" rows="6" placeholder= "{{trans('idiomaLang.mensajeContacto')}}" required="{{trans('idiomaLang.completarContacto')}}"></textarea>
						</td>
					</tr>
					<tr>
						<td>
							<input style="background-color: #ddac50; color: black; border: 0px; width: 100px; float: right;" type="submit" value="{{trans('idiomaLang.enviarContacto')}}">
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</form>

@endsection