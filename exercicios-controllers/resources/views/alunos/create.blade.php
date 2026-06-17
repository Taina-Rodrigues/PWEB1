<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Aluno</title>
</head>
<body>
    <h1>Cadastro de Aluno</h1>
    <form action="/alunos" method="POST">
        @csrf
        <label>Nome do Aluno:</label>
        <input type="text" name="nome">
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>