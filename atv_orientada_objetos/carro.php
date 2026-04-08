<?php

class Carro {
    public $modelo;
    public $cor;
    public $ano;

    // Construtor: inicializa os atributos ao criar o objeto
    public function __construct($modelo, $cor, $ano) {
        $this->modelo = $modelo; // '$this' se refere ao próprio objeto
        $this->cor = $cor;
        $this->ano = $ano;
    }

    public function acelerar() {
        echo "O carro {$this->modelo} está acelerando.<br>";
    }

    public function frear() {
        echo "O carro {$this->modelo} está freando.<br>";
    }

    public function buzinar() {
        echo "Bibibibi <br>";
    }
}

class CarroEletrico extends Carro { // Uma herança, ou seja, subclasse
    public function acelerar() { // Polimorfismo: sobrescrita do método acelerar 
        echo "O carro elétrico {$this->modelo} está acelerando em silêncio <br>";
        parent::buzinar(); //método para chamar a classe pai
    }
}

$carro1 = new Carro("Strada", "Cinza", 2026);
$carroEletrico1 = new CarroEletrico("Tesla Model 3", "Branco", 2023);

echo "<h2>Carro comum:</h2>";
$carro1->acelerar();
$carro1->frear();
$carro1->buzinar();

echo "<h2>Carro elétrico:</h2>";
$carroEletrico1->acelerar();
$carroEletrico1->frear();
$carroEletrico1->buzinar();

?>
