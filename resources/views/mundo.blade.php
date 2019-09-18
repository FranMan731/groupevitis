@extends('main')

@section('body')

<div class="mundo">
    <div class="row">
        <div class="col-md-12">
            <h3 class="color-blanco">
                {{trans('idiomaLang.tituloMundo')}}
            </h3>
            <p class="color-celeste">
                {{trans('idiomaLang.textoMundo')}}
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="thumbnail text-center">
                <img class="img-fluid rounded" src="{{ asset('imagenes/mundo/arg.jpg') }}" />
                <div class="caption">
                    <h2 class="color-dorado sombra-letra">{{trans('idiomaLang.argentina')}}</h2>
                    <p>{{trans('idiomaLang.textoArgentina')}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="thumbnail text-center">
                <img class="img-fluid rounded" src="{{ asset('imagenes/mundo/brasil.jpg') }}" />
                <div class="caption">
                    <h2 class="color-dorado sombra-letra">{{trans('idiomaLang.brasil')}}</h2>
                    <p>{{trans('idiomaLang.textoBrasil')}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="thumbnail text-center">
                <img class="img-fluid rounded" src="{{ asset('imagenes/mundo/chile.jpg') }}" />
                <div class="caption">
                    <h2 class="color-dorado sombra-letra">{{trans('idiomaLang.chile')}}</h2>
                    <p>{{trans('idiomaLang.textoChile')}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="thumbnail text-center">
                <img class="img-fluid rounded" src="{{ asset('imagenes/mundo/es.jpg') }}" />
                <div class="caption">
                    <h2 class="color-dorado sombra-letra">{{trans('idiomaLang.españa')}}</h2>
                    <p>{{trans('idiomaLang.textoEspaña')}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="thumbnail text-center">
                <img class="img-fluid rounded" src="{{ asset('imagenes/mundo/eeuu.jpg') }}" />
                <div class="caption">
                    <h2 class="color-dorado sombra-letra">{{trans('idiomaLang.eeuu')}}</h2>
                    <p>{{trans('idiomaLang.textoEEUU')}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="thumbnail text-center">
                <img class="img-fluid rounded" src="{{ asset('imagenes/mundo/francia.jpg') }}" />
                <div class="caption">
                    <h2 class="color-dorado sombra-letra">{{trans('idiomaLang.francia')}}</h2>
                    <p>{{trans('idiomaLang.textoFrancia')}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="thumbnail text-center">
                <img class="img-fluid rounded" src="{{ asset('imagenes/mundo/italia.jpg') }}" />
                <div class="caption">
                    <h2 class="color-dorado sombra-letra">{{trans('idiomaLang.italia')}}</h2>
                    <p>{{trans('idiomaLang.textoItalia')}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="thumbnail text-center">
                <img class="img-fluid rounded" src="{{ asset('imagenes/mundo/mexico.jpg') }}" />
                <div class="caption">
                    <h2 class="color-dorado sombra-letra">{{trans('idiomaLang.mexico')}}</h2>
                    <p>{{trans('idiomaLang.textoMexico')}}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection