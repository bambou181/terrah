@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<div class="card mb-4">
    <div class="card-header">
        Create Terrains
    </div>
    <div class="card-body">
        @if($errors->any())
        <ul class="alert alert-danger list-unstyled">
            @foreach($errors->all() as $error)
            <li>- {{ $error }}</li>
            @endforeach
        </ul>
        @endif
        <form method="POST" action="{{ route('admin.terrain.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-3 col-md-6 col-sm-12 col-form-label">Nom:</label>
                        <div class="col-lg-9 col-md-6 col-sm-12">
                            <input name="name" value="{{ old('name') }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3 row">
                        <label class="col-lg-3 col-md-6 col-sm-12 col-form-label">Prix:</label>
                        <div class="col-lg-9 col-md-6 col-sm-12">
                            <input name="price" value="{{ old('price') }}" type="number" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="mb-3 row">
                        <label class="col-lg-3 col-md-6 col-sm-12 col-form-label">Taille:</label>
                        <div class="col-lg-9 col-md-6 col-sm-12">
                            <input name="size" value="{{ old('size') }}" type="number" class="form-control">
                        </div>
                    </div>
                </div>
               

                <div class="col-6">
                    <div class="mb-3 row">
                        <label class="col-lg-3 col-md-6 col-sm-12 col-form-label">Emplacement:</label>
                        <div class="col-lg-9 col-md-6 col-sm-12">
                            <input name="location"  value="{{ old('location') }}" type="text" class="form-control typeahead" >
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
                <textarea class="form-control" name="description" rows="4">{{ old('description') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<div class="card">
    <div class="card-header">
        Manage Terrains
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($viewData["terrains"] as $terrain)
                <tr>
                    <td>{{ $terrain->getId() }}</td>
                    <td>{{ $terrain->getName() }}</td>
                    <td>
                    <a class="btn btn-primary" href="{{route('admin.terrain.edit', ['id'=> $terrain->getId()])}}">
                        
                        <i class="bi-pencil"></i>
                        
                    </a>
                    </td>
                    <td>
                    <form action="{{ route('admin.terrain.delete', $terrain->getId())}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">
                        <i class="bi-trash"></i>
                        </button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>
@endsection