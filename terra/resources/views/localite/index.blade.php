@extends('layouts.app')
@section('content')


<div class="container">
<h5 class="my-5">Propriété par Département </h5>
    <div class="row">
        <div class="col-6">
            <div class="card" style="width: 100%">
                <div class="card-body">
                    @foreach ($departements->chunk(ceil($departements->count() / 2))->first() as $dept)
                    <h6 class="card-text mb-4 text-body-secondary">
                    <i class="bi bi-caret-right-fill"></i>
                        <a href="{{ route('localite.show', ['departement' => $dept]) }}">Propriété {{ $dept }}</a>
                    </h6>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card" style="width: 100%">
                <div class="card-body">
                    @foreach ($departements->chunk(ceil($departements->count() / 2))->last() as $dep)
                    <h6 class="card-text mb-4 text-body-secondary">
                    <i class="bi bi-caret-right-fill"></i>
                        Propriété {{ $dep }}
                    </h6>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection