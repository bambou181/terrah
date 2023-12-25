<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('/css/fontawesome.css') }}">
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/owl.css') }}" rel="stylesheet" />

    <title>@yield('title', 'Online Store')</title>
</head>

<body>
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <div class="sub-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <ul class="info">
                        <li><i class="bi bi-envelope"></i> info@company.com</li>
                        <li><i class="bi bi-map"></i> Sunny Isles Beach, FL 33160</li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4">
                    <ul class="social-links">
                        <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                        <li><a href="https://x.com/minthu" target="_blank"><i class="bi bi-twitter"></i></a></li>
                        <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                        <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{route('home.index') }}" class="logo">
                            <h1>Villa</h1>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="{{route('home.index') }}" class="active">Home</a></li>
                            <li><a href="{{ route('property.index') }}">Properties</a></li>
                            <li><a href="{{ route('detail.index') }}">Property Details</a></li>
                            <li><a href="{{ route('contact.index') }}">Contact Us</a></li>
                            <li><a href="#"><i class="bi bi-calendar"></i> Schedule a visit</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    
        @yield('content')
    <br>

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="footer__top">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__top__logo">
                            <a href="#"><img src="{{ asset('img/logo.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__top__social">
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-twitter"></i></a>
                            <a href="#"><i class="bi bi-dribbble"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__option">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="footer__option__item">
                            <h5>About us</h5>
                            <p>Formed in 2006 by Matt Hobbs and Cael Jones, Videoprah is an award-winning, full-service
                                production company specializing.</p>
                            <a href="#" class="read__more">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3">
                        <div class="footer__option__item">
                            <h5>Who we are</h5>
                            <ul>
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Carrers</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Locations</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3">
                        <div class="footer__option__item">
                            <h5>Our work</h5>
                            <ul>
                                <li><a href="#">Feature</a></li>
                                <li><a href="#">Latest</a></li>
                                <li><a href="#">Browse Archive</a></li>
                                <li><a href="#">Video for web</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="footer__option__item">
                            <h5>Newsletter</h5>
                            <p>Videoprah is an award-winning, full-service production company specializing.</p>
                            <form action="#">
                                <input type="text" placeholder="Email">
                                <button type="submit"><i class="bi bi-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__copyright">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p class="footer__copyright__text">Copyright &copy;
                            <script>
                            document.write(new Date().getFullYear());
                            </script>
                            All rights reserved | <i class="bi bi-heart-o" aria-hidden="true"></i>
                        </p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/js/isotope.min.js') }}"></script>
    <script src="{{ asset('/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('/js/counter.js') }}"></script>
    <script src="{{ asset('/js/custom.js') }}"></script>
    
   
</body>

</html>