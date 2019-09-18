@extends('main')

@section('body')

	<div class="nosotros">
		<div class="row">
			<div class="col-md-12">
				<h3 class="color-blanco" style="padding-top: 20px;">
					{{trans('idiomaLang.tituloNosotros')}}
				</h3>
				<p class="color-celeste">
					{{trans('idiomaLang.textoNosotros')}}
				</p>
			</div>
		</div>

		<hr class="separador">
		
		<div class="row" style="padding: 1rem 0;">
			<div class="col-md-4">
				<h3 class="color-dorado">
					{{trans('idiomaLang.tituloMision')}}
				</h3>
				<p class="color-celeste">
					{{trans('idiomaLang.textoMision')}}
				</p>

				<hr class="separador">

				<h3 class="color-dorado">
					{{trans('idiomaLang.tituloVision')}}
				</h3>
				<p class="color-celeste">
					{{trans('idiomaLang.textoVision')}}
				</p>

				<hr class="separador">

				<h3 class="color-dorado">
					{{trans('idiomaLang.tituloValores')}}
				</h3>
				<p class="color-celeste">
					{!!trans('idiomaLang.textoValores')!!}
				</p>
			</div>
			<div class="col-md-8">
				<div class="sombra text-historia">
					<h3 class="color-blanco">
						{{trans('idiomaLang.tituloHistoria')}}
					</h3>
					<p class="color-dorado">
						{{trans('idiomaLang.textoHistoria')}}
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h3 class="color-blanco">
					{{trans('idiomaLang.textoPieNosotros')}}
				</h3>
			</div>
		</div>
	</div>
@endsection