<!DOCTYPE html>
<html>
<head>
    <title>Ajouter Assurance</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h1 { color: #2c3e50; }
        form { background: #ecf0f1; padding: 20px; border-radius: 6px; width: 300px; }
        label { display: block; margin-top: 10px; font-weight: bold; }
        input { width: 100%; padding: 6px; margin-top: 4px; border: 1px solid #bdc3c7; border-radius: 4px; }
        button { margin-top: 15px; background: #27ae60; color: white; border: none; padding: 8px 12px; border-radius: 4px; cursor: pointer; }
        button:hover { background: #1e8449; }
    </style>
</head>
<body>
<h1>Ajouter une Assurance</h1>
<form action="{{ route('assurances.store') }}" method="POST">
    @csrf
    <label>Libellé:</label>
    <input type="text" name="libelle">

    <label>Montant:</label>
    <input type="number" name="montant">

    <label>Bonus:</label>
    <input type="text" name="bonus">

    <button type="submit">Enregistrer</button>
</form>
</body>
</html>
