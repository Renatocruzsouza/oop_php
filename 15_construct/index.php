<?php

class Car {

    public $portas;
    public $cor;
    public $marca;

    function __construct($portas, $cor, $marca) {

        $this->portas = $portas;
        $this->cor = $cor;
        $this->marca = $marca; 
   
    }
}

$ferrari = new Car(4,"vermelho", "ferrari");

echo "O carro é da marca $ferrari->marca e tem a cor $ferrari->cor <br>";

$bmw = new Car(4,"azul", "BMW");

echo "O carro é da marca $bmw->marca e tem a cor $bmw->cor <br>";


class Cachorro {

    public $nome;
    public $raca;
    public $patas;

    function __construct($nome, $raca, $patas) {

        $this->nome = $nome;
        $this->raca = $raca;
        $this->patas = $patas;
    }

    public function exibirAnimal() {

        echo "O nome do meu cachorro é $this->nome é da raça: $this->raca, e tem $this->patas patas <br>";

    }
}

$zeca = new Cachorro("Zeca", "Vira-lata", 4);

$zeca->exibirAnimal();

