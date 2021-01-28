@extends('layouts.master')

@section('style')
    <link href="{{asset('assets/plugins/dropzone/dropzone.min.css')}}" rel="stylesheet" type="text/css"/>
@stop

@section('content')

    <div class="relative pt-10 pb-10 hidden-xs pattern2 bg-background-color bg-background-color-dark1 cover-image pb-9" data-image-src="{{asset($tour->banner != null ? $tour->banner : 'https://images.pexels.com/photos/6152479/pexels-photo-6152479.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')}}">
        <div class="header-text1 mb-0 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-12 col-md-12 d-block mx-auto">
                        <div class="text-center text-white ">
                            <h1 class="mb-0"><span class="font-weight-bold">{{$tour->name}}</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /header-text -->
    </div>

    <div class="bg-white border-bottom">
        <div class="container">
            <div class="page-header">
                <h4 class="page-title">{{$tour->name}}</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{asset('/administracion')}}">Administración</a></li>
                    <li class="breadcrumb-item"><a href="{{asset('/administracion/tours')}}">Tours</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Actualizar</li>
                </ol>
            </div>
        </div>
    </div>

    <section class="sptb">
        <div class="container">
            <div class="row ">
                <div class="col-lg-7 col-xs-12 col-sm-12 col-md-7">
                    <div class="card block-xs" style="padding: 0px !important;">
                        <div class="card-body" style="padding: 0px !important;">
                            <img style="border-radius: 5px;" src="{{asset($tour->banner)}}" class="w-100" alt="">
                        </div>
                    </div>
                    <form action="{{asset('administracion/tours/'.$tour->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        @include('administracion.tours.form')
                    </form>
                </div>
                <div class="col-lg-5 col-md-5 col-xs-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form  action="{{asset("administracion/tours/".$tour->id."/upload_banner")}}" method="POST" enctype="multipart/form-data" class="dropzone" id="dropzoneForm">
                                @csrf
                            </form>

                            <button id="buttonLoadImages" class="btn mt-3 btn-primary">
                                <i class="fa fa-upload"></i>
                                Almacenar
                            </button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body ">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="card-title">
                                            Lugares a visitar
                                        </div>
                                        <a href="#" data-toggle="modal" data-target="#addPlaceToProgram" class="btn btn-sm btn-primary">
                                            <i class="fa fa-plus-circle"></i>
                                        </a>
                                    </div>
                                    <hr class="text-muted">
                                    <div class="row">
                                        <ul class="timeline-tour p-2 overflow-y w-100">
                                            @foreach($places as $place)
                                                <li class="d-flex">
                                                    <img src="{{asset($place->banner)}}" alt="" class="w-8 h-8 brround tour-before bg-primary">
                                                    <div class="timeline-data ml-5">
                                                        <div class="">
                                                            @if($place->visit_date)<div class="fs-16 font-weight-semibold">Día N° <b>{{$place->getNumberDayBetweenDateTour($tour,$place->visit_date)}}:</b> <span class="text-secondary">{{$place->visit_date}}</span></div>@endif
                                                            <h3 class="card-title font-weight-semibold2 mt-1">{{$place->name}}</h3>
                                                            <form action="{{asset('administracion/tours/'.$tour->id.'/program/'.$place->programId.'/'.$place->place_id.'/assign-date')}}" method="POST">
                                                                @csrf
                                                                @method('patch')
                                                                <input type="date" value="{{$place->visit_date}}" name="visit_date" min="{{$tour->start_date}}" max="{{$tour->end_date}}" class="form-control w-100">
                                                                <button type="submit" class="btn mt-2 btn-primary">
                                                                    <i class="fa fa-edit"></i>
                                                                    Actualizar
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <div class="modal fade" id="report" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="examplereportLongTitle">Report Abuse</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="report-name" placeholder="Enter url">
                    </div>
                    <div class="form-group">
                        <select name="country" id="select-countries2" class="form-control custom-select select2-no-serach">
                            <option value="1" selected>Categories</option>
                            <option value="2">Spam</option>
                            <option value="3">Identity Theft</option>
                            <option value="4">Online Shopping Fraud</option>
                            <option value="5">Service Providers</option>
                            <option value="6">Phishing</option>
                            <option value="7">Spyware</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="report-email" placeholder="Email Address">
                    </div>
                    <div class="form-group mb-0">
                        <textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Message"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success">Submit</button>
                </div>
            </div>
        </div>
    </div>
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
