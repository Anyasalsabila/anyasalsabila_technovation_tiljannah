<!--

=========================================================
* Gaia Bootstrap Template - v1.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/gaia-bootstrap-template
* Licensed under MIT (https://github.com/creativetimofficial/gaia-bootstrap-template/blob/master/LICENSE.md)
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Halal Lifestyle</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/gaia.css') }}" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href='https://fonts.googleapis.com/css?family=Cambo|Poppins:400,600' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/fonts/pe-icon-7-stroke.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-default navbar-transparent navbar-fixed-top" style="background-color: rgba(0,0,0,0.2);" color-on-scroll="200">
        <!-- if you want to keep the navbar hidden you can add this class to the navbar "navbar-burger"-->
        <div class="container">
            <div class="navbar-header">
                <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                </button>
                <a href="http://www.creative-tim.com" class="navbar-brand">
                    TillJannah - website
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right navbar-uppercase">
                  
                    <li class="dropdown">
                        <a href="#gaia" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-share-alt"></i> Share
                        </a>
                        <ul class="dropdown-menu dropdown-danger">
                            <li>
                                <a href="#"><i class="fa fa-facebook-square"></i> Facebook</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-instagram"></i> Instagram</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/login" class="btn btn-danger btn-fill">Make a Post</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>


    <div class="section section-header">
        <div class="parallax filter">
            <div class="image"
                style="background-image: url('{{ asset('img/aset4.png') }}')">
            </div>
            <div class="container">
                <div class="content">
                    <div class="title-area">
                        <p>Website</p>
                        <h1 class="title-modern">TillJannah</h1>
                        <h3>Temukan Produk, Tips, dan Inspirasi Halal di TillJannah.</h2>
                        <div class="separator line-separator">♦</div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n10 blur-shadow"">
    <div class="section">
        <div class="container">
            <div class="team">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="row">

                            <div class="col-md-4">
                                <div class="card card-member">
                                    <div class="content">
                                        <div class="">
                                            <img alt="..." src="{{ asset('img/konten/post1.png') }}" style="width: 100%; height: 100%; object-fit: cover;"/>
                                        </div>
                                        <div class="description">
                                            <span class="badge badge-primary">Donasi</span>
                                            <h3 class="title">Kind People</h3>
                                            <p class="small-text">we care, we share</p>
                                            <p class="description">Bantu Anak-Anak Indonesia Membutuhkan di UNICEF</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-member">
                                    <div class="content">
                                        <div class="">
                                            <img alt="..." src="{{ asset('img/konten/post2.png') }}" style="width: 100%; height: 100%; object-fit: cover;"/>
                                        </div>
                                        <div class="description">
                                            <span class="badge badge-primary">Kuliner</span>
                                            <h3 class="title">Hungry People</h3>
                                            <p class="small-text"></p>
                                            <p class="description">Temukan rekomendasi kuliner halal, dan membantu UMKM lokal</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-member">
                                    <div class="content">
                                        <div class="">
                                            <img alt="..." src="{{ asset('img/konten/post3.jpg') }}" style="width: 100%; height: 100%; object-fit: cover;"/>
                                        </div>
                                        <div class="description">
                                            <span class="badge badge-primary">Lifestyle</span>
                                            <h3 class="title">Healty Life</h3>
                                
                                            <p class="description">Temukan tips dan trik hidup sehat dan halal yang anda butuhkan!</p>
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


    


    <div class="section section-our-clients-freebie">
        <div class="container">
            <div class="title-area">
                <h5 class="subtitle text-gray"></h5>
                <h2>Penyelenggara</h2>
                <div class="separator separator-danger">✻</div>
            </div>

            <div class="nav-align-center">

                <div class="row">
                    <div class="col-md-3">
                        <img src="{{ asset('img/logo2.png') }}" alt="Rounded Image" class="img-rounded img-responsive img-raised">
                    </div>
                    <div class="col-md-2">
                        <img src="{{ asset('img/logo3.png') }}" alt="Rounded Image" class="img-rounded img-responsive img-raised">
                    </div>
                    <div class="col-md-2">
                        <img src="{{ asset('img/logo4.png') }}" alt="Rounded Image" class="img-rounded img-responsive img-raised">
                    </div>
                    <div class="col-md-2">
                        <img src="{{ asset('img/logo5.webp') }}" alt="Rounded Image" class="img-rounded img-responsive img-raised">
                    </div>
                    <div class="col-md-2">
                        <img src="{{ asset('img/logo6.png') }}" alt="Rounded Image" class="img-rounded img-responsive img-raised">
                    </div>
                </div>
            </div>
        </div>
    </div>
       

    <div class="section section-small section-get-started">
        <div class="parallax filter">
            <div class="image"
                style="background-image: url('assets/img/office-1.jpeg')">
            </div>
            <div class="container">
                <div class="title-area">
                    <h2 class="text-white">TillJannah</h2>
                    <div class="separator line-separator">♦</div>
                    <p class="description">Bukan Sekedar Cita-cita, Tapi Perjalanan Menuju Surga</p>
                </div>
            </div>
        </div>
    </div>


    <footer class="footer footer-big footer-color-black" data-color="black">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-3">
                    <div class="info">
                        <h5 class="title">Company</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#">Home</a></li>
                                <li>
                                    <a href="#">Find offers</a>
                                </li>
                                <li>
                                    <a href="#">Discover Projects</a>
                                </li>
                                <li>
                                    <a href="#">Our Portfolio</a>
                                </li>
                                <li>
                                    <a href="#">About Us</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-3 col-md-offset-1 col-sm-3">
                    <div class="info">
                        <h5 class="title"> Help and Support</h5>
                         <nav>
                            <ul>
                                <li>
                                    <a href="#">Contact Us</a>
                                </li>
                                <li>
                                    <a href="#">How it works</a>
                                </li>
                                <li>
                                    <a href="#">Terms &amp; Conditions</a>
                                </li>
                                <li>
                                    <a href="#">Company Policy</a>
                                </li>
                                <li>
                                    <a href="#">Money Back</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="info">
                        <h5 class="title">Latest News</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i> <b>Get Shit Done</b> The best kit in the market is here, just give it a try and let us...
                                        <hr class="hr-small">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i> We've just been featured on <b> Awwwards Website</b>! Thank you everybody for...
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-2 col-md-offset-1 col-sm-3">
                    <div class="info">
                        <h5 class="title">Follow us on</h5>
                        <nav>
                            <ul>
                                <li>
                                    <a href="#" class="btn btn-social btn-facebook btn-simple">
                                        <i class="fa fa-facebook-square"></i> Facebook
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-social btn-dribbble btn-simple">
                                        <i class="fa fa-dribbble"></i> Dribbble
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-social btn-twitter btn-simple">
                                        <i class="fa fa-twitter"></i> Twitter
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-social btn-reddit btn-simple">
                                        <i class="fa fa-google-plus-square"></i> Google+
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <hr>
            <div class="copyright">
                 © <script> document.write(new Date().getFullYear()) </script> TillJannah
            </div>
        </div>
    </footer>

</body>

<!--   core js files    -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.js" type="text/javascript"></script>

<!--  js library for devices recognition -->
<script type="text/javascript" src="assets/js/modernizr.js"></script>

<!--  script for google maps   -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!--   file where we handle all the script from the Gaia - Bootstrap Template   -->
<script type="text/javascript" src="assets/js/gaia.js"></script>

</html>
