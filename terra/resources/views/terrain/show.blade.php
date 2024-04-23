@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')

<div class="page-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <span class="breadcrumb"><a href="#">Propriétés</a> / Détails</span>
                <h3>Détails</h3>
            </div>
        </div>
    </div>
</div>


<div class="single-property section">
    <div class="container">
        <nav class="navbar sticky-top navbar-light mt-5" style="background-color:#5CA85C">
            <div class="container">
                <p class="navbar-brand text-white">{{ $viewData["terrain"]->getPrice() }} FCFA</p>
            </div>
        </nav><br>
        <div class="row">
            <div class="col-lg-7">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item main-image active">
                            <img src="{{ asset('/storage/'.$viewData["terrain"]->getImage()) }}" class="d-block "
                                alt="...">
                        </div>
                        @if(isset($viewData["terrain"]->imgs))
                        @foreach($viewData["terrain"]->imgs as $img)
                        <div class="carousel-item main-image">
                            <img src="{{ asset('/storage/'.$img) }}" class="d-block" alt="...">
                        </div>
                        @endforeach
                        @endif

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>


                <div class="main-content">
                    <span class="category">{{ $viewData["terrain"]->getName() }} </span>
                    
                    <h4>{{ $viewData["terrain"]->getLocation() }} </h4>
                    <p>{{ $viewData["terrain"]->getDescription() }} .</p><br><br>
                </div>

            </div>
            <div class="col-lg-5">

                <div class="info-table ">
                    <button type="button" class="btn btn-lg w-100 text-white" style="background-color:#5CA85C">Contacter notre équipe</button><br><br>
                    <ul>
                        <li>
                            <img src="{{ asset('img/info-icon-01.png') }}" alt="" style="max-width: 52px;">
                            <h4>{{ $viewData["terrain"]->getSize() }}<br><span>Taille</span></h4>
                        </li>
                        <li>
                            @include('auth.register')
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>




<script src="{{ asset('/js/fancybox.umd.js') }}"></script>
<script>
Fancybox.bind('[data-fancybox="gallery"]', {
    // Your custom options for a specific gallery
});
</script>


@endsection