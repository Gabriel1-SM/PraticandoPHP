<?php

class contabancaria{
    private $saldo = 0;
    private $titular;

    public function __construct($saldo, $titular)
    {
        $this->saldo = $saldo;
        $this->titular = $titular;
    }
    public function getSaldo()
    {
        return $this->saldo;
    }
    public function getTitular()
    {
        return $this->titular;
    }

    public function setTitular($novoTitular)
    {
        if (!isset($novoTitular)) {
            echo "defina um títular para a conta";
            $this->titular = $novoTitular;
        } else {
            echo "titular existente: " . $novoTitular . "/n";
        }
    }
    public function depoitar($valor) {
        echo "Depósito de R$ $valor realizado!";
        $this->saldo += $valor;
    }

    public function sacar($valorRetirado){
        if($this->saldo > 0){
            echo "Você tem: R$ " . $this->saldo . " na conta! <br> Digite quanto desejas retirar: R$ ";
            $this->saldo -= $valorRetirado;
        } else {
            echo "Saldo insuficiente para saque!" . $this->saldo;
        }
    }

}
$contabancaria1 = new contabancaria(20,"gabriel santana");
echo $contabancaria1->sacar(10);
echo $contabancaria1->getSaldo();
echo "<br>";
echo $contabancaria1->getTitular();
echo "<br>";
echo $contabancaria1->depoitar(10);echo "<br>";
echo $contabancaria1->getSaldo();
echo "<br>";

