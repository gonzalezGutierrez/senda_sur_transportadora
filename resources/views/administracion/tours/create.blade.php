@extends('layouts.master')

@section('content')

    <section class="bannerimg cover-image bg-background3" data-image-src="https://images.pexels.com/photos/1048283/pexels-photo-1048283.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
        <div class="header-text mb-0">
            <div class="container">
                <div class="row text-white">
                    <div class="col"><h1 class="text-uppercase">Agregar Tour</h1></div>
                    <div class="col col-auto">
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="{{asset('/administracion/')}}">Administración</a></li>
                            <li class="breadcrumb-item"><a href="{{asset('/administracion/tours')}}">Tours</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Agregar</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sptb">
        <div class="container">
            <form action="{{asset('administracion/tours')}}" method="POST">
                @csrf
                <div class="row ">
                    <div class="col-lg-12 col-md-12">
                        @include('administracion.tours.form')
                    </div>
                </div>
            </form>
        </div>
    </section>


@stop
