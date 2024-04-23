@extends('layouts.app')
@section('content')


<div class="container">
    <h5 class="my-5">Propriété par Commune </h5>
    <div class="row">
        <div class="col-6">
            <div class="card" style="width: 100%">
                <div class="card-body">
                    @foreach ($communes->chunk(ceil($communes->count() / 2))->first() as $com)
                    <p class="card-text text-body-secondary">
                        <i class="bi bi-caret-right-fill"></i>
                        <a href="{{ route('localite.viewcom', ['commune' => $com]) }}" class="link-dark ">Propriété
                            {{ $com }}</a>
                    </p>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card" style="width: 100%">
                <div class="card-body">
                    @foreach ($communes->chunk(ceil($communes->count() / 2))->last() as $comm)
                    <p class="card-text text-body-secondary">
                        <i class="bi bi-caret-right-fill"></i>
                        <a href="{{ route('localite.viewcom', ['commune' => $com]) }}" class="link-dark ">Propriété
                            {{ $comm }}</a>
                    </p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection