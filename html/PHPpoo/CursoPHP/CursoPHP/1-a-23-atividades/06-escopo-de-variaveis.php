<?php
/********** Escopo de variaveis *********/

$nome = "Gabriel"; //está setada 
// como variavel global e para utiliza-la precisamos setar como escopo 
// globalo na function
$a = 1;
$b = 3;
$c = 7;

function exibeNome(){
    global $nome; //setando como global
    echo $nome;
}
exibeNome();
echo "<hr>";

function exibeCidade() {
     global $cidade;
     $cidade = 'Rio de Janeiro';
}
exibeCidade();
echo $cidade;
echo "<hr>";
//////////////////////////////////

function soma() {
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}
soma();