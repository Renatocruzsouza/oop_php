<?php

class Humano {

   public $idade = 29;

    public function falar() {
        echo "Olá Mundo! <br>";
    } 

    private function gritar() {
        echo "PHP É MUITO BOM! <br>";
    }

    public function acessarGritar() {
        $this->gritar();
    }

    protected function falarBaixinho() {
        echo "lalala <br>";
    }

    public function AcessarFalarBaixinho() {
        $this->falarBaixinho();
    }
}

class Programador extends Humano {


}

$ze = new Humano;

$ze->falar();
$ze->acessarGritar();
$ze->AcessarFalarBaixinho();


$renato = new Programador;

echo $renato->idade . "<br>";

$renato->falar();
$renato->acessarGritar();
$renato->AcessarFalarBaixinho();
