<?php
/********** Constantes *********/
define("NOME", "José Carlos");
define("IDADE", 24);
define("ALTURA", 1.89);
define("CASADO",true);

define("TIMES",['Vasco','Flamengo','São Paulo']); //constante do tipo array

echo 'Meu nome é '.NOME. ', Minha idade é '.IDADE. ' , Minha altura é '.ALTURA. ' .';
echo '<hr>';
echo TIMES[2];//usando a const array
var_dump(TIMES);
echo '<hr>';


//Const são globais, ela exibe automaticamente o nome, exemplo:
function exibeNome(){
echo NOME;
} exibeNome();