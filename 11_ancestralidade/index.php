<?php

class Humano {

}

class Animal {

}


class Professor extends Humano {

}

$marcos = new Humano;

$zeca = new Animal;

if($marcos instanceof Humano) {
    echo "Marcos é um humano! <br>";
} else {
    echo "O Marcos nao é humano! <br>";
}


if($zeca instanceof Humano) {
    echo "Zeca é um humano! <br>";
} else {
    echo "O zeca nao é humano! <br>";
}

$pedro = new Professor;

if($pedro instanceof Professor) {
    echo "Pedro é um Prof! <br>";
} else {
    echo "Pedro nao é Prof! <br>";
}

if($pedro instanceof Humano) {
    echo "Pedro é um humano! <br>";
} else {
    echo "Pedro não é humano! <br>";
}