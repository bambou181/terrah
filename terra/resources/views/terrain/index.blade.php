@extends('layouts.app')
@section('content')

<div class="page-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <span class="breadcrumb"><a href="#">Accueil</a> / Propriétés</span>
                <h3>Propriétés</h3>
            </div>
        </div>
    </div>
</div>
@if(isset($sms))
    <div class="alert alert-success sms">
        {{ $sms }}
    </div>
@endif




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
        <div class="row properties-box ">

            <!-- Afficher les terrains de la recherche -->
            @if(isset($searchedTerrains) && count($searchedTerrains) > 0)
                @foreach ($searchedTerrains as $terrain)
                <!-- Affichage des terrains de la recherche -->
                <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv border">
                    <div class="item border">
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
                    <!-- Lien vers la page précédente -->
                    @if ($allTerrains->onFirstPage())
                    <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
                    @else
                    <li class="page-item"><a class="page-link" href="{{ $allTerrains->previousPageUrl() }}">&laquo;</a>
                    </li>
                    @endif

                    <!-- Liens vers les pages -->
                    <!-- Liens vers les pages -->
                    @foreach ($allTerrains->links()->elements[0] as $page => $url)
                    @if ($page == $allTerrains->currentPage())
                    <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                    @else
                    <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                    @endforeach

                    <!-- Lien vers la page suivante -->
                    @if ($allTerrains->hasMorePages())
                    <li class="page-item"><a class="page-link" href="{{ $allTerrains->nextPageUrl() }}">&raquo;</a></li>
                    @else
                    <li class="page-item disabled"><span class="page-link">&raquo;</span></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection