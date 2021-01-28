@extends('layouts.master')

@section('style')
    
@stop

@section('content')
    <section class="bannerimg cover-image bg-background3" data-image-src="https://images.pexels.com/photos/709552/pexels-photo-709552.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
        <div class="header-text mb-0">
            <div class="container">
                <div class="row text-white">
                    <div class="col"><h1 class="text-uppercase">Categorias</h1></div>
                    <div class="col col-auto">
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="{{asset('/administracion/')}}">Administración</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Categorias</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-center">
                <span class="heading-style text-secondary">La aventura vale la pena</span>
                <h2>Categorias disponibles ({{$categories->count()}})</h2>
            </div>
            <div class="row">
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-6">
                    <div class="top-cities card text-center mb-xl-0 box-shadow2 p-0  border-dark-transparent overflow-hidden">
                        <a class="absolute-link2" href="{{asset('/administracion/categories/create')}}"></a>
                        <div class="bg-pink-transparent br-tl-5 br-tr-5">
                            <img src="{{asset('assets/images/admin/plus.svg')}}" alt="img" class="w-60" style="padding: 3px !important;"></div>
                        <div class="servic-data mt-0 p-4">
                            <h5 class="font-weight-semibold2 mb-0 text-uppercase">Agregar nuevo</h5>
                        </div>
                    </div>
                </div>
                @foreach($categories as $category)
                    <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-6">
                        <div class="top-cities card text-center mb-xl-0 box-shadow2 p-0  border-dark-transparent overflow-hidden">
                            <a class="absolute-link2" href="{{asset('/administracion/categories/'.$category->id.'/edit')}}"></a>
                            <div class="bg-pink-transparent br-tl-5 br-tr-5">
                                <img src="{{asset($category->banner ? $category->banner : 'assets/images/admin/tasks.svg')}}" alt="img" class="w-100"></div>
                            <div class="servic-data mt-0 p-4">
                                <h5 class="font-weight-semibold2 mb-0 text-uppercase">{{$category->name}}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{--<div>
                <div class="items-gallery">
                    <div class="items-blog-tab text-center">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab-1">
                                <div class="row">
                                    @foreach($categories as $category)
                                    <div class="col-md-6 col-sm-12 col-lg-4">
                                        <div class="item-card item-card2 overflow-hidden card">
                                            <div class="item-card-desc ieh-100">
                                                <a href="{{asset('administracion/categories/'.$category->id.'/edit')}}"></a>
                                                <div class="text-center overflow-hidden mb-lg-0">
                                                    <div class="card-img">
                                                        <img src="{{asset($category->banner ? $category->banner : 'assets/images/banners/banner.png')}}" alt="img" class="cover-image">
                                                    </div>
                                                    <div class="item-card-text text-left">
                                                        <h4 class="mb-0 font-weight-bold">{{$category->name}}</h4>
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
                </div>
            </div>--}}
        </div>
    </section>
@stop
