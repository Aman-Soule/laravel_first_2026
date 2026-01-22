<!DOCTYPE html>
<html>
<head>
    <title>Liste des Assurances</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            color: #2c3e50;
        }

        a {
            display: inline-block;
            margin-bottom: 15px;
            padding: 6px 12px;
            background: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            border: 1px solid #bdc3c7;
            padding: 8px;
            text-align: left;
        }

        th {
            background: #3498db;
            color: white;
        }

        tr:nth-child(even) {
            background: #ecf0f1;
        }

        button {
            background: #e74c3c;
            color: white;
            border: none;
            padding: 6px 10px;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background: #c0392b;
        }
    </style>
</head>
<body>
<h1>Liste des Assurances</h1>

<form action="{{ route('assurances.update', $assurance->id) }}" method="POST">
    @csrf
    @method('PUT')

   <div class="form-group">
       <label for="nom">Nom :</label>
       <input type="text" name="libelle" value="{{ $assurance->libelle }}">
   </div>
    <br>
    <div class="form-group">
        <label for="type">Montant :</label>
        <input type="number" name="montant" value="{{ $assurance->montant }}">
    </div>
    <br>
    <div class="form-group">
        <label for="prix">Bonus :</label>
        <input type="number" name="bonus" value="{{ $assurance->bonus }}">
    </div>
    <br>
    <button type="submit">Mettre à jour</button>
</form>
</body>
</html>

