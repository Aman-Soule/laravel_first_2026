<!DOCTYPE html>
<html>
<head>
    <title>Liste des Assurances</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h1 { color: #2c3e50; }
        a { display: inline-block; margin-bottom: 15px; padding: 6px 12px; background: #3498db; color: white; text-decoration: none; border-radius: 4px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { border: 1px solid #bdc3c7; padding: 8px; text-align: left; }
        th { background: #3498db; color: white; }
        tr:nth-child(even) { background: #ecf0f1; }
        button { background: #e74c3c; color: white; border: none; padding: 6px 10px; border-radius: 4px; cursor: pointer; }
        button:hover { background: #c0392b; }
    </style>
</head>
<body>
<h1>Liste des Assurances</h1>
<a href="{{ route('assurances.create') }}">➕ Ajouter une assurance</a>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Libellé</th>
        <th>Montant</th>
        <th>Bonus</th>
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
            <td>
                <form action="{{ route('assurances.destroy', $assurance->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>

                    <a href="{{ route('assurances.edit', $assurance->id) }}" class="btn btn-warning">
                        Modifier
                    </a>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
