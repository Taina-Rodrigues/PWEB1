<?php

function contador() {
    static $numero = 0; // variável estática
    $numero++;
    echo $numero . "<br>";
}

// Chamando várias vezes
contador();
contador();
contador();

?>