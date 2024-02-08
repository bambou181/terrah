@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<div class="card mb-4">
    <div class="card-header">
        Edit Product
    </div>
    <div class="card-body">
        @if($errors->any())
        <ul class="alert alert-danger list-unstyled">
            @foreach($errors->all() as $error)
            <li>- {{ $error }}</li>
            @endforeach
        </ul>
        @endif
        <form action="{{ route('visite.update', ['id' => $visite->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Ajoutez les champs d'édition ici -->
            <!-- Par exemple, un champ pour la date de visite -->
            <label for="visitDate">Date de visite:</label>
            <input type="date" id="visitDate" name="visitDate" value="{{ $visite->visitDate }}" required>

            <button type="submit">Enregistrer les modifications</button>
        </form>
    </div>
</div>
@endsection