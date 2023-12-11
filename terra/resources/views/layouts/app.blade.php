<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" />
    <title>@yield('title', 'Online Store')</title>
</head>

<body>
    <!-- header -->
    
    <!-- header -->
    <div class="container my-4">
        @yield('content')
    </div>

    <!-- footer -->
    
    <!-- footer -->

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}">
    </script>
</body>

</html>