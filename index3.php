<?php

class Conta{
    private $saldo;
    private $numero;
    private $titular;
    
    public function __construct($saldo,$numero,$titular){
        $this->saldo = $saldo;
        $this->numero = $numero;
        $this->titular = $titular;
        
    }

    public function sacar($valor){
        if($valor <= $this->saldo){
            $this->saldo -=$valor;
            echo "Saldo realizado com sucesso. <br/>"; 
        }else{
            echo "Saldo insuficiente!";
        }
        return $valor;
    }

    public function depositar($valor){
        $this->saldo += $valor;
        print_r("Deposito realizado com sucesso!");
    }

    public function tranferir($valor, $recebedor){
        if($this->saldo >= $valor){
           $this->sacar($valor);
           $this->depositar($valor);
           echo "Transferencia realizada com sucesso!";
        }else{
            echo "Saldo insuficiente";
        }

    }

    public function getTitular(){
        return $this->titular;
    }

    public function getSaldo(){
        return $this->saldo;
    }


}

$conta1 = new Conta(1500,123,"Marla");
$conta2 = new Conta(5000,456,"Ana Luisa");


print_r('Titular conta 1: ' . $conta1->getTitular());
print_r('Titular conta 2: ' . $conta2->getTitular());

print_r("Valor do saldo: ".$conta1->getSaldo());

?>