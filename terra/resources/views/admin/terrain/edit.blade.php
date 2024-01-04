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
        <form method="POST" action="{{ route('admin.terrain.update', ['id'=> $viewData['terrain']->getId()]) }}"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-3 col-md-6 col-sm-12 col-form-label">Nom:</label>
                        <div class="col-lg-9 col-md-6 col-sm-12">
                            <input name="name" value="{{ $viewData['terrain']->getName() }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3 row">
                        <label class="col-lg-3 col-md-6 col-sm-12 col-form-label">Prix:</label>
                        <div class="col-lg-9 col-md-6 col-sm-12">
                            <input name="price" value="{{ $viewData['terrain']->getPrice() }}" type="number" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="mb-3 row">
                        <label class="col-lg-3 col-md-6 col-sm-12 col-form-label">Taille:</label>
                        <div class="col-lg-9 col-md-6 col-sm-12">
                            <input name="size" value="{{ $viewData['terrain']->getSize() }}" type="number" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="mb-3 row">
                        <label class="col-lg-3 col-md-6 col-sm-12 col-form-label">Emplacement:</label>
                        <div class="col-lg-9 col-md-6 col-sm-12">
                            <input name="location" value="{{ $viewData['terrain']->getLocation() }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3 row">
                        <label class="col-lg-3 col-md-6 col-sm-12 col-form-label">Image:</label>
                        <div class="col-lg-9 col-md-6 col-sm-12">
                            <input class="form-control" type="file" name="image" >
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3 row">
                        <label class="col-lg-3 col-md-6 col-sm-12 col-form-label">Autres:</label>
                        <div class="col-lg-9 col-md-6 col-sm-12">
                            <input class="form-control" type="file" name="imgs[]" multiple>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description"
                    rows="3">{{ $viewData['terrain']->getDescription() }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
</div>
@endsection