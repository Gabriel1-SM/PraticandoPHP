<?php
/********** Condicionais *********/
//if,else,elseif\\

$numero = 15;
if($numero == 10):
    echo"é igual a 10";
    elseif($numero <= 9):
        echo "é menor ou igual a 9";
    else:
        echo "é diferente de 10";
    endif;


echo"<br>";
echo "<hr>";
$prova = 5;
echo ($prova>=7) ?"Aprovado":"Reprovado";// operador ternario
echo"<br>";
echo "<hr>";


/********** Condicionais *********/
//Switch,Case\\
$cor = "amarelo";
switch($cor):
case"vermelho":
    echo "sua cor preferida é vermelho";
    break;
    case "verde":
        echo "sua cor preferida é o verde";
        break;
     case "azul":
        echo "sua cor preferida é azul" ; 
        break;

    default: //adicionando um valor padrão, caso não tenha validação
    echo "sua cor preferida não é nenhuma dessas!";
    endswitch;