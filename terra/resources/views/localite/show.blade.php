@extends('layouts.app')
@section('content')

<div class="container">
    <p class="px-4 pt-4 fs-4 fw-bold">Que cherchez-vous ?</p>
    <form action="{{ route('home.search') }}" method="post">
        @csrf
        <div class="row p-4">
            <div class="col-12 mb-3">
                <label for="" class="fw-bold fs-6">LOCALITÉS</label><br>
                <input class="form-control form-control-lg" id="search" type="text" name="localite"
                    placeholder="Ajouter une autre localité ?">

            </div>
            <div class=" col-xs-12 col-sm-12 col-md-4 col-lg-4 col-12 mb-3">
                <label for="">TYPE DE BIENS</label><br>
                <select class="form-select form-select-lg" name="type">
                    <option value="terrain" selected>Terrains...</option>
                    <option value="1">Appartements</option>
                    <option value="2">Villa</option>
                    <option value="3">Three</option>
                </select>

            </div>
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col-12 mb-3">
                <label for="">SURFACE</label><br>
                <div class="input-group">
                    <input type="text" class="form-control form-control-lg" placeholder="min" name="surface">
                    <span class="input-group-text">m2</span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col-12 mb-3">
                <label for="budget">BUDGET</label><br>
                <div class="input-group">
                    <input type="text" class="form-control form-control-lg" placeholder="max" name="budget">
                    <span class="input-group-text">F CFA</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-12 mb-3">
                <br>
                <button type="submit" class="btn btn-danger btn-lg">Rechercher</button>
            </div>

        </div>
    </form>
</div>
<div class="container">
<div class="card mb-3" style="max-width: 650px;">
  <div class="row g-0">
    <div class="col-md-7">
      <img src="{{ asset('img/paysage.jpg') }}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-5">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
</div>
@endsection