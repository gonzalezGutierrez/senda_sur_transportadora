@extends('layouts.master')

@section('content')
<!--SLIDER WELCOME PAGE-->
<section>
    <div id="Slider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators slide-carousel-indicators">
            <li data-target="#Slider" data-slide-to="0" class="active">
                <div class="d-lg-flex text-white">
                    <img src="../../assets/images/categories/place.png" alt="img" class="w-6 h-6 mb-0 mt-1">
                    <div class="ml-3">
                        <h4 class="text-white mb-1 font-weight-sembold2">Lugares a visitar</h4>
                        <h6 class="text-white-80 mb-0">{{$placesCount}} Lugares </h6>
                    </div>
                </div>
            </li>
            <li data-target="#Slider" data-slide-to="1" class="">
                <div class="d-lg-flex text-white">
                    <img src="../../assets/images/categories/hotel.png" alt="img" class="w-6 h-6 mb-0 mt-1">
                    <div class="ml-3">
                        <h4 class="text-white mb-1 font-weight-sembold2">Paquetes Disponibles</h4>
                        <h6 class="text-white-80 mb-0">{{$toursCount}} Disponible(s)</h6>
                    </div>
                </div>
            </li>
            <li data-target="#Slider" data-slide-to="2" class="">
                <div class="d-lg-flex text-white">
                    <img src="../../assets/images/categories/plane.png" alt="img" class="w-6 h-6 mb-0 mt-1">
                    <div class="ml-3">
                        <h4 class="text-white mb-1 font-weight-sembold2">Senda Sur</h4>
                        <h6 class="text-white-80 mb-0">Viajar es evolucionar</h6>
                    </div>
                </div>
            </li>
            <li data-target="#Slider" data-slide-to="3" class="">
                <div class="d-lg-flex text-white">
                    <img src="../../assets/images/categories/vehicle.png" alt="img" class="w-6 h-6 mb-0 mt-1">
                    <div class="ml-3">
                        <h4 class="text-white mb-1 font-weight-sembold2">Contacto</h4>
                        <h6 class="text-white-80 mb-0">Es un gusto saber de ti</h6>
                    </div>
                </div>
            </li>
            <li data-target="#Slider" data-slide-to="4" class="">
                <div class="d-lg-flex text-white">
                    <img src="../../assets/images/categories/boat.png" alt="img" class="w-6 h-6 mb-0 mt-1">
                    <div class="ml-3">
                        <h4 class="text-white mb-1 font-weight-sembold2">Comunidad</h4>
                        <h6 class="text-white-80 mb-0">Ya somos 9,023 en la plataforma</h6>
                    </div>
                </div>
            </li>
        </ol>
        <a class="carousel-control-prev left-0" href="#Slider" role="button" data-slide="prev">
            <i class="carousel-control-prev-icon fa fa-angle-left"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next right-0" href="#Slider" role="button" data-slide="next">
            <i class="carousel-control-next-icon fa fa-angle-right"></i>
            <span class="sr-only">Next</span>
        </a>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" style="height:800px !important;" alt="" src="{{asset($bannerPlace)}}" data-holder-rendered="true">
                <div class="header-text slide-header-text mb-0">
                    <div class="container">
                        <div class="text-center text-white mb-6">
                            <h1 class="mb-3 font-weight-bold">Search Your Favorite Tour</h1>
                            <p class="fs-18">Find the world's largest collection of tours & travel Packages.</p>
                        </div>
                        <div class="row">
                            <div class="col-xl-11 col-lg-12 col-md-12 d-block mx-auto">
                                <div class="search-background p-0">
                                    <div class="form row no-gutters">
                                        <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                            <input type="text" class="form-control input-lg location-input border-right br-tr-0 br-br-0" placeholder="Current Location">
                                            <span><img src="../../assets/images/svgs/gps.svg" class="location-gps" alt="img"></span>
                                        </div>
                                        <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0 select2-lg border-right">
                                            <select class="form-control select2-show-search border-bottom-0 w-100">
                                                <option value="UM">Destination</option>
                                                <option>Australia</option>
                                                    <option>Chicago</option>
                                                    <option>Germany</option>
                                                    <option>India</option>
                                                    <option>Japan</option>
                                                    <option>London</option>
                                                    <option>Los angels</option>
                                                    <option>Spain</option>
                                                    <option>Sidney</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-xl-8 col-lg-8 col-md-12 mb-0 location">
                                            <div class="row no-gutters">
                                                <div class="form-group col-xl-4 col-lg-4 col-md-12 mb-0">
                                                    <input class="form-control input-lg daterange-btn br-0 border-right border-left-0" placeholder="Travel Date" type="text">
                                                </div>
                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0 select2-lg border-right bg-light-30">
                                                    <div class="input-group d-flex align-items-center">
                                                        <span class="label mr-2 text-default mt-2 fs-14">Adults</span>
                                                        <span class="input-group-btn minus"><i class="fe fe-minus"></i></span>
                                                        <input type="text" name="quantity" class="form-control input-lg text-center qty px-0" value="1">
                                                        <span class="input-group-btn add mr-2"><i class="fe fe-plus"></i></span>
                                                    </div>
                                                </div>
                                                <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0 select2-lg border-right bg-light-30">
                                                    <div class="input-group d-flex align-items-center">
                                                        <span class="label mr-2 text-default mt-2 fs-14">Kids</span>
                                                        <span class="input-group-btn minus"><i class="fe fe-minus"></i></span>
                                                        <input type="text" name="quantity" class="form-control input-lg text-center qty px-0" value="1">
                                                        <span class="input-group-btn add mr-2"><i class="fe fe-plus"></i></span>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2 col-lg-2 col-md-12 mb-0">
                                                    <a class="btn btn-block btn-secondary btn-lg fs-14 br-tl-0 br-bl-0 shadow-none" href="#">Search</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" style="height:800px !important;" alt="" src="{{asset($bannerTour)}}" data-holder-rendered="true">

                <div class="header-text slide-header-text mb-0">
                    <div class="container">
                        <div class="text-center text-white mb-6">
                            <h1 class="mb-3 font-weight-bold">Book Hotel Near By Your Location</h1>
                            <p class="fs-18">Find the world's largest collection of tours & travel Packages.</p>
                        </div>
                        <div class="row">
                            <div class="col-xl-11 col-lg-12 col-md-12 d-block mx-auto">
                                <div class="search-background">
                                    <div class="form row no-gutters">
                                        <div class="form-group  col-xl-3 col-lg-3 col-md-12 mb-0">
                                            <input type="text" class="form-control location-input border-right br-tr-0 br-br-0 input-lg" placeholder="Search for Hotels">
                                            <span><img src="../../assets/images/svgs/gps.svg" class="location-gps" alt="img"></span>
                                        </div>
                                        <div class="form-group  col-xl-2 col-lg-2 col-md-12 mb-0 select2-lg border-right bg-light-30">
                                            <div class="input-group d-flex align-items-center">
                                                <span class="label mr-2 text-default mt-2 fs-14">Mens</span>
                                                <span class="input-group-btn minus"><i class="fe fe-minus"></i></span>
                                                <input type="text" name="quantity" class="form-control input-lg text-center qty px-0" value="1">
                                                <span class="input-group-btn add mr-2"><i class="fe fe-plus"></i></span>
                                            </div>
                                        </div>
                                        <div class="form-group  col-xl-2 col-lg-2 col-md-12 mb-0 select2-lg bg-light-30">
                                            <div class="input-group d-flex align-items-center">
                                                <span class="label mr-2 text-default mt-2 fs-14">Womens</span>
                                                <span class="input-group-btn minus"><i class="fe fe-minus"></i></span>
                                                <input type="text" name="quantity" class="form-control input-lg text-center qty px-0" value="1">
                                                <span class="input-group-btn add mr-2"><i class="fe fe-plus"></i></span>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-5 col-lg-5  col-md-12 mb-0 location">
                                            <div class="row no-gutters">
                                                <div class="form-group  col-xl-6 col-lg-6 col-md-12 mb-0 border-right border-left">
                                                    <input class="form-control daterange-btn br-0 input-lg" placeholder="Checkin" type="text">
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-12 mb-0">
                                                    <a class="btn btn-block btn-secondary fs-14 br-tl-0 br-bl-0 shadow-none btn-lg" href="#">Search</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" alt="" src="../../assets/images/banners/banner18.jpg" data-holder-rendered="true">
                <div class="header-text slide-header-text mb-0">
                    <div class="container">
                        <div class="text-center text-white mb-6">
                            <h1 class="mb-3 font-weight-bold">Book Flights For Your Destination</h1>
                            <p class="fs-18">Find the world's largest collection of tours & travel Packages.</p>
                        </div>
                        <div class="row">
                            <div class="col-xl-11 col-lg-12 col-md-12 d-block mx-auto">
                                <div class="search-background">
                                    <div class="form row no-gutters">
                                        <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                            <input type="text" class="form-control input-lg location-input border-right br-tr-0 br-br-0" placeholder="Current Location">
                                            <span><img src="../../assets/images/svgs/gps.svg" class="location-gps" alt="img"></span>
                                        </div>
                                        <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0 select2-lg border-right">
                                            <select class="form-control select2-show-search border-bottom-0 w-100">
                                                <option value="UM">To</option>
                                                <option>Australia</option>
                                                <option>Chicago</option>
                                                <option>Germany</option>
                                                <option>India</option>
                                                <option>Japan</option>
                                                <option>London</option>
                                                <option>Los angels</option>
                                                <option>Spain</option>
                                                <option>Sidney</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0 select2-lg bg-light-30">
                                            <div class="input-group d-flex align-items-center">
                                                <span class="label mr-2 text-default mt-2 fs-14">Adults</span>
                                                <span class="input-group-btn minus"><i class="fe fe-minus"></i></span>
                                                <input type="text" name="quantity" class="form-control input-lg text-center qty px-0" value="1">
                                                <span class="input-group-btn add mr-2"><i class="fe fe-plus"></i></span>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6  col-md-12 mb-0 location">
                                            <div class="row no-gutters">
                                                <div class="form-group  col-xl-4 col-lg-4 col-md-12 mb-0 border-left select2-lg bg-light-30">
                                                    <div class="input-group d-flex align-items-center">
                                                        <span class="label mr-2 text-default mt-2 fs-14">Kids</span>
                                                        <span class="input-group-btn minus"><i class="fe fe-minus"></i></span>
                                                        <input type="text" name="quantity" class="form-control input-lg text-center qty px-0" value="1">
                                                        <span class="input-group-btn add mr-2"><i class="fe fe-plus"></i></span>
                                                    </div>
                                                </div>
                                                <div class="form-group  col-xl-4 col-lg-4 col-md-12 mb-0">
                                                    <input class="form-control daterange-btn border-left br-0 input-lg" placeholder="Journey Date" type="text">
                                                </div>
                                                <div class="col-xl-4 col-lg-4 col-md-12 mb-0">
                                                    <a class="btn btn-block btn-secondary fs-14 br-tl-0 br-bl-0 shadow-none btn-lg" href="#">Search</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" alt="" src="../../assets/images/banners/banner17.jpg" data-holder-rendered="true">
                <div class="header-text slide-header-text mb-0">
                    <div class="container">
                        <div class="text-center text-white mb-6">
                            <h1 class="mb-3 font-weight-bold">Book Car For Your Road Side Trip</h1>
                            <p class="fs-18">Find the world's largest collection of tours & travel Packages.</p>
                        </div>
                        <div class="row">
                            <div class="col-xl-11 col-lg-12 col-md-12 d-block mx-auto">
                                <div class="search-background">
                                    <div class="form row no-gutters">
                                        <div class="form-group  col-xl-3 col-lg-3 col-md-12 mb-0">
                                            <input class="form-control daterange-btn border-right br-tr-0 br-br-0 input-lg" placeholder="Pikup Date" type="text">
                                        </div>
                                        <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0">
                                            <input type="text" class="form-control br-0 border-right input-lg timepicker"  placeholder="Hours">
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6  col-md-12 mb-0 location">
                                            <div class="row no-gutters">
                                                <div class="form-group  col-xl-4 col-lg-4 col-md-12 mb-0">
                                                    <input type="text" class="form-control location-input border-right br-0 input-lg" placeholder="Pick Location">
                                                <span><img src="../../assets/images/svgs/gps.svg" class="location-gps" alt="img"></span>
                                                </div>
                                                <div class="form-group  col-xl-4 col-lg-4 col-md-12 mb-0">
                                                    <input type="text" class="form-control br-0 input-lg"  placeholder="Drop Location">
                                                </div>
                                                <div class="col-xl-4 col-lg-4 col-md-12 mb-0">
                                                    <a class="btn btn-block btn-secondary fs-14 br-tl-0 br-bl-0 shadow-none btn-lg" href="#">Search</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" alt="" src="../../assets/images/banners/banner22.jpg" data-holder-rendered="true">
                <div class="header-text slide-header-text mb-0">
                    <div class="container">
                        <div class="text-center text-white mb-6">
                            <h1 class="mb-3 font-weight-bold">Book Ship For Your Sea Tour</h1>
                            <p class="fs-18">Find the world's largest collection of tours & travel Packages.</p>
                        </div>
                        <div class="row">
                            <div class="col-xl-11 col-lg-12 col-md-12 d-block mx-auto">
                                <div class="search-background">
                                    <div class="form row no-gutters">
                                        <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0">
                                            <input type="text" class="form-control input-lg location-input border-right br-tr-0 br-br-0" placeholder="Current Location">
                                            <span><img src="../../assets/images/svgs/gps.svg" class="location-gps" alt="img"></span>
                                        </div>
                                        <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0 select2-lg border-right">
                                            <select class="form-control select2-show-search border-bottom-0 w-100">
                                                <option value="UM">To</option>
                                                <option>Australia</option>
                                                <option>Chicago</option>
                                                <option>Germany</option>
                                                <option>India</option>
                                                <option>Japan</option>
                                                <option>London</option>
                                                <option>Los angels</option>
                                                <option>Spain</option>
                                                <option>Sidney</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-xl-2 col-lg-2 col-md-12 mb-0 select2-lg bg-light-30">
                                            <div class="input-group d-flex align-items-center">
                                                <span class="label mr-2 text-default mt-2 fs-14">Adults</span>
                                                <span class="input-group-btn minus"><i class="fe fe-minus"></i></span>
                                                <input type="text" name="quantity" class="form-control input-lg text-center qty px-0" value="1">
                                                <span class="input-group-btn add mr-2"><i class="fe fe-plus"></i></span>
                                            </div>
                                        </div>
                                        <div class="form-group col-xl-6 col-lg-6  col-md-12 mb-0 location">
                                            <div class="row no-gutters">
                                                <div class="form-group  col-xl-4 col-lg-4 col-md-12 mb-0 border-left select2-lg bg-light-30">
                                                    <div class="input-group d-flex align-items-center">
                                                        <span class="label mr-2 text-default mt-2 fs-14">Kids</span>
                                                        <span class="input-group-btn minus"><i class="fe fe-minus"></i></span>
                                                        <input type="text" name="quantity" class="form-control input-lg text-center qty px-0" value="1">
                                                        <span class="input-group-btn add mr-2"><i class="fe fe-plus"></i></span>
                                                    </div>
                                                </div>
                                                <div class="form-group  col-xl-4 col-lg-4 col-md-12 mb-0">
                                                    <input class="form-control daterange-btn border-left br-0 input-lg" placeholder="Journey Date" type="text">
                                                </div>
                                                <div class="col-xl-4 col-lg-4 col-md-12 mb-0">
                                                    <a class="btn btn-block btn-secondary fs-14 br-tl-0 br-bl-0 shadow-none btn-lg" href="#">Search</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- POPULATE TOURS-->

<section class="about-1 cover-image sptb bg-white">
    <div class="content-text mb-0">
        <div class="container">
            <div class="section-title center-block text-center">
                <span class="heading-style text-secondary">La aventura vale la pena</span>
                <h2>Paquetes populares</h2>
                <p>Quien vive ve mucho. Quien viaja ve más</p>
            </div>
            <div class="owl-carousel owl-carousel-icons">
                @foreach($populateTours as $tour)
                    <div class="item">
                    <div class="card overflow-hidden">
                        <div class="item-card7-img">
                            <div class="item-card7-imgs">
                                <a href="{{asset('paquete/'.$tour->slug)}}" class="absolute-link2"></a>
                                <div id="image-slider1" class="carousel" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{asset($tour->banner)}}" alt="img" class="cover-image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="item-card7-desc">
                                <div class="item-card7-text">
                                    <a href="{{asset('paquete/'.$tour->slug)}}" class="text-dark"><h4 class="font-weight-semibold2">{{$tour->name}}</h4></a>
                                </div>
                                <ul class="d-flex item-card2-desc">
                                    <li class=""><a href="#" class="icons"><i class="icon icon-location-pin text-muted mr-1  d-inline-block"></i>{{$tour->places->count()}} Lugares por conocer</a></li>
                                    <li class=""><a href="#" class="icons"><i class="icon icon-user text-muted mr-1  d-inline-block"></i>{{$tour->min_peoples}} Personas Min.</a></li>
                                </ul>
                                <p class="mb-2 mt-1">{{substr($tour->small_description,0,85).'...'}}</p>
                                <div class="star-ratings start-ratings-main clearfix d-inline-flex">
                                    <div class="stars stars-example-fontawesome stars-example-fontawesome-sm mr-2">
                                        <select class="example-fontawesome" name="rating" autocomplete="off">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4" selected>4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div> (15 Reviews)
                                </div>
                            </div>
                        </div>
                        <div class="card-body item-card2-desc py-3">
                            <a href="mr-4" class="icons font-weight-semibold2"><i class="fa fa-inr text-muted mr-1"></i>30,000-50,000</a>
                            <a class="mr-0 float-right font-weight-semibold2"><i class="fa fa-clock-o  text-muted mr-1"></i> {{$tour->number_days_txt}}</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!--POR QUE VIAJAR CON SENDA SUR-->
<section class="cover-image bg-background-color" data-image-src="https://cdn.pixabay.com/photo/2018/08/16/08/39/hallstatt-3609863_1280.jpg">
    <div class="container">
        <div class="row content-text">
            <div class="col-xl-7 col-lg-7">
                <div class="py-lg-8 pr-8">
                    <div class="section-title center-block text-left mt-6">
                        <h1 class="position-relative text-white leading-tight fs-40"> Ventajas de viajar con la Red de Ecoturismo Comunitario SendaSur.</h1>
                        <p class="text-left text-white">
                            Podrás visitar el Estado de Chiapas de una manera más auténtica y mágica,
                            sin prisas, sin presiones, sin itinerarios apretados. <br>
                            Al contratar tours y paquetes privados, nuestros clientes contaran con total libertad para disfrutar
                            la mejor experiencia de su vida.
                        </p>
                        <a class="btn btn-secondary mt-7 px-6" href="#">Conocer mas.</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 text-lg-right col-lg-5">
                <div class="py-lg-8 pb-8">
                    <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="card widgets-cards">
                            <a href="#" class="card-body text-center">
                                <div class="widgets-cards-icons">
                                    <div class="wrp icon-circle bg-success mx-auto mb-3">
                                        <i class="fa fa-gift icons"></i>
                                    </div>
                                </div>
                                <div class="widgets-cards-data mt-4">
                                    <div class="wrp text-wrapper">
                                        <p class="fs-18 font-weight-semibold2 mb-0">Las mejores experencias.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="card widgets-cards mb-lg-0">
                            <a href="#" class="card-body text-center">
                                <div class="widgets-cards-icons">
                                    <div class="wrp icon-circle bg-info mx-auto mb-3">
                                        <i class="fa fa-map-marker icons"></i>
                                    </div>
                                </div>
                                <div class="widgets-cards-data mt-4">
                                    <div class="wrp text-wrapper">
                                        <p class="fs-18 font-weight-semibold2 mb-0">Conoce lugares hermosos</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <a href="#" class="card widgets-cards mt-md-6">
                            <div class="card-body text-center">
                                <div class="widgets-cards-icons">
                                    <div class="wrp icon-circle bg-warning  mx-auto mb-3">
                                        <i class="fa fa-newspaper-o icons"></i>
                                    </div>
                                </div>
                                <div class="widgets-cards-data mt-4">
                                    <div class="wrp text-wrapper">
                                        <p class="fs-18 font-weight-semibold2 mb-0">Conoce las experiencias de otras personas.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="card widgets-cards mb-0">
                            <div class="card-body text-center">
                                <div class="widgets-cards-icons">
                                    <div class="wrp icon-circle bg-danger mx-auto mb-3">
                                        <i class="fa fa-percent icons"></i>
                                    </div>
                                </div>
                                <div class="widgets-cards-data mt-4">
                                    <div class="wrp text-wrapper">
                                        <p class="fs-18 font-weight-semibold2 mb-0">10 % de descuento en tu siguiente viaje</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--POPULATE PLACES-->

<section class="sptb bg-patterns">
    <div class="container">
        <div class="section-title center-block text-center">
            <span class="heading-style text-secondary">Viajar es vivir</span>
            <h2>Lugares populares</h2>
            <p>Los lugares mas hermosos de chiapas</p>
        </div>
        <div id="myCarousel2" class="owl-carousel owl-carousel-icons">
            <!-- Wrapper for carousel items -->

            @foreach($populatePlaces as $place)
                <div class="item">
                <div class="card mb-0 overflow-hidden">
                    <a href="{{asset('/'.$place->slug)}}" class="absolute-link2"></a>
                    <div class="item-card7-imgs">
                        <div id="image-slider1" class="carousel" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{asset($place->banner)}}" alt="img" class="cover-image">
                                </div>
                                @foreach($place->pictures as $picture)
                                    <div class="carousel-item">
                                        <img src="{{asset($picture->url_image)}}" alt="img" class="cover-image">
                                    </div>
                                @endforeach
                            </div>
                            <div class="item-card2-img1">
                                <span class="badge bg-dark-transparent6 text-white fs-14 font-weight-semibold2"><i class="fe fe-image "></i> {{$place->pictures->count()}}</span>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="item-card7-desc">
                            <div class="item-card7-text d-flex">
                                <a href="{{asset('/'.$place->slug)}}" class="text-dark">
                                    <h4 class="font-weight-semibold2 mb-0">{{$place->name}}</h4>
                                </a>
                                <div class="d-flex ml-auto">
                                    <div class="star-ratings start-ratings-main clearfix d-inline-flex">
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
                                </div>
                            </div>
                        </div>
                        <p class="fs-14 text-justify mb-0 mt-3">{{substr($place->small_description,0,85).'...'}}</p>
                    </div>
                    <div class="card-footer">
                        <div class="footerimg d-flex mt-0 mb-0">
                            <div class="d-flex footerimg-l mb-0">
                                <img src="{{asset('assets/images/admin/family.svg')}}" alt="image" class="avatar brround  mr-2">
                                <h5 class="time-title text-muted p-0 leading-normal mt-2 mb-0">El mejor lugar de chiapas...<i class="icon icon-check text-success fs-12 ml-1"></i></h5>
                            </div>
                            <div class="mt-2 footerimg-r ml-auto">
                                <a href="#" class="text-pink" ><i class="fa fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>


<!--DESCOUNT BANNER-->
<section class="cover-image bg-background-color bg-background-color relaive" data-image-src="https://www.spruko.com/demo/gowell/assets/images/banners/banner.png">
    <div class="container content-text">
        <div class="row">
            <div class="col-xl-12 col-lg-12 text-left py-9 pl-lg-6">
                <h2 class="text-white-80 fs-38 font-weight-semibold2 mb-1 leading-tight">Obten <span class="text-white">10% de descuento</span> en tu primer viaje con SENDA SUR.</h2>
                <p class="text-white fs-16 mt-4 leading-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a class="btn btn-secondary px-6 mt-5" href="#">Saber mas...</a>
            </div>
        </div>
    </div>
</section>
@stop
