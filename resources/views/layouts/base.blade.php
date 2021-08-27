<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="Create a stylish landing page for your business startup and get leads for the offered services with this HTML landing page template.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/Mini.ico') }}">

    <!-- Website Title -->
    <title>@stack('title_base')</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext"
        rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/swiper.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png')}}">

    @stack('styles')
    @livewireStyles
</head>

<body data-spy="scroll" data-target=".fixed-top">

    <!-- Preloader -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Evolo</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="index.html"><img
                src="{{ asset('assets/images/logo/Renivalnegro.png') }}" alt="alternative"></a>

        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#header">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#pricing">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#request">Request</a>
                </li>

                <!-- Dropdown Menu -->

                @if (Route::has('login'))
                    @auth
                        @if (Auth::user()->utype === 'ADM')
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown"
                                    role="button" aria-haspopup="true" aria-expanded="false">My Acocount
                                    ({{ Auth::user()->name }})</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('admin.dashboard') }}"><span class="item-text"
                                            title="Dashboard">Dashboard
                                            ADM</span></a>
                                    <div class="dropdown-items-divide-hr"></div>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                    <div class="dropdown-items-divide-hr"></div>
                                </div>
                            </li>
                            <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                @csrf
                            </form>
                        @elseif(Auth::user()->utype === 'WRK')
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown"
                                    role="button" aria-haspopup="true" aria-expanded="false">My Acocount
                                    ({{ Auth::user()->name }})</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('worker.dashboard') }}"><span
                                            class="item-text" title="Dashboard">Dashboard
                                            WRK</span></a>
                                    <div class="dropdown-items-divide-hr"></div>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                    <div class="dropdown-items-divide-hr"></div>
                                </div>
                            </li>
                            <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                @csrf
                            </form>
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown"
                                    role="button" aria-haspopup="true" aria-expanded="false">My Acocount
                                    ({{ Auth::user()->name }})</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('user.dashboard') }}"><span class="item-text"
                                            title="Dashboard">Dashboard
                                            User</span></a>
                                    <div class="dropdown-items-divide-hr"></div>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                    <div class="dropdown-items-divide-hr"></div>
                                </div>
                            </li>
                            <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                @csrf
                            </form>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle page-scroll" href="#about" id="navbarDropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Registro</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('login') }}"><span
                                        class="item-text">Login</span></a>
                                <div class="dropdown-items-divide-hr"> </div>
                                <a class="dropdown-item" href="{{ route('register') }}"><span
                                        class="item-text">Register</span></a>

                            </div>
                        </li>

                    @endif
                    @endif
                    <!-- end of dropdown menu -->

                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
                <span class="nav-item social-icons">
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x facebook"></i>
                            <i class="fab fa-facebook-f fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x twitter"></i>
                            <i class="fab fa-twitter fa-stack-1x"></i>
                        </a>
                    </span>
                </span>
            </div>
        </nav> <!-- end of navbar -->
        <!-- end of navigation -->
        <header id="header" class="header">
            <div class="header-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="text-container">
                                <h1><span class="turquoise">Startups Renival</span> Programa tu Visita</h1>

                                @if (Route::has('login'))
                                    @if (Auth::user())

                                        <p class="p-large">Ya puedes programar tu visita o reuniones (Virtual), con nuestro
                                            asesores en las fechas que se encuentren disponibles en el calendario de
                                            trabajo<span> Muchas Gracias</span></p>

                                    @else
                                        <p class="p-large">Agenda una visita de consultá o requerimiento para tu proyecto
                                            web. Te
                                            esperamos<span> Registrate</span></p>
                                    @endif
                                @endif

                                @if (Route::has('login'))
                                    @if (Auth::user())
                                        <a class="btn-solid-lg page-scroll"
                                            href="{{ route('user.calendary') }}">Programar
                                            reunión</a>
                                    @else

                                    @endif
                                @endif
                            </div> <!-- end of text-container -->
                        </div> <!-- end of col -->
                        <div class="col-lg-6">
                            <div class="image-container">
                                <img class="img-fluid" src="{{ asset('assets/images/header-teamwork.svg') }}"
                                    alt="alternative">
                            </div> <!-- end of image-container -->
                        </div> <!-- end of col -->
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div> <!-- end of header-content -->
        </header> <!-- end of header -->
        <!-- end of header -->



        {{ $slot }}


        <!-- Footer -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-col">
                            <h4>Acerca Renival</h4>
                            <p>We're passionate about offering some of the best business growth services for startups
                            </p>
                        </div>
                    </div> <!-- end of col -->
                    <div class="col-md-4">
                        <div class="footer-col middle">
                            <h4>Important Links</h4>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Our business partners <a class="turquoise"
                                            href="#your-link">startupguide.com</a></div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Read our <a class="turquoise" href="terms-conditions.html">Terms
                                            & Conditions</a>, <a class="turquoise" href="privacy-policy.html">Privacy
                                            Policy</a></div>
                                </li>
                            </ul>
                        </div>
                    </div> <!-- end of col -->
                    <div class="col-md-4">
                        <div class="footer-col last">
                            <h4>Social Media</h4>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-google-plus-g fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-instagram fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-linkedin-in fa-stack-1x"></i>
                                </a>
                            </span>
                        </div>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of footer -->
        <!-- end of footer -->


        <!-- Copyright -->
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="p-small">Copyright © 2020 <a href="#">chamocellDeveloper</a> - All rights
                            reserved</p>
                    </div> <!-- end of col -->
                </div> <!-- enf of row -->
            </div> <!-- end of container -->
        </div> <!-- end of copyright -->
        <!-- end of copyright -->

        @livewireScripts
        <!-- Scripts -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <!-- jQuery for Bootstrap's JavaScript plugins -->
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <!-- Popper tooltip library for Bootstrap -->
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <!-- Bootstrap framework -->
        <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
        <!-- jQuery Easing for smooth scrolling between anchors -->
        <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
        <!-- Swiper for image and text sliders -->
        <script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>
        <!-- Magnific Popup for lightboxes -->
        <script src="{{ asset('assets/js/validator.min.js') }}"></script>
        <!-- Validator.js - Bootstrap plugin that validates forms -->
        <script src="{{ asset('assets/js/scripts.js') }}"></script>
        <!-- Custom scripts -->
        @stack('scripts')
    </body>

    </html>
