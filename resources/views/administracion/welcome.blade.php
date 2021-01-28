<!doctype html>
<html lang="en" dir="ltr">
<head>
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Gowell - Travel HTML Listing Template">
    <meta name="author" content="Spruko™ Technologies Private Limited">
    <meta name="keywords" content="travel html template,html code for travel and tourism website,travel agency website templates,template hotel booking,travel web template,trip travel,themeforest html templates,travel website templates,travel template,travel itinerary template,travel booking template,travel agency website templates html5,travel website templates bootstrap,tourism website templates html,travel agency html template,travel theme html,html travel website templates,travel html theme,travel website templates html,template html travel,tour operator website templates">
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

    <!-- Title -->
    <title>Bienvenido por primera vez</title>

    <!-- Bootstrap Css -->
    <link href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Style Css -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />

    <!-- Plugins Css -->
    <link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet" />

    <!-- Icons Css -->
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet"/>

    <!-- Jquery-bar-rating css-->
    <link rel="stylesheet" href="{{asset('assets/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css')}}">

    <!-- Auto Complete css -->
    <link href="{{asset('assets/plugins/autocomplete/jquery.autocomplete.css')}}" rel="stylesheet">

    <!-- Color-Skins -->
    <link id="theme" href="{{asset('assets/color-skins/color.css')}}"  rel="stylesheet"/>

</head>
<body>

<!--Loader-->
<div id="global-loader" class="bg-primary">
    <div class="loader-svg-img">
        <img src="{{asset('assets/images/brand/2.png')}}" class="" alt="">
        <div class="flight-icon"><i class="fa fa-plane"></i></div>
    </div>
</div>



<!--Login-Section-->
<section class="sptb">
    <div class="container customerpage">
        <div class="row">
            <div class="single-page" >
                <div class="col-lg-5 col-xl-4 col-md-6 d-block mx-auto">
                    <div class="wrapper wrapper2 text-left">
                        <form action="{{asset('welcome_admin')}}" method="POST" id="Register" class="card-body" tabindex="500">
                            @csrf
                            <h4 class="font-weight-semibold2 pb-4">Registrate</h4>
                            <div class="name">
                                <input type="text" name="fullname">
                                <label>Nombre completo</label>
                            </div>
                            <div class="phone">
                                <input type="text" name="phone">
                                <label>Numero de telefono</label>
                            </div>
                            <div class="mail">
                                <input type="email" name="email">
                                <label>Correo electronico</label>
                            </div>
                            <div class="passwd">
                                <input type="password" name="password">
                                <label>Contraseña</label>
                            </div>
                            <div class="submit">
                                <button class="btn btn-primary btn-block" type="submit">Comenzar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/Login-Section-->


<!-- JQuery js-->
<script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>

<!-- Bootstrap js -->
<script src="{{asset('assets/plugins/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.js')}}"></script>

<!--JQuery Sparkline Js-->
<script src="{{asset('assets/js/jquery.sparkline.min.js')}}"></script>

<!-- Circle Progress Js-->
<script src="{{asset('assets/js/circle-progress.min.js')}}"></script>

<!-- Selectize Js-->
<script src="{{asset('assets/js/selectize.min.js')}}"></script>

<!-- Jquery-bar-rating Js-->
<script src="{{asset('assets/plugins/jquery-bar-rating/jquery.barrating.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-bar-rating/js/rating.js')}}"></script>

<!--Owl Carousel js -->
<script src="{{asset('assets/plugins/owl-carousel/owl.carousel.js')}}"></script>
<script src="{{asset('assets/js/owl-carousel.js')}}"></script>

<!--Horizontal Menu-->
<script src="{{asset('assets/plugins/horizontal/horizontal-menu/horizontal.js')}}"></script>

<!--JQuery TouchSwipe js-->
<script src="{{asset('assets/js/jquery.touchSwipe.min.js')}}"></script>

<!--Select2 js -->
<script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{asset('assets/js/select2.js')}}"></script>

<!-- Cookie js -->
<script src="{{asset('assets/plugins/cookie/jquery.ihavecookies.js')}}"></script>
<script src="{{asset('assets/plugins/cookie/cookie.js')}}"></script>

<!--Auto Complete js -->
<script src="{{asset('assets/plugins/autocomplete/jquery.autocomplete.js')}}"></script>
<script src="{{asset('assets/plugins/autocomplete/autocomplete.js')}}"></script>

<!-- sticky Js-->
<script src="{{asset('assets/js/sticky.js')}}"></script>

<!-- Internal :::    Swipe Js-->
<script src="{{asset('assets/js/swipe.js')}}"></script>

<!-- Scripts Js-->
<script src="{{asset('assets/js/scripts.js')}}"></script>

<!-- Custom Js-->
<script src="{{asset('assets/js/custom.js')}}"></script>
</body>
</html>
