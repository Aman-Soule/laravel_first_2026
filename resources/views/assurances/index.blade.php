@extends('template')

@section('content')
    <div class="container mt-4">
        <h3 class="mb-3">Liste des Assurances</h3>
        <a href="{{ route('assurances.create') }}" class="btn btn-success mb-3">➕ Ajouter une assurance</a>

        <table class="table table-striped table-bordered align-middle">
            <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Libellé</th>
                <th>Montant</th>
                <th>Bonus</th>
                <th>Type de l'Assurance</th>
                <th>Date d'ajout</th>
                <th>Date de modification</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($assurances as $assurance)
                <tr>
                    <td>{{ $assurance->id }}</td>
                    <td>{{ $assurance->libelle }}</td>
                    <td>{{ $assurance->montant }} CFA</td>
                    <td>{{ $assurance->bonus }}</td>
                    <td>{{$assurance->type ? $assurance->type->libelle : '-'}}</td>
                    <td>{{ $assurance->created_at }}</td>
                    <td>{{ $assurance->updated_at }}</td>
                    <td>
                        <form action="{{ route('assurances.destroy', $assurance->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                        <a href="{{ route('assurances.edit', $assurance->id) }}" class="btn btn-warning btn-sm ms-2">Modifier</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-center mt-3">
            {{ $assurances->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
