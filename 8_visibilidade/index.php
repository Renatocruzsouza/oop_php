<?php

class Car { 

    public $rodas = 4;
    private $vidro = "Sem pelicula";

    public function getVidro() {
        return $this->vidro;
    }

}

class mecanico {

    public function alterarRodas($carro) {
        $carro->rodas = 10;
    }

 
    public function peliculaDeFabrica($pelicula) {
        $this->vidro = $pelicula;
    } 
}
$carro = new Car;

echo $carro->rodas . "<br>";

$renato = new mecanico;
 
$renato->alterarRodas($carro);

echo $carro->rodas . "<br>";

// Não pode alterar pq é privado

// $renato->colocarPelicula($carro, "G20");

//$carro->peliculaDeFabrica("g10");

 echo $carro->getVidro() . "<br>";