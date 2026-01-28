@extends('template')

@section('content')
    <div class="container mt-4">
        <div>
            <div class=" mb-5 card-header d-flex justify-content-between align-items-center">
                <h3 class="mb-0">Liste des Types d'Assurance</h3>
                <a class="btn btn-success" href="{{ route('type.add') }}">➕ Ajouter</a>
            </div>
            <div>
                <table class="table table-striped table-bordered align-middle">
                    <thead class="table-dark">
                    <tr>
                        <th>Id</th>
                        <th>Libellé</th>
                        <th>Date de création</th>
                        <th>Date de mofication</th>
                        <th>Action(s)</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($types as $t)
                        <tr>
                            <td>{{ $t->id }}</td>
                            <td>{{ $t->libelle }}</td>
                            <td>{{$t->created_at}}</td>
                            <td>{{$t->updated_at}}</td>
                            <td>
                                <form action="{{ route('type.destroy', [$t->id]) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method("DELETE")
                                    <button class="btn btn-danger btn-sm" type="submit">Supprimer</button>
                                </form>
                                <a href="{{ route('type.edit', [$t->id]) }}" class="btn btn-primary btn-sm ms-2">Modifier</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
        <div class="d-flex justify-content-center mt-3">
            {{ $types->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
