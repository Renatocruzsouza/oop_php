<?php

class Humano {

    public function falar() {
        echo "Olá";
    }
}

$renato = new Humano;

$teste = 10;

if(is_object($renato)) {
    echo "É um objeto <br>";
} else {
    echo "Não é um objeto/Objeto não encontrado <br>";
}

if(is_object($teste)) {
    echo "É um objeto <br>";
} else {
    echo "Não é um objeto/ Objeto não encontrado <br>";
}

echo get_class($renato) . "<br>";

if(method_exists($renato, "falar")){
      echo "Método existe <br>";
} else {
    echo "Método não existe <br>";
}

if(method_exists($renato, "asd")){
      echo "Método existe <br>";
} else {
    echo "Método não existe <br>";
}
