<?php

class Pessoa {

    function falar(){
        echo "Oi, tudo bem? Sou um objeto! <br>";
    }

    function somar($x, $y){
        echo $x + $y . "<br>";
    }

}

$renato = new Pessoa;

$renato ->falar();
$renato ->falar();

$joao = new Pessoa;

$joao ->falar();

$renato ->somar(4, 4);

$joao ->somar(2, 2);