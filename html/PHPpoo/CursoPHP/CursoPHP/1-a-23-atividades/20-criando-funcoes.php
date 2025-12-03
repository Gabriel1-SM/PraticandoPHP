<?php
/********** Criando funções *********/
$nome = "Sid";
function exibirNome($nome){
    echo "meu nome é: $nome ";
}
exibirNome($nome);

echo "<hr>";
function calcularMedia($nome, $n1, $n2, $n3, $n4){
  $media = ($n1 + $n2 + $n3 + $n4) / 4;
  if($media >= 7):
    echo "$nome foi aprovado com a média $media.";
  else: 
    echo "$nome reprovado, playboy";
  endif;

}
calcularMedia("Bob",5,7,5,9);
echo "<br>";
calcularMedia("Sid",5,7,5,9);