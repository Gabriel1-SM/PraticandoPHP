<?php
/********** Funções de Arrays *********/
/* Funções que eu acho importante:
1-> is_array($array) = verificar se uma determinada variável é um array
2-> in_array($valor, $array) = verifica se um determinado valor existe em alguma posição do array
3-> array_keys($array) = retorna um novo array com as chaves do array passado como parâmetro
4-> array_merge($arra1, $arrai2) = agrega o conteúdo dos dois arrays
5-> array_pop($array) = exclui a última posição do array
6-> array_shift($array) = exclui a primeira posição do array
7-> array_unshift($arr, "valor") = adiciona um ou mais elementos no início do array
8-> array_push($array, "valor", "valor") = adiciona um ou mais elementos no final de uma array
9-> array_combine($keys, $values) = mescla os dois arrays passados
10-> array_sum($array) = calcula a soma dos elementos de um array
11-> explode("/", "20/01/2001") = transforma string em array
12-> implode("-", $arr) = transforma array em string
13-> array_values($array) = retorna um novo array com os valores do array passado como parametro
*/

$nome = array("primo" => "Gabriel", "vizinho" => "Sid", "mãe" => "Eloisy");

//1->Exemplo de função que verifica se é array ou não\\
echo ("1");
echo "<br>";
if (is_array($nome)):
    echo "é um array";
else:
    echo "não é um array";
endif;
echo "<hr>";

//2->verifica se um determinado valor existe em alguma posição do array\\
echo ("2");
echo "<br>";
echo in_array("Gabriel", $nome);
echo "<hr>";

//3->retorna um novo array com as chaves do array passado como parâmetro
echo ("3");
echo "<br>";
$keys = array_keys($nome);
print_r($keys);
echo "<hr>";

//4->agrega o conteúdo dos dois arrays
echo ("4");
echo "<br>";
$carros = array("Chevrolet", "Porsche", "Audi", "Volkswagem");
$motos = array("Ducati", "Honda", "Harley-Davison", "Shineray");
//juntando carros e motos\\
$veiculos = array_merge($carros, $motos);
print_r($veiculos);
echo "<hr>";

//5 e 6->= pop=exclui a última posição do array + shift=exclui a primeira posição do array
echo ("5/6");
echo "<br>";
print_r($carros);
echo "<br>";
//array_pop($carros);//exclui a última posição do array.
echo array_pop($carros);//se der um echo, ele ainda exibe o elemento que excluiu
echo "<br>";
print_r($carros);
array_shift($carros);//exclui a primeira posição do array
echo "<br>";
print_r($carros);
echo "<hr>";

//7 e 8->adiciona um ou mais elementos no início do array + adiciona um ou mais elementos no final de uma array
echo ("7/8");
echo "<br>";
$frutas = array("uva","laranja","maça");
echo "Somente frutas: ";
print_r($frutas);
echo "<br>";
echo "Adicionando frutas no inicio: ";
array_unshift($frutas,"manga", "acerola", "uva");
print_r($frutas);
echo "<br>";
echo "Adicionando frutas no final: ";
array_push($frutas,"tomate","jabuticaba"); //adiciona um ou mais elementos no final de uma array
print_r($frutas);
echo "<br>";
echo "<hr>";

//9->mescla os dois arrays passados
echo ("9");
echo "<br>";
$keys = array("Campeão","Vice","Terceiro");
$values = array("Vasco","Flamengo","Botafogo");
$times = array_combine($keys, $values);//combinando array keys e values
print_r($times);
echo "<br>";
echo "<hr>";

//10->calcula a soma dos elementos de um array
echo ("10");
echo "<br>";
$soma = array_sum([40,50]);
$soma1 = array_sum([50,40]);
$result = $soma + $soma1;
echo $result;
echo "<br>";
echo "<hr>";

//11->transforma string em array
echo ("11");
echo "<br>";
$data = "30/02/2018";
echo $data;
echo "<br>";
$novaData = explode( "/", $data);// pode usar a BARRA/ como delimitador que faz com que seja divido como array
print_r($novaData);
echo "<br>";
echo "<hr>";

// 12->transforma array em string
echo ("12");
echo "<br>";
$nomes = array("Rodrigo","Carlos","Suelem");
$nome = implode(",", $nomes);
print_r($nome);
echo "<br>";
echo "<hr>";

//13->retorna um novo array com os valores do array passado como parametro
echo ("13");
echo "<br>";
$dados = array(
  "nome" => "Gabriel",
  "idade" => 25,
  "cidade" => "Cuiabá"
);
$values = array_values($dados);
print_r($values);

