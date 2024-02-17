@extends('layouts.app')
@section('content')

<div class="container border p-0">
    <form action="{{ route('home.search') }}" method="post">
        @csrf
        <div class="row p-2">
            <div class="col-12 mb-3">
                <label for="" class="fw-bold fs-6">LOCALITÉS</label><br>
                <input class="form-control form-control-md" id="search" type="text" name="localite"
                    placeholder="Ajouter une autre localité ?">

            </div>
            <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4 col-12 mb-3">
                <label for="">TYPE DE BIENS</label><br>
                <select class="form-select form-select-md" name="type">
                    <option value="terrain" selected>Terrains...</option>
                    <option value="1">Appartements</option>
                    <option value="2">Villa</option>
                    <option value="3">Three</option>
                </select>

            </div>
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col-12 mb-3">
                <label for="">SURFACE</label><br>
                <div class="input-group">
                    <input type="text" class="form-control form-control-md" placeholder="min" name="surface">
                    <span class="input-group-text">m2</span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col-12 mb-3">
                <label for="budget">BUDGET</label><br>
                <div class="input-group">
                    <input type="text" class="form-control form-control-md" placeholder="max" name="budget">
                    <span class="input-group-text">F CFA</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-12 mb-3">
                <br>
                <button type="submit" class="btn btn-danger btn-md">Rechercher</button>
            </div>

        </div>
    </form>
</div><br>
@if(count($terrainsByCom) > 0)
@foreach($terrainsByCom as $bycom)
<div class="container mb-3">
    <div class="card mb-3" style="max-width: 650px;">
        <div class="row g-0">
            <div class="col-md-7">
                <img src="{{ asset('/storage/'.$bycom->getImage()) }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-5">
                <div class="card-body">
                    <h5 class="card-title">{{ $bycom->getPrice() }}</h5>
                    <p class="card-text">This is a wider card with supporting text below.</p>
                    <h5 class="card-title">{{ $bycom->getSize() }}</h5>
                    <h5 class="card-title">{{ $bycom->getLocation() }}</h5>
                    <div class="row">
                        <div class="col-10">
                            <a href="#" class="btn btn-danger">Voir +</a>
                        </div>
                        <div class="col-2">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="bi bi-telephone"></i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary">
                                            <h1 class="modal-title text-white fs-5" id="exampleModalLabel">Contacter l'agence</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container mb-3" style="width:50%;margin:auto">
                                                <i class="bi bi-telephone"> 07 07 00 12 20</i>
                                            </div>
                                            @include('auth.register')
                                            

                                        </div>
                                        
                                    </div>
                                </div>
                            </div>


                        </div>


                    </div>


                </div>
            </div>
            <p class="m-3">{{  $bycom->getDescription() }}</p>
        </div>
    </div>
</div>
@endforeach
@else
<div class="container mb-3">
    <p>Aucune propriété trouvée</p>
</div>
@endif
@endsection