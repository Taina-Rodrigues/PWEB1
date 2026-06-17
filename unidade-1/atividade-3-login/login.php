<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    if ($usuario == "admin" && $senha == "1234") {
        $_SESSION["logado"] = true;
        header("Location: painel.php");
        exit();
    } else {
        echo "<p style='color:red;'>Login inválido!</p>";
    }
}
?>

<h2>Login</h2>
<form method="post">
    Usuário: <input type="text" name="usuario"><br><br>
    Senha: <input type="password" name="senha"><br><br>
    <button type="submit">Entrar</button>
</form>
