@extends('layouts.app')
@section('title',$donnees["title"])
@section('content')

<div class="main-banner">
    <div class="owl-carousel owl-banner">
        <div class="item item-1">
            <div class="header-text" style="padding: 0 21% 0 21%">
                <span class="category">Abidjan, <em>Côte d'Ivoire</em></span>

            </div>
            <div class="container fieldsearch py-4">
                <p class="px-4 pt-4 fs-4 fw-bold">Que cherchez-vous ?</p>
                <form action="{{ route('home.search') }}" method="post">
                    @csrf
                    <div class="row p-4">
                        <div class="col-12 mb-3">
                            <label for="" class="fw-bold fs-6">LOCALITÉS</label><br>
                            <input class="form-control" id="search" type="text" name="localite" 
                                placeholder="Quartier, ville, code postal, département">

                        </div>
                        <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4 col-12 mb-3">
                            <label for="">TYPE DE BIENS</label><br>
                            <select class="form-select " name="type">
                                <option value="terrain" selected>Terrains...</option>
                                <option value="1">Appartements</option>
                                <option value="2">Villa</option>
                                <option value="3">Three</option>
                            </select>

                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col-12 mb-3">
                            <label for="">SURFACE</label><br>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="min" name="surface">
                                <span class="input-group-text">m2</span>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col-12 mb-3">
                            <label for="budget">BUDGET</label><br>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="max" name="budget">
                                <span class="input-group-text">F CFA</span>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-12 mb-3">
                            <br>
                            <button type="submit" class="btn btn-danger">Rechercher</button>
                        </div>

                    </div>
                </form>


            </div>


        </div>
        <div class="item item-2">
            <div class="header-text">
                <span class="category">Melbourne, <em>Australia</em></span>
                <h2>Be Quick!<br>Get the best villa in town</h2>
            </div>
        </div>
        <div class="item item-3">
            <div class="header-text">
                <span class="category">Miami, <em>South Florida</em></span>
                <h2>Act Now!<br>Get the highest level penthouse</h2>
            </div>
        </div>
    </div>
</div>


<div class="featured section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="left-image">
                    <img src="{{ asset('/img/paysage.jpg') }}" alt="">
                    <a href="property-details.html"><img src="{{ asset('/img/featured-icon.png') }}" alt=""
                            style="max-width: 60px; padding: 0px;"></a>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="section-heading">
                    <h6>| Featured</h6>
                    <h2>Terrains &amp; à votre portée</h2>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Devenez proporiétaire de terrains en quelques jours avec nous ?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                En effet, notre équipe travaille dur afin de mettre à votre disposition des terrains en
                                vente
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Comment ça fonctionne ?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn't eiusmod
                                tempor
                                incididunt ut labore consectetur <code>adipiscing</code> elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Respect des règles en vigueur par la loi concernant les ventes et achats de terrains
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn't eiusmod
                                tempor
                                incididunt ut labore consectetur <code>adipiscing</code> elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="info-table">
                    <ul>
                        <li>
                            <img src="{{ asset('/img/info-icon-01.png') }}" alt="" style="max-width: 52px;">
                            <h4>Taille<br><span>Choix du terrain</span></h4>
                        </li>
                        <li>
                            <img src="{{ asset('/img/info-icon-01.png') }}" alt="" style="max-width: 52px;">
                            <h4>Visite <br><span>Programmer une visite et donner votre decision</span></h4>
                        </li>

                        <li>
                            <img src="{{ asset('/img/info-icon-02.png') }}" alt="" style="max-width: 52px;">
                            <h4>Contrat<br><span>Contrat déjà prêt</span></h4>
                        </li>
                        <li>
                            <img src="{{ asset('/img/info-icon-03.png') }}" alt="" style="max-width: 52px;">
                            <h4>Paiement<br><span> Traitement de paiement selon l'option choisi</span></h4>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="video section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <div class="section-heading text-center">
                    <h6>Nous Vous Accompagnons</h6>
                    <h2>De l'Achat du Terrain A la Construction</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="video-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="video-frame">
                    <video src="{{ asset('/video/visite.mp4') }}" autoplay muted loop></video>
                    <a href="" target="_blank"><i class="bi bi-play"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="fun-facts">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="wrapper">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="counter">
                                <h2 class="timer count-title count-number" data-to="34" data-speed="1000"></h2>
                                <p class="count-text ">Buildings<br>Finished Now</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="counter">
                                <h2 class="timer count-title count-number" data-to="12" data-speed="1000"></h2>
                                <p class="count-text ">Years<br>Experience</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="counter">
                                <h2 class="timer count-title count-number" data-to="24" data-speed="1000"></h2>
                                <p class="count-text ">Awwards<br>Won 2023</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section best-deal">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-heading">
                    <h6>| Meilleur Deal - Soyez le Premier</h6>
                    <h2>Deviens propriétaire MAINTENANT!</h2>
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
                                        aria-selected="true">Terrain</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="villa-tab" data-bs-toggle="tab" data-bs-target="#villa"
                                        type="button" role="tab" aria-controls="villa" aria-selected="false">Villa
                                        Appartement</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="penthouse-tab" data-bs-toggle="tab"
                                        data-bs-target="#penthouse" type="button" role="tab" aria-controls="penthouse"
                                        aria-selected="false">Villa</button>
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
                                                <li>Total Flat Space <span>185 m2</span></li>
                                                <li>Floor number <span>26th</span></li>
                                                <li>Number of rooms <span>4</span></li>
                                                <li>Parking Available <span>Yes</span></li>
                                                <li>Payment Process <span>Bank</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <img src="{{ asset('/img/space5.jpg') }}" alt="">
                                    </div>
                                    <div class="col-lg-3">
                                        <h4>Extra Info About Property</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor
                                            pack incididunt ut
                                            labore et dolore magna aliqua quised ipsum suspendisse.
                                            <br><br>When you need free CSS templates, you can simply type TemplateMo in
                                            any search engine
                                            website. In addition, you can type TemplateMo Portfolio, TemplateMo One Page
                                            Layouts, etc.
                                        </p>
                                        <div class="icon-button">
                                            <a href="property-details.html"><i class="bi bi-calendar"></i> Schedule a
                                                visit</a>
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
                                        <img src="{{ asset('/img/deal-02.png') }}" alt="">
                                    </div>
                                    <div class="col-lg-3">
                                        <h4>Detail Info About Villa</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor
                                            pack incididunt ut
                                            labore et dolore magna aliqua quised ipsum suspendisse. <br><br>Swag fanny
                                            pack lyft blog twee.
                                            JOMO ethical copper mug, succulents typewriter shaman DIY kitsch twee
                                            taiyaki fixie hella venmo
                                            after messenger poutine next level humblebrag swag franzen.</p>
                                        <div class="icon-button">
                                            <a href="property-details.html"><i class="bi bi-calendar"></i> Schedule a
                                                visit</a>
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
                                        <img src="{{ asset('/img/deal-03.png') }}" alt="">
                                    </div>
                                    <div class="col-lg-3">
                                        <h4>Extra Info About Penthouse</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor
                                            pack incididunt ut
                                            labore et dolore magna aliqua quised ipsum suspendisse. <br><br>Swag fanny
                                            pack lyft blog twee.
                                            JOMO ethical copper mug, succulents typewriter shaman DIY kitsch twee
                                            taiyaki fixie hella venmo
                                            after messenger poutine next level humblebrag swag franzen.</p>
                                        <div class="icon-button">
                                            <a href="property-details.html"><i class="bi bi-calendar"></i> Schedule a
                                                visit</a>
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

<div class="mt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <div class="section-heading text-center">
                    <h6>| Retrouver nos annonces par</h6>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <h6>LOCALITÉS</h6>
                <img src="{{ asset('/img/space5.jpg') }}" style="border-radius:10px; height:200px; max-width:100%;" alt="">
                <p class="mt-5"><a href="{{route('localite.index')}}">Immobilier par Départements</a></p>
                <p>Immobilier par Communes</p>
            </div>
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <h6>TYPE DE BIENS</h6>
                <img src="{{ asset('/img/video-bg.jpg') }}" style="border-radius:10px; height:200px; max-width:100%;" alt="">
                <p class="mt-5">Terrains à vendre</p>
                <p>Appartements à vendre</p>
                <p>Maisons à vendre</p>
                <p>Studios à vendre</p>
                <p>Villas à vendre</p>
                <p>Immeubles à vendre</p>
            </div>
            <div class="col-lg-6">

            </div>
        </div>
    </div>
</div>

<div class="contact section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <div class="section-heading text-center">
                    <h6>| Nous Contacter</h6>
                    <h2>Pour plus d'informations</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact-content">
    <div class="container">
        <div class="row">

            <div class="col-lg-5 mx-auto">
                <form id="contact-form" action="" method="post">
                    <div class="row">
                        <div class="col-lg-12">
                            <fieldset>
                                <label for="name">Full Name</label>
                                <input type="name" name="name" id="name" placeholder="Your Name..." autocomplete="on"
                                    required>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <label for="email">Email Address</label>
                                <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                    placeholder="Your E-mail..." required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <label for="subject">Subject</label>
                                <input type="subject" name="subject" id="subject" placeholder="Subject..."
                                    autocomplete="on">
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <label for="message">Message</label>
                                <textarea name="message" id="message" placeholder="Your Message"></textarea>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <button type="submit" id="form-submit" class="orange-button">Send Message</button>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection