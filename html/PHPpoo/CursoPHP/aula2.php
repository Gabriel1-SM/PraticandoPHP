<?php
class Pessoa {
    public $nome;
    public $idade;

    public function Falar(){
        echo"falou";
    }
}
$rodrigo = new Pessoa();
$rodrigo->nome = "Rodrigo Santos";
$rodrigo->idade = 25;
$rodrigo->Falar();
echo $rodrigo->nome;