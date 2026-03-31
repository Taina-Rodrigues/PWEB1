<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> Cadastro de Aluno </title>
</head>
<body>

<h2> Cadastro para Evento Acadêmico </h2>

<form method="post">
    Nome: <input type="text" name="nome"><br><br>
    E-mail: <input type="email" name="email"><br><br>
    Curso: <input type="text" name="curso"><br><br>
    Turno: <input type="text" name="turno"><br><br>

    <button type="submit">Cadastrar</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $curso = $_POST["curso"];
    $turno = $_POST["turno"];

    if (empty($nome) || empty($email) || empty($curso) || empty($turno)) {
        echo "<p style='color:red;'>Erro: Preencha todos os campos!</p>";
    } else {
        echo "<h3>Cadastro realizado com sucesso!</h3>";
        echo "Nome: $nome <br>";
        echo "E-mail: $email <br>";
        echo "Curso: $curso <br>";
        echo "Turno: $turno <br>";
    }
}
?>

</body>
</html>
