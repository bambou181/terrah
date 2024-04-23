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
    <link href="{{ asset('/css/fancybox.css') }}" rel="stylesheet" />
    <link
          rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.thumbs.css"
          />
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
                        <li><i class="bi bi-envelope"></i> kouakoubadou74@gmail.com</li>
                        <li><i class="bi bi-map"></i> Côte d'Ivoire,  CI</li>
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
                            <h1>KRA</h1>
                            
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        
                        <ul class="nav">
                            <li><a href="{{route('home.index') }}" class="active" >Accueil</a></li>
                            <li><a href="{{ route('terrain.index') }}">Propriétés</a></li>
                            <li><a href="{{ route('about.index') }}">A propos</a></li>
                            <li><a href="{{ route('contact.index') }}">Nous Contacter </a></li>
                            <!--
                            @guest
                            @else
                            
                                <form id="logout" action="{{ route('logout') }}" method="POST">
                                <a role="button" class="nav-link link-dark"
                                onclick="document.getElementById('logout').submit();">Déconnexion</a>
                                @csrf
                                </form>
                            
                            @endguest
                            -->


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

    <footer>
    <div class="container">
      <div class="col-lg-8 mx-auto">
        <p> Ensemble nous accomplirons de grandes choses</p>
      </div>
    </div>
  </footer>
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap3-typeahead.min.js') }}"></script>
    <script type="text/javascript">
        var path = "{{ route('home.autocomplete') }}";
        $('#search').typeahead({
            
                source: function (query, process) {

                    return $.get(path, {

                        term: query

                    }, function (data) {

                        return process(data);

                    });

                }

            });
    </script>
    
    <script src="{{ asset('/js/isotope.min.js') }}"></script>
    <script src="{{ asset('/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('/js/counter.js') }}"></script>
    <script src="{{ asset('/js/custom.js') }}"></script>
    
   
</body>

</html>
