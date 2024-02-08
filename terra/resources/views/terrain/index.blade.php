@extends('layouts.app')
@section('content')

<div class="page-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <span class="breadcrumb"><a href="#">Home</a> / Properties</span>
                <h3>Properties</h3>
            </div>
        </div>
    </div>
</div>

<div class="section properties">
    <div class="container">
        <ul class="properties-filter">
            <li>
                <a  href="#!" data-filter="*">Show All</a>
            </li>
            <li>
                <a href="#!" class="is_active" data-filter=".adv">Terrains</a>
            </li>
            <li>
                <a href="#!" data-filter=".str">Appartements</a>
            </li>
            <li>
                <a href="#!" data-filter=".rac">Villas</a>
            </li>
        </ul>
        <div class="row properties-box">

            <!-- Afficher les terrains de la recherche -->
            @if(isset($searchedTerrains) && count($searchedTerrains) > 0)
                @foreach ($searchedTerrains as $terrain)
                <!-- Affichage des terrains de la recherche -->
                <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv">
                    <div class="item">
                        <a href="{{ route('terrain.show', ['id'=> $terrain->getId()]) }}"><img class="img-fluid"
                                src="{{ asset('/storage/'.$terrain->getImage()) }}" alt=""></a>
                        <span class="category"> {{ $terrain->getName() }}</span>
                        <h6>{{ $terrain->getPrice() }}</h6>
                        <!--<h4><a href="property-details.html">$terrain->getDescription()</a></h4>-->
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
            @endif
           
            
            <!-- Afficher tous les terrains disponibles -->
            @foreach ($allTerrains as $terrain)
            <!-- Affichage des terrains -->
            <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv">
                <div class="item">
                    <a href="{{ route('terrain.show', ['id'=> $terrain->getId()]) }}"><img class="img-fluid"
                            src="{{ asset('/storage/'.$terrain->getImage()) }}" alt=""></a>
                    <span class="category"> {{ $terrain->getName() }}</span>
                    <h6>{{ $terrain->getPrice() }}</h6>
                    <!--<h4><a href="property-details.html">$terrain->getDescription()</a></h4>-->
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



        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li><a class="is_active" href="#">1</a></li>
                    <li><a  href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">>></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection