<?php
session_start();

function validar($nome) {
    return !empty($nome);
}

// Fazer Login
if (isset($_POST["login"])) {
    if ($_POST["usuario"] == "admin" && $_POST["senha"] == "1234") {
        $_SESSION["logado"] = true;
    } else {
        echo "<p style='color:red;'>Login inválido!</p>";
    }
}

// Fazer Logout
if (isset($_GET["logout"])) {
    session_destroy();
    header("Location: index.php");
    exit();
}

// Cadastro
if (isset($_POST["cadastrar"])) {

    if (!isset($_SESSION["dados"])) {
        $_SESSION["dados"] = [];
    }

    $nome = $_POST["nome"];

    if (validar($nome)) {
        $_SESSION["dados"][] = $nome;
    } else {
        echo "<p style='color:red;'>Digite um nome válido!</p>";
    }
}
?>

<h2>Sistema Integrado</h2>

<?php if (!isset($_SESSION["logado"])) { ?>

    <h3>Login</h3>
    <form method="post">
        Usuário: <input name="usuario"><br><br>
        Senha: <input type="password" name="senha"><br><br>
        <button name="login">Entrar</button>
    </form>

<?php } else { ?>

    <h3>Bem-vindo!</h3>
    <a href="?logout=true">Sair</a>

    <h3>Cadastro de nomes</h3>
    <form method="post">
        Nome: <input name="nome">
        <button name="cadastrar">Cadastrar</button>
    </form>

    <h3>Registros:</h3>

    <?php
    if (!empty($_SESSION["dados"])) {
        foreach ($_SESSION["dados"] as $dado) {
            echo $dado . "<br>";
        }
    } else {
        echo "Nenhum registro ainda.";
    }
    ?>
<?php 
} 
?>
