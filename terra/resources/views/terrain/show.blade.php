@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')

<div class="page-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <span class="breadcrumb"><a href="#">Home</a> / Single Property</span>
                <h3>Single Property</h3>
            </div>
        </div>
    </div>
</div>


<div class="single-property section">
    <div class="container">
        <nav class="navbar sticky-top navbar-light bg-danger mt-5">
            <div class="container">
                <a class="navbar-brand" href="#">{{ $viewData["terrain"]->getPrice() }} FCFA</a>
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
                        @foreach($viewData["terrain"]->imgs as $img)
                        <div class="carousel-item main-image">
                            <img src="{{ asset('/storage/'.$img) }}" class="d-block" alt="...">
                        </div>
                        @endforeach

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
                    <button type="button" class="btn btn-info btn-lg w-100">Contacter notre équipe</button><br><br>
                    <ul>
                        <li>
                            <img src="{{ asset('img/info-icon-01.png') }}" alt="" style="max-width: 52px;">
                            <h4>{{ $viewData["terrain"]->getSize() }}<br><span>Taille</span></h4>
                        </li>
                        <li>
                            <form action="">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="bi bi-person-fill"></i></span>
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                        aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="bi bi-envelope-fill"></i></span>
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                        aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="bi bi-telephone-fill"></i></span>
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                        aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text " id="basic-addon1"><i
                                            class="bi bi-calendar rond"></i></span>
                                    <input type="date" class="form-control" placeholder="Username" aria-label="Username"
                                        aria-describedby="basic-addon1" name="visitDate">
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                                        checked>
                                    <label class="form-check-label" for="flexCheckDefault">
                                        J'aimerais être contacté(e) par des agences immobilières partenaires pour des
                                        biens similaires
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Je ne souhaite pas recevoir les annonces similaires et les suggestions
                                        personnalisées
                                    </label>
                                </div><br>
                                <button type="button" class="btn btn-danger w-100">Envoyer</button>
                            </form>
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
<!--
<div class="section best-deal">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-heading">
                    <h6>| Best Deal</h6>
                    <h2>Find Your Best Deal Right Now!</h2>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="tabs-content">
                    <div class="row">
                        <div class="nav-wrapper ">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="appartment-tab" data-bs-toggle="tab"
                                        data-bs-target="#appartment" type="button" role="tab" aria-controls="appartment"
                                        aria-selected="true">Appartment</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="villa-tab" data-bs-toggle="tab" data-bs-target="#villa"
                                        type="button" role="tab" aria-controls="villa" aria-selected="false">Villa
                                        House</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="penthouse-tab" data-bs-toggle="tab"
                                        data-bs-target="#penthouse" type="button" role="tab" aria-controls="penthouse"
                                        aria-selected="false">Penthouse</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="appartment" role="tabpanel"
                                aria-labelledby="appartment-tab">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="info-table">
                                            <ul>
                                                <li>Total Flat Space <span>540 m2</span></li>
                                                <li>Floor number <span>3</span></li>
                                                <li>Number of rooms <span>8</span></li>
                                                <li>Parking Available <span>Yes</span></li>
                                                <li>Payment Process <span>Bank</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <img src=" {{ asset('/img/deal-01.jpg') }}" alt="">
                                    </div>
                                    <div class="col-lg-3">
                                        <h4>All Info About Apartment</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor
                                            pack incididunt ut labore et dolore magna aliqua quised ipsum suspendisse.
                                            <br><br>Swag fanny pack lyft blog twee. JOMO ethical copper mug, succulents
                                            typewriter shaman DIY kitsch twee taiyaki fixie hella venmo after messenger
                                            poutine next level humblebrag swag franzen.</p>
                                        <div class="icon-button">
                                            <a href="#"><i class="bi bi-calendar"></i> Schedule a visit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="villa" role="tabpanel" aria-labelledby="villa-tab">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="info-table">
                                            <ul>
                                                <li>Total Flat Space <span>250 m2</span></li>
                                                <li>Floor number <span>26th</span></li>
                                                <li>Number of rooms <span>5</span></li>
                                                <li>Parking Available <span>Yes</span></li>
                                                <li>Payment Process <span>Bank</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <img src="{{ asset('/img/deal-02.jpg') }}" alt="">
                                    </div>
                                    <div class="col-lg-3">
                                        <h4>Detail Info About New Villa</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor
                                            pack incididunt ut labore et dolore magna aliqua quised ipsum suspendisse.
                                            <br><br>Swag fanny pack lyft blog twee. JOMO ethical copper mug, succulents
                                            typewriter shaman DIY kitsch twee taiyaki fixie hella venmo after messenger
                                            poutine next level humblebrag swag franzen.</p>
                                        <div class="icon-button">
                                            <a href="#"><i class="bi bi-calendar"></i> Schedule a visit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="penthouse" role="tabpanel" aria-labelledby="penthouse-tab">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="info-table">
                                            <ul>
                                                <li>Total Flat Space <span>320 m2</span></li>
                                                <li>Floor number <span>34th</span></li>
                                                <li>Number of rooms <span>6</span></li>
                                                <li>Parking Available <span>Yes</span></li>
                                                <li>Payment Process <span>Bank</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <img src="{{ asset('/img/deal-03.jpg') }}" alt="">
                                    </div>
                                    <div class="col-lg-3">
                                        <h4>Extra Info About Penthouse</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor
                                            pack incididunt ut Kinfolk tonx seitan crucifix 3 wolf moon bicycle rights
                                            keffiyeh snackwave wolf same vice, chillwave vexillologistlabore et dolore
                                            magna aliqua quised ipsum suspendisse. <br><br>Swag fanny pack lyft blog
                                            twee. JOMO ethical copper mug, succulents typewriter shaman DIY kitsch twee
                                            taiyaki fixie hella venmo after messenger poutine next level humblebrag swag
                                            franzen.</p>
                                        <div class="icon-button">
                                            <a href="#"><i class="bi bi-calendar"></i> Schedule a visit</a>
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
</div>-->

@endsection