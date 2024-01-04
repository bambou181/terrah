@extends('layouts.app')
@section('title',$viewData["title"])
@section('content')

<div class="main-banner">
    <div class="owl-carousel owl-banner">
        <div class="item item-1">
            <div class="header-text">
                <span class="category">Toronto, <em>Canada</em></span>
                <h2>Hurry!<br>Get the Best Villa for you</h2>
            </div>
            <div class="container">

                <div class="container mt-4">
                    <div class="container container-form">
                        <div class="row ">
                            <div class=" col-12 col-lg-5 mb-4  ">
                                <form action="index.html">
                                    <input type="text" class="form-control form-control-lg border-0"
                                        placeholder="Aire" />
                                </form>
                            </div>
                            <div class="col-12 col-lg-5 mb-4">
                                <form action="index.html">
                                    <input type="text" class="form-control form-control-lg border-0"
                                        placeholder="Lieu" />
                                </form>
                            </div>
                            <div class="col-2">
                                <button class="btn btn-primary btn-lg">
                                    search <i data-feather="search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
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
                            <h4>250 m2<br><span>Choix du terrain</span></h4>
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
                        <li>
                            <img src="{{ asset('/img/info-icon-01.png') }}" alt="" style="max-width: 52px;">
                            <h4>Safety<br><span>24/7</span></h4>
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
                    <h6>| Video View</h6>
                    <h2>Get Closer View & Different Feeling</h2>
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
                    <img src="{{ asset('/img/video-frame.jpg') }}" alt="">
                    <a href="https://youtube.com" target="_blank"><i class="bi bi-play"></i></a>
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
                    <h6>| Meilleur Deal</h6>
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

<div class="properties section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <div class="section-heading text-center">
                    <h6>| Properties</h6>
                    <h2>We Provide The Best Property You Like</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($viewData["terrains"] as $terrain)
                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <a href="{{ route('terrain.show', ['id'=> $terrain->getId()]) }}"><img src="{{ asset('/storage/'.$terrain->getImage()) }}" alt=""></a>
                        <span class="category">{{ $terrain->getName() }}</span>
                        <h6>{{ $terrain->getPrice() }}</h6>
                        <h4><a href="property-details.html">{{ $terrain->getDescription() }}</a></h4>
                        <ul>
                            <li>Emplacement: <span>{{ $terrain->getLocation() }}</span></li>
                            <!--<li>Score: <span>{{ $terrain->getScore() }}</span></li>-->
                            <li>Taille: <span>{{ $terrain->getSize() }}</span></li>
                            <li>En vente depuis le: <span>{{ $terrain->getCreatedAt() }}</span></li>

                        </ul>
                        <div class="main-button">
                            <a href="property-details.html">Schedule a visit</a>
                        </div>
                    </div>
                </div>
            @endforeach
        <!--<div class="col-lg-4 col-md-6">
          <div class="item">
            <a href="property-details.html"><img src="{{ asset('/img/property-02.jpg') }}" alt=""></a>
            <span class="category">Luxury Villa</span>
            <h6>$1.180.000</h6>
            <h4><a href="property-details.html">54 Mid Street Florida, OR 27001</a></h4>
            <ul>
              <li>Bedrooms: <span>6</span></li>
              <li>Bathrooms: <span>5</span></li>
              <li>Area: <span>450m2</span></li>
              <li>Floor: <span>3</span></li>
              <li>Parking: <span>8 spots</span></li>
            </ul>
            <div class="main-button">
              <a href="property-details.html">Schedule a visit</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="item">
            <a href="property-details.html"><img src="{{ asset('/img/property-03.jpg') }}" alt=""></a>
            <span class="category">Luxury Villa</span>
            <h6>$1.460.000</h6>
            <h4><a href="property-details.html">26 Old Street Miami, OR 38540</a></h4>
            <ul>
              <li>Bedrooms: <span>5</span></li>
              <li>Bathrooms: <span>4</span></li>
              <li>Area: <span>225m2</span></li>
              <li>Floor: <span>3</span></li>
              <li>Parking: <span>10 spots</span></li>
            </ul>
            <div class="main-button">
              <a href="property-details.html">Schedule a visit</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="item">
            <a href="property-details.html"><img src="{{ asset('/img/property-04.jpg') }}" alt=""></a>
            <span class="category">Apartment</span>
            <h6>$584.500</h6>
            <h4><a href="property-details.html">12 New Street Miami, OR 12650</a></h4>
            <ul>
              <li>Bedrooms: <span>4</span></li>
              <li>Bathrooms: <span>3</span></li>
              <li>Area: <span>125m2</span></li>
              <li>Floor: <span>25th</span></li>
              <li>Parking: <span>2 cars</span></li>
            </ul>
            <div class="main-button">
              <a href="property-details.html">Schedule a visit</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="item">
            <a href="property-details.html"><img src="{{ asset('/img/property-05.jpg') }}" alt=""></a>
            <span class="category">Penthouse</span>
            <h6>$925.600</h6>
            <h4><a href="property-details.html">34 Beach Street Miami, OR 42680</a></h4>
            <ul>
              <li>Bedrooms: <span>4</span></li>
              <li>Bathrooms: <span>4</span></li>
              <li>Area: <span>180m2</span></li>
              <li>Floor: <span>38th</span></li>
              <li>Parking: <span>2 cars</span></li>
            </ul>
            <div class="main-button">
              <a href="property-details.html">Schedule a visit</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="item">
            <a href="property-details.html"><img src="{{ asset('/img/property-06.jpg') }}" alt=""></a>
            <span class="category">Modern Condo</span>
            <h6>$450.000</h6>
            <h4><a href="property-details.html">22 New Street Portland, OR 16540</a></h4>
            <ul>
              <li>Bedrooms: <span>3</span></li>
              <li>Bathrooms: <span>2</span></li>
              <li>Area: <span>165m2</span></li>
              <li>Floor: <span>26th</span></li>
              <li>Parking: <span>3 cars</span></li>
            </ul>
            <div class="main-button">
              <a href="property-details.html">Schedule a visit</a>
            </div>
          </div>
        </div>-->
        </div>
    </div>
</div>

<div class="contact section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <div class="section-heading text-center">
                    <h6>| Contact Us</h6>
                    <h2>Get In Touch With Our Agents</h2>
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