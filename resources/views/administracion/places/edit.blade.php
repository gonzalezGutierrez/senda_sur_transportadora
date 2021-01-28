@extends('layouts.master')

@section('style')
    <link href="{{asset('assets/plugins/dropzone/dropzone.min.css')}}" rel="stylesheet" type="text/css"/>
@stop

@section('content')

    <div class="relative pt-10 pb-10 pattern2 hidden-xs bg-background-color bg-background-color-dark1 cover-image pb-9" data-image-src="{{asset($place->banner != null ?  $place->banner : 'https://images.pexels.com/photos/6152479/pexels-photo-6152479.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')}}">
        <div class="header-text1 mb-0 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-12 col-md-12 d-block mx-auto">
                        <div class="text-center text-white ">
                            <h1 class="mb-0"><span class="font-weight-bold">{{$place->name}}</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /header-text -->
    </div>

    <div class="bg-white border-bottom">
        <div class="container">
            <div class="page-header">
                <h4 class="page-title">{{$place->name}}</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{asset('/administracion')}}">Administración</a></li>
                    <li class="breadcrumb-item"><a href="{{asset('/administracion/places')}}">Lugares</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Actualizar</li>
                </ol>
            </div>
        </div>
    </div>

    <!--Add posts-section-->
    <section class="sptb">
        <div class="container">
            <div class="row ">
                <div class="col-lg-7 col-md-12">
                    <form action="{{asset('administracion/places/'.$place->id)}}" method="POST">
                        @csrf
                        @method('put')
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title text-uppercase">Actualizar lugar</div>
                            </div>
                            <div class="card-body">
                                <div class="thumbnail block-xs">
                                    <img src="{{asset($place->banner)}}" class="w-100" alt="">
                                </div>
                                @include('administracion.places.form')
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5 col-md-5 col-xs-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form  action="{{asset("administracion/places/".$place->id."/galery/post-image")}}" method="POST" enctype="multipart/form-data" class="dropzone" id="dropzoneForm">
                                @csrf
                            </form>

                            <button id="buttonLoadImages" class="btn mt-3 btn-primary">
                                <i class="fa fa-upload"></i>
                                Almacenar
                            </button>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h4 class="card-title">Galeria</h4>
                                        <div class="">
                                            <span class="badge bg-primary text-white fs-14 font-weight-semibold2"><i class="fe fe-image "></i>{{$place->pictures->count()}}</span>
                                        </div>
                                    </div>
                                    <hr class="text-muted">
                                    <div class="row">
                                        @foreach($place->pictures as $picture)
                                            <div class="col-md-4">
                                                <form action="{{asset('administracion/places/'.$place->id.'/upload_banner')}}" method="POST">
                                                    <input type="hidden" value="{{$picture->id}}" name="picture_id">
                                                    @csrf
                                                    <div class="thumbnail">
                                                        <img src="{{asset($picture->url_image)}}" class="w-100" alt="">
                                                    </div>
                                                    <button type="submit" class="btn btn-block btn-sm btn-secondary"><i class="fa fa-cloud-upload"></i></button>
                                                </form>
                                            </div>
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Add posts-section-->


@stop

@section('js')
    <script src="{{asset('assets/plugins/dropzone/dropzone.min.js')}}" type="text/javascript"></script>
    <script>
        Dropzone.options.dropzoneForm = {
            autoProcessQueue:false,
            acceptedFiles:".png,.jpg,.gif,.bmp,.jpeg",
            init:function () {

                let buttonSubmit = document.getElementById("buttonLoadImages");
                let myDrozone = this;

                buttonSubmit.addEventListener("click",function(){
                    myDrozone.processQueue();
                });

                this.on('uploadcompleted',function(data){

                });

                this.on("complete",function(data) {

                    if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0) {
                        location.reload();
                    }else{
                        myDrozone.processQueue();
                    }
                });

            }
        }
    </script>
@stop
