@extends('template')

@section('content')
    <div class="container mt-4">
        <h3 class="mb-3">Ajouter une Assurance</h3>
        <form action="{{ route('assurances.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="libelle" class="form-label">Libellé :</label>
                <input type="text" class="form-control" id="libelle" name="libelle" placeholder="Entrez le libellé">
            </div>

            <div class="mb-3">
                <label for="montant" class="form-label">Montant :</label>
                <input type="number" class="form-control" id="montant" name="montant" placeholder="Entrez le montant">
            </div>

            <div class="mb-3">
                <label for="bonus" class="form-label">Bonus :</label>
                <input type="text" class="form-control" id="bonus" name="bonus" placeholder="Entrez le bonus">
            </div>

            <button type="submit" class="btn btn-success">Enregistrer</button>
            <a href="{{ route('assurances.index') }}" class="btn btn-secondary ms-2">Annuler</a>
        </form>
    </div>
@endsection
