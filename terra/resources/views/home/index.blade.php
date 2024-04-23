@extends('layouts.app')
@section('title',$donnees["title"])
@section('content')

<div class="main-banner">
    <div class="owl-carousel owl-banner">
        <div class="item item-1">
            <div class="header-text" style="padding: 0 21% 0 21%">
                <span class="category">CI, <em>Côte d'Ivoire</em></span>

            </div>
            <div class="container fieldsearch py-4">
                <p class="px-4 pt-4 fs-4 fw-bold">Que cherchez-vous ?</p>
                @include('search.find')


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
                    <img src="{{ asset('/img/paysage.jpg') }}" alt="" style="height: 100%;">
                    <a href="property-details.html"><img src="{{ asset('/img/featured-icon.png') }}" alt=""
                            style="max-width: 60px; padding: 0px;"></a>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="section-heading">
                    <h6>Pour vous </h6>
                    <h2>Terrains à votre portée</h2>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Devenez propriétaire de terrains en quelques jours avec nous ?
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

                                <code>1.</code> <strong>Trouvez votre terrain : </strong>Parcourez notre sélection de
                                terrains en
                                fonction de
                                votre localisation préférée.<br><br>
                                <code>2.</code><strong> Sélectionnez votre terrain : </strong> Choisissez le terrain qui
                                correspond le
                                mieux à vos besoins et à vos critères.<br><br>
                                <code>3.</code><strong> Remplissez le formulaire : </strong>Exprimez votre intérêt en
                                remplissant notre
                                formulaire simple et rapide.<br><br>
                                <code>4.</code><strong>Attendez notre appel : </strong> Un de nos agents vous contactera
                                pour discuter des
                                prochaines étapes.
                                </ol>
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
                                Lorsque vous envisagez l'achat d'un terrain, il est primordial de vous assurer que la
                                transaction est conforme aux règles et réglementations en vigueur. En respectant ces
                                normes légales, vous garantissez une acquisition sécurisée et sans tracas. <code>Nous vous assurons</code>
                                que notre agence veille au respect de ces règles pour vous offrir une expérience
                                d'achat de terrain en toute confiance.
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
                            <h4>Choix<br><span>Choix du terrain</span></h4>
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
                            <h4>Paiement<br><span> Paiement à votre rythme</span></h4>
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
                    <h2>De l'Achat du Terrain A la Construction si vous le souhaitez</h2>
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

                                <p class="count-text ">Simplicité<br>Accessibilité </p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="counter">
                                <p class="count-text ">Transparence<br>Fiabilité</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="counter">
                                <p class="count-text ">Service client<br>Exceptionnel</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="mt-5">
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
                <h6 class="mb-3">LOCALITÉS</h6>
                <img src="{{ asset('/img/space5.jpg') }}" style="border-radius:10px; height:200px; max-width:100%;"
                    alt="">
                <p class="mt-3"><a href="{{route('localite.index')}}"
                        class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Immobilier
                        par Départements</a></p>
                <p><a href="{{route('localite.comm')}}"
                        class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Immobilier
                        par Communes</a></p>
            </div>
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <h6 class="mb-3">Terrains</h6>
                <img src="{{ asset('/img/video-bg.jpg') }}" style="border-radius:10px; height:200px; max-width:100%;"
                    alt="">
                <p class="mt-3"><a href="{{route('terrain.index')}}"
                        class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Terrains
                        à vendre</a></p>


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
                <form id="contact-form" action="{{ route('contact.us') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <fieldset>
                                <label for="username">Nom et prénoms</label>
                                <input type="name" name="username" id="username" autocomplete="on" required>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <label for="phone">N° Téléphone</label>
                                <input type="tel" name="telephone" id="telephone" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <label for="subject">Sujet</label>
                                <input type="subject" name="subject" id="subject" autocomplete="on">
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <label for="message">Message</label>
                                <textarea name="message" id="message"></textarea>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <button type="submit" id="form-submit" class="orange-button">Envoyer</button>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection