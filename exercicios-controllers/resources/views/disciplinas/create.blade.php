<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Disciplina</title>
</head>
<body>
    <h1>Cadastro de Disciplina</h1>
    <form action="/disciplinas" method="POST">
        @csrf
        <label>Nome da Disciplina:</label>
        <input type="text" name="nome">
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>