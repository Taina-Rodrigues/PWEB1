<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>  Classificação Acadêmica </title>
</head>
<body>

<h2> Sistema de Classificação Acadêmica </h2>

<form method="post">
    Digite a nota do aluno:
    <input type="number" name="nota" step="0.1" required>
    <button type="submit">Verificar</button>
</form>

<?php
function classificar($nota) {
    if ($nota >= 7) {
        return "Aprovado";
    } elseif ($nota >= 5) {
        return "Recuperação";
    } else {
        return "Reprovado";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nota = $_POST["nota"];
    echo "<h3>Resultado:</h3>";
    echo "Nota: $nota <br>";
    $situacao = classificar($nota);
    echo "Situação: <strong>$situacao</strong><br><br>";
    echo "<h3>Notas de 0 até $nota:</h3>";

    for ($i = 0; $i <= floor($nota); $i++) {
        echo $i . "<br>";
    }
}
?>
</body>
</html>
