<?php

class Car {

    public $rodas =4;
    public $aro = 20;

    function ligar(){
        echo "Vruummm";
    }

}

$ferrari = new Car;

echo $ferrari ->aro. "<br>";
echo $ferrari ->rodas. "<br>";

$ferrari ->cor = "Azul <br>";

echo $ferrari ->cor;

$ferrari ->ligar();

echo "<br>";
echo "<br>";
echo "<br>";

class Pessoa {
    public $nome;
    public $idade;

    function andar($m) {
        echo "andando $m metros!";
    }
}

$renato = new Pessoa;

$renato ->nome = "Renato";
$renato ->idade = 19;

echo "O nome dele é $renato->nome e tem $renato->idade anos <br>";

$renato->andar(20);
 

