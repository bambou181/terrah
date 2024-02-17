@extends('layouts.app')
@section('content')


<div class="container">
<h5 class="my-5">Propriété par Commune </h5>
    <div class="row">
        <div class="col-6">
            <div class="card" style="width: 100%">
                <div class="card-body">
                    @foreach ($communes->chunk(ceil($communes->count() / 2))->first() as $com)
                    <h6 class="card-text mb-4 text-body-secondary">
                    <i class="bi bi-caret-right-fill"></i>
                        <a href="{{ route('localite.viewcom', ['commune' => $com]) }}">Propriété {{ $com }}</a>
                    </h6>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card" style="width: 100%">
                <div class="card-body">
                    @foreach ($communes->chunk(ceil($communes->count() / 2))->last() as $comm)
                    <h6 class="card-text mb-4 text-body-secondary">
                    <i class="bi bi-caret-right-fill"></i>
                        Propriété {{ $comm }}
                    </h6>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection