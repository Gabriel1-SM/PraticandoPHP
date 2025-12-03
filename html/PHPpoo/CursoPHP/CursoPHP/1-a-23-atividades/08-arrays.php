<?php
/********** Arrays Numéricos *********/
//ele é numerico quando indice e chaves é inteiro\\

//criando varios carros usando array\\
$carro = array("BMW", "Veloster","Hilux");
$carro[] = "Amarok"; //adicionando novo valor
//echo $carro[0];//mostrando somente o valor que eu quero
print_r($carro);//exibir valores da array
echo "<br>";

//outra forma de criar um array\\
$motos = array();
$motos[] = "Yamaha";
$motos[] = "Kawasaki";
$motos[] = "Ducati";
echo $motos[0];
echo "<br>";

//Outra forma:\\
$clientes = array("Sid", "Eloisy","Rubens");
print_r($clientes);
echo "<hr>";

//"count" para contar os elementos da array\\

$totalClientes = count($clientes);
echo $totalClientes;
echo "<hr>";

//foreach para percorrer array\\
foreach($carro as $valor){ //percorre o valor que está dentro da array e adiciona na varial que receber o valor 
    echo $valor."<br>";    //neste caso $valor

}
echo "<hr>";

/********** Arrays Associativos *********/
//É associativo quando ele é String\\

$pessoa = array("nome"=> "Gabriel", "idade" => 23, "altura"=> 1.75); //ao invés de usar uma forma numerada para ordenar, posso ordenar com nomes
$pessoa["cidade"] = "Cuiaba"; //acrescentando item na array
//echo $pessoa[""]; //exprimindo valor

//percorrendo ele e exibindo valores
    foreach($pessoa as $indice => $valor){
    echo $indice.":".$valor."<br>";

    }
echo "<hr>";


/********** Arrays Multidimensionais *********/
//Array que contem 1 ou mais arrays\\

$times = array(
    "cariocas" => array("vasco", "flamengo", "botafogo"),
    "paulistas" => array(3=>"santos", "são paulo", "palmeiras"),
    "baianos" => array(6=>"bahia", "vitoria", "itabuna")
);

$categorias = ["cariocas", "paulistas", "baianos"];

foreach($categorias as $categoria) {
    foreach($times[$categoria] as $indice => $valor) {
        echo $categoria . " " . $indice . ": " . $valor . "<br>";
    }
}
