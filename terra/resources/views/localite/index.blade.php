@extends('layouts.app')
@section('content')

<div class="container">
    <h5 class="my-5">Propriété par Département </h5>
    <div class="row">
        <div class="col-6">
            <div class="card" style="width: 100%">
                <div class="card-body">
                    @foreach ($departements->chunk(ceil($departements->count() / 2))->first() as $dept)
                    <p class="card-text  text-body-secondary">
                        <i class="bi bi-caret-right-fill"></i>
                        <a href="{{ route('localite.show', ['departement' => $dept]) }}" class="link-dark ">Propriété {{ $dept }}</a>
                    </p>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card" style="width: 100%">
                <div class="card-body">
                    @foreach ($departements->chunk(ceil($departements->count() / 2))->last() as $dep)
                    <p class="card-text  text-body-secondary">
                        <i class="bi bi-caret-right-fill"></i>
                        <a href="{{ route('localite.show', ['departement' => $dep]) }}" class="link-dark ">Propriété {{ $dep }}</a>
                    </p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection