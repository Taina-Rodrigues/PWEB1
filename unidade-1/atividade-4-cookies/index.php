<?php
if (isset($_COOKIE['nome'])) {
    echo "<h2>Bem-Vindo novamente, " . $_COOKIE['nome'] . "!</h2>";

} else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nome = $_POST['nome'];

        setcookie("nome", $nome, time() + (7 * 24 * 60 * 60));
        echo "<p>Nome salvo! Recarregue a página.</p>";

    } else {

        echo '
        <h2>Digite seu nome:</h2>
        <form method="post">
            <input type="text" name="nome" required>
            <button type="submit">Salvar</button>
        </form>
        ';
    }
}
?>
