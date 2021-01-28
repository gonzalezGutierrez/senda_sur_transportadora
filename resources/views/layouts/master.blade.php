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
    <title>Senda sur : @yield('title')</title>

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

    <!--wickedpicker css-->
    <link href="{{asset('assets/plugins/wildtime/wickedpicker.min.css')}}" rel="stylesheet">

    <!-- Color-Skins -->
    <link id="theme" href="{{asset('assets/color-skins/color.css')}}"  rel="stylesheet"/>

    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">

    @yield('style')

</head>
<body>

<!--Loader-->
<div id="global-loader" class="bg-primary">
    <div class="loader-svg-img">
        <img src="{{asset('assets/images/brand/2.png')}}" class="" alt="">
        <div class="flight-icon"><i class="fa fa-plane"></i></div>
    </div>
</div>
<!--/Loader-->

<!--Horizontal Section-->
<div class="header-main">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-sm-4 col-7">
                    <div class="top-bar-left d-flex">
                        <div class="clearfix">
                            <ul class="socials">
                                <li>
                                    <a class="social-icon text-black-50" href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a class="social-icon text-black-50" href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a class="social-icon text-black-50" href="#"><i class="fa fa-whatsapp"></i></a>
                                </li>
                                <li>
                                    <a class="social-icon text-black-50" href="#"><i class="fa fa-envelope-o"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix">
                            <ul class="contact">
                                <li class="mr-5 d-lg-none">
                                    <a href="#" class="callnumber text-dark"><span><i class="fa fa-phone mr-1"></i>: +425 345 8765</span></a>
                                </li>
                                <li class="select-country mr-5">
                                    <select class="form-control select2-flag-search" data-placeholder="Seleccionar Idioma">
                                        <option value="UM">United States of America</option>
                                        <option value="AF">Afghanistan</option>
                                        <option value="AL">Albania</option>
                                        <option value="AD">Andorra</option>
                                        <option value="AG">Antigua and Barbuda</option>
                                        <option value="AU">Australia</option>
                                        <option value="AM">Armenia</option>
                                        <option value="AO">Angola</option>
                                        <option value="AR">Argentina</option>
                                        <option value="AT">Austria</option>
                                        <option value="AZ">Azerbaijan</option>
                                        <option value="BA">Bosnia and Herzegovina</option>
                                        <option value="BB">Barbados</option>
                                        <option value="BD">Bangladesh</option>
                                        <option value="BE">Belgium</option>
                                        <option value="BF">Burkina Faso</option>
                                        <option value="BG">Bulgaria</option>
                                        <option value="BH">Bahrain</option>
                                        <option value="BJ">Benin</option>
                                        <option value="BN">Brunei</option>
                                        <option value="BO">Bolivia</option>
                                        <option value="BT">Bhutan</option>
                                        <option value="BY">Belarus</option>
                                        <option value="CD">Congo</option>
                                        <option value="CA">Canada</option>
                                        <option value="CF">Central African Republic</option>
                                        <option value="CI">Cote d'Ivoire</option>
                                        <option value="CL">Chile</option>
                                        <option value="CM">Cameroon</option>
                                        <option value="CN">China</option>
                                        <option value="CO">Colombia</option>
                                        <option value="CU">Cuba</option>
                                        <option value="CV">Cabo Verde</option>
                                        <option value="CY">Cyprus</option>
                                        <option value="DJ">Djibouti</option>
                                        <option value="DK">Denmark</option>
                                        <option value="DM">Dominica</option>
                                        <option value="DO">Dominican Republic</option>
                                        <option value="EC">Ecuador</option>
                                        <option value="EE">Estonia</option>
                                        <option value="ER">Eritrea</option>
                                        <option value="ET">Ethiopia</option>
                                        <option value="FI">Finland</option>
                                        <option value="FJ">Fiji</option>
                                        <option value="FR">France</option>
                                        <option value="GA">Gabon</option>
                                        <option value="GD">Grenada</option>
                                        <option value="GE">Georgia</option>
                                        <option value="GH">Ghana</option>
                                        <option value="GH">Ghana</option>
                                        <option value="HN">Honduras</option>
                                        <option value="HT">Haiti</option>
                                        <option value="HU">Hungary</option>
                                        <option value="ID">Indonesia</option>
                                        <option value="IE">Ireland</option>
                                        <option value="IL">Israel</option>
                                        <option value="IN">India</option>
                                        <option value="IQ">Iraq</option>
                                        <option value="IR">Iran</option>
                                        <option value="IS">Iceland</option>
                                        <option value="IT">Italy</option>
                                        <option value="JM">Jamaica</option>
                                        <option value="JO">Jordan</option>
                                        <option value="JP">Japan</option>
                                        <option value="KE">Kenya</option>
                                        <option value="KG">Kyrgyzstan</option>
                                        <option value="KI">Kiribati</option>
                                        <option value="KW">Kuwait</option>
                                        <option value="KZ">Kazakhstan</option>
                                        <option value="LA">Laos</option>
                                        <option value="LB">Lebanons</option>
                                        <option value="LI">Liechtenstein</option>
                                        <option value="LR">Liberia</option>
                                        <option value="LS">Lesotho</option>
                                        <option value="LT">Lithuania</option>
                                        <option value="LU">Luxembourg</option>
                                        <option value="LV">Latvia</option>
                                        <option value="LY">Libya</option>
                                        <option value="MA">Morocco</option>
                                        <option value="MC">Monaco</option>
                                        <option value="MD">Moldova</option>
                                        <option value="ME">Montenegro</option>
                                        <option value="MG">Madagascar</option>
                                        <option value="MH">Marshall Islands</option>
                                        <option value="MK">Macedonia (FYROM)</option>
                                        <option value="ML">Mali</option>
                                        <option value="MM">Myanmar (formerly Burma)</option>
                                        <option value="MN">Mongolia</option>
                                        <option value="MR">Mauritania</option>
                                        <option value="MT">Malta</option>
                                        <option value="MV">Maldives</option>
                                        <option value="MW">Malawi</option>
                                        <option value="MX" selected>Mexico</option>
                                        <option value="MZ">Mozambique</option>
                                        <option value="NA">Namibia</option>
                                        <option value="NG">Nigeria</option>
                                        <option value="NO">Norway</option>
                                        <option value="NP">Nepal</option>
                                        <option value="NR">Nauru</option>
                                        <option value="NZ">New Zealand</option>
                                        <option value="OM">Oman</option>
                                        <option value="PA">Panama</option>
                                        <option value="PF">Paraguay</option>
                                        <option value="PG">Papua New Guinea</option>
                                        <option value="PH">Philippines</option>
                                        <option value="PK">Pakistan</option>
                                        <option value="PL">Poland</option>
                                        <option value="QA">Qatar</option>
                                        <option value="RO">Romania</option>
                                        <option value="RU">Russia</option>
                                        <option value="RW">Rwanda</option>
                                        <option value="SA">Saudi Arabia</option>
                                        <option value="SB">Solomon Islands</option>
                                        <option value="SC">Seychelles</option>
                                        <option value="SD">Sudan</option>
                                        <option value="SE">Sweden</option>
                                        <option value="SG">Singapore</option>
                                        <option value="TG">Togo</option>
                                        <option value="TH">Thailand</option>
                                        <option value="TJ">Tajikistan</option>
                                        <option value="TL">Timor-Leste</option>
                                        <option value="TM">Turkmenistan</option>
                                        <option value="TN">Tunisia</option>
                                        <option value="TO">Tonga</option>
                                        <option value="TR">Turkey</option>
                                        <option value="TT">Trinidad and Tobago</option>
                                        <option value="TW">Taiwan</option>
                                        <option value="UA">Ukraine</option>
                                        <option value="UG">Uganda</option>
                                        <option value="UY">Uruguay</option>
                                        <option value="UZ">Uzbekistan</option>
                                        <option value="VA">Vatican City (Holy See)</option>
                                        <option value="VE">Venezuela</option>
                                        <option value="VN">Vietnam</option>
                                        <option value="VU">Vanuatu</option>
                                        <option value="YE">Yemen</option>
                                        <option value="ZM">Zambia</option>
                                        <option value="ZW">Zimbabwe</option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-8 col-5">
                    <div class="top-bar-right">
                        <ul class="custom">
                            <li>
                                <a href="register.html" class="text-black-50"><i class="fa fa-calendar-check-o mr-1"></i> <span>Calendario</span></a>
                            </li>
                            @if(Auth::guest())
                                <li>
                                    <a href="{{asset('register')}}" class="text-black-50"><i class="fa fa-user mr-1"></i> <span>Registrate</span></a>
                                </li>
                                <li>
                                    <a href="{{asset('/login')}}" class="text-black-50"><i class="fa fa-sign-in mr-1"></i> <span>Acceder</span></a>
                                </li>
                            @endif
                            @if(Auth::check())
                                <li class="dropdown">
                                    <a href="#" class="text-black-50" data-toggle="dropdown"><i class="fa fa-user-circle-o mr-1"></i><span> {{Auth::user()->fullname}}</span><i class="fa fa-angle-down ml-1 header-dropdown-icon"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a href="mydash.html" class="dropdown-item" >
                                            <i class="dropdown-icon icon icon-user"></i> Mi cuenta
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <i class="dropdown-icon icon icon-speech"></i> Cotizaciones
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <i class="dropdown-icon icon icon-bell"></i> Notificaciones
                                        </a>
                                        @if(Auth::user()->isUserAdmin())
                                            <a href="{{asset('/administracion')}}" class="dropdown-item" >
                                                <i class="dropdown-icon  icon icon-settings"></i> Administración
                                            </a>
                                        @endif
                                        <a class="dropdown-item" href="login.html">
                                            <i class="dropdown-icon icon icon-power"></i> Salir
                                        </a>
                                    </div>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Header -->
    <div class="sticky">
        <div class="horizontal-header clearfix ">
            <div class="container">
                <a id="horizontal-navtoggle" class="animated-arrow"><span></span></a>
                <span class="smllogo"><a href="index.html"><img src="{{asset('assets/images/brand/logo.png')}}" alt=""></a></span>
                <a href="add-post.html" class="callusbtn"><i class="fe fe-plus-circle" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    <!-- /Mobile Header -->

    <div class="horizontal-main  bg-dark-transparent clearfix py-2">
        <div class="horizontal-mainwrapper container clearfix">
            <div class="desktoplogo">
                <a href="index.html"><img src="{{asset('assets/images/brand/logo1.png')}}" alt=""></a>
            </div>
            <div class="desktoplogo-1">
                <a href="index.html" class="d-flex logo-height logo-svg">
                    <img src="{{asset('assets/images/brand/logo.png')}}" alt="">
                </a>
            </div>
            <!--Nav-->
            <nav class="horizontalMenu clearfix d-md-flex">
                <ul class="horizontalMenu-list">
                    <li><a href="{{asset('/')}}">Inicio </a></li>
                    <li><a href="{{asset('/')}}">Paquetes </a></li>
                    <li><a href="#">Destinos
                    </a></li>
                    <li><a href="#">Cotizaciones</a></li>
                    <li><a href="#">Acerca de <span class="fa fa-caret-down m-0"></span></a>
                        <ul class="sub-menu">
                            <li><a href="#">Senda Sur  <i class="fa fa-angle-right float-right mt-1 d-none d-lg-block"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="widgets.html">¿Quienes Somos?</a></li>
                                    <li><a href="widgets-carousel.html">Historia</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Politica de reservaciones</a></li>
                            <li><a href="#">Preguntas Frecuentes</a></li>
                            <li><a href="#">Autorización de uso de imagen</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contactanos</a></li>
                    <li class="">
                        <span><a class="btn btn-secondary" href="add-post.html"><i class="fa fa-calendar"></i> Calendario</a></span>
                    </li>
                </ul>
            </nav>
            <!--Nav-->
        </div>
        <div class="body-progress-container">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" id="myBar"></div>
        </div>
    </div>
</div>


@yield('content')

<!--Footer Section-->
<section>
    <footer class="bg-dark-purple text-white">
        <div class="footer-main border-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-12">
                        <h6>Get In Touch</h6>
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#"><i class="fa fa-home mr-3 text-secondary"></i> New York, Weq Street, NY 10012, US</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-envelope mr-3 text-secondary fs-12"></i> info12323@example.com</a></li>
                            <li>
                                <a href="#"><i class="fa fa-phone mr-3 text-secondary"></i> + 01 234 567 88</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-print mr-3 text-secondary"></i> + 01 234 567 89</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12">
                        <h6>Popular Tour Places</h6>
                        <ul class="list-unstyled mb-0">
                            <li><a href="#"><i class="fa fa-angle-double-right mr-2 text-secondary"></i> Canada Navy City </a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right mr-2 text-secondary"></i> Watican Flower Park in Paris</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right mr-2 text-secondary"></i> Great Paris Effil Tower</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right mr-2 text-secondary"></i> Histrorical London Stone Bridegs</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-2 col-lg-6 col-md-12">
                        <h6 class="mt-6 mt-xl-0">Latest Tours</h6>
                        <ul class="list-unstyled mb-0">
                            <li><a href="#"><i class="fa fa-angle-double-right mr-2 text-secondary"></i> Best Tours In World</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right mr-2 text-secondary"></i> Paris Great Tour</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right mr-2 text-secondary"></i> Top Adventure Tour</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right mr-2 text-secondary"></i> Top Histrorical Tour</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="form-group d-flex mb-0">
                            <div class="mr-4 w-180">
                                <select class="form-control select2" data-placeholder="Select Country">
                                    <option value="en">English</option>
                                    <option value="en">Arabic</option>
                                    <option value="en">German</option>
                                    <option value="en">Greek</option>
                                </select>
                            </div>
                            <div class="mr-4 w-180">
                                <select class="form-control select2" data-placeholder="Select Country">
                                    <option value="en">USD</option>
                                    <option value="en">EUR</option>
                                    <option value="en">INR</option>
                                    <option value="en">GBP</option>
                                </select>
                            </div>
                        </div>
                        <h6 class="mb-2 mt-5">Payments</h6>
                        <ul class="payments mb-0">
                            <li>
                                <a href="#" class="payments-icon"><i class="fa fa-cc-amex" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#" class="payments-icon"><i class="fa fa-cc-visa" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#" class="payments-icon"><i class="fa fa-credit-card-alt" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#" class="payments-icon"><i class="fa fa-cc-mastercard" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#" class="payments-icon"><i class="fa fa-cc-paypal" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#" class="payments-icon"><i class="fa fa-cc-discover" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#" class="payments-icon"><i class="fa fa-google-wallet" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-dark-purple text-white p-0 border-bottom">
            <div class="container">
                <div class="p-2 text-center footer-links">
                    <a href="#" class="btn btn-link">How It Works</a>
                    <a href="#" class="btn btn-link">About Us</a>
                    <a href="#" class="btn btn-link">Pricing</a>
                    <a href="#" class="btn btn-link">Listing Categories</a>
                    <a href="#" class="btn btn-link">Privacy Policy</a>
                    <a href="#" class="btn btn-link">Terms Of Conditions</a>
                    <a href="#" class="btn btn-link">Blog</a>
                    <a href="#" class="btn btn-link">Contact Us</a>
                    <a href="#" class="btn btn-link">Premium Ad</a>
                </div>
            </div>
        </div>
        <div class="bg-dark-purple text-white-50 p-3">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-lg-12 col-sm-12  mt-2 mb-2 text-center ">
                        Copyright © 2020 <a href="#" class="fs-14 text-secondary">Gowell</a>. Designed by <a href="spruko.com" class="fs-14 text-secondary">Spruko</a> All rights reserved.
                    </div>
                    <div class="col-lg-12 col-sm-12 text-center mb-2 mt-2">
                        <ul class="social-icons mb-0">
                            <li>
                                <a class="social-icon" href=""><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a class="social-icon" href=""><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a class="social-icon" href=""><i class="fa fa-rss"></i></a>
                            </li>
                            <li>
                                <a class="social-icon" href=""><i class="fa fa-youtube"></i></a>
                            </li>
                            <li>
                                <a class="social-icon" href=""><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a class="social-icon" href=""><i class="fa fa-google-plus"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</section>
<!--Footer Section-->

<!--  Modal Popup -->
<div class="modal fade" id="gallery" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="product-slider modal-body p-2">
                <div id="carousel" class="carousel slide" data-ride="carousel">
                    <a class="gallery-close-button" href="#" data-dismiss="modal" aria-label="Close"><i class="fe fe-x"></i></a>
                    <div class="carousel-inner">
                        <div class="carousel-item active"><img src="../../assets/images/places/1.jpg" alt="img"> </div>
                        <div class="carousel-item"><img src="../../assets/images/places/2.jpg" alt="img"> </div>
                        <div class="carousel-item"><img src="../../assets/images/places/3.jpg" alt="img"> </div>
                        <div class="carousel-item"><img src="../../assets/images/places/4.jpg" alt="img"> </div>
                        <div class="carousel-item"><img src="../../assets/images/places/5.jpg" alt="img"> </div>
                        <div class="carousel-item"><img src="../../assets/images/places/1.jpg" alt="img"> </div>
                        <div class="carousel-item"><img src="../../assets/images/places/2.jpg" alt="img"> </div>
                        <div class="carousel-item"><img src="../../assets/images/places/3.jpg" alt="img"> </div>
                        <div class="carousel-item"><img src="../../assets/images/places/4.jpg" alt="img"> </div>
                        <div class="carousel-item"><img src="../../assets/images/places/5.jpg" alt="img"> </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                    </a>
                    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="clearfix">
                    <div id="thumbcarousel" class="carousel slide product-slide-thumb" data-interval="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div data-target="#carousel" data-slide-to="0" class="thumb"><img src="../../assets/images/places/1.jpg" alt="img"></div>
                                <div data-target="#carousel" data-slide-to="1" class="thumb"><img src="../../assets/images/places/2.jpg" alt="img"></div>
                                <div data-target="#carousel" data-slide-to="2" class="thumb"><img src="../../assets/images/places/3.jpg" alt="img"></div>
                                <div data-target="#carousel" data-slide-to="3" class="thumb"><img src="../../assets/images/places/4.jpg" alt="img"></div>
                                <div data-target="#carousel" data-slide-to="4" class="thumb"><img src="../../assets/images/places/5.jpg" alt="img"></div>

                            </div>
                            <div class="carousel-item ">
                                <div data-target="#carousel" data-slide-to="0" class="thumb"><img src="../../assets/images/places/1.jpg" alt="img"></div>
                                <div data-target="#carousel" data-slide-to="1" class="thumb"><img src="../../assets/images/places/2.jpg" alt="img"></div>
                                <div data-target="#carousel" data-slide-to="2" class="thumb"><img src="../../assets/images/places/3.jpg" alt="img"></div>
                                <div data-target="#carousel" data-slide-to="3" class="thumb"><img src="../../assets/images/places/4.jpg" alt="img"></div>
                                <div data-target="#carousel" data-slide-to="4" class="thumb"><img src="../../assets/images/places/5.jpg" alt="img"></div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#thumbcarousel" role="button" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                        </a>
                        <a class="carousel-control-next" href="#thumbcarousel" role="button" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--  Modal Popup -->
<div class="modal fade" id="homeVideo" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
            <button type="button" class="btn btn-default" data-dismiss="modal" onclick="pauseVid()"><i class="fe fe-x"></i></button>
            <!--<iframe width="560" height="400" src="https://www.youtube.com/embed/kFjETSa9N7A"  allow="accelerometer; autoplay;" allowfullscreen></iframe>-->
            <div class="embed-responsive embed-responsive-16by9">
                <video id="gossVideo" class="embed-responsive-item" controls="controls">
                    <source src="../../assets/video/1.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
</div>

<!-- Back to top -->
<a href="#top" id="back-to-top" ><i class="fe fe-arrow-up"></i></a>

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

<!--Internal :::  Counters -->
<script src="{{asset('assets/plugins/counters/counterup.min.js')}}"></script>
<script src="{{asset('assets/plugins/counters/waypoints.min.js')}}"></script>
<script src="{{asset('assets/plugins/counters/numeric-counter.js')}}"></script>

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

<!-- sticky Js-->
<script src="{{asset('assets/js/sticky.js')}}"></script>

<!-- Internal :::   Ion.RangeSlider -->
<script src="{{asset('assets/plugins/jquery-uislider/jquery-ui.js')}}"></script>
<script src="{{asset('assets/js/price-range.js')}}"></script>

<!-- Cookie js -->
<script src="{{asset('assets/plugins/cookie/jquery.ihavecookies.js')}}"></script>
<script src="{{asset('assets/plugins/cookie/cookie.js')}}"></script>

<!--Auto Complete js -->
<script src="{{asset('assets/plugins/autocomplete/jquery.autocomplete.js')}}"></script>
<script src="{{asset('assets/plugins/autocomplete/autocomplete.js')}}"></script>

<!-- Internal :::   Moment js-->
<script src="{{asset('assets/plugins/moment/moment.js')}}"></script>

<!--Internal :::   Showmore Js-->
<script src="{{asset('assets/js/jquery.showmore.js')}}"></script>
<script src="{{asset('assets/js/showmore.js')}}"></script>

<!-- Internal :::   Datepicker js -->
<script src="{{asset('assets/plugins/date-picker/jquery-ui.js')}}"></script>

<!-- Internal :::   Datepicker Custom js -->
<script src="{{asset('assets/js/date-picker.js')}}"></script>

<!-- Internal :::   Daterange js-->
<script src="{{asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('assets/js/daterange.js')}}"></script>

<!-- Internal :::   Timepicker js -->
<script src="{{asset('assets/plugins/jquery-timepicker/jquery.timepicker.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-timepicker/toggles.min.js')}}"></script>

<!-- Internal :::    wickedpicker js-->
<script src="{{asset('assets/plugins/wildtime/wickedpicker.min.js')}}"></script>
<script src="{{asset('assets/js/timepicker.js')}}"></script>

<!-- Internal :::   Typewritter Js-->
<script src="{{asset('assets/js/typewritter.js')}}"></script>

<!-- Internal :::    Swipe Js-->
<script src="{{asset('assets/js/swipe.js')}}"></script>

<!-- Scripts Js-->
<script src="{{asset('assets/js/scripts.js')}}"></script>

<!-- Custom Js-->
<script src="{{asset('assets/js/custom.js')}}"></script>

@yield('js')
</body>
</html>
