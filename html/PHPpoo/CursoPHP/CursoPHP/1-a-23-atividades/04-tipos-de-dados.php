<?php
/********** Escalares *********/
//String\\
$nome = 123;
var_dump($nome);
if(is_string($nome)):
    echo "É uma string";
else:
    echo "Não é uma string";
endif;
echo "<hr>";

//int\\

$idade = 2;
var_dump($idade);
if(is_int($idade)):
    echo "É um inteiro";
else:
    echo "Não é um iteniro";
endif;
echo "<hr>";


//float\\

$altura = 1.77;
var_dump($altura);
if(is_float($altura)):
    echo "É um float";
else:
    echo "Não é um float";
endif;
echo "<hr>";


//boolean\\

$admin = true;
var_dump($admin);
if(is_bool($admin)):
    echo "É um booleano";
else:
    echo "Não é um booleano";
endif;
echo "<hr>";


/********** Compostos *********/
//array\\

$carros = array("gol", "uno", "camaro",12,20.6,true);
var_dump($carros);
echo "<hr>";
if(is_array($carros)):
    echo "É um array";
else:
    echo "Não é um array";
endif;

//object\\

class Cliente {
    public $nome;
    public function atribuirNome($nome){
        $this->$nome = $nome;
    }
}

$cliente = new cliente();
$cliente->atribuirNome("rodrigo");
var_dump($cliente);

if(is_object($cliente)):
    echo "É um objeto";
else:
    echo "Não é um objeto";
endif;
echo "<hr>";

/********** Especiais *********/
//NULL\\
$cidade = NULL;
var_dump($cidade);

//Resource\\
