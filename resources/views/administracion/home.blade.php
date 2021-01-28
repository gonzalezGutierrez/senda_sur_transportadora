@extends('layouts.master')

@section('content')


    <div class="relative hidden-xs pt-10 pb-10 pattern2 bg-background-color bg-background-color-dark1 cover-image pb-9" data-image-src="https://d3tf9yuhsp2bpn.cloudfront.net/sancristobal.jpg">
        <div class="header-text1 mb-0 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-12 col-md-12 d-block mx-auto">
                        <div class="text-center text-white ">
                            <h1 class="mb-0"><span class="font-weight-bold">Administración</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /header-text -->
    </div>

    <!--Section-->
    <section class="sptb">
        <div class="container">
            <div class="section-title center-block text-center">
                <span class="heading-style text-secondary">Viajar es evolucionar</span>
                <h1>Menu de administración</h1>
            </div>
            <div class="row">
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-6">
                    <div class="top-cities card text-center mb-xl-0 box-shadow2 p-0  border-dark-transparent overflow-hidden">
                        <a class="absolute-link2" href="{{asset('administracion/places')}}"></a>
                        <div class="bg-pink-transparent br-tl-5 br-tr-5"><img src="{{asset('assets/images/admin/place.svg')}}" alt="img" class="w-70 p-4"></div>
                        <div class="servic-data mt-0 p-4">
                            <h5 class="font-weight-semibold2 mb-0 text-uppercase">Lugares</h5>

                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-6">
                    <div class="top-cities card text-center mb-xl-0 box-shadow2 p-0 border-dark-transparent overflow-hidden">
                        <a class="absolute-link2" href="car-list.html"></a>
                        <div class="bg-purple-transparent br-tl-5 br-tr-5"><img src="{{asset('assets/images/admin/schedule.svg')}}" alt="img" class="w-70 p-4"></div>
                        <div class="servic-data mt-0 p-4">
                            <h5 class="font-weight-semibold2 mb-0 text-uppercase">Calendario</h5>

                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-6">
                    <div class="top-cities card text-center mb-xl-0 box-shadow2 p-0 border-dark-transparent overflow-hidden">
                        <a class="absolute-link2" href="car-list.html"></a>
                        <div class="bg-warning-transparent  br-tl-5 br-tr-5"><img src="{{asset('assets/images/admin/boss.svg')}}" alt="img" class="w-70 p-4"></div>
                        <div class="servic-data mt-0 p-4">
                            <h5 class="font-weight-semibold2 mb-0 text-uppercase">Clientes</h5>

                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-6">
                    <div class="top-cities card text-center mb-xl-0 box-shadow2 p-0 border-dark-transparent overflow-hidden">
                        <a class="absolute-link2" href="car-list.html"></a>
                        <div class="bg-pink-transparent br-tl-5 br-tr-5"><img src="{{asset('assets/images/admin/galeria.png')}}" alt="img" class="w-70 p-4"></div>
                        <div class="servic-data mt-0 p-4">
                            <h5 class="font-weight-semibold2 mb-0 text-uppercase">Galerias</h5>

                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-6">
                    <div class="top-cities card text-center mb-xl-0 box-shadow2 p-0 border-dark-transparent overflow-hidden">
                        <a class="absolute-link2" href="car-list.html"></a>
                        <div class="bg-success-transparent br-tl-5 br-tr-5"><img src="{{asset('assets/images/admin/invoice.svg')}}" alt="img" class="w-70 p-4"></div>
                        <div class="servic-data mt-0 p-4">
                            <h5 class="font-weight-semibold2 mb-0 text-uppercase">Facturas</h5>

                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-6">
                    <div class="top-cities card text-center mb-xl-0 box-shadow2 p-0 border-dark-transparent overflow-hidden">
                        <a class="absolute-link2" href="car-list.html"></a>
                        <div class="bg-info-transparent br-tl-5 br-tr-5"><img src="{{asset('assets/images/admin/problem.svg')}}" alt="img" class="w-70 p-4"></div>
                        <div class="servic-data mt-0 p-4">
                            <h5 class="font-weight-semibold2 mb-0 text-uppercase">Preguntas</h5>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-6">
                    <div class="top-cities card text-center mb-xl-0 box-shadow2 p-0 border-dark-transparent overflow-hidden">
                        <a class="absolute-link2" href="car-list.html"></a>
                        <div class="bg-info-transparent br-tl-5 br-tr-5"><img src="{{asset('assets/images/admin/money-bag.svg')}}" alt="img" class="w-70 p-4"></div>
                        <div class="servic-data mt-0 p-4">
                            <h5 class="font-weight-semibold2 mb-0 text-uppercase">Cotizaciones</h5>

                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-6">
                    <div class="top-cities card text-center mb-xl-0 box-shadow2 p-0 border-dark-transparent overflow-hidden">
                        <a class="absolute-link2" href="car-list.html"></a>
                        <div class="bg-info-transparent br-tl-5 br-tr-5"><img src="{{asset('assets/images/admin/prima.svg')}}" alt="img" class="w-70 p-4"></div>
                        <div class="servic-data mt-0 p-4">
                            <h5 class="font-weight-semibold2 mb-0 text-uppercase">Raitings</h5>

                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-6">
                    <div class="top-cities card text-center mb-xl-0 box-shadow2 p-0 border-dark-transparent overflow-hidden">
                        <a class="absolute-link2" href="{{asset('/administracion/tours/')}}"></a>
                        <div class="bg-info-transparent br-tl-5 br-tr-5"><img src="{{asset('assets/images/admin/family.svg')}}" alt="img" class="w-70 p-4"></div>
                        <div class="servic-data mt-0 p-4">
                            <h5 class="font-weight-semibold2 mb-0 text-uppercase">Tours</h5>

                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-6">
                    <div class="top-cities card text-center mb-xl-0 box-shadow2 p-0 border-dark-transparent overflow-hidden">
                        <a class="absolute-link2" href="car-list.html"></a>
                        <div class="bg-info-transparent br-tl-5 br-tr-5"><img src="{{asset('assets/images/admin/employee.svg')}}" alt="img" class="w-70 p-4"></div>
                        <div class="servic-data mt-0 p-4">
                            <h5 class="font-weight-semibold2 mb-0 text-uppercase">Empleados</h5>

                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-6">
                    <div class="top-cities card text-center mb-xl-0 box-shadow2 p-0 border-dark-transparent overflow-hidden">
                        <a class="absolute-link2" href="{{asset('administracion/social_networks')}}"></a>
                        <div class="bg-info-transparent br-tl-5 br-tr-5"><img src="{{asset('assets/images/admin/facebook.svg')}}" alt="img" class="w-70 p-4"></div>
                        <div class="servic-data mt-0 p-4">
                            <h5 class="font-weight-semibold2 mb-0 text-uppercase">Redes</h5>

                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-6">
                    <div class="top-cities card text-center mb-xl-0 box-shadow2 p-0 border-dark-transparent overflow-hidden">
                        <a class="absolute-link2" href="{{asset('/administracion/categories')}}"></a>
                        <div class="bg-info-transparent br-tl-5 br-tr-5"><img src="{{asset('assets/images/admin/task.svg')}}" alt="img" class="w-70 p-4"></div>
                        <div class="servic-data mt-0 p-4">
                            <h5 class="font-weight-semibold2 mb-0 text-uppercase">Categorias</h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section-->


@stop
