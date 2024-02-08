@extends('layouts.admin')
@section('content')
@if(count($visites) > 0)
<div class="card">
    <div class="card-header">
        Manage Terrains
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>

                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Date de visite</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($visites as $visite)
                <tr>
                    <td>{{ optional($visite->user)->name }}</td>
                    <td>{{ optional($visite->user)->email }}</td>
                    <td>{{ optional($visite->user)->phone }}</td>
                    @if($visite->visitDate)
                    <td>{{ $visite->visitDate }}</td>
                    @else
                    <td>RAS</td>
                    @endif
                    <td>
                        <a class="btn btn-primary" href="{{ route('admin.visite.edit', ['id' => $visite->id]) }}">

                            <i class="bi-pencil"></i>

                        </a>
                    </td>
                    <td>
                        <form action="{{ route('admin.visite.delete', ['id' => $visite->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
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
@else
<p>Aucune visite enregistrée.</p>
@endif
@endsection