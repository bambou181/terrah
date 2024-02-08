@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="properties section">
    <div class="container">

        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    @foreach ($viewData["terrains"] as $terrain)
                    <div class="col-lg-6 col-md-6">
                        <div class="item">
                            <a href="{{ route('terrain.show', ['id'=> $terrain->getId()]) }}"><img
                                    src="{{ asset('/storage/'.$terrain->getImage()) }}" alt=""></a>
                            <span class="category">{{ $terrain->getName() }}</span>
                            <h6>{{ $terrain->getPrice() }}</h6>
                            <ul>
                                <li>Emplacement: <span>{{ $terrain->getLocation() }}</span></li>
                                <!--<li>Score: <span>{{ $terrain->getScore() }}</span></li>-->
                                <li>Taille: <span>{{ $terrain->getSize() }}</span></li>
                                <li>En vente depuis le: <span>{{ $terrain->getCreatedAt() }}</span></li>

                            </ul>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
            <div class="col-lg-4">
                <div class="info-table ">
                    <button type="button" class="btn btn-info btn-lg w-100">Contacter notre équipe</button><br><br>
                    <ul>

                        <li>
                            @include('auth.register')
                        </li>

                    </ul>
                </div>
            </div>
            


        </div>
    </div>
</div>
@endsection