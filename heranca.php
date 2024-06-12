<?php
    //Classe PAI 
    class Conta{
        public $saldo = 0;
        //Função de Depositar com parametro 'valor' adicionando uma qunatia da variavel 'saldo'
        function depositar($valor){
            $this-> saldo += $valor;
        }
        //Função de Sacar com parametro 'valor' retirando uma quantia da variavel 'saldo'
        function sacar($valor){
            $this-> saldo += $valor;
        }
    }
    //Classe FILHO herdando da Classe PAI (Conta)
    class ContaCorrente extends Conta {
        //Herda as funções da Classe (Conta) e possui função Exclusiva
        /*Função de Transferir com parametro 'valor' retirando uma quantia da variavel 'saldo' e parametro
         'contaDestino' para identificar o receptor*/
        function transferir($contaDestino, $valor){
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