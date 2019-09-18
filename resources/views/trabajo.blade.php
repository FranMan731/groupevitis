@extends('main')

@section('body')

	<div class="trabajo row">
		<div class="col-md-12 mb-2">
			<h3 class="color-blanco">
				{{trans('idiomaLang.tituloTrabajo')}}
			</h3>
			<p class="color-celeste">
				{{trans('idiomaLang.textoTrabajo')}}
			</p>
		</div>
		<div class="row box-trabajo">
			<div class="col-md-6 align-self-center">
				<img class="img-fluid" src="{{ asset('imagenes/trabajos/0.jpg') }}">
			</div>
			<div class="col-md-6 align-self-center">
				<span class="color-celeste">{{trans('idiomaLang.textoTrabajo1')}}</span>
			</div>
		</div>
		<div class="row box-trabajo">
			<div class="col-md-6 align-self-center">
				<img class="img-fluid" src="{{ asset('imagenes/trabajos/1.jpg') }}">
			</div>
			<div class="col-md-6 align-self-center">
				<span class="color-celeste">{{trans('idiomaLang.textoTrabajo2')}}</span>
			</div>
		</div>
		<div class="row box-trabajo">
			<div class="col-md-6 align-self-center">
				<img class="img-fluid" src="{{ asset('imagenes/trabajos/2.jpg') }}">
			</div>
			<div class="col-md-6 align-self-center">
				<span class="color-celeste">{{trans('idiomaLang.textoTrabajo3')}}</span>
			</div>
		</div>
		<div class="row box-trabajo">
			<div class="col-md-6 align-self-center">
				<img class="img-fluid" src="{{ asset('imagenes/trabajos/3.jpg') }}">
			</div>
			<div class="col-md-6 align-self-center">
				<span class="color-celeste">{{trans('idiomaLang.textoTrabajo4')}}</span>
			</div>
		</div>
		<div class="row box-trabajo">
			<div class="col-md-6 align-self-center">
				<img class="img-fluid" src="{{ asset('imagenes/trabajos/4.jpg') }}">
			</div>
			<div class="col-md-6 align-self-center">
				<span class="color-celeste">{{trans('idiomaLang.textoTrabajo5')}}</span>
			</div>
		</div>
		<div class="row box-trabajo">
			<div class="col-md-6 align-self-center">
				<img class="img-fluid" src="{{ asset('imagenes/trabajos/5.jpg') }}">
			</div>
			<div class="col-md-6 align-self-center">
				<span class="color-celeste">{{trans('idiomaLang.textoTrabajo6')}}</span>
			</div>
		</div>
		<div class="row box-trabajo">
			<div class="col-md-6 align-self-center">
				<img class="img-fluid" src="{{ asset('imagenes/trabajos/6.jpg') }}">
			</div>
			<div class="col-md-6 align-self-center">
				<span class="color-celeste">{{trans('idiomaLang.textoTrabajo7')}}</span>
			</div>
		</div>
	</div>

@endsection