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
        <div class="row">
            <div class="col-lg-8">
                <div class="main-image">
                    <img src="{{ asset('/storage/'.$viewData["terrain"]->getImage()) }}" alt="">
                </div>
                <div class="main-content">
                    <span class="category">{{ $viewData["terrain"]->getName() }} </span>
                    <h4>{{ $viewData["terrain"]->getLocation() }} </h4>
                    <p>{{ $viewData["terrain"]->getDescription() }} .</p><br><br>
                </div>
              
            </div>
            <div class="col-lg-4">
                <div class="info-table">
                    <ul>
                        <li>
                            <img src="{{ asset('img/info-icon-01.png') }}" alt="" style="max-width: 52px;">
                            <h4>{{ $viewData["terrain"]->getSize() }}<br><span>Taille</span></h4>
                        </li>
                        <li>
                            <img src="{{ asset('img/info-icon-02.png') }}" alt="" style="max-width: 52px;">
                            <h4>Contrat<br><span>Contrat Prêt</span></h4>
                        </li>
                        <li>
                            <img src="{{ asset('img/info-icon-03.png') }}" alt="" style="max-width: 52px;">
                            <h4>Paiement<br><span>Type de paiement</span></h4>
                        </li>
                        <li>
                            <img src="{{ asset('img/info-icon-04.png') }}" alt="" style="max-width: 52px;">
                            <h4>Sûreté<br><span>24/7 Sous Contrôle</span></h4>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
      @foreach($viewData["terrain"]->imgs as $img)
        <div class="col-lg-4 mb-3">
            <a href="{{ asset('/storage/'.$img) }}" data-fancybox="gallery" data-caption="Caption #1">
                <img src="{{ asset('/storage/'.$img) }}" alt=""/>  
            </a>

        </div>
      @endforeach
    </div>
</div>
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