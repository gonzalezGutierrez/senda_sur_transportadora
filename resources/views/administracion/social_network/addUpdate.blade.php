@extends('layouts.master')
@section('content')

    <div class="relative pt-10 pb-10 pattern2 hidden-xs bg-background-color bg-background-color-dark1 cover-image pb-9" data-image-src="https://images.pexels.com/photos/6152479/pexels-photo-6152479.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
        <div class="header-text1 mb-0 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-12 col-md-12 d-block mx-auto">
                        <div class="text-center text-white ">
                            <h1 class="mb-0"><span class="font-weight-bold">Comparte las redes sociales con tus clientes</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /header-text -->
    </div>

    <div class="bg-white border-bottom">
        <div class="container">
            <div class="page-header">
                <h4 class="page-title">Redes sociales</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{asset('/administracion')}}">Administración</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Redes sociales</li>
                </ol>
            </div>
        </div>
    </div>

    <section class="sptb">
        <div class="container">
            <form action="{{asset('administracion/social_networks')}}" method="POST">
                @csrf
                <div class="row ">
                    <div class="col-lg-8 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title text-uppercase">Redes sociales</div>
                            </div>
                            <div class="card-body">
                                @include('administracion.social_network.form')
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
@stop
