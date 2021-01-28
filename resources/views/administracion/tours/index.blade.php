@extends('layouts.master')

@section('style')
    <style media="screen">

    </style>
@stop

@section('content')

<div class="cover-image sptb  py-9 bg-background" data-image-src="https://images.pexels.com/photos/460621/pexels-photo-460621.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
    <div class="header-text1 mb-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 col-lg-12 col-md-12 d-block mx-auto">
                    <div class="text-center text-white ">
                        <h2 class="fs-40"><span class="font-weight-bold">{{$tours->count()}}</span> Tour(s) Disponible(s)</h2>
                    </div>

                </div>
            </div>
        </div>
    </div><!-- /header-text -->
</div>
<!--/Sliders Section-->

<!--Breadcrumb-->
<div class="bg-white border-bottom">
    <div class="container">
        <div class="page-header">
            <h4 class="page-title">Tours</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{asset('administracion')}}">Administración</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tours</li>
            </ol>
        </div>
    </div>
</div>

<section class="sptb">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <!--Add lists-->
                <div class=" mb-lg-0">
                    <div class="">
                        <div class="item2-gl ">
                            <div class="">
                                <div class="bg-white p-5 item2-gl-nav justify-content-between align-items-center d-flex">

                                    <h3>Listado de tours</h3>

                                    <ul class="nav item2-gl-menu ml-auto mt-1">
                                        <li class=""><a href="#tab-11" class="active show" data-toggle="tab" title="List style"><i class="fe fe-list"></i></a></li>
                                        <li><a href="#tab-12" data-toggle="tab" class="" title="Grid"><i class="fe fe-grid"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab-11">
                                    <div class="row">
                                        @foreach($tours as $tour)
                                            <div class="col-lg-4 col-md-4">
                                                <div class="card overflow-hidden">
                                                <div class=" ieh-100">
                                                    <div class="item-card9-img w-100">
                                                        <div class="item-card9-imgs">
                                                            <img src="{{asset($tour->banner)}}" alt="img" class="cover-image">
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
                                                                            </div> <a class="fs-13 leading-tight mt-1" href="#">{{$tour->min_peoples}} Personas minimas</a>
                                                                        </div>
                                                                        <a href="{{asset('administracion/tours/'.$tour->id.'/edit')}}" class="text-dark"><h4 class="font-weight-semibold2 mt-0 mb-0 leading-normal">{{$tour->name}}</h4></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="item-card2-desc">
                                                                <a href="#" class="mt-1 mb-0 mr-3 pr-3 border-right text-dark"><i class="fe fe-map-pin mr-1 d-inline-block"></i>{{$tour->number_days_txt}}</a>
                                                                <a href="#" class="mt-1 mb-0 mr-3 pr-3 border-right text-dark"><i class="fe fe-clock mr-1 d-inline-block"></i> {{$tour->start_date}}</a>
                                                            </div>
                                                            <p class="fs-14 mt-4 leading-normal">
                                                                {{$tour->small_description}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            {{$tours->links()}}
                        </div>
                    </div>
                </div>
                <!--/Add lists-->
            </div>
        </div>
    </div>
</section>

@stop
