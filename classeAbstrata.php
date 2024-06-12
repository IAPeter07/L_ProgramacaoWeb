<?php
    //Classe PAI -> ABSTRATA 
    abstract class Conta{
        public $saldo = 0;
        //Funções Abstratas servindo como base
        abstract function depositar($valor);
        abstract function sacar($valor);
    }

    //Classe FILHO herdando da Classe PAI ABSTRATA (Conta) 
    class ContaCorrente extends Conta{
        //Dando "Sentido" as funções abstratas
        function depositar($valor){
            $this-> saldo += $valor;
        }
        function sacar($valor){
            $this-> saldo -= $valor;
        }
        function transferir($contaDestino,$valor){
            $this-> saldo -= $valor;
        }
    }
    //Instanciando as classes
    $novaConta1 = new ContaCorrente();
    $novaConta2 = new ContaCorrente();
    //Utilizando os Métodos
    $novaConta1-> transferir('xxx-xxx',500);
    $novaConta2-> depositar(500);
    //Printando Resultados dos saldos das contas
    echo("Saldo:" .$novaConta1-> saldo);
    echo("Saldo:" .$novaConta2-> saldo);
?>