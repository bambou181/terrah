@extends('layouts.app')
@section('content')

<div class="container-fluid  my-5">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 border-white text-center container-with-triangle">
        <div class="mt-4">
             <i class="bi bi-search text-white"></i>
            <p class="mt-2 text-white">Modifier votre recherche</p>
        </div>    
       
        </div>
        <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-10 border-white p-0 immo">
            @include('search.find')
        </div><br>
    </div>
</div>

@if(count($terrainsByDept) > 0)
@foreach($terrainsByDept as $bydept)
<div class="container mb-3">
    <div class="card mb-3" style="max-width: 650px;">
        <div class="row g-0">
            <div class="col-md-7">
            <a href="{{ route('terrain.show', ['id'=> $bydept->getId()]) }}"><img src="{{ asset('/storage/'.$bydept->getImage()) }}" class="img-fluid rounded-start" alt="..."></a>
            </div>
            <div class="col-md-5">
                <div class="card-body">
                    <h5 class="card-title">{{ $bydept->getPrice() }}</h5>
                    <p class="card-text">This is a wider card with supporting text below.</p>
                    <h5 class="card-title">{{ $bydept->getSize() }}</h5>
                    <h5 class="card-title">{{ $bydept->getLocation() }}</h5>
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
                                            <h1 class="modal-title text-white fs-5" id="exampleModalLabel">Contacter
                                                l'agence</h1>
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
            <p class="m-3">{{  $bydept->getDescription() }}</p>
        </div>
    </div>
</div><br>
<div class="container">
    <div class="row">
    <div class="col-lg-12">
        <ul class="pagination">
            <!-- Lien vers la page précédente -->
            @if ($terrainsByDept->onFirstPage())
            <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
            @else
            <li class="page-item"><a class="page-link" href="{{ $terrainsByDept->previousPageUrl() }}">&laquo;</a>
            </li>
            @endif

            <!-- Liens vers les pages -->
            <!-- Liens vers les pages -->
            @foreach ($terrainsByDept->links()->elements[0] as $page => $url)
            @if ($page == $terrainsByDept->currentPage())
            <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
            @else
            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
            @endif
            @endforeach

            <!-- Lien vers la page suivante -->
            @if ($terrainsByDept->hasMorePages())
            <li class="page-item"><a class="page-link" href="{{ $terrainsByDept->nextPageUrl() }}">&raquo;</a></li>
            @else
            <li class="page-item disabled"><span class="page-link">&raquo;</span></li>
            @endif
        </ul>
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