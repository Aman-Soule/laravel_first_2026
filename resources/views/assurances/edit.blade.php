@extends('template')

@section('content')
    <div class="container mt-4">
        <h3 class="mb-3">Modifier une Assurance</h3>
        <form action="{{ route('assurances.update', $assurance->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="libelle" class="form-label">Nom :</label>
                <input type="text" class="form-control" id="libelle" name="libelle" value="{{ $assurance->libelle }}">
            </div>

            <div class="mb-3">
                <label for="montant" class="form-label">Montant :</label>
                <input type="number" class="form-control" id="montant" name="montant" value="{{ $assurance->montant }}">
            </div>

            <div class="mb-3">
                <label for="bonus" class="form-label">Bonus :</label>
                <input type="number" class="form-control" id="bonus" name="bonus" value="{{ $assurance->bonus }}">
            </div>

            <button type="submit" class="btn btn-primary">Mettre à jour</button>
            <a href="{{ route('assurances.index') }}" class="btn btn-secondary ms-2">Annuler</a>
        </form>
    </div>
@endsection
