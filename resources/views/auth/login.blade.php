@extends('layouts.master')

@section('title','Login')

@section('content')

    <div class="relative pt-10 pb-10 pattern2 bg-background-color bg-background-color-dark1 cover-image pb-9" data-image-src="https://images.pexels.com/photos/460621/pexels-photo-460621.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
        <div class="header-text1 mb-0 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-12 col-md-12 d-block mx-auto">
                        <div class="text-center text-white ">
                            <h1 class="mb-0"><span class="font-weight-bold">Login de acceso</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /header-text -->
    </div>

    <section class="sptb">
        <div class="container customerpage">
            <div class="row">
                <div class="single-page" >
                    <div class="col-lg-5 col-xl-4 col-md-6 d-block mx-auto">
                        <div class="wrapper wrapper2 text-left">
                            <form id="login" action="{{asset('login')}}" method="POST" class="card-body" tabindex="500">
                                @csrf
                                <h4 class="font-weight-semibold2 pb-4">Acceso</h4>
                                <div class="mail">
                                    <input type="email" value="{{old('email')}}" name="email">
                                    <label>Corre electronico</label>
                                    @error('email')
                                        <span class="badge mt-2 badge-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="passwd">
                                    <input type="password" name="password">
                                    <label>Contraseña</label>
                                    @error('password')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="submit">
                                    <button class="btn btn-primary btn-block">Acceder</button>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p class="text-dark mb-0 fs-12">¿No tienes una cuenta?<a href="{{asset('/register')}}" class="text-primary ml-1">Registrate</a></p>
                                    </div>
                                    <div class="col col-auto">
                                        <p class="mb-0 mt-0 fs-12"><a href="{{asset('forgot-password')}}" >Olvidaste tu contraseña</a></p>
                                    </div>
                                </div>
                            </form>
                            <hr class="divider">
                            <div class="card-body text-center">
                                <ul class="mb-0 login-social-icons">
                                    <li class="btn-facebook">
                                        <a class="social-icon" href=""><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="btn-twitter">
                                        <a class="social-icon" href=""><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li class="btn-google">
                                        <a class="social-icon" href=""><i class="fa fa-google-plus"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop

@section('js')

    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>

    <script>
        $('#login').validate({
            submitHandler:function(form){
                form.submit();
            },
            rules:{
                email:{
                    required:true,
                    email:true
                },
                password:{
                    required:true
                }
            },
            messages:{
                email:{
                    required:'El email es requerido',
                    email:'Ingresa una cuenta de correo electronico valido'
                },
                password:{
                    required:'La contraseña es requerido'
                }
            }
        });
    </script>

@stop
