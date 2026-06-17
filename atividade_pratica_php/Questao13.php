<?php

$numero = 10; // variável global

function teste() {
    $numero = 5; // variável local
    echo "Dentro da função: " . $numero . "<br>";
}

teste();

echo "Fora da função: " . $numero;

?>