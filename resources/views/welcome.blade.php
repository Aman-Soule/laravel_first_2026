<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>APP ASSURANCE PRO</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            background: #f4f6f7;
        }
        h1 {
            margin-top: 60px;
            color: #2c3e50;
            font-size: 40px;
        }
        .btn-big {
            display: inline-block;
            margin-top: 100px;
            padding: 30px 60px;
            font-size: 28px;
            font-weight: bold;
            background: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 10px;
            transition: background 0.3s ease;
        }
        .btn-big:hover {
            background: #2980b9;
        }
    </style>
</head>
<body>
<h1>APP ASSURANCE PRO</h1>
<a href="{{route('assurances.index')}}" class="btn-big">➡️ Voir la liste des assurances</a>
</body>
</html>
