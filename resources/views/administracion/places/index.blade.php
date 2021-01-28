@extends('layouts.master')
@section('style')
@stop
@section('content')
<div class="relative pt-10 pb-10 pattern2 hidden-xs bg-background-color bg-background-color-dark1 cover-image pb-9" data-image-src="https://images.pexels.com/photos/6152479/pexels-photo-6152479.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
    <div class="header-text1 mb-0 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-12 col-md-12 d-block mx-auto">
                    <div class="text-center text-white ">
                        <h1 class="mb-0"><span class="font-weight-bold">{{$places->count()}} Lugar(es) Disponible(s)</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /header-text -->
</div>

<div class="bg-white border-bottom">
    <div class="container">
        <div class="page-header">
            <h4 class="page-title">Lugares</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{asset('/administracion')}}">Administración</a></li>
                <li class="breadcrumb-item active" aria-current="page">Lugares</li>
            </ol>
        </div>
    </div>
</div>


    <section class="sptb">
        <div class="container">
            <div class="section-title center-block text-center">
                <span class="heading-style text-secondary">Se tiene que viajar para aprender</span>
                <h2>Lugares disponibles ({{$places->count()}})</h2>
            </div>
            <div class="row">

                @foreach($places as $place)
                    <div class="col-lg-4 col-md-4">
                        <div class="card overflow-hidden">
                        <div class=" ieh-100">
                            <div class="item-card9-img w-100">
                                <div class="item-card9-imgs">
                                    <img src="{{asset($place->banner)}}" alt="img" class="cover-image">
                                </div>
                            </div>
                            <div class="card border-0 mb-0 br-0">
                                <div class="card-body">
                                    <div class="item-card9">
                                        <div class="d-sm-flex">
                                            <div class="">
                                                <div class="star-ratings start-ratings-main clearfix d-flex">
                                                    <div class="stars stars-example-fontawesome stars-example-fontawesome-sm mr-2">
                                                        <select class="example-fontawesome" name="rating" autocomplete="off">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4" selected>4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <a href="{{asset('administracion/tours/'.$place->id.'/edit')}}" class="text-dark"><h4 class="font-weight-semibold2 mt-0 mb-0 leading-normal">{{$place->name}}</h4></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="fs-14 mt-4 leading-normal">
                                        {{substr($place->small_description,0,100).'...'}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@stop
