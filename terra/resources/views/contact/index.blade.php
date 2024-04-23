@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="page-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <span class="breadcrumb"><a href="#">Accueil</a> / Nous Contacter</span>
                <h3>Nous Contacter</h3>
            </div>
        </div>
    </div>
</div>

<div class="contact-page section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h6>| Nous Contacter</h6>
                    <h2>Rentrez en contact avec nos agents</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="item phone">
                            <img src="{{ asset('/img/phone-icon.png') }}" alt="" style="max-width: 52px;">
                            <h6>225 07 00 12 20<br><span>Téléphone</span></h6>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="item email">
                            <img src="{{ asset('/img/email-icon.png') }}" alt="" style="max-width: 52px;">
                            <h6>kra@gmail.com<br><span>Email</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <form id="contact-form" action="{{ route('contact.us') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <fieldset>
                                <label for="username">Nom et prénoms</label>
                                <input type="name" name="username" id="username"  autocomplete="on"
                                    required>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <label for="phone">N° Téléphone</label>
                                <input type="tel" name="telephone" id="telephone" 
                                    required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                    required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <label for="subject">Sujet</label>
                                <input type="subject" name="subject" id="subject" 
                                    autocomplete="on">
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <label for="message">Message</label>
                                <textarea name="message" id="message" ></textarea>
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