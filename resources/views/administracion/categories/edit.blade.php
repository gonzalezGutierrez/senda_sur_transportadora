@extends('layouts.master')

@section('style')
    <!-- Fancy Uploads css -->
    <link href="{{asset('assets/plugins/dropzone/dropzone.min.css')}}" rel="stylesheet" type="text/css"/>

    <style>
        .dropzone {
            min-height: 150px;
            /* border: 2px solid rgba(0,0,0,0.3); */
            background: white;
            padding: 20px 20px;
            border: 2px dashed #e5e4f0;
            border-radius: 3px;
        }
        .dropzone .dz-preview .dz-image {
            border-radius: 5px;
            overflow: hidden;
            width: 80px;
            height: 80px;
            position: relative;
            display: block;
            z-index: 10;
        }

        .dropzone .dz-preview {
            margin: 5px;
        }
    </style>

@stop

@section('content')
    <section class="bannerimg cover-image bg-background3" data-image-src="https://images.pexels.com/photos/709552/pexels-photo-709552.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
        <div class="header-text mb-0">
            <div class="container">
                <div class="row text-white">
                    <div class="col"><h1 class="text-uppercase">{{$category->name}}</h1></div>
                    <div class="col col-auto">
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="{{asset('/administracion/')}}">Administración</a></li>
                            <li class="breadcrumb-item"><a href="{{asset('/administracion/categories')}}">Categorias</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Actualizar</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Add posts-section-->
    <section class="sptb">
        <div class="container">
            <div class="row ">
                <div class="col-lg-7 col-md-12">
                    <form action="{{asset('administracion/categories/'.$category->id)}}" method="POST">
                        @csrf
                        @method('put')
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title text-uppercase">Actualizar categoria</div>
                            </div>
                            <div class="card-body">
                                <div class="thumbnail">
                                    <img src="{{asset($category->banner)}}" class="w-100" alt="">
                                </div>
                                @include('administracion.categories.form')
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-success">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5 col-md-5 col-xs-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">

                            <form  action="{{asset("administracion/categories/".$category->id."/upload_banner")}}" method="POST" enctype="multipart/form-data" class="dropzone" id="dropzoneForm">
                                @csrf
                            </form>

                            <button id="buttonLoadImages" class="btn mt-3 btn-primary">
                                <i class="fa fa-upload"></i>
                                Almacenar
                            </button>

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
                    console.log(data);
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
