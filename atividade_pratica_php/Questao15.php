<?php

class Carro {
    public $marca;
    public $modelo;

    public function exibir() {
        echo "Carro: " . $this->marca . " - " . $this->modelo;
    }
}

// Criando um objeto
$meuCarro = new Carro();
$meuCarro->marca = "Toyota";
$meuCarro->modelo = "Corolla";

// Chamando o método
$meuCarro->exibir();

?>