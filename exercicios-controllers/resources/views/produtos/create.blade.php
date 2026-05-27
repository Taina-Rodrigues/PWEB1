<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produto</title>
</head>
<body>
    <h1>Cadastro de Produto</h1>
    <form action="/produtos" method="POST">
        @csrf
        <label>Nome do Produto:</label>
        <input type="text" name="nome">
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>