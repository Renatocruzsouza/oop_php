<?php

class Animal {

    public $nome;
  
    function escolherNome($nome){
        $this->nome = $nome;
    }

    function latir() {
        return "Au Au <br>";
    }

    function latirForte() {
        return strtoupper($this->latir());
    }
}

$zeca = new Animal; 

echo "O nome do animal é: $zeca->nome <br>";

$zeca->escolherNome("Zeca");

echo "O nome do animal é: $zeca->nome <br>";
echo $zeca->latir();
echo $zeca->latirForte();
