<?php

class Car { 

    public $rodas = 4;
    public $vidro = "Sem pelicula";

}

class mecanico {

    public function alterarRodas($carro) {
        $carro->rodas = 10;
    }

    public function colocarPelicula($carro, $pelicula) {
        $carro->vidro = $pelicula;
    }
}
$carro = new Car;

echo $carro->rodas . "<br>";

$renato = new mecanico;
 
$renato->alterarRodas($carro);

echo $carro->rodas . "<br>";



$renato->colocarPelicula($carro, "G20");

 echo $carro->vidro . "<br>";