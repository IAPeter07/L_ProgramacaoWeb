<?php
    class Pessoa{
        //Propiedades da Classe Pessoa
        protected $nome;
        protected $idade;

        //Construtro da Classe Pessoa
        public function _construct($nome,$idade){
            $this-> nome = $nome;
            $this-> idade = $idade;
        }

        //Metodo para exibir informações da Pessoa
        public function exibirInformacoes(){
            echo("Nome: " . $this-> nome . "<br>");
            echo("Idade: " . $this-> idade . "<br>");
        }
    }
?>