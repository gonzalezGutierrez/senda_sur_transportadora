@extends('layouts.master')

@section('style')
    <!-- Fancy Uploads css -->
@stop

@section('content')
    <section class="bannerimg cover-image bg-background3" data-image-src="https://images.pexels.com/photos/1133506/pexels-photo-1133506.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
        <div class="header-text mb-0">
            <div class="container">
                <div class="row text-white">
                    <div class="col"><h1 class="text-uppercase">Agregar Lugar</h1></div>
                    <div class="col col-auto">
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="{{asset('/administracion/')}}">Administración</a></li>
                            <li class="breadcrumb-item"><a href="{{asset('/administracion/places')}}">Lugares</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Agregar</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Add posts-section-->
    <section class="sptb">
        <div class="container">
            <form action="{{asset('administracion/places')}}" method="POST">
                @csrf
                <div class="row ">
                    <div class="col-lg-8 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title text-uppercase">Agregar lugar</div>
                            </div>
                            <div class="card-body">
                                @include('administracion.places.form')
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!--/Add posts-section-->


@stop

@section('js')

@stop
