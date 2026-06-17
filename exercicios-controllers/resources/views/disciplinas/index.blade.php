<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Disciplinas</title>
</head>
<body>
    <h1>Lista de Disciplinas</h1>
    <ul>
        @foreach($disciplinas as $disciplina)
            <li>{{ $disciplina }}</li>
        @endforeach
    </ul>
</body>
</html>