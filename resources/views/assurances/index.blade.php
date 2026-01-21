<!DOCTYPE html>
<html>
<head>
    <title>Liste des Assurances</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h1 { color: #2c3e50; }
        a { display: inline-block; margin-bottom: 15px; padding: 6px 12px; background: #3498db; color: white; text-decoration: none; border-radius: 4px; }
        ul { list-style: none; padding: 0; }
        li { background: #ecf0f1; margin: 8px 0; padding: 10px; border-radius: 4px; }
        button { background: #e74c3c; color: white; border: none; padding: 6px 10px; border-radius: 4px; cursor: pointer; }
        button:hover { background: #c0392b; }
    </style>
</head>
<body>
<h1>Liste des Assurances</h1>
<a href="{{ route('assurances.create') }}">➕ Ajouter une assurance</a>
<ul>
    @foreach($assurances as $assurance)
        <li>
            <strong>{{ $assurance->libelle }}</strong> - {{ $assurance->montant }} CFA - Bonus: {{ $assurance->bonus }}
            <form action="{{ route('assurances.destroy', $assurance->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Supprimer</button>
            </form>
        </li>
    @endforeach
</ul>
</body>
</html>
