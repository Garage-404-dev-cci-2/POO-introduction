<?php

class Animal 
{
    public function getInfo()
    {
         echo "je suis un animal <br>";
    }
}

class Mammal extends Animal
{
    public function getInfoPlus()
    {
        echo " je suis un mammifère <br>";
    }
}

class Chien extends Mammal
{
    public function crie()
    {
        echo "j'aboie <br>";
    }
}

$Fido = new Chien();
$Fido->getInfo();
$Fido->getInfoPlus();
$Fido->crie();

